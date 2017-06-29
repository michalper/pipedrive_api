<?php

namespace PipedriveClient\Model\Nested;

/**
 * Class Phone
 * @package PipedriveClient\Model\Nested
 */
class Phone
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
     * @return Phone
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
     * @return Phone
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
     * @return Phone
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
        return $this;
    }
}