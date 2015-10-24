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
 * Group Brief Info Content
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.groups.components
 * @since 1.0
 */
class GROUPS_CMP_BriefInfoContent extends OW_Component
{

    /**
     * @return Constructor.
     */
    public function __construct( $groupId )
    {
        parent::__construct();

        $service = GROUPS_BOL_Service::getInstance();
        $groupDto = $service->findGroupById($groupId);

        $group = array(
            'title' => htmlspecialchars($groupDto->title),
            'description' => $groupDto->description,
            'time' => $groupDto->timeStamp,
            'imgUrl' => empty($groupDto->imageHash) ? false : $service->getGroupImageUrl($groupDto),
            'url' => OW::getRouter()->urlForRoute('groups-view', array('groupId' => $groupDto->id)),
            "id" => $groupDto->id,
            "status" => $groupDto->status
        );

        $imageUrl = empty($groupDto->imageHash) ? '' : $service->getGroupImageUrl($groupDto);
        OW::getDocument()->addMetaInfo('image', $imageUrl, 'itemprop');
        OW::getDocument()->addMetaInfo('og:image', $imageUrl, 'property');

        $createDate = UTIL_DateTime::formatDate($groupDto->timeStamp);
        $adminName = BOL_UserService::getInstance()->getDisplayName($groupDto->userId);
        $adminUrl = BOL_UserService::getInstance()->getUserUrl($groupDto->userId);

        $js = UTIL_JsGenerator::newInstance()
                ->jQueryEvent('#groups_toolbar_flag', 'click', UTIL_JsGenerator::composeJsString('OW.flagContent({$entityType}, {$entityId});',
                        array(
                            'entityType' => GROUPS_BOL_Service::FEED_ENTITY_TYPE,
                            'entityId' => $groupDto->id
                        )));

        OW::getDocument()->addOnloadScript($js, 1001);

        $toolbar = array(
            array(
                'label' => OW::getLanguage()->text('groups', 'widget_brief_info_create_date', array('date' => $createDate))
            ),
            array(
                'label' => OW::getLanguage()->text('groups', 'widget_brief_info_admin', array('name' => $adminName, 'url' => $adminUrl))
            ));

        if ( $service->isCurrentUserCanEdit($groupDto) )
        {
            $toolbar[] = array(
                'label' => OW::getLanguage()->text('groups', 'edit_btn_label'),
                'href' => OW::getRouter()->urlForRoute('groups-edit', array('groupId' => $groupId))
            );
        }

        if ( $groupDto->status == GROUPS_BOL_Group::STATUS_ACTIVE 
                && OW::getUser()->isAuthenticated() 
                && OW::getUser()->getId() != $groupDto->userId )
        {
            $toolbar[] = array(
                'label' => OW::getLanguage()->text('base', 'flag'),
                'href' => 'javascript://',
                'id' => 'groups_toolbar_flag'
            );
        }

        $event = new BASE_CLASS_EventCollector('groups.on_toolbar_collect', array('groupId' => $groupId));
        OW::getEventManager()->trigger($event);

        foreach ( $event->getData() as $item )
        {
            $toolbar[] = $item;
        }

        if ( $groupDto->status == GROUPS_BOL_Group::STATUS_APPROVAL && OW::getUser()->isAuthorized("groups") )
        {
            $toolbar[] = array(
                'label' => OW::getLanguage()->text('base', 'approve'),
                'href' => OW::getRouter()->urlFor("GROUPS_CTRL_Groups", "approve", array(
                    "groupId" => $groupId
                )),
                'class' => "ow_green"
            );
        }
        
        $this->assign('toolbar', $toolbar);

        $this->assign('group', $group);
    }
}