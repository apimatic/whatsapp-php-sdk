
# Language

## Structure

`Language`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | The code of the language or locale to use. Accepts both language and language_locale formats (e.g., en and en_US). | getCode(): string | setCode(string code): void |
| `policy` | `?string` | Optional | The language policy the message should follow.<br>**Default**: `'deterministic'` | getPolicy(): ?string | setPolicy(?string policy): void |

## Example (as JSON)

```json
{
  "code": "en_US"
}
```

