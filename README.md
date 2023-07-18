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
    // Get all customer reviews for each app
    $appCustomerReviews = $appstore->apps->listAppsCustomerReviews($app->getId());
    foreach ($appCustomerReviews as $appCustomerReview) {
        // Print all reviewer's nickname
        $appCustomerReview->getAttributes()->getReviewerNickName(), "<br /> \n";

        // Get response for this review
        $customerReviewResponseV1Response = $appstore->customerReviews->getCustomerReviewsResponse($appCustomerReview->getId());

        // Create or update response for this review
        $postBody = new CustomerReviewResponseV1CreateRequest();
        /* TODO: make data here */
        $customerReviewResponseV1Response = $appstore->customerReviewResponses->createCustomerReviewResponses($postBody);

        // Or just delete the response if existed
        $appstore->customerReviewResponses->deleteCustomerReviewResponses($customerReviewResponseV1Response->getData()->getId());
    }
}
```
