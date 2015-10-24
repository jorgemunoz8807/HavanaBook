<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2012, Sergey Kambalin
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
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package uavatars.controllers
 */
class UAVATARS_CTRL_Admin extends ADMIN_CTRL_Abstract
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        OW::getDocument()->setHeading(OW::getLanguage()->text('uavatars', 'heading_configuration'));
        OW::getDocument()->setHeadingIconClass('ow_ic_gear_wheel');

        $this->assign('active', true);
        $this->assign('pluginUrl', 'http://www.oxwall.org/store/item/16');

        if ( !OW::getPluginManager()->isPluginActive('photo') )
        {
            $this->assign('active', false);

            return;
        }

        $form = new UAVATARS_SettingForm();
        $this->addForm($form);

        if ( OW::getRequest()->isPost() && $form->isValid($_POST) )
        {
            $form->process();
            OW::getFeedback()->info(OW::getLanguage()->text('uavatars', 'settings_saved_message'));
            $this->redirect();
        }
    }
}

class UAVATARS_SettingForm extends Form
{

    /**
     * Class constructor
     *
     */
    public function __construct()
    {
        parent::__construct('configForm');

        $language = OW::getLanguage();

        $field = new TextField('photo_album_name');
        $field->setValue(OW::getLanguage()->text('uavatars', 'default_photo_album_name'));
        $field->setRequired();

        $this->addElement($field);

        // submit
        $submit = new Submit('save');
        $submit->setValue($language->text('uavatars', 'config_save_label'));
        $this->addElement($submit);
    }

    public function process()
    {
        $values = $this->getValues();

        $languageService = BOL_LanguageService::getInstance();
        $langKey = $languageService->findKey('uavatars', 'default_photo_album_name');
        if ( !empty($langKey) )
        {
            $langValue = $languageService->findValue($languageService->getCurrent()->getId(), $langKey->getId());

            if ( $langValue === null )
            {
                $langValue = new BOL_LanguageValue();
                $langValue->setKeyId($langKey->getId());
                $langValue->setLanguageId($languageService->getCurrent()->getId());
            }

            $languageService->saveValue(
                $langValue->setValue($values['photo_album_name'])
            );
        }

        return true;
    }
}