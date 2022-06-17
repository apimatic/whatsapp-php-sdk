
# Address

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `?string` | Optional | Street number and name | getStreet(): ?string | setStreet(?string street): void |
| `city` | `?string` | Optional | City name. | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | State abbreviation. | getState(): ?string | setState(?string state): void |
| `zip` | `?string` | Optional | ZIP code. | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | Full country name. | getCountry(): ?string | setCountry(?string country): void |
| `countryCode` | `?string` | Optional | Two-letter country abbreviation. | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `type` | [`?string (PersonalInformationTypeEnum)`](../../doc/models/personal-information-type-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "street": "<ADDRESS_STREET>",
  "city": "<ADDRESS_CITY>",
  "state": "<ADDRESS_STATE>",
  "zip": "<ADDRESS_ZIP>",
  "country": "<ADDRESS_COUNTRY>",
  "country_code": "<ADDRESS_COUNTRY_CODE>",
  "type": "HOME"
}
```

