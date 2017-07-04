<?php

namespace PipedriveClient\Service;

use PipedriveClient\Model\PipelineModel;
use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\Response\PersonResponse;

/**
 * Class PipelineService
 * @package PipedriveClient\Service
 */
class PipelineService implements InterfaceService
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
     * PersonService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Pipelines/get_pipelines
     * @return PersonResponse|false
     */
    public function getAll()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('pipelines');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), PipelineModel::class . '[]');
        }
        return false;
    }

}