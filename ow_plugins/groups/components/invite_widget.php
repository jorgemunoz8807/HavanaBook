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
 * Group Invite Button Widget
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.groups.components
 * @since 1.0
 */
class GROUPS_CMP_InviteWidget extends BASE_CLASS_Widget
{

    /**
     * @return Constructor.
     */
    public function __construct( BASE_CLASS_WidgetParameter $params )
    {
        parent::__construct();

        $groupId = $params->additionalParamList['entityId'];
        $userId = OW::getUser()->getId();
        $service = GROUPS_BOL_Service::getInstance();

        if ( !$params->customizeMode && !$service->isCurrentUserInvite($groupId) )
        {
            $this->setVisible(false);

            return;
        }

        $users = null;

        if ( OW::getEventManager()->call('plugin.friends') )
        {
            $users = OW::getEventManager()->call('plugin.friends.get_friend_list', array(
                'userId' => $userId,
                'count' => 100
            ));
        }

        if ( $users === null )
        {
            $users = array();
            $userDtos = BOL_UserService::getInstance()->findRecentlyActiveList(0, 100);

            foreach ( $userDtos as $u )
            {
                if ( $u->id != $userId )
                {
                    $users[] = $u->id;
                }
            }
        }

        $idList = array();

        if ( !empty($users) )
        {
            $groupUsers = $service->findGroupUserIdList($groupId);
            $invitedList = $service->findInvitedUserIdList($groupId, $userId);

            foreach ( $users as $uid )
            {
                if ( in_array($uid, $groupUsers) || in_array($uid, $invitedList) )
                {
                    continue;
                }

                $idList[] = $uid;
            }
        }

        $options = array(
            'groupId' => $groupId,
            'userList' => $idList,
            'floatBoxTitle' => OW::getLanguage()->text('groups', 'invite_fb_title'),
            'inviteResponder' => OW::getRouter()->urlFor('GROUPS_CTRL_Groups', 'invite')
        );

        $js = UTIL_JsGenerator::newInstance()->callFunction('GROUPS_InitInviteButton', array($options));
        OW::getDocument()->addOnloadScript($js);
    }

    public static function getStandardSettingValueList()
    {
        return array(
            self::SETTING_SHOW_TITLE => false,
            self::SETTING_TITLE => OW_Language::getInstance()->text('groups', 'widget_invite_button_title'),
            self::SETTING_ICON => self::ICON_BOOKMARK
        );
    }

    public static function getAccess()
    {
        return self::ACCESS_MEMBER;
    }
}