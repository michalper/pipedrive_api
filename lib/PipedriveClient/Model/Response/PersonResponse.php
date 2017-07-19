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
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $company_id;

    /**
     * @var @TODO
     */
    private $owner_id;

    /**
     * @var string
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
     * @var string
     */
    private $open_deals_count;

    /**
     * @var string
     */
    private $related_open_deals_count;

    /**
     * @var string
     */
    private $closed_deals_count;

    /**
     * @var string
     */
    private $related_closed_deals_count;

    /**
     * @var string
     */
    private $participant_open_deals_count;

    /**
     * @var string
     */
    private $participant_closed_deals_count;

    /**
     * @var string
     */
    private $email_messages_count;

    /**
     * @var string
     */
    private $activities_count;

    /**
     * @var string
     */
    private $done_activities_count;

    /**
     * @var string
     */
    private $undone_activities_count;

    /**
     * @var string
     */
    private $reference_activities_count;

    /**
     * @var string
     */
    private $files_count;

    /**
     * @var string
     */
    private $notes_count;

    /**
     * @var string
     */
    private $followers_count;

    /**
     * @var string
     */
    private $won_deals_count;

    /**
     * @var string
     */
    private $related_won_deals_count;

    /**
     * @var string
     */
    private $lost_deals_count;

    /**
     * @var string
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
     * @var string
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PersonResponse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * @param string $company_id
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
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * @param string $org_id
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
     * @return string
     */
    public function getOpenDealscount()
    {
        return $this->open_deals_count;
    }

    /**
     * @param string $open_deals_count
     * @return PersonResponse
     */
    public function setOpenDealscount($open_deals_count)
    {
        $this->open_deals_count = $open_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedOpendealscount()
    {
        return $this->related_open_deals_count;
    }

    /**
     * @param string $related_open_deals_count
     * @return PersonResponse
     */
    public function setRelatedOpendealscount($related_open_deals_count)
    {
        $this->related_open_deals_count = $related_open_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getClosedDealscount()
    {
        return $this->closed_deals_count;
    }

    /**
     * @param string $closed_deals_count
     * @return PersonResponse
     */
    public function setClosedDealscount($closed_deals_count)
    {
        $this->closed_deals_count = $closed_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedCloseddealscount()
    {
        return $this->related_closed_deals_count;
    }

    /**
     * @param string $related_closed_deals_count
     * @return PersonResponse
     */
    public function setRelatedCloseddealscount($related_closed_deals_count)
    {
        $this->related_closed_deals_count = $related_closed_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getParticipantOpendealscount()
    {
        return $this->participant_open_deals_count;
    }

    /**
     * @param string $participant_open_deals_count
     * @return PersonResponse
     */
    public function setParticipantOpendealscount($participant_open_deals_count)
    {
        $this->participant_open_deals_count = $participant_open_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getParticipantCloseddealscount()
    {
        return $this->participant_closed_deals_count;
    }

    /**
     * @param string $participant_closed_deals_count
     * @return PersonResponse
     */
    public function setParticipantCloseddealscount($participant_closed_deals_count)
    {
        $this->participant_closed_deals_count = $participant_closed_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailMessagescount()
    {
        return $this->email_messages_count;
    }

    /**
     * @param string $email_messages_count
     * @return PersonResponse
     */
    public function setEmailMessagescount($email_messages_count)
    {
        $this->email_messages_count = $email_messages_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivitiesCount()
    {
        return $this->activities_count;
    }

    /**
     * @param string $activities_count
     * @return PersonResponse
     */
    public function setActivitiesCount($activities_count)
    {
        $this->activities_count = $activities_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoneActivitiescount()
    {
        return $this->done_activities_count;
    }

    /**
     * @param string $done_activities_count
     * @return PersonResponse
     */
    public function setDoneActivitiescount($done_activities_count)
    {
        $this->done_activities_count = $done_activities_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getUndoneActivitiescount()
    {
        return $this->undone_activities_count;
    }

    /**
     * @param string $undone_activities_count
     * @return PersonResponse
     */
    public function setUndoneActivitiescount($undone_activities_count)
    {
        $this->undone_activities_count = $undone_activities_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceActivitiescount()
    {
        return $this->reference_activities_count;
    }

    /**
     * @param string $reference_activities_count
     * @return PersonResponse
     */
    public function setReferenceActivitiescount($reference_activities_count)
    {
        $this->reference_activities_count = $reference_activities_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilesCount()
    {
        return $this->files_count;
    }

    /**
     * @param string $files_count
     * @return PersonResponse
     */
    public function setFilesCount($files_count)
    {
        $this->files_count = $files_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotesCount()
    {
        return $this->notes_count;
    }

    /**
     * @param string $notes_count
     * @return PersonResponse
     */
    public function setNotesCount($notes_count)
    {
        $this->notes_count = $notes_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowersCount()
    {
        return $this->followers_count;
    }

    /**
     * @param string $followers_count
     * @return PersonResponse
     */
    public function setFollowersCount($followers_count)
    {
        $this->followers_count = $followers_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getWonDealscount()
    {
        return $this->won_deals_count;
    }

    /**
     * @param string $won_deals_count
     * @return PersonResponse
     */
    public function setWonDealscount($won_deals_count)
    {
        $this->won_deals_count = $won_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedWondealscount()
    {
        return $this->related_won_deals_count;
    }

    /**
     * @param string $related_won_deals_count
     * @return PersonResponse
     */
    public function setRelatedWondealscount($related_won_deals_count)
    {
        $this->related_won_deals_count = $related_won_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getLostDealscount()
    {
        return $this->lost_deals_count;
    }

    /**
     * @param string $lost_deals_count
     * @return PersonResponse
     */
    public function setLostDealscount($lost_deals_count)
    {
        $this->lost_deals_count = $lost_deals_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedLostdealscount()
    {
        return $this->related_lost_deals_count;
    }

    /**
     * @param string $related_lost_deals_count
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
     * @return string
     */
    public function getVisibleTo()
    {
        return $this->visible_to;
    }

    /**
     * @param string $visible_to
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