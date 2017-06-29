<?php

namespace PipedriveClient;

use PipedriveClient\Service\PersonService;
use PipedriveClient\Service\Service;
use PipedriveClient\Service\WebhookService;
use Itav\Component\Serializer\Serializer;

/**
 * Class PipedriveClient
 * @package PipedriveClient
 */
class PipedriveClient
{

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
        $this->persons = new PersonService($this->service, $this->serializer);
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