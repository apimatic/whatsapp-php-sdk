
# Request Verification Code Request

## Structure

`RequestVerificationCodeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codeMethod` | [`string (RequestVerificationCodeMethodEnum)`](../../doc/models/request-verification-code-method-enum.md) | Required | Chosen method for verification. | getCodeMethod(): string | setCodeMethod(string codeMethod): void |
| `locale` | `string` | Required | Your locale. For example: "en_US". | getLocale(): string | setLocale(string locale): void |

## Example (as JSON)

```json
{
  "code_method": "SMS",
  "locale": "en_US"
}
```

