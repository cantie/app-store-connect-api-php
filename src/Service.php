<?php

namespace Cantie\AppStoreConnect;

use TypeError;

class Service
{
    public $batchPath;
    public $rootUrl;
    public $version;
    public $servicePath;
    public $serviceName;
    public $availableScopes;
    public $resource;
    private $client;

    public function __construct($clientOrConfig = [])
    {
        if ($clientOrConfig instanceof Client) {
            $this->client = $clientOrConfig;
        } elseif (is_array($clientOrConfig)) {
            $this->client = new Client($clientOrConfig ?: []);
        } else {
            $errorMessage = 'constructor must be array or instance of AppleClient';
            if (class_exists('TypeError')) {
                throw new TypeError($errorMessage);
            }
            trigger_error($errorMessage, E_USER_ERROR);
        }
    }

    public function getClient()
    {
        return $this->client;
    }
}
