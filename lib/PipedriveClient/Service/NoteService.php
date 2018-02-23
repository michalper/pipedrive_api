<?php

namespace PipedriveClient\Service;

use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\NoteModel;
use PipedriveClient\Model\SearchModel;

/**
 * Class NoteService
 * @package PipedriveClient\Service
 */
class NoteService implements InterfaceService
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
     * @param SearchModel $searchModel
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Notes/get_notes
     * @return NoteModel[]
     */
    public function search(SearchModel $searchModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($this->serializer->normalize($searchModel))
            ->request('notes');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), NoteModel::class . '[]');
        }
        return [];
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Notes/post_notes
     * @param NoteModel $noteModel
     * @return bool|mixed
     * @throws \Exception
     * @throws \Itav\Component\Serializer\SerializerException
     */
    public function add(NoteModel $noteModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($noteModel))
            ->setDynamicData(json_decode(json_encode($noteModel), true))
            ->request('notes');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), NoteModel::class);
        }
        return false;
    }
}