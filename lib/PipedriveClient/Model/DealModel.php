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
    private $creator_user_id;

    /**
     * @var string
     */
    private $user_id;

    /**
     * @var string
     */
    private $person_id;

    /**
     * @var string
     */
    private $stage_id;

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
    private $add_time;

    /**
     * @var \DateTime
     */
    private $update_time;

    /**
     * @var string
     */
    private $stage_change_time;

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
    private $lost_reason;

    /**
     * @var string
     */
    private $visible_to;

    /**
     * @var string
     */
    private $close_time;

    /**
     * @var string
     */
    private $pipeline_id;

    /**
     * @var \DateTime
     */
    private $won_time;

    /**
     * @var \DateTime
     */
    private $first_won_time;

    /**
     * @var string
     */
    private $products_count;

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
    private $participants_count;

    /**
     * @var \DateTime
     */
    private $expected_close_date;

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
    private $stage_order_nr;

    /**
     * @var string
     */
    private $person_name;

    /**
     * @var string
     */
    private $org_name;

    /**
     * @var string
     */
    private $next_activity_subject;

    /**
     * @var string
     */
    private $next_activity_type;

    /**
     * @var string
     */
    private $next_activity_duration;

    /**
     * @var string
     */
    private $next_activity_note;

    /**
     * @var string
     */
    private $formatted_value;

    /**
     * @var string
     */
    private $rotten_time;

    /**
     * @var string
     */
    private $weighted_value;

    /**
     * @var string
     */
    private $formatted_weighted_value;

    /**
     * @var string
     */
    private $owner_name;

    /**
     * @var string
     */
    private $cc_email;

    /**
     * @var boolean
     */
    private $org_hidden;

    /**
     * @var bool
     */
    private $person_hidden;

    /**
     * @var string
     */
    private $last_activity;

    /**
     * @var string
     */
    private $next_activity;

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
    public function getCreatorUserid()
    {
        return $this->creator_user_id;
    }

    /**
     * @param string $creator_user_id
     * @return DealModel
     */
    public function setCreatorUserid($creator_user_id)
    {
        $this->creator_user_id = $creator_user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     * @return DealModel
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * @param string $person_id
     * @return DealModel
     */
    public function setPersonId($person_id)
    {
        $this->person_id = $person_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * @param string $stage_id
     * @return DealModel
     */
    public function setStageId($stage_id)
    {
        $this->stage_id = $stage_id;
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
        return $this->add_time;
    }

    /**
     * @param \DateTime $add_time
     * @return DealModel
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
     * @return DealModel
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageChangetime()
    {
        return $this->stage_change_time;
    }

    /**
     * @param string $stage_change_time
     * @return DealModel
     */
    public function setStageChangetime($stage_change_time)
    {
        $this->stage_change_time = $stage_change_time;
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
    public function getNextActivitydate()
    {
        return $this->next_activity_date;
    }

    /**
     * @param \DateTime $next_activity_date
     * @return DealModel
     */
    public function setNextActivitydate($next_activity_date)
    {
        $this->next_activity_date = $next_activity_date;
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
     * @return DealModel
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
     * @return DealModel
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
     * @return DealModel
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
     * @return DealModel
     */
    public function setLastActivitydate($last_activity_date)
    {
        $this->last_activity_date = $last_activity_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getLostReason()
    {
        return $this->lost_reason;
    }

    /**
     * @param string $lost_reason
     * @return DealModel
     */
    public function setLostReason($lost_reason)
    {
        $this->lost_reason = $lost_reason;
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
     * @return DealModel
     */
    public function setVisibleTo($visible_to)
    {
        $this->visible_to = $visible_to;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

    /**
     * @param string $close_time
     * @return DealModel
     */
    public function setCloseTime($close_time)
    {
        $this->close_time = $close_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getPipelineId()
    {
        return $this->pipeline_id;
    }

    /**
     * @param string $pipeline_id
     * @return DealModel
     */
    public function setPipelineId($pipeline_id)
    {
        $this->pipeline_id = $pipeline_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWonTime()
    {
        return $this->won_time;
    }

    /**
     * @param \DateTime $won_time
     * @return DealModel
     */
    public function setWonTime($won_time)
    {
        $this->won_time = $won_time;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstWontime()
    {
        return $this->first_won_time;
    }

    /**
     * @param \DateTime $first_won_time
     * @return DealModel
     */
    public function setFirstWontime($first_won_time)
    {
        $this->first_won_time = $first_won_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductsCount()
    {
        return $this->products_count;
    }

    /**
     * @param string $products_count
     * @return DealModel
     */
    public function setProductsCount($products_count)
    {
        $this->products_count = $products_count;
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
     * @return DealModel
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
     * @return DealModel
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
     * @return DealModel
     */
    public function setFollowersCount($followers_count)
    {
        $this->followers_count = $followers_count;
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
     * @return DealModel
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
     * @return DealModel
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
     * @return DealModel
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
     * @return DealModel
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
     * @return DealModel
     */
    public function setReferenceActivitiescount($reference_activities_count)
    {
        $this->reference_activities_count = $reference_activities_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getParticipantsCount()
    {
        return $this->participants_count;
    }

    /**
     * @param string $participants_count
     * @return DealModel
     */
    public function setParticipantsCount($participants_count)
    {
        $this->participants_count = $participants_count;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedClosedate()
    {
        return $this->expected_close_date;
    }

    /**
     * @param \DateTime $expected_close_date
     * @return DealModel
     */
    public function setExpectedClosedate($expected_close_date)
    {
        $this->expected_close_date = $expected_close_date;
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
     * @return DealModel
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
     * @return DealModel
     */
    public function setLastOutgoingmailtime($last_outgoing_mail_time)
    {
        $this->last_outgoing_mail_time = $last_outgoing_mail_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageOrdernr()
    {
        return $this->stage_order_nr;
    }

    /**
     * @param string $stage_order_nr
     * @return DealModel
     */
    public function setStageOrdernr($stage_order_nr)
    {
        $this->stage_order_nr = $stage_order_nr;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->person_name;
    }

    /**
     * @param string $person_name
     * @return DealModel
     */
    public function setPersonName($person_name)
    {
        $this->person_name = $person_name;
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
     * @return DealModel
     */
    public function setOrgName($org_name)
    {
        $this->org_name = $org_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivitysubject()
    {
        return $this->next_activity_subject;
    }

    /**
     * @param string $next_activity_subject
     * @return DealModel
     */
    public function setNextActivitysubject($next_activity_subject)
    {
        $this->next_activity_subject = $next_activity_subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivitytype()
    {
        return $this->next_activity_type;
    }

    /**
     * @param string $next_activity_type
     * @return DealModel
     */
    public function setNextActivitytype($next_activity_type)
    {
        $this->next_activity_type = $next_activity_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivityduration()
    {
        return $this->next_activity_duration;
    }

    /**
     * @param string $next_activity_duration
     * @return DealModel
     */
    public function setNextActivityduration($next_activity_duration)
    {
        $this->next_activity_duration = $next_activity_duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivitynote()
    {
        return $this->next_activity_note;
    }

    /**
     * @param string $next_activity_note
     * @return DealModel
     */
    public function setNextActivitynote($next_activity_note)
    {
        $this->next_activity_note = $next_activity_note;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormattedValue()
    {
        return $this->formatted_value;
    }

    /**
     * @param string $formatted_value
     * @return DealModel
     */
    public function setFormattedValue($formatted_value)
    {
        $this->formatted_value = $formatted_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRottenTime()
    {
        return $this->rotten_time;
    }

    /**
     * @param string $rotten_time
     * @return DealModel
     */
    public function setRottenTime($rotten_time)
    {
        $this->rotten_time = $rotten_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightedValue()
    {
        return $this->weighted_value;
    }

    /**
     * @param string $weighted_value
     * @return DealModel
     */
    public function setWeightedValue($weighted_value)
    {
        $this->weighted_value = $weighted_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormattedWeightedvalue()
    {
        return $this->formatted_weighted_value;
    }

    /**
     * @param string $formatted_weighted_value
     * @return DealModel
     */
    public function setFormattedWeightedvalue($formatted_weighted_value)
    {
        $this->formatted_weighted_value = $formatted_weighted_value;
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
     * @param string $owner_name
     * @return DealModel
     */
    public function setOwnerName($owner_name)
    {
        $this->owner_name = $owner_name;
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
     * @return DealModel
     */
    public function setCcEmail($cc_email)
    {
        $this->cc_email = $cc_email;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOrgHidden()
    {
        return $this->org_hidden;
    }

    /**
     * @param bool $org_hidden
     * @return DealModel
     */
    public function setOrgHidden($org_hidden)
    {
        $this->org_hidden = $org_hidden;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPersonHidden()
    {
        return $this->person_hidden;
    }

    /**
     * @param bool $person_hidden
     * @return DealModel
     */
    public function setPersonHidden($person_hidden)
    {
        $this->person_hidden = $person_hidden;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * @param string $last_activity
     * @return DealModel
     */
    public function setLastActivity($last_activity)
    {
        $this->last_activity = $last_activity;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextActivity()
    {
        return $this->next_activity;
    }

    /**
     * @param string $next_activity
     * @return DealModel
     */
    public function setNextActivity($next_activity)
    {
        $this->next_activity = $next_activity;
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