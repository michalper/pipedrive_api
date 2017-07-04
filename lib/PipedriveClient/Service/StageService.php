<?php

namespace PipedriveClient\Service;

use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\StageModel;

/**
 * Class StageService
 * @package PipedriveClient\Service
 */
class StageService implements InterfaceService
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
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Stages/get_stages
     * @return StageModel[]|false
     */
    public function getAll()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('stages');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), StageModel::class . '[]');
        }
        return false;
    }

}