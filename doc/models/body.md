
# Body

## Structure

`Body`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `text` | `string` | Required | The body content of the message. Emojis and markdown are supported. Links are supported.<br>**Constraints**: *Maximum Length*: `1024` | getText(): string | setText(string text): void |

## Example (as JSON)

```json
{
  "text": "<List Body Message>"
}
```

