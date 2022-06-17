
# Register Phone Request

## Structure

`RegisterPhoneRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messagingProduct` | `string` | Required | Messaging service used. In this case, use "whatsapp". | getMessagingProduct(): string | setMessagingProduct(string messagingProduct): void |
| `pin` | `string` | Required | A 6-digit pin you have previously set up - See Set Two-Step Verification. | getPin(): string | setPin(string pin): void |

## Example (as JSON)

```json
{
  "messaging_product": "whatsapp",
  "pin": "<your-6-digit-pin>"
}
```

