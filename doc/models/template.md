
# Template

## Structure

`Template`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Name of the template. | getName(): string | setName(string name): void |
| `language` | [`Language`](../../doc/models/language.md) | Required | Specifies the language the template may be rendered in. Only the deterministic language policy works with media template messages. | getLanguage(): Language | setLanguage(Language language): void |
| `components` | [`?(Component[])`](../../doc/models/component.md) | Optional | Array of components objects containing the parameters of the message. | getComponents(): ?array | setComponents(?array components): void |

## Example (as JSON)

```json
{
  "name": "hello_world",
  "language": {
    "code": "en_US"
  }
}
```

