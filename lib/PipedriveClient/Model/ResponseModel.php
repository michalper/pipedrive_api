<?php

namespace PipedriveClient\Model;

/**
 * Class ResponseModel
 * @package PipedriveClient\Model
 */
class ResponseModel
{
    const STATUS_OK = 'ok';
    const STATUS_ERROR = 'error';

    /**
     * @var array
     */
    private $data = [];

    /**
     * @var string
     */
    private $status;

    /**
     * @var array
     */
    private $errors;

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ResponseModel
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseModel
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return ResponseModel
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOk()
    {
        if ($this->status == self::STATUS_OK) {
            return true;
        }
        return false;
    }
}