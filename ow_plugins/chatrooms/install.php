<?php
BOL_LanguageService::getInstance()->addPrefix('chatrooms', 'chatrooms');
$config = OW::getConfig();

if ( !$config->configExists('chatrooms', 'chat_1_title') ){
    $config->addConfig('chatrooms', 'chat_1_title', "", '');
}
if ( !$config->configExists('chatrooms', 'chat_2_title') ){
    $config->addConfig('chatrooms', 'chat_2_title', "", '');
}
if ( !$config->configExists('chatrooms', 'chat_3_title') ){
    $config->addConfig('chatrooms', 'chat_3_title', "", '');
}
if ( !$config->configExists('chatrooms', 'chat_4_title') ){
    $config->addConfig('chatrooms', 'chat_4_title', "", '');
}
if ( !$config->configExists('chatrooms', 'chat_5_title') ){
    $config->addConfig('chatrooms', 'chat_5_title', "", '');
}


if ( !$config->configExists('chatrooms', 'chat_newmsg_check') ){
    $config->addConfig('chatrooms', 'chat_newmsg_check', "5000", '');
}

if ( !$config->configExists('chatrooms', 'chat_userlist_refresh') ){
    $config->addConfig('chatrooms', 'chat_userlist_refresh', "20000", '');
}


$sql = "
DROP TABLE IF EXISTS `".OW_DB_PREFIX."superfeed_chat_users`;
CREATE TABLE `".OW_DB_PREFIX."superfeed_chat_users` (
  `ids` INT(11) NOT NULL AUTO_INCREMENT,
  `userId` VARCHAR(64) DEFAULT NULL,
  `chatId` VARCHAR(64) DEFAULT NULL,
  `LastUpdate` text,
  PRIMARY KEY  (`ids`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `".OW_DB_PREFIX."superfeed_user_blocked`;
CREATE TABLE `".OW_DB_PREFIX."superfeed_user_blocked` (
  `block_id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL DEFAULT '0',
  `room_id` INT(11) NOT NULL DEFAULT '0',
  `reason` TEXT,
  `untiltime` TEXT,
  PRIMARY KEY  (`block_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;  
  
  
DROP TABLE IF EXISTS `".OW_DB_PREFIX."super_feed_message`;
CREATE TABLE `".OW_DB_PREFIX."super_feed_message` (
  `message_id` INT(11) NOT NULL AUTO_INCREMENT,
  `chat_id` INT(11) NOT NULL DEFAULT '0',
  `user_id` INT(11) NOT NULL DEFAULT '0',
  `message` TEXT,
  `post_time` TEXT,
  `msgtype` TEXT,

  PRIMARY KEY  (`message_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;
";
OW::getDbo()->query($sql);

$plugin = OW::getPluginManager()->getPlugin('chatrooms');
BOL_LanguageService::getInstance()->importPrefixFromZip($plugin->getRootDir() . 'langs.zip', 'chatrooms');



?>