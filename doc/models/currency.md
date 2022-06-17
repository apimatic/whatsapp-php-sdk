
# Currency

## Structure

`Currency`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fallbackValue` | `string` | Required | Default text if localization fails. | getFallbackValue(): string | setFallbackValue(string fallbackValue): void |
| `code` | `string` | Required | Currency code as defined in ISO 4217. | getCode(): string | setCode(string code): void |
| `amount1000` | `int` | Required | Amount multiplied by 1000. | getAmount1000(): int | setAmount1000(int amount1000): void |

## Example (as JSON)

```json
{
  "fallback_value": "$100.99",
  "code": "USD",
  "amount_1000": 100990
}
```

