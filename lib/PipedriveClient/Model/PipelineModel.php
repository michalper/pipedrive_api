<?php

namespace PipedriveClient\Model;

/**
 * Class PipelineModel
 * @package PipedriveClient\Model
 */
class PipelineModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $urlTitle;

    /**
     * @var integer
     */
    private $orderNr;

    /**
     * @var boolean
     */
    private $active;

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
     * @return PipelineModel
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return PipelineModel
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlTitle()
    {
        return $this->urlTitle;
    }

    /**
     * @param string $urlTitle
     * @return PipelineModel
     */
    public function setUrlTitle($urlTitle)
    {
        $this->urlTitle = $urlTitle;
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
     * @return PipelineModel
     */
    public function setOrderNr($orderNr)
    {
        $this->orderNr = $orderNr;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return PipelineModel
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * @return PipelineModel
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
     * @return PipelineModel
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}