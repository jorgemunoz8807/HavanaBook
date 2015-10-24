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
 * User Group List Widget
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.groups.components
 * @since 1.0
 */
class GROUPS_CMP_UserGroupsWidget extends BASE_CLASS_Widget
{

    public function __construct( BASE_CLASS_WidgetParameter $params )
    {
        parent::__construct();

        /*if ( !GROUPS_BOL_Service::getInstance()->isCurrentUserCanViewList() )
        {
            $this->setVisible(false);

            return;
        }*/

        $userId = $params->additionalParamList['entityId'];
        $count = ( empty($params->customParamList['count']) ) ? 3 : (int) $params->customParamList['count'];

        // privacy check
        $viewerId = OW::getUser()->getId();
        $ownerMode = $userId == $viewerId;
        $modPermissions = OW::getUser()->isAuthorized('groups');

        if ( !$ownerMode && !$modPermissions )
        {
            $privacyParams = array('action' => GROUPS_BOL_Service::PRIVACY_ACTION_VIEW_MY_GROUPS, 'ownerId' => $userId, 'viewerId' => $viewerId);
            $event = new OW_Event('privacy_check_permission', $privacyParams);

            try {
                OW::getEventManager()->trigger($event);
            }
            catch ( RedirectException $e )
            {
                $this->setVisible(false);

                return;
            }
        }

        $userName = BOL_UserService::getInstance()->findUserById($userId)->getUsername();
        if ( !$this->assignList($userId, $count) )
        {
            $this->setVisible($params->customizeMode);

            return;
        }

        $this->setSettingValue(self::SETTING_TOOLBAR, array(array(
            'label' => OW::getLanguage()->text('groups', 'widget_user_groups_view_all'),
            'href' => OW::getRouter()->urlForRoute('groups-user-groups', array('user' => $userName))
        )));

    }

    private function assignList( $userId, $count )
    {
        $service = GROUPS_BOL_Service::getInstance();
        $list = $service->findUserGroupList($userId, 0, $count);

        $tplList = array();
        foreach ( $list as $item )
        {
            /* @var $item GROUPS_BOL_Group */
            $tplList[] = array(
                'image' => $service->getGroupImageUrl($item),
                'title' => htmlspecialchars($item->title),
                'url' => OW::getRouter()->urlForRoute('groups-view', array('groupId' => $item->id))
            );
        }

        $this->assign("list", $tplList);

        return!empty($tplList);
    }

    public static function getSettingList()
    {
        $settingList = array();
        $settingList['count'] = array(
            'presentation' => self::PRESENTATION_NUMBER,
            'label' => OW_Language::getInstance()->text('groups', 'widget_user_groups_settings_count'),
            'value' => 3
        );

        return $settingList;
    }

    public static function processSettingList( $settingList, $place, $isAdmin )
    {
        $settingList['count'] = intval($settingList['count']);

        return parent::processSettingList($settingList, $place, $isAdmin);
    }

    public static function getStandardSettingValueList()
    {
        return array(
            self::SETTING_TITLE => OW_Language::getInstance()->text('groups', 'widget_user_groups_title'),
            self::SETTING_ICON => self::ICON_COMMENT,
            self::SETTING_SHOW_TITLE => true,
            self::SETTING_WRAP_IN_BOX => true
        );
    }

    public static function getAccess()
    {
        return self::ACCESS_ALL;
    }
}