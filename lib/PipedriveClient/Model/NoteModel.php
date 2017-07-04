<?php

namespace PipedriveClient\Model;

/**
 * Class NoteModel
 * @package PipedriveClient\Model
 */
class NoteModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $dealId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var string
     */
    private $orgId;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @var \DateTime
     */
    private $updateTime;

    /**
     * @var boolean
     */
    private $activeFlag;

    /**
     * @var boolean
     */
    private $pinnedToDealFlag;

    /**
     * @var boolean
     */
    private $pinnedToPersonFlag;

    /**
     * @var boolean
     */
    private $pinnedToOrganizationFlag;

    /**
     * @var integer
     */
    private $lastUpdateUserId;

    /**
     * @var array
     */
    private $organization;

    /**
     * @var array
     */
    private $person;

    /**
     * @var array
     */
    private $deal;

    /**
     * @var array
     */
    private $user;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return NoteModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return NoteModel
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
        return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return NoteModel
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @param int $personId
     * @return NoteModel
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param string $orgId
     * @return NoteModel
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return NoteModel
     */
    public function setContent($content)
    {
        $this->content = $content;
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
     * @return NoteModel
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param \DateTime $updateTime
     * @return NoteModel
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActiveFlag()
    {
        return $this->activeFlag;
    }

    /**
     * @param bool $activeFlag
     * @return NoteModel
     */
    public function setActiveFlag($activeFlag)
    {
        $this->activeFlag = $activeFlag;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPinnedToDealFlag()
    {
        return $this->pinnedToDealFlag;
    }

    /**
     * @param bool $pinnedToDealFlag
     * @return NoteModel
     */
    public function setPinnedToDealFlag($pinnedToDealFlag)
    {
        $this->pinnedToDealFlag = $pinnedToDealFlag;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPinnedToPersonFlag()
    {
        return $this->pinnedToPersonFlag;
    }

    /**
     * @param bool $pinnedToPersonFlag
     * @return NoteModel
     */
    public function setPinnedToPersonFlag($pinnedToPersonFlag)
    {
        $this->pinnedToPersonFlag = $pinnedToPersonFlag;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPinnedToOrganizationFlag()
    {
        return $this->pinnedToOrganizationFlag;
    }

    /**
     * @param bool $pinnedToOrganizationFlag
     * @return NoteModel
     */
    public function setPinnedToOrganizationFlag($pinnedToOrganizationFlag)
    {
        $this->pinnedToOrganizationFlag = $pinnedToOrganizationFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastUpdateUserId()
    {
        return $this->lastUpdateUserId;
    }

    /**
     * @param int $lastUpdateUserId
     * @return NoteModel
     */
    public function setLastUpdateUserId($lastUpdateUserId)
    {
        $this->lastUpdateUserId = $lastUpdateUserId;
        return $this;
    }

    /**
     * @return array
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param array $organization
     * @return NoteModel
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return array
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param array $person
     * @return NoteModel
     */
    public function setPerson($person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * @return array
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * @param array $deal
     * @return NoteModel
     */
    public function setDeal($deal)
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * @return array
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param array $user
     * @return NoteModel
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}