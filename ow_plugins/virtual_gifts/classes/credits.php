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
 * Note: class can be used only after init
 * 
 * @author Egor Bulgakov <egor.bulgakov@gmail.com>
 * @package ow_plugins.virtual_gifts.classes
 * @since 1.0
 */
class VIRTUALGIFTS_CLASS_Credits
{
    private $actions;
    
    public function __construct()
    {
        $this->actions[] = array(
            'pluginKey' => 'virtualgifts',
            'action' => 'send_virtual_gift',
            'amount' => 0,
            'settingsRoute' => 'virtual_gifts_templates'
        );
        
        $giftService = VIRTUALGIFTS_BOL_VirtualGiftsService::getInstance();
        $templates = $giftService->getTemplateList();
        
        if ( $templates )
        {
            foreach ( $templates as $tpl )
            {
                $this->actions[] = array(
                    'pluginKey' => 'virtualgifts',
                    'action' => 'template_' . $tpl['id'],
                    'amount' => $tpl['price'] == 0 ? 0 : -$tpl['price'],
                    'hidden' => 1
                );
            }
        }
    }
    
    public function bindCreditActionsCollect( BASE_CLASS_EventCollector $e )
    {
        foreach ( $this->actions as $action )
        {
            $e->add($action);
        }
    }
    
    public function triggerCreditActionsAdd()
    {
        $e = new BASE_CLASS_EventCollector('usercredits.action_add');
        
        foreach ( $this->actions as $action )
        {
            $e->add($action);
        }

        OW::getEventManager()->trigger($e);
    }

    public function getActionKey( OW_Event $e )
    {
        $params = $e->getParams();

        if ( $params['groupName'] == 'virtualgifts' && $params['actionName'] == 'send_gift' )
        {
            if ( empty($params['extra']['tplId']) )
            {
                $tpl = VIRTUALGIFTS_BOL_VirtualGiftsService::getInstance()->findMinPriceTemplate();
                if ( !$tpl )
                {
                    return;
                }
                $tplId = $tpl->id;
            }
            else
            {
                $tplId = $params['extra']['tplId'];
            }

            $e->setData('template_' . $tplId);
        }
    }

    public function onCreditsUpdateActionDisabledStatus( OW_Event $e )
    {
        $params = $e->getParams();

        if ( $params['pluginKey'] == 'virtualgifts' && $params['actionKey'] == 'send_virtual_gift' )
        {
            $giftService = VIRTUALGIFTS_BOL_VirtualGiftsService::getInstance();
            $creditService = USERCREDITS_BOL_CreditsService::getInstance();
            $templates = $giftService->getTemplateList();

            foreach ( $templates as $tpl )
            {
                $event = new BASE_CLASS_EventCollector('usercredits.action_update');
                $event->add(array(
                    'pluginKey' => 'virtualgifts',
                    'action' => 'template_' . $tpl['id'],
                    'amount' => $tpl['price'] == 0 ? 0 : -$tpl['price'],
                    'hidden' => 1,
                    'disabled' => (int) $params['disabled']
                ));

                OW::getEventManager()->trigger($event);
            }
        }
    }
}