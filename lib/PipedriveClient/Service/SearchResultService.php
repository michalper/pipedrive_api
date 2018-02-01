<?php

namespace PipedriveClient\Service;

use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\SearchResultModel;

/**
 * Class SearchResultService
 * @package PipedriveClient\Service
 */
class SearchResultService implements InterfaceService
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
     * SearchResultService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/SearchResults/get_searchResults_field
     * @param SearchResultModel $model
     * @return array|bool
     * @throws \Exception
     */
    public function searchUsingSpecificFieldValue(SearchResultModel $model)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($this->serializer->normalize($model))
            ->request('searchResults/field');

        if ($ret->getData()) {
            return $ret->getData();
        }
        return false;
    }
}