<?php

namespace Cantie\AppStoreConnect\Services;

class AppStore extends \Cantie\AppStoreConnect\Service
{

    public $apps;
    public $customerReviews;
    public $inAppPurchases;

    public function __construct($clientOrConfig = [], $rootUrl = null)
    {
        parent::__construct($clientOrConfig);
        $this->rootUrl = $rootUrl ?: 'https://api.appstoreconnect.apple.com';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = 'v1';
        $this->serviceName = 'appstore';

        $this->apps = new AppStore\Resource\Apps(
            $this,
            $this->serviceName,
            'apps',
            [
                'methods' => [
                    'listApps' => [
                        'path' => 'v1/apps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[bundleId]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[sku]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer',
                                'deprecated' => true
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appInfos]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[endUserLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array',
                                'deprecated' => true
                            ],
                            'fields[appPrices]' => [
                                'location' => 'query',
                                'type' => 'array',
                                'deprecated' => true
                            ],
                            'fields[appPreOrders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[perfPowerMetrics]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersions.platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersions.appStoreState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'exists[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ],
                            'limit[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appClips]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEvents]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGracePeriods]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[inAppPurchasesV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[appPriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ],
                    ],
                ]
            ]
        );
        $this->customerReviews = new AppStore\Resource\CustomerReviews(
            $this,
            $this->serviceName,
            'apps',
            [
                'methods' => [
                    'listReviewsForApp' => [
                        'path' => 'v1/apps/{id}/customerReviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[rating]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'exists[publishedResponse]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ]
                        ]
                    ],
                    'listReviewsForAppStoreVersion' => [
                        'path' => 'v1/appStoreVersions/{id}/customerReviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[rating]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'exists[publishedResponse]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ],
                        ]
                    ],
                    'readReviewInfo' => [
                        'path' => 'v1/customerReviews/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ],
                    ],
                    'getReviewResponse' => [
                        'path' => 'v1/customerReviews/{id}/response',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'readReviewResponseInfo' => [
                        'path' => 'v1/customerReviewResponses/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'responseReview' => [
                        'path' => 'v1/customerReviewResponses',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'deleteResponseReview' => [
                        'path' => 'v1/customerReviewResponses/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ]
                ]
            ]
        );
        $this->inAppPurchases = new AppStore\Resource\InAppPurchases(
            $this,
            $this->serviceName,
            'apps',
            [
                'methods' => [
                    'createIAP' => [
                        'path' => 'v2/inAppPurchases',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'getIAP' => [
                        'path' => 'v2/inAppPurchases/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseContents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[pricePoints]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[inAppPurchaseAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'listIAPs' => [
                        'path' => 'v1/apps/{id}/inAppPurchasesV2',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseContents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[inAppPurchaseType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[productId]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'updateIAP' => [
                        'path' => 'v2/inAppPurchases/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ],
                    'deleteIAP' => [
                        'path' => 'v2/inAppPurchases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ],
                    'listPricePoints' => [
                        'path' => 'v2/inAppPurchases/{id}/pricePoints',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[priceTier]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'getPromotedPurchase' => [
                        'path' => 'v2/inAppPurchases/{id}/promotedPurchase',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchaseImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[promotionImages]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'listLocalizations' => [
                        'path' => 'v2/inAppPurchases/{id}/inAppPurchaseLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'getReviewScreenshot' => [
                        'path' => 'v2/inAppPurchases/{id}/appStoreReviewScreenshot',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'createReviewSubmission' => [
                        'path' => 'v1/inAppPurchaseSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'getPriceSchedule' => [
                        'path' => 'v2/inAppPurchases/{id}/iapPriceSchedule',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchasePriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[manualPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[automaticPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'getContentByIAPId' => [
                        'path' => 'v2/inAppPurchases/{id}/content',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseContents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'getContentByContentId' => [
                        'path' => 'v1/inAppPurchaseContents/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseContents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'getAvailability' => [
                        'path' => 'v2/inAppPurchases/{id}/inAppPurchaseAvailability',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'createLocalization' => [
                        'path' => 'v1/inAppPurchaseLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'getLocalization' => [
                        'path' => 'v1/inAppPurchaseLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'updateLocalization' => [
                        'path' => 'v1/inAppPurchaseLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ],
                    'deleteLocalization' => [
                        'path' => 'v1/inAppPurchaseLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ],
                    'getPriceSchedulePrice' => [
                        'path' => 'v1/inAppPurchasePriceSchedules/{id}/manualPrices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'createScheduledPrice' => [
                        'path' => 'v1/inAppPurchasePriceSchedules',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'listAutoGeneratedPrices' => [
                        'path' => 'v1/inAppPurchasePriceSchedules/{id}/automaticPrices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'getBaseTerritory' => [
                        'path' => 'v1/inAppPurchasePriceSchedules/{id}/baseTerritory',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'getAvailabilityV1' => [
                        'path' => 'v1/inAppPurchaseAvailabilities/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'listAvailableTerritories' => [
                        'path' => 'v1/inAppPurchaseAvailabilities/{id}/availableTerritories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ]
                        ]
                    ],
                    'updateAvailableTerritory' => [
                        'path' => 'v1/inAppPurchaseAvailabilities',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'getReviewScreenshotV1' => [
                        'path' => 'v1/inAppPurchaseAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchaseAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ]
                        ]
                    ],
                    'createReviewScreenshot' => [
                        'path' => 'v1/inAppPurchaseAppStoreReviewScreenshots',
                        'httpMethod' => 'POST',
                        'parameters' => []
                    ],
                    'commitReviewScreenshot' => [
                        'path' => 'v1/inAppPurchaseAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ],
                    'deleteReviewScreenshot' => [
                        'path' => 'v1/inAppPurchaseAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ]
                        ]
                    ]
                ]
            ]
        );
    }
}

// class_alias(AppStore::class, 'AppleService_AppStore');
