
# Audio

## Structure

`Audio`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The media object ID. Required when you are not using a link. | getId(): ?string | setId(?string id): void |
| `link` | `?string` | Optional | The protocol and URL of the media to be sent. Use only with HTTP/HTTPS URLs. Required when you are not using an uploaded media ID. | getLink(): ?string | setLink(?string link): void |

## Example (as JSON)

```json
{
  "id": "<media-object-id>"
}
```

