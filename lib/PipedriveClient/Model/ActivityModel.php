<?php

namespace PipedriveClient\Model;

/**
 * Class ActivityModel
 * @package PipedriveClient\Model
 */
class ActivityModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $companyId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var bool
     */
    private $done;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $referenceType;

    /**
     * @var integer
     */
    private $referenceId;

    /**
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var string
     */
    private $dueTime;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @var string
     */
    private $markedAsDoneTime;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var integer
     */
    private $dealId;

    /**
     * @var integer
     */
    private $orgId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var boolean
     */
    private $activeFlag;

    /**
     * @var \DateTime
     */
    private $updateTime;

    /**
     * @var string
     */
    private $gcalEventId;

    /**
     * @var string
     */
    private $googleCalendarId;

    /**
     * @var string
     */
    private $googleCalendarEvent;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $personName;

    /**
     * @var string
     */
    private $orgName;

    /**
     * @var string
     */
    private $dealTitle;

    /**
     * @var integer
     */
    private $assignedToUserId;

    /**
     * @var integer
     */
    private $createdByUserId;

    /**
     * @var string
     */
    private $ownerName;

    /**
     * @var string
     */
    private $personDropboxBcc;

    /**
     * @var string
     */
    private $dealDropboxBcc;

    /**
     * @var boolean
     */
    private $noGcal;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ActivityModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return ActivityModel
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * @return ActivityModel
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDone()
    {
        return $this->done;
    }

    /**
     * @param bool $done
     * @return ActivityModel
     */
    public function setDone($done)
    {
        $this->done = $done;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ActivityModel
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * @param string $referenceType
     * @return ActivityModel
     */
    public function setReferenceType($referenceType)
    {
        $this->referenceType = $referenceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param int $referenceId
     * @return ActivityModel
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTime $dueDate
     * @return ActivityModel
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueTime()
    {
        return $this->dueTime;
    }

    /**
     * @param string $dueTime
     * @return ActivityModel
     */
    public function setDueTime($dueTime)
    {
        $this->dueTime = $dueTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return ActivityModel
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
     * @return ActivityModel
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarkedAsDoneTime()
    {
        return $this->markedAsDoneTime;
    }

    /**
     * @param string $markedAsDoneTime
     * @return ActivityModel
     */
    public function setMarkedAsDoneTime($markedAsDoneTime)
    {
        $this->markedAsDoneTime = $markedAsDoneTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return ActivityModel
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
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
     * @return ActivityModel
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
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
     * @return ActivityModel
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
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
     * @return ActivityModel
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
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
     * @return ActivityModel
     */
    public function setActiveFlag($activeFlag)
    {
        $this->activeFlag = $activeFlag;
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
     * @return ActivityModel
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getGcalEventId()
    {
        return $this->gcalEventId;
    }

    /**
     * @param string $gcalEventId
     * @return ActivityModel
     */
    public function setGcalEventId($gcalEventId)
    {
        $this->gcalEventId = $gcalEventId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleCalendarId()
    {
        return $this->googleCalendarId;
    }

    /**
     * @param string $googleCalendarId
     * @return ActivityModel
     */
    public function setGoogleCalendarId($googleCalendarId)
    {
        $this->googleCalendarId = $googleCalendarId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleCalendarEvent()
    {
        return $this->googleCalendarEvent;
    }

    /**
     * @param string $googleCalendarEvent
     * @return ActivityModel
     */
    public function setGoogleCalendarEvent($googleCalendarEvent)
    {
        $this->googleCalendarEvent = $googleCalendarEvent;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return ActivityModel
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * @param string $personName
     * @return ActivityModel
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param string $orgName
     * @return ActivityModel
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDealTitle()
    {
        return $this->dealTitle;
    }

    /**
     * @param string $dealTitle
     * @return ActivityModel
     */
    public function setDealTitle($dealTitle)
    {
        $this->dealTitle = $dealTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssignedToUserId()
    {
        return $this->assignedToUserId;
    }

    /**
     * @param int $assignedToUserId
     * @return ActivityModel
     */
    public function setAssignedToUserId($assignedToUserId)
    {
        $this->assignedToUserId = $assignedToUserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedByUserId()
    {
        return $this->createdByUserId;
    }

    /**
     * @param int $createdByUserId
     * @return ActivityModel
     */
    public function setCreatedByUserId($createdByUserId)
    {
        $this->createdByUserId = $createdByUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * @param string $ownerName
     * @return ActivityModel
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonDropboxBcc()
    {
        return $this->personDropboxBcc;
    }

    /**
     * @param string $personDropboxBcc
     * @return ActivityModel
     */
    public function setPersonDropboxBcc($personDropboxBcc)
    {
        $this->personDropboxBcc = $personDropboxBcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getDealDropboxBcc()
    {
        return $this->dealDropboxBcc;
    }

    /**
     * @param string $dealDropboxBcc
     * @return ActivityModel
     */
    public function setDealDropboxBcc($dealDropboxBcc)
    {
        $this->dealDropboxBcc = $dealDropboxBcc;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNoGcal()
    {
        return $this->noGcal;
    }

    /**
     * @param bool $noGcal
     * @return ActivityModel
     */
    public function setNoGcal($noGcal)
    {
        $this->noGcal = $noGcal;
        return $this;
    }
}