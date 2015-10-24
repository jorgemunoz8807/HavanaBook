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
 * Data Access Object for `forum_read_topic` table.
 *
 * @author Egor Bulgakov <egor.bulgakov@gmail.com>
 * @package ow.ow_plugins.forum.bol
 * @since 1.0
 */
class FORUM_BOL_ReadTopicDao extends OW_BaseDao
{

    /**
     * Class constructor
     *
     */
    protected function __construct()
    {
        parent::__construct();
    }
    /**
     * Class instance
     *
     * @var FORUM_BOL_ReadTopicDao
     */
    private static $classInstance;

    /**
     * Returns class instance
     *
     * @return FORUM_BOL_ReadTopicDao
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
        return 'FORUM_BOL_ReadTopic';
    }

    /**
     * @see OW_BaseDao::getTableName()
     *
     */
    public function getTableName()
    {
        return OW_DB_PREFIX . 'forum_read_topic';
    }

    /**
     * Returns topic read info by User
     *
     * @param int $topicId
     * @param int $userId
     * @return FORUM_BOL_ReadTopic
     */
    public function findTopicRead( $topicId, $userId )
    {
        $example = new OW_Example();

        $example->andFieldEqual('topicId', $topicId);
        $example->andFieldEqual('userId', $userId);

        $this->findObjectByExample($example);
    }

    /**
     * Deletes topics read info
     *
     * @param int $topicId
     */
    public function deleteByTopicId( $topicId )
    {
        $example = new OW_Example();

        $example->andFieldEqual('topicId', $topicId);

        $this->deleteByExample($example);
    }

    /**
     * Returns user reads topic ids
     *
     * @param array $topicIds
     * @param int $userId
     * @return array
     */
    public function findUserReadTopicIds( $topicIds, $userId )
    {
        $example = new OW_Example();

        $example->andFieldInArray('topicId', $topicIds);
        $example->andFieldEqual('userId', $userId);

        $query = "
    	SELECT `topicId` FROM `" . $this->getTableName() . "`
   		" . $example;

        return $this->dbo->queryForColumnList($query);
    }
}