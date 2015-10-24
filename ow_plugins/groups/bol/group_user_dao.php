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
 * Data Access Object for `groups_group_user` table.
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package ow_plugins.groups.bol
 * @since 1.0
 */
class GROUPS_BOL_GroupUserDao extends OW_BaseDao
{
    /**
     * Singleton instance.
     *
     * @var GROUPS_BOL_GroupUserDao
     */
    private static $classInstance;

    /**
     * Returns an instance of class (singleton pattern implementation).
     *
     * @return GROUPS_BOL_GroupUserDao
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
     * @see OW_BaseDao::getDtoClassName()
     *
     */
    public function getDtoClassName()
    {
        return 'GROUPS_BOL_GroupUser';
    }

    /**
     * @see OW_BaseDao::getTableName()
     *
     */
    public function getTableName()
    {
        return OW_DB_PREFIX . 'groups_group_user';
    }

    public function findListByGroupId( $groupId, $first, $count )
    {
        $queryParts = BOL_UserDao::getInstance()->getUserQueryFilter("u", "userId", array(
            "method" => "GROUPS_BOL_GroupUserDao::findListByGroupId"
        ));
        
        $query = "SELECT u.* FROM " . $this->getTableName() . " u " . $queryParts["join"] 
                . " WHERE " . $queryParts["where"] . " AND u.groupId=:g AND u.privacy=:p LIMIT :lf, :lc";

        return $this->dbo->queryForObjectList($query, $this->getDtoClassName(), array(
            "g" => $groupId,
            "p" => GROUPS_BOL_Service::PRIVACY_EVERYBODY,
            "lf" => $first,
            "lc" => $count
        ));
    }

    public function findByGroupId( $groupId, $privacy = null )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', $groupId);

        if ( $privacy !== null )
        {
            $example->andFieldEqual('privacy', $privacy);
        }

        return $this->findListByExample($example);
    }

    public function findCountByGroupId( $groupId )
    {
        $queryParts = BOL_UserDao::getInstance()->getUserQueryFilter("u", "userId", array(
            "method" => "GROUPS_BOL_GroupUserDao::findCountByGroupId"
        ));
        
        $query = "SELECT COUNT(DISTINCT u.id) FROM " . $this->getTableName() . " u " . $queryParts["join"] 
                . " WHERE " . $queryParts["where"] . " AND u.groupId=:g";

        return $this->dbo->queryForColumn($query, array(
            "g" => $groupId
        ));
    }

    public function findCountByGroupIdList( $groupIdList )
    {
        if ( empty($groupIdList) )
        {
            return array();
        }

        $queryParts = BOL_UserDao::getInstance()->getUserQueryFilter("u", "userId", array(
            "method" => "GROUPS_BOL_GroupUserDao::findCountByGroupIdList"
        ));
        
        $query = 'SELECT u.groupId, COUNT(*) count FROM ' . $this->getTableName() . ' u '
                . $queryParts["join"]
                . ' WHERE ' . $queryParts["where"] . ' AND u.groupId IN (' . implode(',', $groupIdList) . ') GROUP BY u.groupId';

        $list = $this->dbo->queryForList($query, null
                , GROUPS_BOL_GroupDao::LIST_CACHE_LIFETIME, array(GROUPS_BOL_GroupDao::LIST_CACHE_TAG));

        $resultList = array();
        foreach ( $list as $item )
        {
            $resultList[$item['groupId']] = $item['count'];
        }

        foreach ( $groupIdList as $groupId )
        {
            $resultList[$groupId] = empty($resultList[$groupId]) ? 0 : $resultList[$groupId];
        }

        return $resultList;
    }

    /**
     * 
     * @param int $groupId
     * @param int $userId
     * @return GROUPS_BOL_GroupUser
     */
    public function findGroupUser( $groupId, $userId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', $groupId);
        $example->andFieldEqual('userId', $userId);

        return $this->findObjectByExample($example);
    }

    public function deleteByGroupId( $groupId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', $groupId);

        return $this->deleteByExample($example);
    }

    public function deleteByUserId( $userId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('userId', $userId);

        return $this->deleteByExample($example);
    }

    public function deleteByGroupAndUserId( $groupId, $userId )
    {
        $example = new OW_Example();
        $example->andFieldEqual('groupId', $groupId);
        $example->andFieldEqual('userId', $userId);

        return $this->deleteByExample($example);
    }

    public function setPrivacy( $userId, $privacy )
    {
        $query = 'UPDATE ' . $this->getTableName() . ' SET privacy=:p WHERE userId=:u';

        $this->dbo->query($query, array(
            'p' => $privacy,
            'u' => $userId
        ));
    }
}