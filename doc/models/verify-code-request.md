
# Verify Code Request

## Structure

`VerifyCodeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | The code you received after calling FROM_PHONE_NUMBER_ID/request_code. | getCode(): string | setCode(string code): void |

## Example (as JSON)

```json
{
  "code": "<your-requested-code>"
}
```

