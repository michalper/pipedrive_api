<?php

namespace PipedriveClient\Model;

/**
 * Class SearchModel
 * @package PipedriveClient\Model
 */
class SearchModel
{
    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $filterId;

    /**
     * @var string
     */
    private $firstChar;

    /**
     * @var string
     */
    private $start = 0;

    /**
     * @var string
     */
    private $limit;

    /**
     * @var string
     */
    private $sort;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return SearchModel
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * @param string $filterId
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
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param string $start
     * @return SearchModel
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param string $limit
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