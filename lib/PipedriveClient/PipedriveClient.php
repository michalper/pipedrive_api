<?php

namespace PipedriveClient;

use PipedriveClient\Service\ContactService;
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
     * @var ContactService
     */
    public $contact;

    /**
     * @var WebhookService
     */
    public $webhook;

    /**
     * PipedriveClient constructor.
     */
    public function __construct()
    {
        $this->serializer = new Serializer();
        $this->service = new Service($this->serializer);
        $this->contact = new ContactService($this->service, $this->serializer);
        $this->webhook = new WebhookService($this->service, $this->serializer);
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