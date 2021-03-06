<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class Parameter implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string|null
     */
    private $text;

    /**
     * @var Currency|null
     */
    private $currency;

    /**
     * @var DateTimeObject|null
     */
    private $dateTime;

    /**
     * @var Image|null
     */
    private $image;

    /**
     * @var Document|null
     */
    private $document;

    /**
     * @var Video|null
     */
    private $video;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Returns Type.
     * Describes the parameter type. For text-based templates, the only supported parameter types are text,
     * currency, date_time.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Describes the parameter type. For text-based templates, the only supported parameter types are text,
     * currency, date_time.
     *
     * @required
     * @maps type
     * @factory \WhatsAppCloudAPILib\Models\ParameterTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Text.
     * Required when type=text. The message’s text. For the header component, the character limit is 60
     * characters. For the body component, the character limit is 1024 characters.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Sets Text.
     * Required when type=text. The message’s text. For the header component, the character limit is 60
     * characters. For the body component, the character limit is 1024 characters.
     *
     * @maps text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * Returns Currency.
     * Required when type=currency.
     */
    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Required when type=currency.
     *
     * @maps currency
     */
    public function setCurrency(?Currency $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Date Time.
     * Required when type=date_time.
     */
    public function getDateTime(): ?DateTimeObject
    {
        return $this->dateTime;
    }

    /**
     * Sets Date Time.
     * Required when type=date_time.
     *
     * @maps date_time
     */
    public function setDateTime(?DateTimeObject $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    /**
     * Returns Image.
     * Required when type=image.
     */
    public function getImage(): ?Image
    {
        return $this->image;
    }

    /**
     * Sets Image.
     * Required when type=image.
     *
     * @maps image
     */
    public function setImage(?Image $image): void
    {
        $this->image = $image;
    }

    /**
     * Returns Document.
     * Required when type=document. Only PDF documents are supported for media-based message templates.
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * Sets Document.
     * Required when type=document. Only PDF documents are supported for media-based message templates.
     *
     * @maps document
     */
    public function setDocument(?Document $document): void
    {
        $this->document = $document;
    }

    /**
     * Returns Video.
     * Required when type=video.
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * Sets Video.
     * Required when type=video.
     *
     * @maps video
     */
    public function setVideo(?Video $video): void
    {
        $this->video = $video;
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
        $json['type']          = ParameterTypeEnum::checkValue($this->type);
        if (isset($this->text)) {
            $json['text']      = $this->text;
        }
        if (isset($this->currency)) {
            $json['currency']  = $this->currency;
        }
        if (isset($this->dateTime)) {
            $json['date_time'] = $this->dateTime;
        }
        if (isset($this->image)) {
            $json['image']     = $this->image;
        }
        if (isset($this->document)) {
            $json['document']  = $this->document;
        }
        if (isset($this->video)) {
            $json['video']     = $this->video;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
