<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class ButtonParameter implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string|null
     */
    private $payload;

    /**
     * @var string|null
     */
    private $text;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Returns Type.
     * Indicates the type of parameter for the button.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Indicates the type of parameter for the button.
     *
     * @required
     * @maps type
     * @factory \WhatsAppCloudAPILib\Models\ButtonParameterTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Payload.
     * Required for quick_reply buttons. Developer-defined payload that is returned when the button is
     * clicked in addition to the display text on the button.
     */
    public function getPayload(): ?string
    {
        return $this->payload;
    }

    /**
     * Sets Payload.
     * Required for quick_reply buttons. Developer-defined payload that is returned when the button is
     * clicked in addition to the display text on the button.
     *
     * @maps payload
     */
    public function setPayload(?string $payload): void
    {
        $this->payload = $payload;
    }

    /**
     * Returns Text.
     * Required for URL buttons. Developer-provided suffix that is appended to the predefined prefix URL in
     * the template.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Sets Text.
     * Required for URL buttons. Developer-provided suffix that is appended to the predefined prefix URL in
     * the template.
     *
     * @maps text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
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
        $json['type']        = ButtonParameterTypeEnum::checkValue($this->type);
        if (isset($this->payload)) {
            $json['payload'] = $this->payload;
        }
        if (isset($this->text)) {
            $json['text']    = $this->text;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
