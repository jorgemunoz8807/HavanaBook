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
 * @author Podyachev Evgeny <joker.OW2@gmail.com>
 * @package ow_plugins.privacy
 * @since 1.0
 */

$sql = "CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "privacy_action_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(32) NOT NULL,
  `pluginKey` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userId` (`userId`,`key`),
  KEY `key` (`key`),
  KEY `pluginKey` (`pluginKey`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8";

OW::getDbo()->query($sql);


$sql = "CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "privacy_cron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `action` varchar(32) NOT NULL,
  `value` varchar(50) NOT NULL,
  `inProcess` tinyint(1) NOT NULL default '0',
  `timeStamp` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `userId` (`userId`,`action`,`inProcess`),
  KEY `timeStamp` (`timeStamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";

OW::getDbo()->query($sql);

OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('privacy')->getRootDir() . 'langs.zip', 'privacy');

