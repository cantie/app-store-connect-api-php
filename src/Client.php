<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cantie\AppStoreConnect;

use Cantie\AppStoreConnect\AccessToken\Generate;

use InvalidArgumentException;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use Cantie\AppStoreConnect\Http\REST;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\RequestInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler as MonologStreamHandler;
use Carbon\Carbon;

/**
 * The Apple API Client
 */
class Client
{
    const LIBVER = "1.0.0";
    const API_BASE_PATH = 'https://api.appstoreconnect.apple.com';

    /**
     * @var ClientInterface $http
     */
    private $http;

    private $apiKey;
    private $keyIdentifier;
    private $issuerId;
    private $scopes;
    protected $requestedScopes = [];

    private $jwtToken;
    private $jwtTokenExpTime = 0;

    /**
     * @var ?LoggerInterface $logger
     */
    private $logger;

    /**
     * @var boolean $deferExecution
     */
    private $deferExecution = false;

    /**
     * Construct the App Store Connect Client.
     *
     * @param array $config
     */
    public function __construct()
    {
    }

    /**
     * Get a string containing the version of the library.
     *
     * @return string
     */
    public function getLibraryVersion()
    {
        return self::LIBVER;
    }
    
    public function setApiKey($keyPath)
    {
        if (is_string($keyPath)) {
            if (!file_exists($keyPath)) {
                throw new InvalidArgumentException(sprintf('file "%s" does not exist', $keyPath));
            }

            $this->apiKey = file_get_contents($keyPath);
        }
    }

    private function getApiKey()
    {
        return $this->apiKey;
    }

    public function setKeyIdentifier($keyIdentifier)
    {
        $this->keyIdentifier = $keyIdentifier;
    }

    private function getKeyIdentifier()
    {
        return $this->keyIdentifier;
    }

    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }

    private function getIssuerId()
    {
        return $this->issuerId;
    }

    public function setScope($scopes)
    {
        $this->scopes = $scopes;
    }

    public function setScopes($scopeOrScopes)
    {
        $this->requestedScopes = [];
        $this->addScope($scopeOrScopes);
    }

    public function addScope($scopeOrScopes)
    {
        if (is_string($scopeOrScopes) && !in_array($scopeOrScopes, $this->requestedScopes)) {
            $this->requestedScopes[] = $scopeOrScopes;
        } elseif (is_array($scopeOrScopes)) {
            foreach ($scopeOrScopes as $scope) {
                $this->addScope($scope);
            }
        }
    }

    /**
     * Returns the list of scopes requested by the client
     * @return array the list of scopes
     *
     */
    public function getScopes()
    {
        return $this->requestedScopes;
    }

    public function clearToken()
    {
        $this->jwtTokenExpTime = 0;
    }

    public function getToken()
    {
        if (time() > $this->jwtTokenExpTime) {
            return $this->generateToken();
        }
        return $this->jwtToken;
    }

    public function generateToken()
    {
        $tokenGenerator = new Generate($this->getApiKey(), $this->getKeyIdentifier(), $this->getIssuerId());
        $jwtToken = $tokenGenerator->generateToken();
        // cache for 10 minutes
        $this->jwtToken = $jwtToken;
        $this->jwtTokenExpTime = Carbon::now()->addMinutes(10)->timestamp;
        return $jwtToken;
    }

    /**
     * Set the Http Client object
     * @param ClientInterface $http
     */
    public function setHttpClient(ClientInterface $http)
    {
        $this->http = $http;
    }

    /**
     * @return ClientInterface
     */
    public function getHttpClient()
    {
        if (null === $this->http) {
            $this->http = $this->createDefaultHttpClient();
        }

        return $this->http;
    }

    protected function createDefaultHttpClient()
    {
        $options = [
            'base_uri' => self::API_BASE_PATH,
            'http_errors' => false,
        ];
        return new GuzzleClient($options);
    }

    /**
     * Set the Logger object
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        if (!isset($this->logger)) {
            $this->logger = $this->createDefaultLogger();
        }

        return $this->logger;
    }

    protected function createDefaultLogger()
    {
        $logger = new Logger('apple-store-connect-client');
        $handler = new MonologStreamHandler('php://stderr', Logger::NOTICE);
        $logger->pushHandler($handler);

        return $logger;
    }

    /**
     * Declare whether making API calls should make the call immediately, or
     * return a request which can be called with ->execute();
     *
     * @param boolean $defer True if calls should not be executed right away.
     */
    public function setDefer($defer)
    {
        $this->deferExecution = $defer;
    }

    /**
     * Whether or not to return raw requests
     * @return boolean
     */
    public function shouldDefer()
    {
        return $this->deferExecution;
    }

    /**
     * Helper method to execute deferred HTTP requests.
     *
     * @template T
     * @param RequestInterface $request
     * @param class-string<T>|false|null $expectedClass
     * @throws \Google\Exception
     * @return mixed|T|ResponseInterface
     */
    public function execute(RequestInterface $request, $expectedClass = null)
    {
        $request = $request
            ->withHeader(
                'Authorization',
                sprintf(
                    'Bearer %s',
                    $this->getToken()
                )
            );

        $http = $this->getHttpClient();

        return REST::execute(
            $http,
            $request,
            $expectedClass
            // $this->config['retry'],
            // $this->config['retry_map']
        );
    }
}
