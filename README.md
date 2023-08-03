# App Store Connect APIs Client Library for PHP
[![Latest Stable Version](http://poser.pugx.org/cantie/app-store-connect-api/v)](https://packagist.org/packages/cantie/app-store-connect-api) [![Total Downloads](http://poser.pugx.org/cantie/app-store-connect-api/downloads)](https://packagist.org/packages/cantie/app-store-connect-api) [![Latest Unstable Version](http://poser.pugx.org/cantie/app-store-connect-api/v/unstable)](https://packagist.org/packages/cantie/app-store-connect-api) [![License](http://poser.pugx.org/cantie/app-store-connect-api/license)](https://packagist.org/packages/cantie/app-store-connect-api) [![PHP Version Require](http://poser.pugx.org/cantie/app-store-connect-api/require/php)](https://packagist.org/packages/cantie/app-store-connect-api)

This library enables the automation of actions you take in App Store Connect. Its client was modified from [Google API PHP Client](https://github.com/googleapis/google-api-php-client) and i just added some resources for App Store Connect APIs.


## Installation ##

The preferred method is via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require cantie/app-store-connect-api
```
## Examples ##
See the [`examples/`](examples) directory for examples of some APIs. You can
view them in your browser by running the php built-in web server.

```
$ php -S localhost:8000 -t examples/
```

And then browsing to the host and port you specified
(in the above example, `http://localhost:8000`).

### Basic Example ###
```php
use AppleClient;
use AppleService_AppStore;
use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewResponseV1CreateRequest;

$client = new AppleClient();
$client->setApiKey("PATH_TO_API_KEY");
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
// Get apps by Bundle ID
$results = $appstore->apps->listApps([
    "filter[bundleId]" => "YOUR_BUNDLE_ID" // filter LIKE
]);

// Get all customer reviews for each app
foreach ($results->getData() as $app) {
    $appCustomerReviews = $appstore->apps->listAppsCustomerReviews($app->getId());
    foreach ($appCustomerReviews as $appCustomerReview) {
        // Print all reviewer's nickname
        $appCustomerReview->getAttributes()->getReviewerNickName(), "<br /> \n";

        // Get response for this review
        $customerReviewResponseV1Response = $appstore->customerReviews->getCustomerReviewsResponse($appCustomerReview->getId());

        // Create or update response for this review
        $postBody = new CustomerReviewResponseV1CreateRequest([
            'data' => [
                'attributes' => [
                    'responseBody' => "YOUR_REPLY_TEXT_HERE"
                ],
                'relationships' => [
                    'review' => [
                        'data' => [
                            'id' => $appCustomerReview->getId()
                        ]
                    ]
                ]
            ]
        ]);
        $customerReviewResponseV1Response = $appstore->customerReviewResponses->createCustomerReviewResponses($postBody);

        // Or just delete the response if existed
        $appstore->customerReviewResponses->deleteCustomerReviewResponses($customerReviewResponseV1Response->getData()->getId());
    }
}
```

### Create new client ###
```php
use AppleClient;

$client = new AppleClient();
$client->setApiKey("PATH_TO_API_KEY");
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);
// Optional: create new JWT token. If skip this step, token are auto generated when first request are sent
$client->generateToken();
```

### Making a request ###
For almost all request except upload service, we use AppStore service to handle
```php
use AppleService_AppStore;
// All resources and their methods parameters are listed in src/Service/AppStore.php
$appstore = new AppleService_AppStore($client);
// Make request, for example we call request for an Apps's resources
$appstore->apps->listAppsAppStoreVersions($APP_ID_HERE, $OPTIONAL_PARAMS);
```
For detail, you can view in src/Services/AppStore/Resource/*

### Aliases ###
Basic classes are aliased for convenient use, see more at src/aliases.php

```php
$classMap = [
    'Cantie\\AppStoreConnect\\Client' => 'AppleClient',
    'Cantie\\AppStoreConnect\\Service' => 'AppleService',
    'Cantie\\AppStoreConnect\\Services\\AppStore' => 'AppleService_AppStore',
    'Cantie\\AppStoreConnect\\Services\\Upload' => 'AppleService_Upload'
];
```

### Upload assets to App Store Connect ###
In this example we will upload one screenshot file to app screenshot set
```php
// Firstly, we get app screenshot set step by step, we can reduce steps by include[] parameters in query
use AppleService_Upload;
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotUpdateRequest;

$appId = $app->getId(); // $app from previous example
$appStoreVersions = $appstore->apps->listAppsAppStoreVersions($appId);
// Get first app store version id;
$appStoreVersionId = $appStoreVersions->getData()[0]->getId();
// Get list localizations of this version
$appStoreVersionLocalizations = $appstore->appStoreVersions->listAppStoreVersionsAppStoreVersionLocalizations($appStoreVersionId);
// Get first localization id
$appStoreVersionLocalizationId = $appStoreVersionLocalizations->getData()[0]->getId();
// Get list app screenshot sets for this localization
$appScreenshotSets = $appstore->appStoreVersionLocalizations->listAppStoreVersionLocalizationsAppScreenshotSets($appStoreVersionLocalizationId);
// Get first set id
$appScreenshotSetId = $appScreenshotSets->getData()[0]->getId();

// Now, we make an asset reservation
$fileName = "YOUR_FILE_NAME";
$filePath = "FULL_PATH_TO_YOUR_FILE" . $fileName;
$requestCreateAppScreenshot = new AppScreenshotCreateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'attributes' => [
            'fileSize' => filesize($filePath),
            'fileName' => $fileName
        ],
        'relationships' => [
            'appScreenshotSet' => [
                'data' => [
                    'type' => 'appScreenshotSets',
                    'id' => $appScreenshotSetId
                ]
            ]
        ]
    ]
]);
// Create new app screenshot
$appScreenshot = $appstore->appScreenshots->createAppScreenshots($requestCreateAppScreenshot);
$appScreenshotId = $appScreenshot->getData()->getId();
// Follow instruction from UploadOperation[] return in $appScreenshot to upload part or whole asset file
// We can upload parts of your asset concurrently
foreach ($appScreenshot->getData()->getAttributes()->getUploadOperations() as $uploadOperation) {
    $upload = new AppleService_Upload($client, $uploadOperation); // $client from above example
    $ret = $upload->uploadAssets->upload($uploadOperation, $filePath);
}
// Finally, commit the reservation
$appScreenshotUpdateRequest = new AppScreenshotUpdateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'id' => $appScreenshotId,
        'attributes' => [
            'sourceFileChecksum' => md5_file($filePath),
            'uploaded' => true
        ]
    ]
]);
$ret = $appstore->appScreenshots->updateAppScreenshots($appScreenshotId, $appScreenshotUpdateRequest); 
```

### Initialize classes ###
All object classes are extended from Model.php can be initialized by an array of attribute names and values, as previous example:
```php
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotUpdateRequest;
$appScreenshotUpdateRequest = new AppScreenshotUpdateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'id' => $appScreenshotId,
        'attributes' => [
            'sourceFileChecksum' => md5_file($filePath),
            'uploaded' => true
        ]
    ]
]);
```

### Caching ###
JWT token are cached for 10 minutes and only be created if doesn't existed or has been expired. JWT token is not shared between clients. Each client has its own token as defined in src/Client.php
```php
public function generateToken()
{
    $tokenGenerator = new Generate($this->getApiKey(), $this->getKeyIdentifier(), $this->getIssuerId());
    $jwtToken = $tokenGenerator->generateToken();
    // cache for 10 minutes
    $this->jwtToken = $jwtToken;
    $this->jwtTokenExpTime = Carbon::now()->addMinutes(10)->timestamp;
    return $jwtToken;
}
```
