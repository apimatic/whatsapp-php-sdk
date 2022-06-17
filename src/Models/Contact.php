<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class Contact implements \JsonSerializable
{
    /**
     * @var Address[]|null
     */
    private $addresses;

    /**
     * @var string|null
     */
    private $birthday = 'YYYY-MM-DD formatted string.';

    /**
     * @var EmailObject[]|null
     */
    private $emails;

    /**
     * @var Name
     */
    private $name;

    /**
     * @var Org|null
     */
    private $org;

    /**
     * @var PhoneObject[]|null
     */
    private $phones;

    /**
     * @var UrlObject[]|null
     */
    private $urls;

    /**
     * @param Name $name
     */
    public function __construct(Name $name)
    {
        $this->name = $name;
    }

    /**
     * Returns Addresses.
     * Full contact address(es)
     *
     * @return Address[]|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    /**
     * Sets Addresses.
     * Full contact address(es)
     *
     * @maps addresses
     *
     * @param Address[]|null $addresses
     */
    public function setAddresses(?array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * Returns Birthday.
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * Sets Birthday.
     *
     * @maps birthday
     */
    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * Returns Emails.
     * Contact email address(es)
     *
     * @return EmailObject[]|null
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * Sets Emails.
     * Contact email address(es)
     *
     * @maps emails
     *
     * @param EmailObject[]|null $emails
     */
    public function setEmails(?array $emails): void
    {
        $this->emails = $emails;
    }

    /**
     * Returns Name.
     * Full contact name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Full contact name
     *
     * @required
     * @maps name
     */
    public function setName(Name $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Org.
     * Contact organization information
     */
    public function getOrg(): ?Org
    {
        return $this->org;
    }

    /**
     * Sets Org.
     * Contact organization information
     *
     * @maps org
     */
    public function setOrg(?Org $org): void
    {
        $this->org = $org;
    }

    /**
     * Returns Phones.
     * Contact phone number(s)
     *
     * @return PhoneObject[]|null
     */
    public function getPhones(): ?array
    {
        return $this->phones;
    }

    /**
     * Sets Phones.
     * Contact phone number(s)
     *
     * @maps phones
     *
     * @param PhoneObject[]|null $phones
     */
    public function setPhones(?array $phones): void
    {
        $this->phones = $phones;
    }

    /**
     * Returns Urls.
     * Contact URL(s)
     *
     * @return UrlObject[]|null
     */
    public function getUrls(): ?array
    {
        return $this->urls;
    }

    /**
     * Sets Urls.
     * Contact URL(s)
     *
     * @maps urls
     *
     * @param UrlObject[]|null $urls
     */
    public function setUrls(?array $urls): void
    {
        $this->urls = $urls;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->addresses)) {
            $json['addresses'] = $this->addresses;
        }
        if (isset($this->birthday)) {
            $json['birthday']  = $this->birthday;
        }
        if (isset($this->emails)) {
            $json['emails']    = $this->emails;
        }
        $json['name']          = $this->name;
        if (isset($this->org)) {
            $json['org']       = $this->org;
        }
        if (isset($this->phones)) {
            $json['phones']    = $this->phones;
        }
        if (isset($this->urls)) {
            $json['urls']      = $this->urls;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
