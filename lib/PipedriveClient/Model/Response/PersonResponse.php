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
    private $company_id;

    /**
     * @var @TODO
     */
    private $owner_id;

    /**
     * @var integer
     */
    private $org_id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $first_name;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var integer
     */
    private $open_deals_count;

    /**
     * @var integer
     */
    private $related_open_deals_count;

    /**
     * @var integer
     */
    private $closed_deals_count;

    /**
     * @var integer
     */
    private $related_closed_deals_count;

    /**
     * @var integer
     */
    private $participant_open_deals_count;

    /**
     * @var integer
     */
    private $participant_closed_deals_count;

    /**
     * @var integer
     */
    private $email_messages_count;

    /**
     * @var integer
     */
    private $activities_count;

    /**
     * @var integer
     */
    private $done_activities_count;

    /**
     * @var integer
     */
    private $undone_activities_count;

    /**
     * @var integer
     */
    private $reference_activities_count;

    /**
     * @var integer
     */
    private $files_count;

    /**
     * @var integer
     */
    private $notes_count;

    /**
     * @var integer
     */
    private $followers_count;

    /**
     * @var integer
     */
    private $won_deals_count;

    /**
     * @var integer
     */
    private $related_won_deals_count;

    /**
     * @var integer
     */
    private $lost_deals_count;

    /**
     * @var integer
     */
    private $related_lost_deals_count;

    /**
     * @var boolean
     */
    private $active_flag;

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
    private $first_char;

    /**
     * @var \DateTime
     */
    private $add_time;

    /**
     * @var \DateTime
     */
    private $update_time;

    /**
     * @var integer
     */
    private $visible_to;

    /**
     * @var string
     */
    private $picture_id;

    /**
     * @var \DateTime
     */
    private $next_activity_date;

    /**
     * @var string
     */
    private $next_activity_time;

    /**
     * @var string
     */
    private $next_activity_id;

    /**
     * @var string
     */
    private $last_activity_id;

    /**
     * @var \DateTime
     */
    private $last_activity_date;

    /**
     * @var string
     */
    private $last_incoming_mail_time;

    /**
     * @var string
     */
    private $last_outgoing_mail_time;

    /**
     * @var string
     */
    private $org_name;

    /**
     * @var string
     */
    private $cc_email;

    /**
     * @var string
     */
    private $owner_name;

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
        return $this->company_id;
    }

    /**
     * @param int $company_id
     * @return PersonResponse
     */
    public function setCompanyId($company_id)
    {
        $this->company_id = $company_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @param mixed $owner_id
     * @return PersonResponse
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * @param int $org_id
     * @return PersonResponse
     */
    public function setOrgId($org_id)
    {
        $this->org_id = $org_id;
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
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return PersonResponse
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return PersonResponse
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenDealscount()
    {
        return $this->open_deals_count;
    }

    /**
     * @param int $open_deals_count
     * @return PersonResponse
     */
    public function setOpenDealscount($open_deals_count)
    {
        $this->open_deals_count = $open_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedOpendealscount()
    {
        return $this->related_open_deals_count;
    }

    /**
     * @param int $related_open_deals_count
     * @return PersonResponse
     */
    public function setRelatedOpendealscount($related_open_deals_count)
    {
        $this->related_open_deals_count = $related_open_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getClosedDealscount()
    {
        return $this->closed_deals_count;
    }

    /**
     * @param int $closed_deals_count
     * @return PersonResponse
     */
    public function setClosedDealscount($closed_deals_count)
    {
        $this->closed_deals_count = $closed_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedCloseddealscount()
    {
        return $this->related_closed_deals_count;
    }

    /**
     * @param int $related_closed_deals_count
     * @return PersonResponse
     */
    public function setRelatedCloseddealscount($related_closed_deals_count)
    {
        $this->related_closed_deals_count = $related_closed_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getParticipantOpendealscount()
    {
        return $this->participant_open_deals_count;
    }

    /**
     * @param int $participant_open_deals_count
     * @return PersonResponse
     */
    public function setParticipantOpendealscount($participant_open_deals_count)
    {
        $this->participant_open_deals_count = $participant_open_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getParticipantCloseddealscount()
    {
        return $this->participant_closed_deals_count;
    }

    /**
     * @param int $participant_closed_deals_count
     * @return PersonResponse
     */
    public function setParticipantCloseddealscount($participant_closed_deals_count)
    {
        $this->participant_closed_deals_count = $participant_closed_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailMessagescount()
    {
        return $this->email_messages_count;
    }

    /**
     * @param int $email_messages_count
     * @return PersonResponse
     */
    public function setEmailMessagescount($email_messages_count)
    {
        $this->email_messages_count = $email_messages_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivitiesCount()
    {
        return $this->activities_count;
    }

    /**
     * @param int $activities_count
     * @return PersonResponse
     */
    public function setActivitiesCount($activities_count)
    {
        $this->activities_count = $activities_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoneActivitiescount()
    {
        return $this->done_activities_count;
    }

    /**
     * @param int $done_activities_count
     * @return PersonResponse
     */
    public function setDoneActivitiescount($done_activities_count)
    {
        $this->done_activities_count = $done_activities_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getUndoneActivitiescount()
    {
        return $this->undone_activities_count;
    }

    /**
     * @param int $undone_activities_count
     * @return PersonResponse
     */
    public function setUndoneActivitiescount($undone_activities_count)
    {
        $this->undone_activities_count = $undone_activities_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceActivitiescount()
    {
        return $this->reference_activities_count;
    }

    /**
     * @param int $reference_activities_count
     * @return PersonResponse
     */
    public function setReferenceActivitiescount($reference_activities_count)
    {
        $this->reference_activities_count = $reference_activities_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilesCount()
    {
        return $this->files_count;
    }

    /**
     * @param int $files_count
     * @return PersonResponse
     */
    public function setFilesCount($files_count)
    {
        $this->files_count = $files_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getNotesCount()
    {
        return $this->notes_count;
    }

    /**
     * @param int $notes_count
     * @return PersonResponse
     */
    public function setNotesCount($notes_count)
    {
        $this->notes_count = $notes_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowersCount()
    {
        return $this->followers_count;
    }

    /**
     * @param int $followers_count
     * @return PersonResponse
     */
    public function setFollowersCount($followers_count)
    {
        $this->followers_count = $followers_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getWonDealscount()
    {
        return $this->won_deals_count;
    }

    /**
     * @param int $won_deals_count
     * @return PersonResponse
     */
    public function setWonDealscount($won_deals_count)
    {
        $this->won_deals_count = $won_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedWondealscount()
    {
        return $this->related_won_deals_count;
    }

    /**
     * @param int $related_won_deals_count
     * @return PersonResponse
     */
    public function setRelatedWondealscount($related_won_deals_count)
    {
        $this->related_won_deals_count = $related_won_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getLostDealscount()
    {
        return $this->lost_deals_count;
    }

    /**
     * @param int $lost_deals_count
     * @return PersonResponse
     */
    public function setLostDealscount($lost_deals_count)
    {
        $this->lost_deals_count = $lost_deals_count;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedLostdealscount()
    {
        return $this->related_lost_deals_count;
    }

    /**
     * @param int $related_lost_deals_count
     * @return PersonResponse
     */
    public function setRelatedLostdealscount($related_lost_deals_count)
    {
        $this->related_lost_deals_count = $related_lost_deals_count;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActiveFlag()
    {
        return $this->active_flag;
    }

    /**
     * @param bool $active_flag
     * @return PersonResponse
     */
    public function setActiveFlag($active_flag)
    {
        $this->active_flag = $active_flag;
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
        return $this->first_char;
    }

    /**
     * @param string $first_char
     * @return PersonResponse
     */
    public function setFirstChar($first_char)
    {
        $this->first_char = $first_char;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * @param \DateTime $add_time
     * @return PersonResponse
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * @param \DateTime $update_time
     * @return PersonResponse
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
        return $this;
    }

    /**
     * @return int
     */
    public function getVisibleTo()
    {
        return $this->visible_to;
    }

    /**
     * @param int $visible_to
     * @return PersonResponse
     */
    public function setVisibleTo($visible_to)
    {
        $this->visible_to = $visible_to;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureId()
    {
        return $this->picture_id;
    }

    /**
     * @param string $picture_id
     * @return PersonResponse
     */
    public function setPictureId($picture_id)
    {
        $this->picture_id = $picture_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextActivityDate()
    {
        return $this->next_activity_date;
    }

    /**
     * @param \DateTime $nextActivityDate
     * @return PersonResponse
     */
    public function setNextActivityDate($nextActivityDate)
    {
        $this->next_activity_date = $nextActivityDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivitytime()
    {
        return $this->next_activity_time;
    }

    /**
     * @param string $next_activity_time
     * @return PersonResponse
     */
    public function setNextActivitytime($next_activity_time)
    {
        $this->next_activity_time = $next_activity_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityid()
    {
        return $this->next_activity_id;
    }

    /**
     * @param string $next_activity_id
     * @return PersonResponse
     */
    public function setNextActivityid($next_activity_id)
    {
        $this->next_activity_id = $next_activity_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastActivityid()
    {
        return $this->last_activity_id;
    }

    /**
     * @param string $last_activity_id
     * @return PersonResponse
     */
    public function setLastActivityid($last_activity_id)
    {
        $this->last_activity_id = $last_activity_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivitydate()
    {
        return $this->last_activity_date;
    }

    /**
     * @param \DateTime $last_activity_date
     * @return PersonResponse
     */
    public function setLastActivitydate($last_activity_date)
    {
        $this->last_activity_date = $last_activity_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastIncomingmailtime()
    {
        return $this->last_incoming_mail_time;
    }

    /**
     * @param string $last_incoming_mail_time
     * @return PersonResponse
     */
    public function setLastIncomingmailtime($last_incoming_mail_time)
    {
        $this->last_incoming_mail_time = $last_incoming_mail_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastOutgoingmailtime()
    {
        return $this->last_outgoing_mail_time;
    }

    /**
     * @param string $last_outgoing_mail_time
     * @return PersonResponse
     */
    public function setLastOutgoingmailtime($last_outgoing_mail_time)
    {
        $this->last_outgoing_mail_time = $last_outgoing_mail_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgName()
    {
        return $this->org_name;
    }

    /**
     * @param string $org_name
     * @return PersonResponse
     */
    public function setOrgName($org_name)
    {
        $this->org_name = $org_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcEmail()
    {
        return $this->cc_email;
    }

    /**
     * @param string $cc_email
     * @return PersonResponse
     */
    public function setCcEmail($cc_email)
    {
        $this->cc_email = $cc_email;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }

    /**
     * @param string $ownerName
     * @return PersonResponse
     */
    public function setOwnerName($ownerName)
    {
        $this->owner_name = $ownerName;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return PersonResponse
     */
    public function addProp($key, $value)
    {
        $this->$key = $value;
        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getProp($key)
    {
        if (isset($this->$key)) {
            return $this->$key;
        }
        return false;
    }
}