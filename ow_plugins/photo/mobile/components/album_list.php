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
 * Photo albums mobile component
 *
 * @author Egor Bulgakov <egor.bulgakov@gmail.com>
 * @package ow.plugin.photo.components
 * @since 1.6
 */
class PHOTO_MCMP_AlbumList extends OW_MobileComponent
{
    /**
     * @var PHOTO_BOL_PhotoAlbumService
     */
    private $photoAlbumService;

    public function __construct( $userId, $limit, $exclude )
    {
        parent::__construct();

        $this->photoAlbumService = PHOTO_BOL_PhotoAlbumService::getInstance();

        $user = BOL_UserService::getInstance()->findUserById($userId);
        $this->assign('username', $user->getUsername());

        $albums = $this->photoAlbumService->findUserAlbumList($user->id, 1, $limit, $exclude, true);
        $this->assign('albums', $albums);

        foreach ( $albums as $album )
        {
            array_push($exclude, $album['dto']->id);
        }
        $loadMore = $this->photoAlbumService->countUserAlbums($userId, $exclude);
        if ( !$loadMore )
        {
            $script = "OWM.trigger('photo.hide_load_more', {});";
            OW::getDocument()->addOnloadScript($script);
        }
    }
}