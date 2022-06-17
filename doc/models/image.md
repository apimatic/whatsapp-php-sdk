
# Image

## Structure

`Image`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The media object ID. Required when you are not using a link. | getId(): ?string | setId(?string id): void |
| `link` | `?string` | Optional | The protocol and URL of the media to be sent. Use only with HTTP/HTTPS URLs. Required when you are not using an uploaded media ID. | getLink(): ?string | setLink(?string link): void |
| `caption` | `?string` | Optional | Describes the specified image media. | getCaption(): ?string | setCaption(?string caption): void |

## Example (as JSON)

```json
{
  "id": "<image-object-id>"
}
```

