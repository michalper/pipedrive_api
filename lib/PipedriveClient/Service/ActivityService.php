<?php

namespace PipedriveClient\Service;

use PipedriveClient\Model\ActivityModel;
use Itav\Component\Serializer\Serializer;

/**
 * Class ActivityService
 * @package PipedriveClient\Service
 */
class ActivityService implements InterfaceService
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
     * @param ActivityModel $activityModel
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Activities/post_activities
     * @return boolean|ActivityModel
     */
    public function add(ActivityModel $activityModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($activityModel))
            ->request('activities');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), ActivityModel::class);
        }
        return false;
    }
}