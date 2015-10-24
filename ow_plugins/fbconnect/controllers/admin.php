<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2011, Oxwall Foundation
 * All rights reserved.

 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and
 *  the following disclaimer.
 *
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and
 *  the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 *  - Neither the name of the Oxwall Foundation nor the names of its contributors may be used to endorse or promote products
 *  derived from this software without specific prior written permission.

 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * Facebook Connect Admin Controller
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.fbconnect.controllers
 * @since 1.0
 */
class FBCONNECT_CTRL_Admin extends ADMIN_CTRL_Abstract
{
    /**
     *
     * @var FBCONNECT_BOL_Service
     */
    private $service;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $form = new FBCONNECT_AccessForm();
        $this->addForm($form);

        if ( OW::getRequest()->isPost() && $form->isValid($_POST) )
        {
            if ( $form->process() )
            {
                OW::getFeedback()->info(OW::getLanguage()->text('fbconnect', 'register_app_success'));
                $this->redirect(OW::getRouter()->urlForRoute('fbconnect_configuration_settings'));
            }

            OW::getFeedback()->error(OW::getLanguage()->text('fbconnect', 'register_app_failed'));
            $this->redirect();
        }

        OW::getDocument()->setHeading(OW::getLanguage()->text('fbconnect', 'heading_configuration'));
        OW::getDocument()->setHeadingIconClass('ow_ic_key');
    }

    private function getMenu()
    {
        $language = OW::getLanguage();

        $menuItems = array();

        $item = new BASE_MenuItem();
        $item->setLabel($language->text('fbconnect', 'menu_item_configuration_settings'));
        $item->setUrl(OW::getRouter()->urlForRoute('fbconnect_configuration_settings'));
        $item->setKey('fbconnect_settings');
        $item->setIconClass('ow_ic_gear_wheel');
        $item->setOrder(0);

        $menuItems[] = $item;

        /*
        *
        * Disbale field configuration
        *
        
        $item = new BASE_MenuItem();
        $item->setLabel($language->text('fbconnect', 'menu_item_configuration_fields'));
        $item->setUrl(OW::getRouter()->urlForRoute('fbconnect_configuration_fields'));
        $item->setKey('fbconnect_fields');
        $item->setIconClass('ow_ic_files');
        $item->setOrder(1);

        $menuItems[] = $item;
        
        */

        return new BASE_CMP_ContentMenu($menuItems);
    }

    private function requireAppId()
    {
        $configs = OW::getConfig()->getValues('fbconnect');

        $wizardUrl = OW::getRouter()->urlForRoute('fbconnect_configuration');
        if ( empty($configs['app_id']) || empty($configs['api_secret']) )
        {
            $this->redirect($wizardUrl);
        }

        return $configs['app_id'];
    }

    public function settings( $params )
    {
        $settingForm = new FBCONNECT_SettingsForm();
        $this->addForm($settingForm);

        if ( OW::getRequest()->isPost() && $settingForm->isValid($_POST) )
        {
            $res = $settingForm->process();
            OW::getFeedback()->info(OW::getLanguage()->text('fbconnect', 'configuration_settings_saved'));
            $this->redirect();
        }

        $appId = $this->requireAppId();

        if ( !empty($_GET['rm-app']) && $_GET['rm-app'] == 1 )
        {
            OW::getConfig()->saveConfig('fbconnect', 'api_key', '');
            OW::getConfig()->saveConfig('fbconnect', 'api_secret', '');
            OW::getConfig()->saveConfig('fbconnect', 'app_id', '');
            $redirectUrl = OW::getRequest()->buildUrlQueryString(null, array('rm-app' => null));
            $this->redirect($redirectUrl);
        }

        $cssUrl = OW::getPluginManager()->getPlugin('FBCONNECT')->getStaticCssUrl() . 'fbconnect.css';
        OW::getDocument()->addStyleSheet($cssUrl);

        $this->addComponent('menu', $this->getMenu());
        OW::getDocument()->setHeading(OW::getLanguage()->text('fbconnect', 'heading_configuration'));
        OW::getDocument()->setHeadingIconClass('ow_ic_key');

        $editAppUrl = OW::getRequest()->buildUrlQueryString('http://www.facebook.com/developers/editapp.php', array('app_id' => $appId));

        $this->assign('appUrl', $editAppUrl);

        $removeAppUrl = OW::getRequest()->buildUrlQueryString(null, array('rm-app' => 1));
        $this->assign('deleteUrl', $removeAppUrl);

        $this->assign('resetRspUrl', OW::getRouter()->urlFor('FBCONNECT_CTRL_Admin', 'ajaxResetApplication'));
    }

    public function fields()
    {
	    $this->redirect(OW::getRouter()->urlForRoute("fbconnect_configuration_settings")); // Disable field configuration
    
        $appId = $this->requireAppId();

        $this->addComponent('menu', $this->getMenu());
        $this->assign('questions_url', OW::getRouter()->urlForRoute('questions_index'));

        OW::getDocument()->setHeading(OW::getLanguage()->text('fbconnect', 'heading_configuration'));
        OW::getDocument()->setHeadingIconClass('ow_ic_key');

        $service = FBCONNECT_BOL_Service::getInstance();
        $ignoreQuestionList = array();
        $questionDtoList = $service->getOWQuestionDtoList();
        $aliases = $service->findAliasList();

        $questionList = array();
        foreach ( $questionDtoList as $dto )
        {
            /* @var $dto BOL_Question */
            if ( in_array($dto->name, $ignoreQuestionList) )
            {
                continue;
            }

            $questionList[$dto->sectionName][(int) $dto->sortOrder] = array(
                'name' => $dto->name,
                'fbFields' => $service->getPossibleFbFieldList($dto->name),
                'alias' => empty($aliases[$dto->name]) ? '' : $aliases[$dto->name]
            );
        }

        $questionSectionDtoList = BOL_QuestionService::getInstance()->findAllSections();

        $tplQuestionList = array();
        foreach ( $questionSectionDtoList as $sectionDto )
        {
            if ( empty($questionList[$sectionDto->name]) )
            {
                continue;
            }

            /* @var $sectionDto BOL_QuestionSection */
            $tplQuestionList[(int) $sectionDto->sortOrder] = array(
                'name' => $sectionDto->name,
                'items' => $questionList[$sectionDto->name]
            );
        }
        ksort($tplQuestionList);
        $this->assign('questionList', $tplQuestionList);

        $this->assign('formAction', OW::getRouter()->urlFor('FBCONNECT_CTRL_Admin', 'formProcess'));
    }

    public function ajaxResetApplication()
    {
        if ( !OW::getRequest()->isAjax() )
        {
            throw new Redirect404Exception();
        }

        if ( FBCONNECT_BOL_AdminService::getInstance()->configureApplication() )
        {
            exit(json_encode(OW::getLanguage()->text('fbconnect', 'app_reset_success_msg')));
        }

        exit(json_encode(OW::getLanguage()->text('fbconnect', 'app_reset_failed_msg')));
    }

    public function formProcess()
    {
        if ( empty($_POST['fb_alias']) )
        {
            $this->redirect(OW::getRouter()->urlForRoute('fbconnect_configuration_fields'));
        }

        $list = $_POST['fb_alias'];

        foreach ( $list as $question => $fbField )
        {
            if ( !empty($fbField) )
            {
                FBCONNECT_BOL_Service::getInstance()->assignQuestion($question, $fbField);
            }
            else
            {
                FBCONNECT_BOL_Service::getInstance()->unsetQuestion($question);
            }
        }

        $this->redirect(OW::getRouter()->urlForRoute('fbconnect_configuration_fields'));
    }
}

class FBCONNECT_SettingsForm extends Form
{

    public function __construct()
    {
        parent::__construct('FBCONNECT_SettingsForm');

        $config = OW::getConfig();

        $field = new CheckboxField('allowSynchronize');
        $field->setValue((bool) $config->getValue('fbconnect', 'allow_synchronize'));
        $this->addElement($field);

        // submit
        $submit = new Submit('save');
        $submit->setValue(OW::getLanguage()->text('fbconnect', 'save_btn_label'));
        $this->addElement($submit);
    }

    public function process()
    {
        $values = $this->getValues();
        $config = OW::getConfig();

        $config->saveConfig('fbconnect', 'allow_synchronize', $values['allowSynchronize']);

        return array('result' => true);
    }
}

class FBCONNECT_AccessForm extends Form
{

    public function __construct()
    {
        parent::__construct('FBCONNECT_AccessForm');

        $config = OW::getConfig();

        $field = new TextField('appId');
        $field->setRequired(true);
        $field->setValue($config->getValue('fbconnect', 'app_id'));
        $this->addElement($field);

        $field = new TextField('secret');
        $field->setRequired(true);
        $field->setValue($config->getValue('fbconnect', 'api_secret'));
        $this->addElement($field);

        // submit
        $submit = new Submit('save');
        $submit->setValue(OW::getLanguage()->text('fbconnect', 'save_btn_label'));
        $this->addElement($submit);
    }

    public function process()
    {
        $values = $this->getValues();
        $config = OW::getConfig();

        $apiId = trim($values['appId']);
        $apiSecret = trim($values['secret']);

        $config->saveConfig('fbconnect', 'app_id', $apiId);
        $config->saveConfig('fbconnect', 'api_secret', $apiSecret);

        return FBCONNECT_BOL_AdminService::getInstance()->configureApplication();
    }
}
