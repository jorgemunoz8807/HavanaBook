<?php

class AUTOVIEWMORE_CTRL_Admin extends ADMIN_CTRL_Abstract
{

    public function __construct()
    {
        parent::__construct();

        if ( OW::getRequest()->isAjax() )
        {
            return;
        }

        $lang = OW::getLanguage();

        $this->setPageHeading($lang->text('autoviewmore', 'admin_settings_title'));
        $this->setPageTitle($lang->text('autoviewmore', 'admin_settings_title'));
        $this->setPageHeadingIconClass('ow_ic_gear_wheel');
    }

    public function settings()
    {
        $adminForm = new Form('adminForm');      

        $language = OW::getLanguage();
        $config = OW::getConfig();

        $element = new TextField('autoclick');
        $element->setRequired(true);
        $validator = new IntValidator(1);
        $validator->setErrorMessage($language->text('autoviewmore', 'admin_invalid_number_error'));
        $element->addValidator($validator);
        $element->setLabel($language->text('autoviewmore', 'admin_auto_click')); 
        $element->setValue($config->getValue('autoviewmore', 'autoclick'));
        $adminForm->addElement($element);


        $element = new Submit('saveSettings');
        $element->setValue($language->text('autoviewmore', 'admin_save_settings'));
        $adminForm->addElement($element);

        if ( OW::getRequest()->isPost() )
        {
           if ( $adminForm->isValid($_POST) )
           {
              $values = $adminForm->getValues(); 
              $config = OW::getConfig();
              $config->saveConfig('autoviewmore', 'autoclick', $values['autoclick']);


              OW::getFeedback()->info($language->text('autoviewmore', 'user_save_success')); 
           }
        }

       $this->addForm($adminForm);
   } 
}
