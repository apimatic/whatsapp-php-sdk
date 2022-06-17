<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib;

use WhatsAppCloudAPILib\Controllers;

/**
 * WhatsAppCloudAPILib client class
 */
class WhatsAppCloudAPIClient implements ConfigurationInterface
{
    private $businessProfiles;
    private $messages;
    private $media;
    private $phoneNumbers;
    private $registration;
    private $twoStepVerification;

    private $timeout = ConfigurationDefaults::TIMEOUT;
    private $enableRetries = ConfigurationDefaults::ENABLE_RETRIES;
    private $numberOfRetries = ConfigurationDefaults::NUMBER_OF_RETRIES;
    private $retryInterval = ConfigurationDefaults::RETRY_INTERVAL;
    private $backOffFactor = ConfigurationDefaults::BACK_OFF_FACTOR;
    private $maximumRetryWaitTime = ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    private $retryOnTimeout = ConfigurationDefaults::RETRY_ON_TIMEOUT;
    private $httpStatusCodesToRetry = ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    private $httpMethodsToRetry = ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    private $environment = ConfigurationDefaults::ENVIRONMENT;
    private $version = ConfigurationDefaults::VERSION;
    private $accessToken = ConfigurationDefaults::ACCESS_TOKEN;
    private $bearerAuthManager;
    private $authManagers = [];
    private $httpCallback;

    public function __construct(array $configOptions = null)
    {
        if (isset($configOptions['timeout'])) {
            $this->timeout = $configOptions['timeout'];
        }
        if (isset($configOptions['enableRetries'])) {
            $this->enableRetries = $configOptions['enableRetries'];
        }
        if (isset($configOptions['numberOfRetries'])) {
            $this->numberOfRetries = $configOptions['numberOfRetries'];
        }
        if (isset($configOptions['retryInterval'])) {
            $this->retryInterval = $configOptions['retryInterval'];
        }
        if (isset($configOptions['backOffFactor'])) {
            $this->backOffFactor = $configOptions['backOffFactor'];
        }
        if (isset($configOptions['maximumRetryWaitTime'])) {
            $this->maximumRetryWaitTime = $configOptions['maximumRetryWaitTime'];
        }
        if (isset($configOptions['retryOnTimeout'])) {
            $this->retryOnTimeout = $configOptions['retryOnTimeout'];
        }
        if (isset($configOptions['httpStatusCodesToRetry'])) {
            $this->httpStatusCodesToRetry = $configOptions['httpStatusCodesToRetry'];
        }
        if (isset($configOptions['httpMethodsToRetry'])) {
            $this->httpMethodsToRetry = $configOptions['httpMethodsToRetry'];
        }
        if (isset($configOptions['environment'])) {
            $this->environment = $configOptions['environment'];
        }
        if (isset($configOptions['version'])) {
            $this->version = $configOptions['version'];
        }
        if (isset($configOptions['accessToken'])) {
            $this->accessToken = $configOptions['accessToken'];
        }
        if (isset($configOptions['httpCallback'])) {
            $this->httpCallback = $configOptions['httpCallback'];
        }

        $this->bearerAuthManager = new BearerAuthManager($this->accessToken);
        $this->authManagers['global'] = $this->bearerAuthManager;
    }

    /**
     * Get the client configuration as an associative array
     */
    public function getConfiguration(): array
    {
        $configMap = [];

        if (isset($this->timeout)) {
            $configMap['timeout'] = $this->timeout;
        }
        if (isset($this->enableRetries)) {
            $configMap['enableRetries'] = $this->enableRetries;
        }
        if (isset($this->numberOfRetries)) {
            $configMap['numberOfRetries'] = $this->numberOfRetries;
        }
        if (isset($this->retryInterval)) {
            $configMap['retryInterval'] = $this->retryInterval;
        }
        if (isset($this->backOffFactor)) {
            $configMap['backOffFactor'] = $this->backOffFactor;
        }
        if (isset($this->maximumRetryWaitTime)) {
            $configMap['maximumRetryWaitTime'] = $this->maximumRetryWaitTime;
        }
        if (isset($this->retryOnTimeout)) {
            $configMap['retryOnTimeout'] = $this->retryOnTimeout;
        }
        if (isset($this->httpStatusCodesToRetry)) {
            $configMap['httpStatusCodesToRetry'] = $this->httpStatusCodesToRetry;
        }
        if (isset($this->httpMethodsToRetry)) {
            $configMap['httpMethodsToRetry'] = $this->httpMethodsToRetry;
        }
        if (isset($this->environment)) {
            $configMap['environment'] = $this->environment;
        }
        if (isset($this->version)) {
            $configMap['version'] = $this->version;
        }
        if ($this->bearerAuthManager->getAccessToken() !== null) {
            $configMap['accessToken'] = $this->bearerAuthManager->getAccessToken();
        }
        if (isset($this->httpCallback)) {
            $configMap['httpCallback'] = $this->httpCallback;
        }

        return $configMap;
    }

    /**
     * Clone this client and override given configuration options
     */
    public function withConfiguration(array $configOptions): self
    {
        return new self(\array_merge($this->getConfiguration(), $configOptions));
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->enableRetries;
    }

    public function getNumberOfRetries(): int
    {
        return $this->numberOfRetries;
    }

    public function getRetryInterval(): float
    {
        return $this->retryInterval;
    }

    public function getBackOffFactor(): float
    {
        return $this->backOffFactor;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->maximumRetryWaitTime;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->retryOnTimeout;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->httpStatusCodesToRetry;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->httpMethodsToRetry;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getBearerAuthCredentials(): ?BearerAuthCredentials
    {
        return $this->bearerAuthManager;
    }

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     *
     * @return string         Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return ApiHelper::appendUrlWithTemplateParameters(
            static::ENVIRONMENT_MAP[$this->environment][$server],
            [
                'Version' => $this->version,
            ],
            false
        );
    }

    /**
     * Returns Business Profiles Controller
     */
    public function getBusinessProfilesController(): Controllers\BusinessProfilesController
    {
        if ($this->businessProfiles == null) {
            $this->businessProfiles = new Controllers\BusinessProfilesController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->businessProfiles;
    }

    /**
     * Returns Messages Controller
     */
    public function getMessagesController(): Controllers\MessagesController
    {
        if ($this->messages == null) {
            $this->messages = new Controllers\MessagesController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->messages;
    }

    /**
     * Returns Media Controller
     */
    public function getMediaController(): Controllers\MediaController
    {
        if ($this->media == null) {
            $this->media = new Controllers\MediaController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->media;
    }

    /**
     * Returns Phone Numbers Controller
     */
    public function getPhoneNumbersController(): Controllers\PhoneNumbersController
    {
        if ($this->phoneNumbers == null) {
            $this->phoneNumbers = new Controllers\PhoneNumbersController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->phoneNumbers;
    }

    /**
     * Returns Registration Controller
     */
    public function getRegistrationController(): Controllers\RegistrationController
    {
        if ($this->registration == null) {
            $this->registration = new Controllers\RegistrationController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->registration;
    }

    /**
     * Returns Two Step Verification Controller
     */
    public function getTwoStepVerificationController(): Controllers\TwoStepVerificationController
    {
        if ($this->twoStepVerification == null) {
            $this->twoStepVerification = new Controllers\TwoStepVerificationController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->twoStepVerification;
    }

    /**
     * A map of all baseurls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [
            Server::DEFAULT_ => 'https://graph.facebook.com/{Version}',
        ],
    ];
}