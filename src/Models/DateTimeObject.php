<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class DateTimeObject implements \JsonSerializable
{
    /**
     * @var string
     */
    private $fallbackValue;

    /**
     * @var int|null
     */
    private $dayOfWeek;

    /**
     * @var int|null
     */
    private $year;

    /**
     * @var int|null
     */
    private $month;

    /**
     * @var int|null
     */
    private $dayOfMonth;

    /**
     * @var int|null
     */
    private $hour;

    /**
     * @var int|null
     */
    private $minute;

    /**
     * @var string|null
     */
    private $calendar;

    /**
     * @param string $fallbackValue
     */
    public function __construct(string $fallbackValue)
    {
        $this->fallbackValue = $fallbackValue;
    }

    /**
     * Returns Fallback Value.
     * Default text. For Cloud API, we always use the fallback value, and we do not attempt to localize
     * using other optional fields.
     */
    public function getFallbackValue(): string
    {
        return $this->fallbackValue;
    }

    /**
     * Sets Fallback Value.
     * Default text. For Cloud API, we always use the fallback value, and we do not attempt to localize
     * using other optional fields.
     *
     * @required
     * @maps fallback_value
     */
    public function setFallbackValue(string $fallbackValue): void
    {
        $this->fallbackValue = $fallbackValue;
    }

    /**
     * Returns Day of Week.
     */
    public function getDayOfWeek(): ?int
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets Day of Week.
     *
     * @maps day_of_week
     */
    public function setDayOfWeek(?int $dayOfWeek): void
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    /**
     * Returns Year.
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * Sets Year.
     *
     * @maps year
     */
    public function setYear(?int $year): void
    {
        $this->year = $year;
    }

    /**
     * Returns Month.
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }

    /**
     * Sets Month.
     *
     * @maps month
     */
    public function setMonth(?int $month): void
    {
        $this->month = $month;
    }

    /**
     * Returns Day of Month.
     */
    public function getDayOfMonth(): ?int
    {
        return $this->dayOfMonth;
    }

    /**
     * Sets Day of Month.
     *
     * @maps day_of_month
     */
    public function setDayOfMonth(?int $dayOfMonth): void
    {
        $this->dayOfMonth = $dayOfMonth;
    }

    /**
     * Returns Hour.
     */
    public function getHour(): ?int
    {
        return $this->hour;
    }

    /**
     * Sets Hour.
     *
     * @maps hour
     */
    public function setHour(?int $hour): void
    {
        $this->hour = $hour;
    }

    /**
     * Returns Minute.
     */
    public function getMinute(): ?int
    {
        return $this->minute;
    }

    /**
     * Sets Minute.
     *
     * @maps minute
     */
    public function setMinute(?int $minute): void
    {
        $this->minute = $minute;
    }

    /**
     * Returns Calendar.
     */
    public function getCalendar(): ?string
    {
        return $this->calendar;
    }

    /**
     * Sets Calendar.
     *
     * @maps calendar
     */
    public function setCalendar(?string $calendar): void
    {
        $this->calendar = $calendar;
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
        $json['fallback_value']   = $this->fallbackValue;
        if (isset($this->dayOfWeek)) {
            $json['day_of_week']  = $this->dayOfWeek;
        }
        if (isset($this->year)) {
            $json['year']         = $this->year;
        }
        if (isset($this->month)) {
            $json['month']        = $this->month;
        }
        if (isset($this->dayOfMonth)) {
            $json['day_of_month'] = $this->dayOfMonth;
        }
        if (isset($this->hour)) {
            $json['hour']         = $this->hour;
        }
        if (isset($this->minute)) {
            $json['minute']       = $this->minute;
        }
        if (isset($this->calendar)) {
            $json['calendar']     = $this->calendar;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
