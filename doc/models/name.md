
# Name

## Structure

`Name`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `formattedName` | `string` | Required | Full name, as it normally appears. | getFormattedName(): string | setFormattedName(string formattedName): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `middleName` | `?string` | Optional | - | getMiddleName(): ?string | setMiddleName(?string middleName): void |
| `suffix` | `?string` | Optional | - | getSuffix(): ?string | setSuffix(?string suffix): void |
| `prefix` | `?string` | Optional | - | getPrefix(): ?string | setPrefix(?string prefix): void |

## Example (as JSON)

```json
{
  "formatted_name": "<CONTACT_FORMATTED_NAME>",
  "first_name": "<CONTACT_FIRST_NAME>",
  "last_name": "<CONTACT_LAST_NAME>",
  "middle_name": "<CONTACT_MIDDLE_NAME>",
  "suffix": "<CONTACT_SUFFIX>",
  "prefix": "<CONTACT_PREFIX>"
}
```

