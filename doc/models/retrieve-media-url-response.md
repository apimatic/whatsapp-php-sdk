
# Retrieve Media URL Response

## Structure

`RetrieveMediaURLResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messagingProduct` | `string` | Required | - | getMessagingProduct(): string | setMessagingProduct(string messagingProduct): void |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |
| `mimeType` | `string` | Required | - | getMimeType(): string | setMimeType(string mimeType): void |
| `sha256` | `string` | Required | - | getSha256(): string | setSha256(string sha256): void |
| `fileSize` | `string` | Required | - | getFileSize(): string | setFileSize(string fileSize): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |

## Example (as JSON)

```json
{
  "messaging_product": "whatsapp",
  "url": "<URL>",
  "mime_type": "image/jpeg",
  "sha256": "<HASH>",
  "file_size": "303833",
  "id": "2621233374848975"
}
```

