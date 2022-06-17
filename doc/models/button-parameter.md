
# Button Parameter

## Structure

`ButtonParameter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (ButtonParameterTypeEnum)`](../../doc/models/button-parameter-type-enum.md) | Required | Indicates the type of parameter for the button. | getType(): string | setType(string type): void |
| `payload` | `?string` | Optional | Required for quick_reply buttons. Developer-defined payload that is returned when the button is clicked in addition to the display text on the button. | getPayload(): ?string | setPayload(?string payload): void |
| `text` | `?string` | Optional | Required for URL buttons. Developer-provided suffix that is appended to the predefined prefix URL in the template. | getText(): ?string | setText(?string text): void |

## Example (as JSON)

```json
{
  "type": "payload",
  "payload": null,
  "text": null
}
```

