<?php

namespace PipedriveClient\Model\Nested;

/**
 * Class Email
 * @package PipedriveClient\Model\Nested
 */
class Email
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $value;

    /**
     * @var boolean
     */
    private $primary;

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Email
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Email
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrimary()
    {
        return $this->primary;
    }

    /**
     * @param bool $primary
     * @return Email
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
        return $this;
    }



}