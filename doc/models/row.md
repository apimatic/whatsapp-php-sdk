
# Row

## Structure

`Row`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getId(): string | setId(string id): void |
| `title` | `string` | Required | **Constraints**: *Maximum Length*: `24` | getTitle(): string | setTitle(string title): void |
| `description` | `?string` | Optional | **Constraints**: *Maximum Length*: `72` | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "id": "<Item ID>",
  "title": "<Item Title>",
  "description": "<Item Description>"
}
```

