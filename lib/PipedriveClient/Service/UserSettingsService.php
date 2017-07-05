<?php

namespace PipedriveClient\Service;

use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\ResponseModel;

/**
 * Class DealService
 * @package PipedriveClient\Service
 */
class UserSettingsService implements InterfaceService
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
     * @see https://developers.pipedrive.com/docs/api/v1/#!/UserSettings/get_userSettings
     * @return ResponseModel|false
     */
    public function userSettings()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('userSettings');

        if ($ret) {
            return $ret;
        }
        return false;
    }
}