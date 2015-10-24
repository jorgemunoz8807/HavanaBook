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
 * @package uavatars.classes
 */
class UAVATARS_CLASS_NewsfeedBridge
{

    /**
     * Class instance
     *
     * @var UAVATARS_CLASS_NewsfeedBridge
     */
    private static $classInstance;

    /**
     * Returns class instance
     *
     * @return UAVATARS_CLASS_NewsfeedBridge
     */
    public static function getInstance()
    {
        if ( !isset(self::$classInstance) )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    public function __construct()
    {

    }

    public function onItemRender( OW_Event $event )
    {
        $params = $event->getParams();
        $data = $event->getData();

        if ( $params['action']['entityType'] != 'avatar-change' )
        {
            return;
        }

        $userId = $params['action']['userId'];
        $avatarId = $params['action']['entityId'];
        
        $avatar = UAVATARS_BOL_Service::getInstance()->findLastByAvatarId($avatarId);

        if ( $avatar === null )
        {
            return;
        }

        $staticUrl = OW::getPluginManager()->getPlugin('uavatars')->getStaticUrl();
        OW::getDocument()->addStyleSheet($staticUrl . 'style.css');
        OW::getDocument()->addScript($staticUrl . 'script.js');

        $avatars = UAVATARS_BOL_Service::getInstance()->findListAfterAvatarId($avatar->avatarId, 2);
        UAVATARS_CLASS_PhotoBridge::getInstance()->initPhotoFloatBox();

        $js = UTIL_JsGenerator::newInstance();

        if ( count($avatars) == 1 )
        {
            $avatarUrl = UAVATARS_BOL_Service::getInstance()->getAvatarUrl($avatars[0]);
            $imgUniqId = uniqid('uavatar_');
            $data['content'] =
                '<div class="ua-newsfeed-avatars-wrap">
                <a id="' . $imgUniqId . '" class="ua-newsfeed-avatar ua-newsfeed-current-avatar ow_border" href="javascript://">
                    <img src="' . $avatarUrl . '" />
                </a>
                </div>';

            $photoInfo = UAVATARS_CLASS_PhotoBridge::getInstance()->getPhotoInfo($avatars[0]->photoId);
            
            if ( !empty($photoInfo) )
            {
                $photoData = null;
                if ( !empty($photoInfo["dimension"]) )
                {
                    $photoData = array(
                        "mainUrl" => $photoInfo["previewUrl"],
                        "main" => array($photoInfo["dimension"]["main"][0], $photoInfo["dimension"]["main"][1])
                    );
                    $js->addScript('var image = new Image(); image.src={$url};', array(
                        "url" => $photoInfo["previewUrl"]
                    ));
                } else {
                    $url = $photoInfo["photoUrl"];

                    $js->addScript('var image = new Image(); image.src={$url};', array(
                        "url" => $url
                    ));
                }
                
                $js->jQueryEvent('#' . $imgUniqId, 'click',
                    'UAVATARS.setPhoto(event.data.photoId, event.data.photoData, image);',
                array('event'), array(
                    'photoId' => $avatars[0]->photoId,
                    "photoData" => $photoData
                ));
            }
        }
        else
        {
            $currentAvatarUrl = UAVATARS_BOL_Service::getInstance()->getAvatarUrl($avatars[0]);
            $prevAvatarUrl = UAVATARS_BOL_Service::getInstance()->getAvatarUrl($avatars[1]);

            $currentUniqId = uniqid('uavatar_');
            $prevUniqId = uniqid('uavatar_');

            $data['content'] =
                '<div class="ua-newsfeed-avatars-wrap">
                <a id="' . $prevUniqId . '" class="ua-newsfeed-avatar ua-newsfeed-prev-avatar ow_border" href="javascript://">
                    <img src="' . $prevAvatarUrl . '" />
                </a>
                <a id="' . $currentUniqId . '" class="ua-newsfeed-avatar ua-newsfeed-current-avatar ow_border" href="javascript://">
                    <img src="' . $currentAvatarUrl . '" />
                </a>
                </div>';

            $photoInfo = UAVATARS_CLASS_PhotoBridge::getInstance()->getPhotoInfo($avatars[0]->photoId);
            
            if ( !empty($photoInfo) )
            {
                $photoData = null;
                $url = null;
                if ( !empty($photoInfo["dimension"]) )
                {
                    $photoData = array(
                        "mainUrl" => $photoInfo["previewUrl"],
                        "main" => array($photoInfo["dimension"]["main"][0], $photoInfo["dimension"]["main"][1])
                    );
                    $js->addScript('var image = new Image(); image.src={$url};', array(
                        "url" => $photoInfo["previewUrl"]
                    ));
                } else {
                    $url = $photoInfo["photoUrl"];

                    $js->addScript('(new Image()).src={$url};', array(
                        "url" => $url
                    ));
                }
                
                $js->jQueryEvent('#' . $currentUniqId, 'click',
                    'UAVATARS.setPhoto(event.data.photoId, event.data.photoData, image);',
                array('event'), array(
                    'photoId' => $avatars[0]->photoId,
                    "photoData" => $photoData
                ));
            }

            $photoInfo = UAVATARS_CLASS_PhotoBridge::getInstance()->getPhotoInfo($avatars[1]->photoId);
            
            if ( !empty($photoInfo) )
            {
                $url = null;
                $photoData = null;
                if ( !empty($photoInfo["dimension"]) )
                {
                    $photoData = array(
                        "mainUrl" => $photoInfo["previewUrl"],
                        "main" => array($photoInfo["dimension"]["main"][0], $photoInfo["dimension"]["main"][1])
                    );
                    $js->addScript('var image = new Image(); image.src={$url};', array(
                        "url" => $photoInfo["previewUrl"]
                    ));
                } else {
                    $js->addScript('var image = new Image(); image.src={$url};', array(
                        "url" => $photoInfo["photoUrl"]
                    ));
                }
                
                $js->jQueryEvent('#' . $prevUniqId, 'click',
                    'UAVATARS.setPhoto(event.data.photoId, event.data.photoData, image);',
                array('event'), array(
                    'photoId' => $avatars[1]->photoId,
                    "photoData" => $photoData
                ));
            }
        }

        OW::getDocument()->addOnloadScript($js);

        $event->setData($data);
    }

    public function init()
    {
        OW::getEventManager()->bind('feed.on_item_render', array($this, 'onItemRender'));
    }
}