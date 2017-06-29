<?php

namespace PipedriveClient\Service;

use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\Request\WebhookRequest;
use PipedriveClient\Model\Response\WebhookResponse;

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
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Webhooks/get_webhooks
     * @return WebhookResponse[]|false
     * @throws \Exception
     */
    public function get()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('webhooks');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), WebhookResponse::class . '[]');
        }
        return false;
    }

    /**
     * @param WebhookRequest $webhook
     * @return bool|WebhookResponse
     * @throws \Exception
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Webhooks/post_webhooks
     */
    public function create(WebhookRequest $webhook)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($webhook))
            ->request('webhooks');

        if ($ret->getData()) {
            return $this->serializer->denormalize($ret->getData(), WebhookResponse::class);
        }
        return false;
    }

    /**
     * @param integer $idWebhook
     * @return bool
     * @see https://developers.pipedrive.com/docs/api/v1/#!/Webhooks/delete_webhooks_id
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