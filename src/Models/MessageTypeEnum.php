<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use Exception;
use stdClass;
use WhatsAppCloudAPILib\ApiHelper;

class MessageTypeEnum
{
    public const TEXT = 'text';

    public const AUDIO = 'audio';

    public const CONTACTS = 'contacts';

    public const DOCUMENT = 'document';

    public const IMAGE = 'image';

    public const INTERACTIVE = 'interactive';

    public const LOCATION = 'location';

    public const STICKER = 'sticker';

    public const TEMPLATE = 'template';

    public const VIDEO = 'video';

    private const _ALL_VALUES = [
        self::TEXT,
        self::AUDIO,
        self::CONTACTS,
        self::DOCUMENT,
        self::IMAGE,
        self::INTERACTIVE,
        self::LOCATION,
        self::STICKER,
        self::TEMPLATE,
        self::VIDEO,
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
