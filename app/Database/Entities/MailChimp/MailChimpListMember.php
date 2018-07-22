<?php
declare(strict_types=1);

namespace App\Database\Entities\MailChimp;

use Doctrine\ORM\Mapping as ORM;
use EoneoPay\Utils\Str;

/**
 * @ORM\Entity()
 */
class MailChimpListMember extends MailChimpEntity
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="local_id", type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     * 
     * @var string
     */
    private $localId;


    /**
     * @ORM\Column(name="unique_email_id", type="string", nullable=true)
     *
     * @var string
     */
    private $uniqueEmailId;

    /**
     * @ORM\Column(name="id", type="string", nullable=true)
     *
     * @var string
     */
    private $id;

    /**
     * @ORM\Column(name="list_id", type="string")
     * 
     * @var string
     */
    private $listId;

    /**
     * @ORM\Column(name="email_address", type="string")
     *
     * @var string
     */
    private $emailAddress;

    /**
     * @ORM\Column(name="email_type", type="string", nullable=true)
     *
     * @var string
     */
    private $emailType;

    /**
     * @ORM\Column(name="status", type="string")
     *
     * @var string
     */
    private $status;

    /**
     * @ORM\Column(name="merge_fields", type="array", nullable=true)
     *
     * @var array
     */
    private $mergeFields;

    /**
     * @ORM\Column(name="interests", type="array", nullable=true)
     *
     * @var array
     */
    private $interests;

    /**
     * @ORM\Column(name="language", type="string", nullable=true)
     *
     * @var string
     */
    private $language;

    /**
     * @ORM\Column(name="vip", type="boolean", nullable=true)
     *
     * @var bool
     */
    private $vip;

    /**
     * @ORM\Column(name="location", type="array", nullable=true)
     *
     * @var array
     */
    private $location;

    /**
     * @ORM\Column(name="ip_signup", type="string", nullable=true)
     *
     * @var string
     */
    private $ipSignup;

    /**
     * @ORM\Column(name="timestamp_signup", type="string", nullable=true)
     * 
     * @var string
     */
    private $timestampSignup;

    /**
     * @ORM\Column(name="ip_opt", type="string", nullable=true)
     * 
     * @var string
     */
    private $ipOpt;

    /**
     * @ORM\Column(name="timestamp_opt", type="string", nullable=true)
     * 
     * @var string
     */
    private $timestampOpt;

    /**
     * Get local id.
     *
     * @return null|string
     */
    public function getLocalId(): string
    {
        return $this->localId;
    }

    /**
     * Get mailchimp id of the list member.
     *
     * @return null|string
     */
    public function getMailChimpId(): ?string
    {
        return $this->id;
    }

    /**
     * Get validation rules for mailchimp entity.
     *
     * @return array
     */
    public function getValidationRules(): array
    {
        return [
            'email_address' => 'required|email',
            'email_type' => 'nullable|string|in:html,text',
            'status' => 'required|string|in:subscribed,unsubscribed,cleaned,pending',
            'merge_fields' => 'nullable|array',
            'interests' => 'nullable|array',
            'language' => 'nullable|string',
            'vip' => 'nullable|boolean',
            'location' => 'nullable|array',
            'location.latitude' => 'nullable|float',
            'location.longitude' => 'nullable|float',
            'ip_signup' => 'nullable|string',
            'timestamp_signup' => 'nullable|string',
            'ip_opt' => 'nullable|string',
            'timestamp_opt' => 'nullable|string',
        ];
    }

    /**
     * Set list id.
     * 
     * @return string
     */
    public function setListId(string $listId): MailChimpListMember
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Set mailchimp id of the member.
     *
     * @param string $id
     *
     * @return \App\Database\Entities\MailChimp\MailChimpListMember
     */
    public function setId(string $id): MailChimpListMember
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set unique email id of the member.
     *
     * @param string $uniqueEmailId
     *
     * @return \App\Database\Entities\MailChimp\MailChimpListMember
     */
    public function setUniqueEmailId(string $uniqueEmailId): MailChimpListMember
    {
        $this->uniqueEmailId = $uniqueEmailId;

        return $this;
    }

    /**
     * Set email address.
     *
     * @param string $emailAddress
     *
     * @return MailChimpListMember
     */
    public function setEmailAddress(string $emailAddress): MailChimpListMember
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Set email type.
     *
     * @param string $emailType
     *
     * @return MailChimpListMember
     */
    public function setEmailType(string $emailType): MailChimpListMember
    {
        $this->emailType = $emailType;

        return $this;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return MailChimpListMember
     */
    public function setStatus(string $status): MailChimpListMember
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set merge fields.
     *
     * @param array $mergeFields
     *
     * @return MailChimpListMember
     */
    public function setMergeFields(array $mergeFields): MailChimpListMember
    {
        $this->mergeFields = $mergeFields;

        return $this;
    }

    /**
     * Set interests.
     *
     * @param array $interests
     *
     * @return MailChimpListMember
     */
    public function setInterests(array $interests): MailChimpListMember
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Set language.
     *
     * @param string $language
     *
     * @return MailChimpListMember
     */
    public function setLanguage(string $language): MailChimpListMember
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Set vip.
     *
     * @param bool $vip
     *
     * @return MailChimpListMember
     */
    public function setVip(bool $vip): MailChimpListMember
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Set location.
     *
     * @param array $location
     *
     * @return MailChimpListMember
     */
    public function setLocation(array $location): MailChimpListMember
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Set ip signup.
     *
     * @param string $ipSignup
     *
     * @return MailChimpListMember
     */
    public function setIpSignup(string $ipSignup): MailChimpListMember
    {
        $this->ipSignup = $ipSignup;

        return $this;
    }

    /**
     * Set timestamp signup.
     * 
     * @param string $timestampSignup
     * 
     * @return MailChimpListMember
     */
    public function setTimestampSignup(string $timestampSignup): MailChimpListMember
    {
        $this->timestampSignup = $timestampSignup;

        return $this;
    }

    /**
     * Set ip opt.
     * 
     * @param string $ipOpt
     * 
     * @return MailChimpListMember
     */
    public function setIpOpt(string $ipOpt): MailChimpListMember
    {
        $this->ipOpt = $ipOpt;

        return $this;
    }

    /**
     * Set timestamp opt.
     * 
     * @param string $timestampOpt
     * 
     * @return MailChimpListMember
     */
    public function setTimestampOpt(string $timestampOpt): MailChimpListMember
    {
        $this->timestampOpt = $timestampOpt;

        return $this;
    }

    /**
     * Get array representation of entity.
     *
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        $str = new Str();

        foreach (\get_object_vars($this) as $property => $value) {
            $array[$str->snake($property)] = $value;
        }

        return $array;
    }
}
