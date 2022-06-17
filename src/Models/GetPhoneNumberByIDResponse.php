<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class GetPhoneNumberByIDResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $verifiedName;

    /**
     * @var string
     */
    private $displayPhoneNumber;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $qualityRating;

    /**
     * @param string $verifiedName
     * @param string $displayPhoneNumber
     * @param string $id
     * @param string $qualityRating
     */
    public function __construct(string $verifiedName, string $displayPhoneNumber, string $id, string $qualityRating)
    {
        $this->verifiedName = $verifiedName;
        $this->displayPhoneNumber = $displayPhoneNumber;
        $this->id = $id;
        $this->qualityRating = $qualityRating;
    }

    /**
     * Returns Verified Name.
     * The verified name associated with the phone number.
     */
    public function getVerifiedName(): string
    {
        return $this->verifiedName;
    }

    /**
     * Sets Verified Name.
     * The verified name associated with the phone number.
     *
     * @required
     * @maps verified_name
     */
    public function setVerifiedName(string $verifiedName): void
    {
        $this->verifiedName = $verifiedName;
    }

    /**
     * Returns Display Phone Number.
     * The string representation of the phone number.
     */
    public function getDisplayPhoneNumber(): string
    {
        return $this->displayPhoneNumber;
    }

    /**
     * Sets Display Phone Number.
     * The string representation of the phone number.
     *
     * @required
     * @maps display_phone_number
     */
    public function setDisplayPhoneNumber(string $displayPhoneNumber): void
    {
        $this->displayPhoneNumber = $displayPhoneNumber;
    }

    /**
     * Returns Id.
     * The ID associated with the phone number.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The ID associated with the phone number.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Quality Rating.
     * The quality rating of the phone number based on how messages have been received by recipients in
     * recent days.
     */
    public function getQualityRating(): string
    {
        return $this->qualityRating;
    }

    /**
     * Sets Quality Rating.
     * The quality rating of the phone number based on how messages have been received by recipients in
     * recent days.
     *
     * @required
     * @maps quality_rating
     * @factory \WhatsAppCloudAPILib\Models\QualityRatingEnum::checkValue
     */
    public function setQualityRating(string $qualityRating): void
    {
        $this->qualityRating = $qualityRating;
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
        $json['verified_name']        = $this->verifiedName;
        $json['display_phone_number'] = $this->displayPhoneNumber;
        $json['id']                   = $this->id;
        $json['quality_rating']       = QualityRatingEnum::checkValue($this->qualityRating);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
