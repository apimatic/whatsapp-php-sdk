
# Header

## Structure

`Header`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (HeaderTypeEnum)`](../../doc/models/header-type-enum.md) | Required | The header type you would like to use. | getType(): string | setType(string type): void |
| `text` | `?string` | Optional | Required if type is set to text. Text for the header. Formatting allows emojis, but not markdown.<br>**Constraints**: *Maximum Length*: `60` | getText(): ?string | setText(?string text): void |
| `video` | [`?Video`](../../doc/models/video.md) | Optional | Required if type is set to video. Contains the media object for this video. | getVideo(): ?Video | setVideo(?Video video): void |
| `image` | [`?Image`](../../doc/models/image.md) | Optional | Required if type is set to image. Contains the media object for this image. | getImage(): ?Image | setImage(?Image image): void |
| `document` | [`?Document`](../../doc/models/document.md) | Optional | Required if type is set to document. Contains the media object for this document. | getDocument(): ?Document | setDocument(?Document document): void |

## Example (as JSON)

```json
{
  "type": "text",
  "text": "<Header List Message>"
}
```

