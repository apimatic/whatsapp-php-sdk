
# Button

## Structure

`Button`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | **Default**: `'reply'` | getType(): string | setType(string type): void |
| `title` | `?string` | Optional | Button title. It cannot be an empty string and must be unique within the message. Emojis are supported, markdown is not.<br>**Constraints**: *Maximum Length*: `20` | getTitle(): ?string | setTitle(?string title): void |
| `id` | `?string` | Optional | Unique identifier for your button. This ID is returned in the webhook when the button is clicked by the user.<br>**Constraints**: *Maximum Length*: `256` | getId(): ?string | setId(?string id): void |

## Example (as JSON)

```json
{
  "type": "reply"
}
```

