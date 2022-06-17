
# Get Phone Number by ID Response

## Structure

`GetPhoneNumberByIDResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `verifiedName` | `string` | Required | The verified name associated with the phone number. | getVerifiedName(): string | setVerifiedName(string verifiedName): void |
| `displayPhoneNumber` | `string` | Required | The string representation of the phone number. | getDisplayPhoneNumber(): string | setDisplayPhoneNumber(string displayPhoneNumber): void |
| `id` | `string` | Required | The ID associated with the phone number. | getId(): string | setId(string id): void |
| `qualityRating` | [`string (QualityRatingEnum)`](../../doc/models/quality-rating-enum.md) | Required | The quality rating of the phone number based on how messages have been received by recipients in recent days. | getQualityRating(): string | setQualityRating(string qualityRating): void |

## Example (as JSON)

```json
{
  "verified_name": "Jasper's Market",
  "display_phone_number": "+1 631-555-5555",
  "id": "1906385232743451",
  "quality_rating": "GREEN"
}
```

