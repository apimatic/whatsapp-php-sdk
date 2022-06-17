
# Phone Object

## Structure

`PhoneObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `phone` | `?string` | Optional | Automatically populated with the wa_id value as a formatted phone number. | getPhone(): ?string | setPhone(?string phone): void |
| `waId` | `?string` | Optional | WhatsApp ID. | getWaId(): ?string | setWaId(?string waId): void |
| `type` | [`?string (PhoneTypeEnum)`](../../doc/models/phone-type-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "phone": "<CONTACT_PHONE>",
  "wa_id": "<CONTACT_WA_ID>",
  "type": "HOME"
}
```

