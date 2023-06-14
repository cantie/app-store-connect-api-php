<?php

if (class_exists('AppleClient', false)) {
    // Prevent error with preloading in PHP 7.4
    // @see https://github.com/googleapis/google-api-php-client/issues/1976
    return;
}

$classMap = [
    'Cantie\\AppStoreConnect\\Client' => 'AppleClient',
    'Cantie\\AppStoreConnect\\Service' => 'AppleService',
    'Cantie\\AppStoreConnect\\AccessToken\\Generate' => 'AppleAccessTokenGenerate',
    'Cantie\\AppStoreConnect\\Services\\AppStore' => 'AppleService_AppStore'
];

foreach ($classMap as $class => $alias) {
    class_alias($class, $alias);
}

/** @phpstan-ignore-next-line */
if (\false) {
    class AppleClient extends \Cantie\AppStoreConnect\Client {}
    class AppleAccessTokenGenerate extends \Cantie\AppStoreConnect\AccessToken\Generate {}
    class AppleService extends \Cantie\AppStoreConnect\Service {}
    class AppleService_AppStore extends \Cantie\AppStoreConnect\Services\AppStore {}
}
