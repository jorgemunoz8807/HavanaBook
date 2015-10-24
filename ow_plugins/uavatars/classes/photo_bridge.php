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
class UAVATARS_CLASS_PhotoBridge
{
    /**
     * Class instance
     *
     * @var UAVATARS_CLASS_PhotoBridge
     */
    private static $classInstance;

    /**
     * Returns class instance
     *
     * @return UAVATARS_CLASS_PhotoBridge
     */
    public static function getInstance()
    {
        if ( !isset(self::$classInstance) )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    private $isPluginActive = false;

    /**
     *
     * @var OW_Plugin
     */
    private $plugin;

    private $defaultPhotoAlbumName = 'Profile Pictures';

    private $disabledEvents = array(
        'plugin.photos.add_photo'
    );

    public function __construct()
    {
        $this->isPluginActive = OW::getPluginManager()->isPluginActive('photo');
        $this->plugin = OW::getPluginManager()->getPlugin('uavatars');
    }

    private function triggerEvent( OW_Event $event )
    {
        if ( in_array($event->getName(), $this->disabledEvents) )
        {
            return $event;
        }

        return OW::getEventManager()->trigger($event);
    }

    private function callEvent( $eventName, $params )
    {
        if ( in_array($eventName, $this->disabledEvents) )
        {
            return null;
        }

        return OW::getEventManager()->call($eventName, $params);
    }

    public function isActive()
    {
        return $this->isPluginActive;
    }

    private function getAlbumName()
    {
        $albumName = OW::getLanguage()->text($this->plugin->getKey(), 'default_photo_album_name');

        return empty($albumName) ? $this->defaultPhotoAlbumName : $albumName;
    }

    private function getAlbum( $userId, $entityType = "user", $entityId = null )
    {
        if ( !$this->isActive() ) return null;
        
        if ( empty($entityId) )
        {
            $entityId = $userId;
        }

        $albumName = $this->getAlbumName();

        $album = OW::getEventManager()->call("photo.album_find", array(
            "userId" => $userId,
            "albumTitle" => $albumName
        ));
        
        if ( empty($album) )
        {
            $data = OW::getEventManager()->call("photo.album_add", array(
                "userId" => $userId,
                "name" => $albumName,
                "entityType" => $entityType,
                "entityId" => $entityId
            ));

            $albumId = $data["albumId"];
        }
        else
        {
            $albumId = $album["id"];
        }

        return $albumId;
    }

    public function getPhotoInfo( $photoId )
    {
        $data = OW::getEventManager()->call("photo.find", array(
            "photoId" => $photoId
        ));
        
        return empty($data["photo"]) ? null : $data["photo"];
    }

    public function isPhotoExists( $photoId )
    {
        if ( !$this->isActive() ) return null;
        
        return PHOTO_BOL_PhotoService::getInstance()->findPhotoById($photoId) !== null;
    }
    
    public function updatePhotoStatus( $photoId, $status )
    {
        if ( !$this->isActive() ) return null;
        
        $photo = PHOTO_BOL_PhotoService::getInstance()->findPhotoById($photoId);
        $photo->status = $status;
        
        PHOTO_BOL_PhotoDao::getInstance()->save($photo);
    }
    
    public function addPhoto( $userId, $filePath, $title = "", $text = null, $addToFeed = false, $status = null )
    {
        if ( !$this->isActive() ) return null;
        
        $description = empty($title) ? $text : $title;
        $description = empty($description) ? null : $description;
        
        if ( !OW::getUser()->isAuthorized('photo', 'upload') )
        {
            return;
        }
        
        $data = OW::getEventManager()->call("photo.add", array(
            "albumId" => $this->getAlbum($userId),
            "path" => $filePath,
            "description" => $description,
            "addToFeed" => $addToFeed,
            "status" => $status
        ));
        
        if ( empty($data["photoId"]) )
        {
            return null;
        }
        
        $photoId = $data["photoId"];
        
        BOL_AuthorizationService::getInstance()->trackAction('photo', 'upload');
        
        return $photoId;
    }
    
    public function deletePhoto( $photoId )
    {
        BOL_ContentService::getInstance()->deleteContent("photo_comments", $photoId);
    }

    public function initPhotoFloatBox()
    {
        OW::getEventManager()->call("photo.init_floatbox");
        
        $script = UTIL_JsGenerator::composeJsString('UAVATARS.setup();');
        OW::getDocument()->addOnloadScript($script);
    }
}