<?php

namespace PipedriveClient\Service;

use PipedriveClient\Model\Request\PersonRequest;
use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\Response\PersonResponse;
use PipedriveClient\Model\SearchModel;

/**
 * Class PersonService
 * @package PipedriveClient\Service
 */
class PersonService implements InterfaceService
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
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Persons/post_persons
     * @param PersonRequest $personRequest
     * @return PersonResponse|false
     */
    public function add(PersonRequest $personRequest)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($personRequest))
            ->setDynamicData(json_decode(json_encode($personRequest), true))
            ->request('persons');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), PersonResponse::class);
        }
        return false;
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Persons/put_persons_id
     * @param integer $idPerson
     * @param PersonRequest $personRequest
     * @return bool|PersonResponse
     * @throws \Exception
     */
    public function update($idPerson, PersonRequest $personRequest)
    {
        if (!$idPerson) {
            throw new \Exception('Person ID missing.');
        }

        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_PUT)
            ->setPostData($this->serializer->normalize($personRequest))
            ->setDynamicData(json_decode(json_encode($personRequest), true))
            ->request('persons/' . $idPerson);

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), PersonResponse::class);
        }
        return false;
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Persons/delete_persons_id
     * @param integer $idPerson
     * @return bool
     * @throws \Exception
     */
    public function delete($idPerson)
    {
        if (!$idPerson) {
            throw new \Exception('Contact ID missing.');
        }

        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_DELETE)
            ->request('persons/' . $idPerson);

        if ($ret->isOk()) {
            return true;
        }
        return false;
    }

    /**
     * @param SearchModel $searchModel
     * @return PersonResponse[]
     */
    public function search(SearchModel $searchModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($this->serializer->normalize($searchModel))
            ->request('persons');

        if ($persons = $ret->getData()) {
            $ret = [];
            foreach ($persons as $key => $person) {
                $test = new PersonResponse();
                foreach ($person as $k => $v) {
                    $test->addProp($k, $v);
                }
                $ret[$key] = $test;
            }
            return $ret;
        }
        return [];
    }
}