<?php

namespace PipedriveClient\Service;

use PipedriveClient\Model\ActivityModel;
use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\SearchModel;

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
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Activities/post_activities
     * @param ActivityModel $activityModel
     * @return bool|mixed
     * @throws \Exception
     * @throws \Itav\Component\Serializer\SerializerException
     */
    public function add(ActivityModel $activityModel)
    {
        $additionalData = $activityModel->getAdditionalData();
        $activityModel->setAdditionalData(null);
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($activityModel))
            ->setDynamicData(json_decode(json_encode($additionalData), true))
            ->request('activities');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), ActivityModel::class);
        }
        return false;
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Activities/get_activities
     * @param SearchModel $searchModel
     * @return ActivityModel[]
     */
    public function search(SearchModel $searchModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($this->serializer->normalize($searchModel))
            ->request('activities');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), ActivityModel::class . '[]');
        }
        return [];
    }
}