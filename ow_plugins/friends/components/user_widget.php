<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2009, Skalfa LLC
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
 * @author Sardar Madumarov <madumarov@gmail.com>
 * @package ow_plugins.friends.components
 * @since 1.0
 */
class FRIENDS_CMP_UserWidget extends BASE_CLASS_Widget
{

    public function __construct( BASE_CLASS_WidgetParameter $params )
    {
        parent::__construct();
        
        $service = FRIENDS_BOL_Service::getInstance();
        $userId = $params->additionalParamList['entityId'];
        $count = (int) $params->customParamList['count'];

        $idList = $service->findUserFriendsInList($userId, 0, $count);
        $total = $service->countFriends($userId);
        $userService = BOL_UserService::getInstance();

        $eventParams =  array(
                'action' => 'friends_view',
                'ownerId' => $userId,
                'viewerId' => OW::getUser()->getId()
            );
        
        try
        {
            OW::getEventManager()->getInstance()->call('privacy_check_permission', $eventParams);
        }
        catch( RedirectException $e )
        {
            $this->setVisible(false);
            return;
        }
        
        if ( empty($idList) && !$params->customizeMode )
        {
            $this->setVisible(false);
            return;
        }

        if( !empty($idList) )
        {
            $this->addComponent('userList', new BASE_CMP_AvatarUserList($idList));
        }

        $username = BOL_UserService::getInstance()->getUserName($userId);

        $toolbar = array();
        
        if ( $total > $count )
        {
            $toolbar = array(array('label'=>OW::getLanguage()->text('base','view_all'), 'href'=>OW::getRouter()->urlForRoute('friends_user_friends', array('user'=>$username))));
        }

        $this->assign('toolbar', $toolbar);
    }

    public static function getSettingList()
    {
        $settingList = array();

        $settingList['count'] = array(
            'presentation' => 'number',
            'label' => OW::getLanguage()->text('friends', 'user_widget_settings_count'),
            'value' => '9'
        );

        return $settingList;
    }

    public static function getStandardSettingValueList()
    {
        return array(
            self::SETTING_TITLE => OW::getLanguage()->text('friends', 'user_widget_title'),
            self::SETTING_ICON => self::ICON_USER,
            self::SETTING_SHOW_TITLE => true,
            self::SETTING_WRAP_IN_BOX => true
        );
    }

    public static function getAccess()
    {
        return self::ACCESS_ALL;
    }
}