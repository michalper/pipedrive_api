<?php

namespace PipedriveClient\Service;

use PipedriveClient\Model\WebhookModel;
use Itav\Component\Serializer\Serializer;

/**
 * Class WebhookService
 * @package PipedriveClient\Service
 */
class WebhookService implements InterfaceService
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
     * ContactService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Webhooks/get_webhooks
     * @return WebhookModel[]|false
     * @throws \Exception
     */
    public function get()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('webhooks');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), WebhookModel::class . '[]');
        }
        return false;
    }

    /**
     * @param WebhookModel $webhook
     * @return bool|WebhookModel
     * @throws \Exception
     */
    public function create(WebhookModel $webhook)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($webhook))
            ->request('webhooks');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), WebhookModel::class);
        }
        return false;
    }

    /**
     * @param integer $idWebhook
     * @return bool
     */
    public function delete($idWebhook)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_DELETE)
            ->request('webhooks/' . $idWebhook);

        if ($ret->isOk()) {
            return true;
        }
        return false;
    }
}