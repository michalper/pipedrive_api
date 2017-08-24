<?php

namespace PipedriveClient\Service;

use PipedriveClient\Model\DealModel;
use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\SearchModel;

/**
 * Class DealService
 * @package PipedriveClient\Service
 */
class DealService implements InterfaceService
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
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Deals/get_deals
     * @return DealModel[]
     */
    public function search(SearchModel $searchModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($this->serializer->normalize($searchModel))
            ->request('deals');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), DealModel::class . '[]');
        }
        return [];
    }

    /**
     * @param DealModel $dealModel
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Deals/post_deals
     * @return boolean|DealModel
     */
    public function add(DealModel $dealModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($dealModel))
            ->setDynamicData(json_decode(json_encode($dealModel), true))
            ->request('deals');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), DealModel::class);
        }
        return false;
    }

    /**
     * @param integer $idDeal
     * @param integer $idPerson
     * @return bool|mixed
     */
    public function addParticipantToDeal($idDeal, $idPerson)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData(['id' => $idDeal, 'person_id' => $idPerson])
            ->request('deals/' . $idDeal . '/participants');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), DealModel::class);
        }
        return false;
    }

    /**
     * @param string $term
     * @param integer|boolean $idPerson
     * @param integer|boolean $idOrg
     * @return DealModel[]
     */
    public function findDealsByName($term, $idPerson = false, $idOrg = false)
    {
        $params = [];
        $params['term'] = $term;

        if ($idPerson)
            $params['person_id'] = $idPerson;

        if ($idOrg)
            $params['org_id'] = $idOrg;

        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($params)
            ->request('deals/find');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), DealModel::class . '[]');
        }
        return [];
    }
}