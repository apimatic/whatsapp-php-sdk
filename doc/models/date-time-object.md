
# Date Time Object

## Structure

`DateTimeObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fallbackValue` | `string` | Required | Default text. For Cloud API, we always use the fallback value, and we do not attempt to localize using other optional fields. | getFallbackValue(): string | setFallbackValue(string fallbackValue): void |
| `dayOfWeek` | `?int` | Optional | - | getDayOfWeek(): ?int | setDayOfWeek(?int dayOfWeek): void |
| `year` | `?int` | Optional | - | getYear(): ?int | setYear(?int year): void |
| `month` | `?int` | Optional | - | getMonth(): ?int | setMonth(?int month): void |
| `dayOfMonth` | `?int` | Optional | - | getDayOfMonth(): ?int | setDayOfMonth(?int dayOfMonth): void |
| `hour` | `?int` | Optional | - | getHour(): ?int | setHour(?int hour): void |
| `minute` | `?int` | Optional | - | getMinute(): ?int | setMinute(?int minute): void |
| `calendar` | `?string` | Optional | - | getCalendar(): ?string | setCalendar(?string calendar): void |

## Example (as JSON)

```json
{
  "fallback_value": "February 25, 1977",
  "day_of_week": 5,
  "year": 1977,
  "month": 2,
  "day_of_month": 25,
  "hour": 15,
  "minute": 33,
  "calendar": "GREGORIAN"
}
```

