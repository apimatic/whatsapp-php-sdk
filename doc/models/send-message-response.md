
# Send Message Response

## Structure

`SendMessageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messagingProduct` | `string` | Required | - | getMessagingProduct(): string | setMessagingProduct(string messagingProduct): void |
| `contacts` | [`ResponseContact[]`](../../doc/models/response-contact.md) | Required | - | getContacts(): array | setContacts(array contacts): void |
| `messages` | [`ResponseMessage[]`](../../doc/models/response-message.md) | Required | - | getMessages(): array | setMessages(array messages): void |

## Example (as JSON)

```json
{
  "messaging_product": "whatsapp",
  "contacts": [
    {
      "input": "48XXXXXXXXX",
      "wa_id": "48XXXXXXXXX "
    }
  ],
  "messages": [
    {
      "id": "wamid.gBGGSFcCNEOPAgkO_KJ55r4w_ww"
    }
  ]
}
```

