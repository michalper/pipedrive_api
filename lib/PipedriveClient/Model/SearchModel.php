<?php

namespace PipedriveClient\Model;

/**
 * Class SearchModel
 * @package PipedriveClient\Model
 */
class SearchModel
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $filterId;

    /**
     * @var string
     */
    private $firstChar;

    /**
     * @var integer
     */
    private $start = 0;

    /**
     * @var integer
     */
    private $limit;

    /**
     * @var string
     */
    private $sort;

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return SearchModel
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * @param int $filterId
     * @return SearchModel
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstChar()
    {
        return $this->firstChar;
    }

    /**
     * @param string $firstChar
     * @return SearchModel
     */
    public function setFirstChar($firstChar)
    {
        $this->firstChar = $firstChar;
        return $this;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param int $start
     * @return SearchModel
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return SearchModel
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     * @return SearchModel
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }


}