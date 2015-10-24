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
 * Data Access Object for `groups_invite` table.
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.groups.bol
 * @since 1.0
 */
class GROUPS_BOL_InviteDao extends OW_BaseDao
{
    /**
     * Singleton instance.
     *
     * @var GROUPS_BOL_InviteDao
     */
    private static $classInstance;

    /**
     * Returns an instance of class (singleton pattern implementation).
     *
     * @return GROUPS_BOL_InviteDao
     */
    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    /**
     * Constructor.
     */
    protected function __construct()
    {
        parent::__construct();
    }

    /**
     * @see OW_BaseDao::getDtoClassName()
     *
     */
    public function getDtoClassName()
    {
        return 'GROUPS_BOL_Invite';
    }

    /**
     * @see OW_BaseDao::getTableName()
     *
     */
    public function getTableName()
    {
        return OW_DB_PREFIX . 'groups_invite';
    }

    /**
     * @param integer $groupId
     * @param integer $userId
     * @return GROUPS_BOL_Invite
     */
    public function findInvite( $groupId, $userId, $inviterId = null )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', (int) $groupId);
        $example->andFieldEqual('userId', (int) $userId);

        if ( $inviterId !== null )
        {
            $example->andFieldEqual('inviterId', (int) $inviterId);
        }

        return $this->findObjectByExample($example);
    }

    public function findInviteList( $groupId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', (int) $groupId);

        return $this->findListByExample($example);
    }

    public function findInviteListByUserId( $userId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('userId', (int) $userId);

        return $this->findListByExample($example);
    }

    public function findListByGroupIdAndInviterId( $groupId, $inviterId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', (int) $groupId);
        $example->andFieldEqual('inviterId', (int) $inviterId);

        return $this->findListByExample($example);
    }

    /**
     * @param integer $groupId
     * @param integer $userId
     */
    public function deleteByUserIdAndGroupId( $groupId, $userId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', (int) $groupId);
        $example->andFieldEqual('userId', (int) $userId);

        $this->deleteByExample($example);
    }

    /**
     * @param integer $userId
     */
    public function deleteByUserId( $userId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('userId', (int) $userId);

        $this->deleteByExample($example);
    }


    /**
     * @param integer $groupId
     */
    public function deleteByGroupId( $groupId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', (int) $groupId);

        $this->deleteByExample($example);
    }


    /**
     * @param integer $groupId
     */
    public function findListByGroupId( $groupId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', (int) $groupId);

        return $this->findListByExample($example);
    }
}
