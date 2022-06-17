# Business Profiles

```php
$businessProfilesController = $client->getBusinessProfilesController();
```

## Class Name

`BusinessProfilesController`

## Methods

* [Update Business Profile](../../doc/controllers/business-profiles.md#update-business-profile)
* [Get Business Profile ID](../../doc/controllers/business-profiles.md#get-business-profile-id)


# Update Business Profile

Use this endpoint to update your business’ profile information such as the business description, email or address.

```php
function updateBusinessProfile(string $phoneNumberID, UpdateBusinessProfileRequest $body): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumberID` | `string` | Template, Required | - |
| `body` | [`UpdateBusinessProfileRequest`](../../doc/models/update-business-profile-request.md) | Body, Required | - |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$phoneNumberID = 'Phone-Number-ID6';
$body_messagingProduct = 'whatsapp';
$body = new Models\UpdateBusinessProfileRequest(
    $body_messagingProduct
);
$body->setAddress('ADDRESS');
$body->setDescription('DESCRIPTION');
$body->setVertical(Models\VerticalEnum::UNDEFINED);
$body->setEmail('EMAIL');
$body->setWebsites(['https://WEBSITE-1', 'https://WEBSITE-2']);
$body->setProfilePictureUrl('https://URL');

$result = $businessProfilesController->updateBusinessProfile($phoneNumberID, $body);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```


# Get Business Profile ID

Use this endpoint to retrieve your business’ profile. This business profile is visible to consumers in the chat thread next to the profile photo. The profile information will contain a business profile ID which you can use to make API calls.

```php
function getBusinessProfileID(string $phoneNumberID, ?string $fields = null): GetBusinessProfileIDResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `phoneNumberID` | `string` | Template, Required | - |
| `fields` | `?string` | Query, Optional | Here you can specify what you want to know from your business as a comma separated list of fields. Available fields include: id, about, messaging_product, address, description, vertical, email, websites, profile_picture_url |

## Response Type

[`GetBusinessProfileIDResponse`](../../doc/models/get-business-profile-id-response.md)

## Example Usage

```php
$phoneNumberID = 'Phone-Number-ID6';
$fields = 'about,address,description,email,profile_picture_url,websites,vertical';

$result = $businessProfilesController->getBusinessProfileID($phoneNumberID, $fields);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "messaging_product": "whatsapp",
      "address": "ADDRESS",
      "description": "DESCRIPTION",
      "vertical": "UNDEFINED",
      "email": "EMAIL",
      "websites": [
        "https://WEBSITE-1",
        "https://WEBSITE-2"
      ],
      "profile_picture_url": "https://URL",
      "id": "BUSINESS_PROFILE_ID"
    }
  ]
}
```

