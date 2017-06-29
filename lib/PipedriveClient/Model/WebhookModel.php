<?php

namespace PipedriveClient\Model;

/**
 * Class WebhookModel
 * @package PipedriveClient\Model
 */
class WebhookModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $companyId;

    /**
     * @var integer
     */
    private $adminId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $eventAction;

    /**
     * @var string
     */
    private $eventObject;

    /**
     * @var string
     */
    private $subscriptionUrl;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @var \DateTime
     */
    private $removeTime;

    /**
     * @var string
     */
    private $httpAuthUser;

    /**
     * @var string
     */
    private $httpAuthPassword;

    /**
     * @var \DateTime
     */
    private $lastDeliveryTime;

    /**
     * @var string
     */
    private $lastHttpStatus;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return WebhookModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return WebhookModel
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param int $adminId
     * @return WebhookModel
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return WebhookModel
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventAction()
    {
        return $this->eventAction;
    }

    /**
     * @param string $eventAction
     * @return WebhookModel
     */
    public function setEventAction($eventAction)
    {
        $this->eventAction = $eventAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventObject()
    {
        return $this->eventObject;
    }

    /**
     * @param string $eventObject
     * @return WebhookModel
     */
    public function setEventObject($eventObject)
    {
        $this->eventObject = $eventObject;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionUrl()
    {
        return $this->subscriptionUrl;
    }

    /**
     * @param string $subscriptionUrl
     * @return WebhookModel
     */
    public function setSubscriptionUrl($subscriptionUrl)
    {
        $this->subscriptionUrl = $subscriptionUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return WebhookModel
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
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
     * @return WebhookModel
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRemoveTime()
    {
        return $this->removeTime;
    }

    /**
     * @param \DateTime $removeTime
     * @return WebhookModel
     */
    public function setRemoveTime($removeTime)
    {
        $this->removeTime = $removeTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAuthUser()
    {
        return $this->httpAuthUser;
    }

    /**
     * @param string $httpAuthUser
     * @return WebhookModel
     */
    public function setHttpAuthUser($httpAuthUser)
    {
        $this->httpAuthUser = $httpAuthUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpAuthPassword()
    {
        return $this->httpAuthPassword;
    }

    /**
     * @param string $httpAuthPassword
     * @return WebhookModel
     */
    public function setHttpAuthPassword($httpAuthPassword)
    {
        $this->httpAuthPassword = $httpAuthPassword;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastDeliveryTime()
    {
        return $this->lastDeliveryTime;
    }

    /**
     * @param \DateTime $lastDeliveryTime
     * @return WebhookModel
     */
    public function setLastDeliveryTime($lastDeliveryTime)
    {
        $this->lastDeliveryTime = $lastDeliveryTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastHttpStatus()
    {
        return $this->lastHttpStatus;
    }

    /**
     * @param string $lastHttpStatus
     * @return WebhookModel
     */
    public function setLastHttpStatus($lastHttpStatus)
    {
        $this->lastHttpStatus = $lastHttpStatus;
        return $this;
    }
}