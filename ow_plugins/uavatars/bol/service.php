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
 * @package uavatars.bol
 */
class UAVATARS_BOL_Service
{
    private static $classInstance;

    /**
     * Returns class instance
     *
     * @return UAVATARS_BOL_Service
     */
    public static function getInstance()
    {
        if ( null === self::$classInstance )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    /**
     *
     * @var UHEADER_BOL_AvatarDao
     */
    private $avatarDao;

    public function __construct()
    {
        $this->avatarDao = UAVATARS_BOL_AvatarDao::getInstance();
    }


    /**
     *
     * @param int $userId
     * @param int $avatarId
     * @param int $photoId
     * @return UAVATARS_BOL_Avatar
     */
    public function saveAvatar( UAVATARS_BOL_Avatar $avatar )
    {
        $this->avatarDao->save($avatar);

        return $avatar;
    }

    public function deleteAvatar( UAVATARS_BOL_Avatar $avatar )
    {
        $userfilesDir = OW::getPluginManager()->getPlugin('uavatars')->getUserFilesDir();
        @OW::getStorage()->removeFile($userfilesDir . $avatar->fileName);

        $this->avatarDao->delete($avatar);
    }

    public function storeAvatarImage( $avatarPath )
    {
        $fileName = basename($avatarPath);

        $userfilesDir = OW::getPluginManager()->getPlugin('uavatars')->getUserFilesDir();
        $pluginfilesDir = OW::getPluginManager()->getPlugin('uavatars')->getPluginFilesDir();

        $tmpPath = $pluginfilesDir . $fileName;

        if ( !OW::getStorage()->copyFileToLocalFS($avatarPath, $tmpPath) )
        {
            @unlink($tmpPath);

            return null;
        }

        if ( !OW::getStorage()->copyFile($pluginfilesDir . $fileName, $userfilesDir . $fileName) )
        {
            @unlink($tmpPath);

            return null;
        }

        @unlink($tmpPath);

        return $fileName;
    }

    /**
     *
     * @param int $avatarId
     * @return UAVATARS_BOL_Avatar
     */
    public function findLastByAvatarId( $avatarId )
    {
        return $this->avatarDao->findLastByAvatarId($avatarId);
    }

    /**
     *
     * @param int $userId
     * @return UAVATARS_BOL_Avatar
     */
    public function findLastByUserId( $userId )
    {
        return $this->avatarDao->findLastByUserId($userId);
    }
    
    public function findListAfterAvatarId( $avatarId, $count, $includes = true )
    {
        return $this->avatarDao->findListAfterAvatarId($avatarId, $count, $includes);
    }

    public function findByUserId( $userId, $limit = null )
    {
        return $this->avatarDao->findListByUserId($userId, $limit);
    }


    public function getAvatarUrl( UAVATARS_BOL_Avatar $avatar )
    {
        $userfilesDir = OW::getPluginManager()->getPlugin('uavatars')->getUserFilesDir();

        return OW::getStorage()->getFileUrl($userfilesDir . $avatar->fileName);
    }

}