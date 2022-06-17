<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Controllers;

use WhatsAppCloudAPILib\Exceptions\ApiException;
use WhatsAppCloudAPILib\ConfigurationInterface;
use WhatsAppCloudAPILib\ApiHelper;
use WhatsAppCloudAPILib\Models;
use WhatsAppCloudAPILib\Http\HttpRequest;
use WhatsAppCloudAPILib\Http\HttpResponse;
use WhatsAppCloudAPILib\Http\HttpMethod;
use WhatsAppCloudAPILib\Http\HttpContext;
use WhatsAppCloudAPILib\Http\HttpCallBack;
use Unirest\Request;

class MessagesController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Use this endpoint to send text messages, media, message templates to your customers.
     *
     * @param string $phoneNumberID
     * @param Models\Message $body To send a message, you must first assemble a message object with
     *        the content you want to send.
     *
     * @return Models\SendMessageResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendMessage(string $phoneNumberID, Models\Message $body): Models\SendMessageResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/{Phone-Number-ID}/messages';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'Phone-Number-ID' => $phoneNumberID,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'SendMessageResponse');
    }
}
