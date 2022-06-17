# Two-Step Verification

```php
$twoStepVerificationController = $client->getTwoStepVerificationController();
```

## Class Name

`TwoStepVerificationController`


# Set Two Step Verification Code

You are required to set up two-step verification for your phone number, as this provides an extra layer of security to the business accounts. You can use this endpoint to change two-step verification code associated with your account.
After you change the verification code, future requests like changing the name, must use the new code.

You set up two-factor verification and register a phone number in the same API call.

```php
function setTwoStepVerificationCode(
    string $phoneNumberID,
    SetTwoStepVerificationCodeRequest $body
): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumberID` | `string` | Template, Required | - |
| `body` | [`SetTwoStepVerificationCodeRequest`](../../doc/models/set-two-step-verification-code-request.md) | Body, Required | - |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$phoneNumberID = 'Phone-Number-ID6';
$body_pin = '<6-digit-pin>';
$body = new Models\SetTwoStepVerificationCodeRequest(
    $body_pin
);

$result = $twoStepVerificationController->setTwoStepVerificationCode($phoneNumberID, $body);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

