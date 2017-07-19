<?php

namespace PipedriveClient\Model\Request;

/**
 * Class WebhookModel
 * @package PipedriveClient\Model
 */
class WebhookRequest
{
    /**
     * @var string
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
     * @var string
     */
    private $httpAuthUser;

    /**
     * @var string
     */
    private $httpAuthPassword;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return WebhookRequest
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
     * @return WebhookRequest
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
     * @return WebhookRequest
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
     * @return WebhookRequest
     */
    public function setSubscriptionUrl($subscriptionUrl)
    {
        $this->subscriptionUrl = $subscriptionUrl;
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
     * @return WebhookRequest
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
     * @return WebhookRequest
     */
    public function setHttpAuthPassword($httpAuthPassword)
    {
        $this->httpAuthPassword = $httpAuthPassword;
        return $this;
    }
}