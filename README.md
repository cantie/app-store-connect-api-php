# App Store Connect APIs Client Library for PHP

This library enables the automation of actions you take in App Store Connect. Its client was modified from [Google API PHP Client](https://github.com/googleapis/google-api-php-client) and i just added some resources for App Store Connect APIs.

Currently there are some APIs supported: Apps List, Customer Reviews, and In-app Purchases APIs are on the go.

## Installation ##

The preferred method is via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require cantie/app-store-connect-api-php:dev-main
```

## Basic Example ##
```php

$client = new AppleClient();
$client->setApiKey("PATH_TO_API_KEY");
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
$results = $appstore->apps->listApps([
    "filter[bundleId]" => "YOUR_BUNDLE_ID" // filter LIKE
]);
foreach ($results->getData() as $app) {
    $appCustomerReviews = $appstore->customerReviews->listReviewsForApp($app->getId());
    echo $appCustomerReviews->getAttributes()->getReviewerNickName(), "<br /> \n";
}
```
