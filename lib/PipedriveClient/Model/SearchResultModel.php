<?php

namespace PipedriveClient\Model;

/**
 * Class SearchResultModel
 * @package PipedriveClient\Model
 */
class SearchResultModel
{
    /**
     * @var string
     */
    private $term;

    /**
     * @var boolean
     */
    private $exactMatch;

    /**
     * @var string
     */
    private $fieldType;

    /**
     * @var string
     */
    private $fieldKey;

    /**
     * @var string
     */
    private $returnFieldKey;

    /**
     * @var boolean
     */
    private $returnItemIds;

    /**
     * @var integer
     */
    private $start;

    /**
     * @var integer
     */
    private $limit;

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return SearchResultModel
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExactMatch()
    {
        return $this->exactMatch;
    }

    /**
     * @param bool $exactMatch
     * @return SearchResultModel
     */
    public function setExactMatch($exactMatch)
    {
        $this->exactMatch = $exactMatch;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * @param string $fieldType
     * @return SearchResultModel
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * @param string $fieldKey
     * @return SearchResultModel
     */
    public function setFieldKey($fieldKey)
    {
        $this->fieldKey = $fieldKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnFieldKey()
    {
        return $this->returnFieldKey;
    }

    /**
     * @param string $returnFieldKey
     * @return SearchResultModel
     */
    public function setReturnFieldKey($returnFieldKey)
    {
        $this->returnFieldKey = $returnFieldKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReturnItemIds()
    {
        return $this->returnItemIds;
    }

    /**
     * @param bool $returnItemIds
     * @return SearchResultModel
     */
    public function setReturnItemIds($returnItemIds)
    {
        $this->returnItemIds = $returnItemIds;
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
     * @return SearchResultModel
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
     * @return SearchResultModel
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}