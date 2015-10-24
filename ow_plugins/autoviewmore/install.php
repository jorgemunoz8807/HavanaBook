<?php
//Persian community 
//Mohammad Puyandeh 

BOL_LanguageService::getInstance()->addPrefix('autoviewmore', 'Auto View More');
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('autoviewmore')->getRootDir().'langs.zip', 'autoviewmore');
OW::getPluginManager()->addPluginSettingsRouteName('autoviewmore', 'automore-admin');
if ( !OW::getConfig()->configExists('autoviewmore', 'autoclick') ) 
    OW::getConfig()->addConfig('autoviewmore', 'autoclick', '150', '');

