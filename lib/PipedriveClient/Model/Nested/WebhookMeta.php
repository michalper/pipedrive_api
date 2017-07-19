<?php

namespace PipedriveClient\Model\Nested;

/**
 * Class WebhookMeta
 * @package PipedriveClient\Model\Nested
 */
class WebhookMeta
{
    /**
     * @var string
     */
    private $v;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $object;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $companyId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string
     */
    private $timestampMicro;

    /**
     * @var array
     */
    private $permittedUserIds;

    /**
     * @var boolean
     */
    private $transPending;

    /**
     * @var boolean
     */
    private $isBulkUpdate;

    /**
     * @var array
     */
    private $matchesFilters;

    /**
     * @var string
     */
    private $webhookId;

    /**
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * @param string $v
     * @return WebhookMeta
     */
    public function setV($v)
    {
        $this->v = $v;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return WebhookMeta
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return WebhookMeta
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return WebhookMeta
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param string $companyId
     * @return WebhookMeta
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return WebhookMeta
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return WebhookMeta
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return WebhookMeta
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestampMicro()
    {
        return $this->timestampMicro;
    }

    /**
     * @param string $timestampMicro
     * @return WebhookMeta
     */
    public function setTimestampMicro($timestampMicro)
    {
        $this->timestampMicro = $timestampMicro;
        return $this;
    }

    /**
     * @return array
     */
    public function getPermittedUserIds()
    {
        return $this->permittedUserIds;
    }

    /**
     * @param array $permittedUserIds
     * @return WebhookMeta
     */
    public function setPermittedUserIds($permittedUserIds)
    {
        $this->permittedUserIds = $permittedUserIds;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTransPending()
    {
        return $this->transPending;
    }

    /**
     * @param bool $transPending
     * @return WebhookMeta
     */
    public function setTransPending($transPending)
    {
        $this->transPending = $transPending;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBulkUpdate()
    {
        return $this->isBulkUpdate;
    }

    /**
     * @param bool $isBulkUpdate
     * @return WebhookMeta
     */
    public function setIsBulkUpdate($isBulkUpdate)
    {
        $this->isBulkUpdate = $isBulkUpdate;
        return $this;
    }

    /**
     * @return array
     */
    public function getMatchesFilters()
    {
        return $this->matchesFilters;
    }

    /**
     * @param array $matchesFilters
     * @return WebhookMeta
     */
    public function setMatchesFilters($matchesFilters)
    {
        $this->matchesFilters = $matchesFilters;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebhookId()
    {
        return $this->webhookId;
    }

    /**
     * @param string $webhookId
     * @return WebhookMeta
     */
    public function setWebhookId($webhookId)
    {
        $this->webhookId = $webhookId;
        return $this;
    }
}