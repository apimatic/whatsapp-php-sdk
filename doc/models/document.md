
# Document

## Structure

`Document`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | It is the media object ID. Required when you are not using a link. | getId(): ?string | setId(?string id): void |
| `link` | `?string` | Optional | The protocol and URL of the media to be sent. Use only with HTTP/HTTPS URLs. Required when you are not using an uploaded media ID. | getLink(): ?string | setLink(?string link): void |
| `caption` | `?string` | Optional | Describes the specified document media. | getCaption(): ?string | setCaption(?string caption): void |
| `filename` | `?string` | Optional | Describes the filename for the specific document. | getFilename(): ?string | setFilename(?string filename): void |

## Example (as JSON)

```json
{
  "id": "<your-media-id>",
  "caption": "<your-document-caption-to-be-sent>",
  "filename": "<your-document-filename>"
}
```

