# Phone Numbers

```php
$phoneNumbersController = $client->getPhoneNumbersController();
```

## Class Name

`PhoneNumbersController`

## Methods

* [Verify Code](../../doc/controllers/phone-numbers.md#verify-code)
* [Get Phone Number by ID](../../doc/controllers/phone-numbers.md#get-phone-number-by-id)
* [Request Verification Code](../../doc/controllers/phone-numbers.md#request-verification-code)


# Verify Code

Used to verify a phone number's ownership. After you have received a SMS or Voice request code for verification, you need to verify the code that was sent to you.

```php
function verifyCode(string $phoneNumberID, string $code): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumberID` | `string` | Template, Required | - |
| `code` | `string` | Form, Required | The code you received after calling FROM_PHONE_NUMBER_ID/request_code. |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$phoneNumberID = 'Phone-Number-ID6';
$code = '<your-requested-code>';

$result = $phoneNumbersController->verifyCode($phoneNumberID, $code);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```


# Get Phone Number by ID

When you query all the phone numbers for a WhatsApp Business Account, each phone number has an id. You can directly query for a phone number using this id.

```php
function getPhoneNumberByID(string $phoneNumberID): GetPhoneNumberByIDResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumberID` | `string` | Template, Required | - |

## Response Type

[`GetPhoneNumberByIDResponse`](../../doc/models/get-phone-number-by-id-response.md)

## Example Usage

```php
$phoneNumberID = 'Phone-Number-ID6';

$result = $phoneNumbersController->getPhoneNumberByID($phoneNumberID);
```

## Example Response *(as JSON)*

```json
{
  "verified_name": "Jasper's Market",
  "display_phone_number": "+1 631-555-5555",
  "id": "1906385232743451",
  "quality_rating": "GREEN"
}
```


# Request Verification Code

Used to request a code to verify a phone number's ownership. You need to verify the phone number you want to use to send messages to your customers. Phone numbers must be verified through SMS/voice call. The verification process can be done through the Graph API calls specified below.

```php
function requestVerificationCode(string $phoneNumberID, string $codeMethod, string $locale): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumberID` | `string` | Template, Required | - |
| `codeMethod` | [`string (RequestVerificationCodeMethodEnum)`](../../doc/models/request-verification-code-method-enum.md) | Form, Required | Chosen method for verification. |
| `locale` | `string` | Form, Required | Your locale. For example: "en_US". |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$phoneNumberID = 'Phone-Number-ID6';
$codeMethod = Models\RequestVerificationCodeMethodEnum::SMS;
$locale = 'en_US';

$result = $phoneNumbersController->requestVerificationCode($phoneNumberID, $codeMethod, $locale);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

