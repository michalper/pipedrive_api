<?php

namespace PipedriveClient;

use PipedriveClient\Service\ActivityService;
use PipedriveClient\Service\DealService;
use PipedriveClient\Service\NoteService;
use PipedriveClient\Service\PersonService;
use PipedriveClient\Service\PipelineService;
use PipedriveClient\Service\Service;
use PipedriveClient\Service\StageService;
use PipedriveClient\Service\UserSettingsService;
use PipedriveClient\Service\WebhookService;
use Itav\Component\Serializer\Serializer;

/**
 * Class PipedriveClient
 * @package PipedriveClient
 */
class PipedriveClient
{

    /**
     * @var ActivityService
     */
    public $activities;

    /**
     * @var DealService
     */
    public $deals;

    /**
     * @var NoteService
     */
    public $notes;

    /**
     * @var Service
     */
    private $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var PersonService
     */
    public $persons;

    /**
     * @var PipelineService
     */
    public $pipelines;

    /**
     * @var StageService
     */
    public $stages;

    /**
     * @var UserSettingsService
     */
    public $userSettings;

    /**
     * @var WebhookService
     */
    public $webhooks;

    /**
     * PipedriveClient constructor.
     */
    public function __construct()
    {
        $this->serializer = new Serializer();
        $this->service = new Service($this->serializer);
        $this->activities = new ActivityService($this->service, $this->serializer);
        $this->deals = new DealService($this->service, $this->serializer);
        $this->notes = new NoteService($this->service, $this->serializer);
        $this->persons = new PersonService($this->service, $this->serializer);
        $this->pipelines = new PipelineService($this->service, $this->serializer);
        $this->stages = new StageService($this->service, $this->serializer);
        $this->userSettings = new UserSettingsService($this->service, $this->serializer);
        $this->webhooks = new WebhookService($this->service, $this->serializer);
    }

    /**
     * @param string $apiKey
     * @return PipedriveClient
     */
    public function setApiKey($apiKey)
    {
        $this->service->setApiKey($apiKey);
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->service->getApiKey();
    }

    /**
     * @param string $domain
     * @return PipedriveClient
     */
    public function setDomain($domain)
    {
        $this->service->setDomain($domain);
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->service->getDomain();
    }
}