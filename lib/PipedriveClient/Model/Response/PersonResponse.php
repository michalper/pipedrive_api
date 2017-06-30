<?php


namespace PipedriveClient\Model\Response;

use PipedriveClient\Model\Nested\Email;
use PipedriveClient\Model\Nested\Phone;

/**
 * Class PersonRequest
 * @package PipedriveClient\Model\Request
 */
class PersonResponse
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
     * @var @TODO
     */
    private $ownerId;

    /**
     * @var integer
     */
    private $orgId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var integer
     */
    private $openDealsCount;

    /**
     * @var integer
     */
    private $relatedOpenDealsCount;

    /**
     * @var integer
     */
    private $closedDealsCount;

    /**
     * @var integer
     */
    private $relatedClosedDealsCount;

    /**
     * @var integer
     */
    private $participantOpenDealsCount;

    /**
     * @var integer
     */
    private $participantClosedDealsCount;

    /**
     * @var integer
     */
    private $emailMessagesCount;

    /**
     * @var integer
     */
    private $activitiesCount;

    /**
     * @var integer
     */
    private $doneActivitiesCount;

    /**
     * @var integer
     */
    private $undoneActivitiesCount;

    /**
     * @var integer
     */
    private $referenceActivitiesCount;

    /**
     * @var integer
     */
    private $filesCount;

    /**
     * @var integer
     */
    private $notesCount;

    /**
     * @var integer
     */
    private $followersCount;

    /**
     * @var integer
     */
    private $wonDealsCount;

    /**
     * @var integer
     */
    private $relatedWonDealsCount;

    /**
     * @var integer
     */
    private $lostDealsCount;

    /**
     * @var integer
     */
    private $relatedLostDealsCount;

    /**
     * @var boolean
     */
    private $activeFlag;

    /**
     * @var \PipedriveClient\Model\Nested\Email[]
     */
    private $email;

    /**
     * @var \PipedriveClient\Model\Nested\Phone[]
     */
    private $phone;

    /**
     * @var string
     */
    private $firstChar;

    /**
     * @var \DateTime
     */
    private $addTime;

    /**
     * @var \DateTime
     */
    private $updateTime;

    /**
     * @var integer
     */
    private $visibleTo;

    /**
     * @var string
     */
    private $pictureId;

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
    private $lastIncomingMailTime;

    /**
     * @var string
     */
    private $lastOutgoingMailTime;

    /**
     * @var string
     */
    private $orgName;

    /**
     * @var string
     */
    private $ccEmail;

    /**
     * @var string
     */
    private $ownerName;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PersonResponse
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
     * @return PersonResponse
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     * @return PersonResponse
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
     * @return PersonResponse
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PersonResponse
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return PersonResponse
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return PersonResponse
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenDealsCount()
    {
        return $this->openDealsCount;
    }

    /**
     * @param int $openDealsCount
     * @return PersonResponse
     */
    public function setOpenDealsCount($openDealsCount)
    {
        $this->openDealsCount = $openDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedOpenDealsCount()
    {
        return $this->relatedOpenDealsCount;
    }

    /**
     * @param int $relatedOpenDealsCount
     * @return PersonResponse
     */
    public function setRelatedOpenDealsCount($relatedOpenDealsCount)
    {
        $this->relatedOpenDealsCount = $relatedOpenDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getClosedDealsCount()
    {
        return $this->closedDealsCount;
    }

    /**
     * @param int $closedDealsCount
     * @return PersonResponse
     */
    public function setClosedDealsCount($closedDealsCount)
    {
        $this->closedDealsCount = $closedDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedClosedDealsCount()
    {
        return $this->relatedClosedDealsCount;
    }

    /**
     * @param int $relatedClosedDealsCount
     * @return PersonResponse
     */
    public function setRelatedClosedDealsCount($relatedClosedDealsCount)
    {
        $this->relatedClosedDealsCount = $relatedClosedDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getParticipantOpenDealsCount()
    {
        return $this->participantOpenDealsCount;
    }

    /**
     * @param int $participantOpenDealsCount
     * @return PersonResponse
     */
    public function setParticipantOpenDealsCount($participantOpenDealsCount)
    {
        $this->participantOpenDealsCount = $participantOpenDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getParticipantClosedDealsCount()
    {
        return $this->participantClosedDealsCount;
    }

    /**
     * @param int $participantClosedDealsCount
     * @return PersonResponse
     */
    public function setParticipantClosedDealsCount($participantClosedDealsCount)
    {
        $this->participantClosedDealsCount = $participantClosedDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailMessagesCount()
    {
        return $this->emailMessagesCount;
    }

    /**
     * @param int $emailMessagesCount
     * @return PersonResponse
     */
    public function setEmailMessagesCount($emailMessagesCount)
    {
        $this->emailMessagesCount = $emailMessagesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivitiesCount()
    {
        return $this->activitiesCount;
    }

    /**
     * @param int $activitiesCount
     * @return PersonResponse
     */
    public function setActivitiesCount($activitiesCount)
    {
        $this->activitiesCount = $activitiesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoneActivitiesCount()
    {
        return $this->doneActivitiesCount;
    }

    /**
     * @param int $doneActivitiesCount
     * @return PersonResponse
     */
    public function setDoneActivitiesCount($doneActivitiesCount)
    {
        $this->doneActivitiesCount = $doneActivitiesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getUndoneActivitiesCount()
    {
        return $this->undoneActivitiesCount;
    }

    /**
     * @param int $undoneActivitiesCount
     * @return PersonResponse
     */
    public function setUndoneActivitiesCount($undoneActivitiesCount)
    {
        $this->undoneActivitiesCount = $undoneActivitiesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceActivitiesCount()
    {
        return $this->referenceActivitiesCount;
    }

    /**
     * @param int $referenceActivitiesCount
     * @return PersonResponse
     */
    public function setReferenceActivitiesCount($referenceActivitiesCount)
    {
        $this->referenceActivitiesCount = $referenceActivitiesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilesCount()
    {
        return $this->filesCount;
    }

    /**
     * @param int $filesCount
     * @return PersonResponse
     */
    public function setFilesCount($filesCount)
    {
        $this->filesCount = $filesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getNotesCount()
    {
        return $this->notesCount;
    }

    /**
     * @param int $notesCount
     * @return PersonResponse
     */
    public function setNotesCount($notesCount)
    {
        $this->notesCount = $notesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowersCount()
    {
        return $this->followersCount;
    }

    /**
     * @param int $followersCount
     * @return PersonResponse
     */
    public function setFollowersCount($followersCount)
    {
        $this->followersCount = $followersCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getWonDealsCount()
    {
        return $this->wonDealsCount;
    }

    /**
     * @param int $wonDealsCount
     * @return PersonResponse
     */
    public function setWonDealsCount($wonDealsCount)
    {
        $this->wonDealsCount = $wonDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedWonDealsCount()
    {
        return $this->relatedWonDealsCount;
    }

    /**
     * @param int $relatedWonDealsCount
     * @return PersonResponse
     */
    public function setRelatedWonDealsCount($relatedWonDealsCount)
    {
        $this->relatedWonDealsCount = $relatedWonDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLostDealsCount()
    {
        return $this->lostDealsCount;
    }

    /**
     * @param int $lostDealsCount
     * @return PersonResponse
     */
    public function setLostDealsCount($lostDealsCount)
    {
        $this->lostDealsCount = $lostDealsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedLostDealsCount()
    {
        return $this->relatedLostDealsCount;
    }

    /**
     * @param int $relatedLostDealsCount
     * @return PersonResponse
     */
    public function setRelatedLostDealsCount($relatedLostDealsCount)
    {
        $this->relatedLostDealsCount = $relatedLostDealsCount;
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
     * @return PersonResponse
     */
    public function setActiveFlag($activeFlag)
    {
        $this->activeFlag = $activeFlag;
        return $this;
    }

    /**
     * @return Email[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email[] $email
     * @return PersonResponse
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return Phone[]
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param Phone[] $phone
     * @return PersonResponse
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstChar()
    {
        return $this->firstChar;
    }

    /**
     * @param string $firstChar
     * @return PersonResponse
     */
    public function setFirstChar($firstChar)
    {
        $this->firstChar = $firstChar;
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
     * @return PersonResponse
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
     * @return PersonResponse
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
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
     * @return PersonResponse
     */
    public function setVisibleTo($visibleTo)
    {
        $this->visibleTo = $visibleTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureId()
    {
        return $this->pictureId;
    }

    /**
     * @param string $pictureId
     * @return PersonResponse
     */
    public function setPictureId($pictureId)
    {
        $this->pictureId = $pictureId;
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
     * @return PersonResponse
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
     * @return PersonResponse
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
     * @return PersonResponse
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
     * @return PersonResponse
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
     * @return PersonResponse
     */
    public function setLastActivityDate($lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;
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
     * @return PersonResponse
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
     * @return PersonResponse
     */
    public function setLastOutgoingMailTime($lastOutgoingMailTime)
    {
        $this->lastOutgoingMailTime = $lastOutgoingMailTime;
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
     * @return PersonResponse
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
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
     * @return PersonResponse
     */
    public function setCcEmail($ccEmail)
    {
        $this->ccEmail = $ccEmail;
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
     * @return PersonResponse
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }
}