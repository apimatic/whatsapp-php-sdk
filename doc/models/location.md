
# Location

## Structure

`Location`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `string` | Required | Latitude of the location. | getLatitude(): string | setLatitude(string latitude): void |
| `longitude` | `string` | Required | Longitude of the location. | getLongitude(): string | setLongitude(string longitude): void |
| `name` | `?string` | Optional | Name of the location. | getName(): ?string | setName(?string name): void |
| `address` | `?string` | Optional | Address of the location. Only displayed if name is present. | getAddress(): ?string | setAddress(?string address): void |

## Example (as JSON)

```json
{
  "latitude": "<LOCATION_LATITUDE>",
  "longitude": "<LOCATION_LONGITUDE>",
  "name": "<LOCATION_NAME>",
  "address": "<LOCATION_ADDRESS>"
}
```

