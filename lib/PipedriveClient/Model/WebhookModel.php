<?php

namespace PipedriveClient\Model;

use PipedriveClient\Model\Nested\WebhookMeta;

/**
 * Class WebhookModel
 * @package PipedriveClient\Model
 */
class WebhookModel
{

    /**
     * EVENT ACTION
     */
    const EVENT_ACTION_ADDED = 'added';
    const EVENT_ACTION_UPDATED = 'updated';
    const EVENT_ACTION_MERGED = 'merged';
    const EVENT_ACTION_DELETED = 'deleted';

    /**
     * EVENT OBJECT
     */
    const EVENT_OBJECT_ACTIVITY = 'activity';
    const EVENT_OBJECT_ACTIVITY_TYPE = 'activityType';
    const EVENT_OBJECT_DEAL = 'deal';
    const EVENT_OBJECT_NOTE = 'note';
    const EVENT_OBJECT_ORGANIZATION = 'organization';
    const EVENT_OBJECT_PERSON = 'person';
    const EVENT_OBJECT_PIPELINE = 'pipeline';
    const EVENT_OBJECT_PRODUCT = 'product';
    const EVENT_OBJECT_STAGE = 'stage';
    const EVENT_OBJECT_USER = 'user';

    /**
     * @var string
     */
    private $v;

    /**
     * @var array
     */
    private $matchesFilters;

    /**
     * @var \PipedriveClient\Model\Nested\WebhookMeta
     */
    private $meta;

    /**
     * @var array
     */
    private $current;

    /**
     * @var array
     */
    private $previous;

    /**
     * @var string
     */
    private $event;

    /**
     * @var string
     */
    private $retry;

    /**
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * @param string $v
     * @return WebhookModel
     */
    public function setV($v)
    {
        $this->v = $v;
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
     * @return WebhookModel
     */
    public function setMatchesFilters($matchesFilters)
    {
        $this->matchesFilters = $matchesFilters;
        return $this;
    }

    /**
     * @return WebhookMeta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param WebhookMeta $meta
     * @return WebhookModel
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * @return array
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param array $current
     * @return WebhookModel
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return array
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param array $previous
     * @return WebhookModel
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     * @return WebhookModel
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * @param string $retry
     * @return WebhookModel
     */
    public function setRetry($retry)
    {
        $this->retry = $retry;
        return $this;
    }
}