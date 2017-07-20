<?php

namespace PipedriveClient\Model;

/**
 * Class DealModel
 * @package PipedriveClient\Model
 */
class DealModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $creatorUserId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $personId;

    /**
     * @var string
     */
    private $stageId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @var \DateTime
     */
    private $updateTime;

    /**
     * @var string
     */
    private $stageChangeTime;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $nextActivityDate;

    /**
     * @var string
     */
    private $nextActivityTime;

    /**
     * @var string
     */
    private $nextActivityId;

    /**
     * @var string
     */
    private $lastActivityId;

    /**
     * @var \DateTime
     */
    private $lastActivityDate;

    /**
     * @var string
     */
    private $lostReason;

    /**
     * @var string
     */
    private $visibleTo;

    /**
     * @var string
     */
    private $closeTime;

    /**
     * @var string
     */
    private $pipelineId;

    /**
     * @var \DateTime
     */
    private $wonTime;

    /**
     * @var \DateTime
     */
    private $firstWonTime;

    /**
     * @var string
     */
    private $productsCount;

    /**
     * @var string
     */
    private $filesCount;

    /**
     * @var string
     */
    private $notesCount;

    /**
     * @var string
     */
    private $followersCount;

    /**
     * @var string
     */
    private $emailMessagesCount;

    /**
     * @var string
     */
    private $activitiesCount;

    /**
     * @var string
     */
    private $doneActivitiesCount;

    /**
     * @var string
     */
    private $undoneActivitiesCount;

    /**
     * @var string
     */
    private $referenceActivitiesCount;

    /**
     * @var string
     */
    private $participantsCount;

    /**
     * @var \DateTime
     */
    private $expectedCloseDate;

    /**
     * @var string
     */
    private $lastIncomingMailTime;

    /**
     * @var string
     */
    private $lastOutgoingMailTime;

    /**
     * @var string
     */
    private $stageOrderNr;

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
    private $nextActivitySubject;

    /**
     * @var string
     */
    private $nextActivityType;

    /**
     * @var string
     */
    private $nextActivityDuration;

    /**
     * @var string
     */
    private $nextActivityNote;

    /**
     * @var string
     */
    private $formattedValue;

    /**
     * @var string
     */
    private $rottenTime;

    /**
     * @var string
     */
    private $weightedValue;

    /**
     * @var string
     */
    private $formattedWeightedValue;

    /**
     * @var string
     */
    private $ownerName;

    /**
     * @var string
     */
    private $ccEmail;

    /**
     * @var boolean
     */
    private $orgHidden;

    /**
     * @var bool
     */
    private $personHidden;

    /**
     * @var string
     */
    private $lastActivity;

    /**
     * @var string
     */
    private $nextActivity;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return DealModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatorUserId()
    {
        return $this->creatorUserId;
    }

    /**
     * @param string $creatorUserId
     * @return DealModel
     */
    public function setCreatorUserId($creatorUserId)
    {
        $this->creatorUserId = $creatorUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return DealModel
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @param string $personId
     * @return DealModel
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageId()
    {
        return $this->stageId;
    }

    /**
     * @param string $stageId
     * @return DealModel
     */
    public function setStageId($stageId)
    {
        $this->stageId = $stageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return DealModel
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return DealModel
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return DealModel
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
     * @return DealModel
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
     * @return DealModel
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageChangeTime()
    {
        return $this->stageChangeTime;
    }

    /**
     * @param string $stageChangeTime
     * @return DealModel
     */
    public function setStageChangeTime($stageChangeTime)
    {
        $this->stageChangeTime = $stageChangeTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return DealModel
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return DealModel
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
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
     * @return DealModel
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextActivityDate()
    {
        return $this->nextActivityDate;
    }

    /**
     * @param \DateTime $nextActivityDate
     * @return DealModel
     */
    public function setNextActivityDate($nextActivityDate)
    {
        $this->nextActivityDate = $nextActivityDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityTime()
    {
        return $this->nextActivityTime;
    }

    /**
     * @param string $nextActivityTime
     * @return DealModel
     */
    public function setNextActivityTime($nextActivityTime)
    {
        $this->nextActivityTime = $nextActivityTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityId()
    {
        return $this->nextActivityId;
    }

    /**
     * @param string $nextActivityId
     * @return DealModel
     */
    public function setNextActivityId($nextActivityId)
    {
        $this->nextActivityId = $nextActivityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastActivityId()
    {
        return $this->lastActivityId;
    }

    /**
     * @param string $lastActivityId
     * @return DealModel
     */
    public function setLastActivityId($lastActivityId)
    {
        $this->lastActivityId = $lastActivityId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    /**
     * @param \DateTime $lastActivityDate
     * @return DealModel
     */
    public function setLastActivityDate($lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLostReason()
    {
        return $this->lostReason;
    }

    /**
     * @param string $lostReason
     * @return DealModel
     */
    public function setLostReason($lostReason)
    {
        $this->lostReason = $lostReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisibleTo()
    {
        return $this->visibleTo;
    }

    /**
     * @param string $visibleTo
     * @return DealModel
     */
    public function setVisibleTo($visibleTo)
    {
        $this->visibleTo = $visibleTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }

    /**
     * @param string $closeTime
     * @return DealModel
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPipelineId()
    {
        return $this->pipelineId;
    }

    /**
     * @param string $pipelineId
     * @return DealModel
     */
    public function setPipelineId($pipelineId)
    {
        $this->pipelineId = $pipelineId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWonTime()
    {
        return $this->wonTime;
    }

    /**
     * @param \DateTime $wonTime
     * @return DealModel
     */
    public function setWonTime($wonTime)
    {
        $this->wonTime = $wonTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstWonTime()
    {
        return $this->firstWonTime;
    }

    /**
     * @param \DateTime $firstWonTime
     * @return DealModel
     */
    public function setFirstWonTime($firstWonTime)
    {
        $this->firstWonTime = $firstWonTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductsCount()
    {
        return $this->productsCount;
    }

    /**
     * @param string $productsCount
     * @return DealModel
     */
    public function setProductsCount($productsCount)
    {
        $this->productsCount = $productsCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilesCount()
    {
        return $this->filesCount;
    }

    /**
     * @param string $filesCount
     * @return DealModel
     */
    public function setFilesCount($filesCount)
    {
        $this->filesCount = $filesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotesCount()
    {
        return $this->notesCount;
    }

    /**
     * @param string $notesCount
     * @return DealModel
     */
    public function setNotesCount($notesCount)
    {
        $this->notesCount = $notesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowersCount()
    {
        return $this->followersCount;
    }

    /**
     * @param string $followersCount
     * @return DealModel
     */
    public function setFollowersCount($followersCount)
    {
        $this->followersCount = $followersCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailMessagesCount()
    {
        return $this->emailMessagesCount;
    }

    /**
     * @param string $emailMessagesCount
     * @return DealModel
     */
    public function setEmailMessagesCount($emailMessagesCount)
    {
        $this->emailMessagesCount = $emailMessagesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivitiesCount()
    {
        return $this->activitiesCount;
    }

    /**
     * @param string $activitiesCount
     * @return DealModel
     */
    public function setActivitiesCount($activitiesCount)
    {
        $this->activitiesCount = $activitiesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoneActivitiesCount()
    {
        return $this->doneActivitiesCount;
    }

    /**
     * @param string $doneActivitiesCount
     * @return DealModel
     */
    public function setDoneActivitiesCount($doneActivitiesCount)
    {
        $this->doneActivitiesCount = $doneActivitiesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getUndoneActivitiesCount()
    {
        return $this->undoneActivitiesCount;
    }

    /**
     * @param string $undoneActivitiesCount
     * @return DealModel
     */
    public function setUndoneActivitiesCount($undoneActivitiesCount)
    {
        $this->undoneActivitiesCount = $undoneActivitiesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceActivitiesCount()
    {
        return $this->referenceActivitiesCount;
    }

    /**
     * @param string $referenceActivitiesCount
     * @return DealModel
     */
    public function setReferenceActivitiesCount($referenceActivitiesCount)
    {
        $this->referenceActivitiesCount = $referenceActivitiesCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getParticipantsCount()
    {
        return $this->participantsCount;
    }

    /**
     * @param string $participantsCount
     * @return DealModel
     */
    public function setParticipantsCount($participantsCount)
    {
        $this->participantsCount = $participantsCount;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedCloseDate()
    {
        return $this->expectedCloseDate;
    }

    /**
     * @param \DateTime $expectedCloseDate
     * @return DealModel
     */
    public function setExpectedCloseDate($expectedCloseDate)
    {
        $this->expectedCloseDate = $expectedCloseDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastIncomingMailTime()
    {
        return $this->lastIncomingMailTime;
    }

    /**
     * @param string $lastIncomingMailTime
     * @return DealModel
     */
    public function setLastIncomingMailTime($lastIncomingMailTime)
    {
        $this->lastIncomingMailTime = $lastIncomingMailTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastOutgoingMailTime()
    {
        return $this->lastOutgoingMailTime;
    }

    /**
     * @param string $lastOutgoingMailTime
     * @return DealModel
     */
    public function setLastOutgoingMailTime($lastOutgoingMailTime)
    {
        $this->lastOutgoingMailTime = $lastOutgoingMailTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageOrderNr()
    {
        return $this->stageOrderNr;
    }

    /**
     * @param string $stageOrderNr
     * @return DealModel
     */
    public function setStageOrderNr($stageOrderNr)
    {
        $this->stageOrderNr = $stageOrderNr;
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
     * @return DealModel
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
     * @return DealModel
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivitySubject()
    {
        return $this->nextActivitySubject;
    }

    /**
     * @param string $nextActivitySubject
     * @return DealModel
     */
    public function setNextActivitySubject($nextActivitySubject)
    {
        $this->nextActivitySubject = $nextActivitySubject;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityType()
    {
        return $this->nextActivityType;
    }

    /**
     * @param string $nextActivityType
     * @return DealModel
     */
    public function setNextActivityType($nextActivityType)
    {
        $this->nextActivityType = $nextActivityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityDuration()
    {
        return $this->nextActivityDuration;
    }

    /**
     * @param string $nextActivityDuration
     * @return DealModel
     */
    public function setNextActivityDuration($nextActivityDuration)
    {
        $this->nextActivityDuration = $nextActivityDuration;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityNote()
    {
        return $this->nextActivityNote;
    }

    /**
     * @param string $nextActivityNote
     * @return DealModel
     */
    public function setNextActivityNote($nextActivityNote)
    {
        $this->nextActivityNote = $nextActivityNote;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormattedValue()
    {
        return $this->formattedValue;
    }

    /**
     * @param string $formattedValue
     * @return DealModel
     */
    public function setFormattedValue($formattedValue)
    {
        $this->formattedValue = $formattedValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getRottenTime()
    {
        return $this->rottenTime;
    }

    /**
     * @param string $rottenTime
     * @return DealModel
     */
    public function setRottenTime($rottenTime)
    {
        $this->rottenTime = $rottenTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightedValue()
    {
        return $this->weightedValue;
    }

    /**
     * @param string $weightedValue
     * @return DealModel
     */
    public function setWeightedValue($weightedValue)
    {
        $this->weightedValue = $weightedValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormattedWeightedValue()
    {
        return $this->formattedWeightedValue;
    }

    /**
     * @param string $formattedWeightedValue
     * @return DealModel
     */
    public function setFormattedWeightedValue($formattedWeightedValue)
    {
        $this->formattedWeightedValue = $formattedWeightedValue;
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
     * @return DealModel
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcEmail()
    {
        return $this->ccEmail;
    }

    /**
     * @param string $ccEmail
     * @return DealModel
     */
    public function setCcEmail($ccEmail)
    {
        $this->ccEmail = $ccEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOrgHidden()
    {
        return $this->orgHidden;
    }

    /**
     * @param bool $orgHidden
     * @return DealModel
     */
    public function setOrgHidden($orgHidden)
    {
        $this->orgHidden = $orgHidden;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPersonHidden()
    {
        return $this->personHidden;
    }

    /**
     * @param bool $personHidden
     * @return DealModel
     */
    public function setPersonHidden($personHidden)
    {
        $this->personHidden = $personHidden;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * @param string $lastActivity
     * @return DealModel
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivity()
    {
        return $this->nextActivity;
    }

    /**
     * @param string $nextActivity
     * @return DealModel
     */
    public function setNextActivity($nextActivity)
    {
        $this->nextActivity = $nextActivity;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return DealModel
     */
    public function addProp($key, $value)
    {
        $this->{$key} = $value;
        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getProp($key)
    {
        if (isset($this->{$key})) {
            return $this->{$key};
        }
        return false;
    }
}