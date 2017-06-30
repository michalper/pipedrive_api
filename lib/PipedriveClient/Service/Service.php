<?php

namespace PipedriveClient\Service;

use GuzzleHttp\Client;
use Itav\Component\Serializer\Serializer;
use PipedriveClient\Model\ResponseModel;
use Tools\Tools;

/**
 * Class Service
 * @package AdbClient\Service
 */
class Service
{
    const REQUEST_METHOD_GET = 'GET';
    const REQUEST_METHOD_POST = 'POST';
    const REQUEST_METHOD_PUT = 'PUT';
    const REQUEST_METHOD_DELETE = 'DELETE';
    const REQUEST_METHOD_PATCH = 'PATCH';

    const VERSION = 'v1';

    const URL = '.pipedrive.com/';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var array
     */
    private $postData = [];

    /**
     * @var array
     */
    private $getParams = [];

    /**
     * @var string
     */
    private $requestMethod;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * Service constructor.
     * @param $serializer
     */
    public function __construct($serializer)
    {
        $this->client = new Client();
        $this->serializer = $serializer;
    }

    /**
     * @return array
     */
    public function getPostData()
    {
        return $this->postData;
    }

    /**
     * @param array $postData
     * @return Service
     */
    public function setPostData(array $postData)
    {
        $this->postData = $postData;
        return $this;
    }

    /**
     * @return array
     */
    public function getGetParams()
    {
        return $this->getParams;
    }

    /**
     * @param array $getParams
     * @return Service
     */
    public function setGetParams($getParams)
    {
        $this->getParams = $getParams;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return Service
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return Service
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * @param string $requestMethod
     * @return Service
     */
    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * @param string|bool $url
     * @return ResponseModel
     * @throws \Exception
     */
    public function request($url = false)
    {
        $params = '';
        if ($this->getParams) {
            $params = '&' . http_build_query($this->getParams);
        }

        if (!$this->domain) {
            throw new \Exception('Domain is missing.');
        }

        if (!$this->apiKey) {
            throw new \Exception('ApiKey is missing.');
        }

        $apiKey = '?api_token=' . $this->apiKey;

        if (!$url) {
            throw new \Exception('URL is missing.');
        }


        $url = 'https://' . $this->domain . self::URL . self::VERSION . '/' . $url . $apiKey . $params;

        $request = $this->client->request(
            $this->requestMethod,
            $url,
            [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'json' => $this->postData
            ]
        );

        return $this->serializer->denormalize(json_decode($request->getBody()->getContents(), true), ResponseModel::class);
    }
}