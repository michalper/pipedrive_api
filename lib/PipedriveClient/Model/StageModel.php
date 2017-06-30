<?php

namespace PipedriveClient\Model;

/**
 * Class StageModel
 * @package PipedriveClient\Model
 */
class StageModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $orderNr;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $activeFlag;

    /**
     * @var integer
     */
    private $dealProbability;

    /**
     * @var integer
     */
    private $pipelineId;

    /**
     * @var boolean
     */
    private $rottenFlag;

    /**
     * @var string
     */
    private $rottenDays;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @var \DateTime
     */
    private $updateTime;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return StageModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderNr()
    {
        return $this->orderNr;
    }

    /**
     * @param int $orderNr
     * @return StageModel
     */
    public function setOrderNr($orderNr)
    {
        $this->orderNr = $orderNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return StageModel
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActiveFlag()
    {
        return $this->activeFlag;
    }

    /**
     * @param bool $activeFlag
     * @return StageModel
     */
    public function setActiveFlag($activeFlag)
    {
        $this->activeFlag = $activeFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealProbability()
    {
        return $this->dealProbability;
    }

    /**
     * @param int $dealProbability
     * @return StageModel
     */
    public function setDealProbability($dealProbability)
    {
        $this->dealProbability = $dealProbability;
        return $this;
    }

    /**
     * @return int
     */
    public function getPipelineId()
    {
        return $this->pipelineId;
    }

    /**
     * @param int $pipelineId
     * @return StageModel
     */
    public function setPipelineId($pipelineId)
    {
        $this->pipelineId = $pipelineId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRottenFlag()
    {
        return $this->rottenFlag;
    }

    /**
     * @param bool $rottenFlag
     * @return StageModel
     */
    public function setRottenFlag($rottenFlag)
    {
        $this->rottenFlag = $rottenFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getRottenDays()
    {
        return $this->rottenDays;
    }

    /**
     * @param string $rottenDays
     * @return StageModel
     */
    public function setRottenDays($rottenDays)
    {
        $this->rottenDays = $rottenDays;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * @param \DateTime $addTime
     * @return StageModel
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param \DateTime $updateTime
     * @return StageModel
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}