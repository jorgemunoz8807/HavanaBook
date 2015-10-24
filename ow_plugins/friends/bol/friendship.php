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
 * @author Sardar Madumarov <madumarov@gmail.com>
 * @package ow_plugins.friends.bol
 * @since 1.0
 */
class FRIENDS_BOL_Friendship extends OW_Entity
{
    /**
     * @var integer
     */
    public $userId;
    /**
     * @var integer
     */
    public $friendId;
    /**
     * @var integer
     */
    public $status;
    /**
     * @var integer
     */
    public $timeStamp = 0;
    /**
     * @var boolean
     */
    public $viewed = 0;
    /**
     * @var boolean
     */
    public $active = 1;
    /**
     * @var boolean
     */
    public $notificationSent = 0;


    /**
     * @return FRIENDS_Friendship
     */
    public function setUserId( $userId )
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    /**
     *
     * @return FRIENDS_Friendship
     */
    public function setFriendId( $friendId )
    {
        $this->friendId = $friendId;

        return $this;
    }

    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     *
     * @return FRIENDS_Friendship
     */
    public function setStatus( $status )
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
}