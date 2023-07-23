# App Store Connect APIs Client Library for PHP
![Packagist Downloads (custom server)](https://img.shields.io/packagist/dt/cantie/app-store-connect-api)
![GitHub](https://img.shields.io/github/license/cantie/app-store-connect-api)
![GitHub tag (with filter)](https://img.shields.io/github/v/tag/cantie/app-store-connect-api)

This library enables the automation of actions you take in App Store Connect. Its client was modified from [Google API PHP Client](https://github.com/googleapis/google-api-php-client) and i just added some resources for App Store Connect APIs.


## Installation ##

The preferred method is via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require cantie/app-store-connect-api
```

## Basic Example ##
```php

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

## Upload assets to App Store Connect ##
```php
// In this example we will upload one screenshot file to app screenshot set
// Firstly, we get app screenshot set step by step, we can reducde steps by include[] parameters in query
$appId = $app>getId(); // $app from previous example
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

