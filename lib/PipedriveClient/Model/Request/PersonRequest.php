<?php


namespace PipedriveClient\Model\Request;

/**
 * Class PersonRequest
 * @package PipedriveClient\Model\Request
 */
class PersonRequest
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var integer
     */
    private $ownerId;

    /**
     * @var integer
     */
    private $orgId;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var integer
     */
    private $visibleTo;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PersonRequest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     * @return PersonRequest
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param int $orgId
     * @return PersonRequest
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return PersonRequest
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return PersonRequest
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return int
     */
    public function getVisibleTo()
    {
        return $this->visibleTo;
    }

    /**
     * @param int $visibleTo
     * @return PersonRequest
     */
    public function setVisibleTo($visibleTo)
    {
        $this->visibleTo = $visibleTo;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * @param \DateTime $addTime
     * @return PersonRequest
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return PersonRequest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return PersonRequest
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
}