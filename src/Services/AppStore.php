<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services;

class AppStore extends \Cantie\AppStoreConnect\Service
{

	public $actors;
	public $ageRatingDeclarations;
	public $alternativeDistributionDomains;
	public $alternativeDistributionKeys;
	public $alternativeDistributionPackageDeltas;
	public $alternativeDistributionPackageVariants;
	public $alternativeDistributionPackageVersions;
	public $alternativeDistributionPackages;
	public $analyticsReportInstances;
	public $analyticsReportRequests;
	public $analyticsReportSegments;
	public $analyticsReports;
	public $appAvailabilities;
	public $appCategories;
	public $appClipAdvancedExperienceImages;
	public $appClipAdvancedExperiences;
	public $appClipAppStoreReviewDetails;
	public $appClipDefaultExperienceLocalizations;
	public $appClipDefaultExperiences;
	public $appClipHeaderImages;
	public $appClips;
	public $appCustomProductPageLocalizations;
	public $appCustomProductPageVersions;
	public $appCustomProductPages;
	public $appEncryptionDeclarationDocuments;
	public $appEncryptionDeclarations;
	public $appEventLocalizations;
	public $appEventScreenshots;
	public $appEventVideoClips;
	public $appEvents;
	public $appInfoLocalizations;
	public $appInfos;
	public $appPreOrders;
	public $appPreviewSets;
	public $appPreviews;
	public $appPricePoints;
	public $appPriceSchedules;
	public $appScreenshotSets;
	public $appScreenshots;
	public $appStoreReviewAttachments;
	public $appStoreReviewDetails;
	public $appStoreVersionExperimentTreatmentLocalizations;
	public $appStoreVersionExperimentTreatments;
	public $appStoreVersionExperiments;
	public $appStoreVersionLocalizations;
	public $appStoreVersionPhasedReleases;
	public $appStoreVersionPromotions;
	public $appStoreVersionReleaseRequests;
	public $appStoreVersionSubmissions;
	public $appStoreVersions;
	public $apps;
	public $betaAppClipInvocationLocalizations;
	public $betaAppClipInvocations;
	public $betaAppLocalizations;
	public $betaAppReviewDetails;
	public $betaAppReviewSubmissions;
	public $betaBuildLocalizations;
	public $betaGroups;
	public $betaLicenseAgreements;
	public $betaTesterInvitations;
	public $betaTesters;
	public $buildBetaDetails;
	public $buildBetaNotifications;
	public $builds;
	public $bundleIdCapabilities;
	public $bundleIds;
	public $certificates;
	public $ciArtifacts;
	public $ciBuildActions;
	public $ciBuildRuns;
	public $ciIssues;
	public $ciMacOsVersions;
	public $ciProducts;
	public $ciTestResults;
	public $ciWorkflows;
	public $ciXcodeVersions;
	public $customerReviewResponses;
	public $customerReviews;
	public $devices;
	public $endAppAvailabilityPreOrders;
	public $endUserLicenseAgreements;
	public $financeReports;
	public $gameCenterAchievementImages;
	public $gameCenterAchievementLocalizations;
	public $gameCenterAchievementReleases;
	public $gameCenterAchievements;
	public $gameCenterAppVersions;
	public $gameCenterDetails;
	public $gameCenterGroups;
	public $gameCenterLeaderboardEntrySubmissions;
	public $gameCenterLeaderboardImages;
	public $gameCenterLeaderboardLocalizations;
	public $gameCenterLeaderboardReleases;
	public $gameCenterLeaderboardSetImages;
	public $gameCenterLeaderboardSetLocalizations;
	public $gameCenterLeaderboardSetMemberLocalizations;
	public $gameCenterLeaderboardSetReleases;
	public $gameCenterLeaderboardSets;
	public $gameCenterLeaderboards;
	public $gameCenterMatchmakingQueues;
	public $gameCenterMatchmakingRuleSetTests;
	public $gameCenterMatchmakingRuleSets;
	public $gameCenterMatchmakingRules;
	public $gameCenterMatchmakingTeams;
	public $gameCenterPlayerAchievementSubmissions;
	public $inAppPurchaseAppStoreReviewScreenshots;
	public $inAppPurchaseAvailabilities;
	public $inAppPurchaseContents;
	public $inAppPurchaseLocalizations;
	public $inAppPurchasePriceSchedules;
	public $inAppPurchaseSubmissions;
	public $inAppPurchases;
	public $marketplaceDomains;
	public $marketplaceSearchDetails;
	public $marketplaceWebhooks;
	public $preReleaseVersions;
	public $profiles;
	public $promotedPurchaseImages;
	public $promotedPurchases;
	public $reviewSubmissionItems;
	public $reviewSubmissions;
	public $routingAppCoverages;
	public $salesReports;
	public $sandboxTesters;
	public $sandboxTestersClearPurchaseHistoryRequest;
	public $scmGitReferences;
	public $scmProviders;
	public $scmPullRequests;
	public $scmRepositories;
	public $subscriptionAppStoreReviewScreenshots;
	public $subscriptionAvailabilities;
	public $subscriptionGracePeriods;
	public $subscriptionGroupLocalizations;
	public $subscriptionGroupSubmissions;
	public $subscriptionGroups;
	public $subscriptionIntroductoryOffers;
	public $subscriptionLocalizations;
	public $subscriptionOfferCodeCustomCodes;
	public $subscriptionOfferCodeOneTimeUseCodes;
	public $subscriptionOfferCodes;
	public $subscriptionPricePoints;
	public $subscriptionPrices;
	public $subscriptionPromotionalOffers;
	public $subscriptionSubmissions;
	public $subscriptions;
	public $territories;
	public $territoryAvailabilities;
	public $userInvitations;
	public $users;
	public $buildBundles;
	public $diagnosticSignatures;
	public $gameCenterEnabledVersions;


    public function __construct($clientOrConfig = [], $rootUrl = null)
    {
        parent::__construct($clientOrConfig);
        $this->rootUrl = $rootUrl ?: 'https://api.appstoreconnect.apple.com/';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = 'v3.5';
        $this->serviceName = 'appstore';
        
        $this->actors = new AppStore\Resource\Actors(
            $this,
            $this->serviceName,
            'actors',
            [
                'methods' => [
                    'listActors' => [
                        'path' => '/v1/actors',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[actors]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getActors' => [
                        'path' => '/v1/actors/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[actors]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ageRatingDeclarations = new AppStore\Resource\AgeRatingDeclarations(
            $this,
            $this->serviceName,
            'ageRatingDeclarations',
            [
                'methods' => [
                    'updateAgeRatingDeclarations' => [
                        'path' => '/v1/ageRatingDeclarations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->alternativeDistributionDomains = new AppStore\Resource\AlternativeDistributionDomains(
            $this,
            $this->serviceName,
            'alternativeDistributionDomains',
            [
                'methods' => [
                    'listAlternativeDistributionDomains' => [
                        'path' => '/v1/alternativeDistributionDomains',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[alternativeDistributionDomains]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createAlternativeDistributionDomains' => [
                        'path' => '/v1/alternativeDistributionDomains',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAlternativeDistributionDomains' => [
                        'path' => '/v1/alternativeDistributionDomains/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionDomains]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteAlternativeDistributionDomains' => [
                        'path' => '/v1/alternativeDistributionDomains/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->alternativeDistributionKeys = new AppStore\Resource\AlternativeDistributionKeys(
            $this,
            $this->serviceName,
            'alternativeDistributionKeys',
            [
                'methods' => [
                    'listAlternativeDistributionKeys' => [
                        'path' => '/v1/alternativeDistributionKeys',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'exists[app]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ],
                            'fields[alternativeDistributionKeys]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createAlternativeDistributionKeys' => [
                        'path' => '/v1/alternativeDistributionKeys',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAlternativeDistributionKeys' => [
                        'path' => '/v1/alternativeDistributionKeys/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionKeys]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteAlternativeDistributionKeys' => [
                        'path' => '/v1/alternativeDistributionKeys/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->alternativeDistributionPackageDeltas = new AppStore\Resource\AlternativeDistributionPackageDeltas(
            $this,
            $this->serviceName,
            'alternativeDistributionPackageDeltas',
            [
                'methods' => [
                    'getAlternativeDistributionPackageDeltas' => [
                        'path' => '/v1/alternativeDistributionPackageDeltas/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackageDeltas]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->alternativeDistributionPackageVariants = new AppStore\Resource\AlternativeDistributionPackageVariants(
            $this,
            $this->serviceName,
            'alternativeDistributionPackageVariants',
            [
                'methods' => [
                    'getAlternativeDistributionPackageVariants' => [
                        'path' => '/v1/alternativeDistributionPackageVariants/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackageVariants]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->alternativeDistributionPackageVersions = new AppStore\Resource\AlternativeDistributionPackageVersions(
            $this,
            $this->serviceName,
            'alternativeDistributionPackageVersions',
            [
                'methods' => [
                    'getAlternativeDistributionPackageVersions' => [
                        'path' => '/v1/alternativeDistributionPackageVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageVariants]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageDeltas]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[deltas]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[variants]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAlternativeDistributionPackageVersionsDeltas' => [
                        'path' => '/v1/alternativeDistributionPackageVersions/{id}/deltas',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackageDeltas]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAlternativeDistributionPackageVersionsVariants' => [
                        'path' => '/v1/alternativeDistributionPackageVersions/{id}/variants',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackageVariants]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->alternativeDistributionPackages = new AppStore\Resource\AlternativeDistributionPackages(
            $this,
            $this->serviceName,
            'alternativeDistributionPackages',
            [
                'methods' => [
                    'createAlternativeDistributionPackages' => [
                        'path' => '/v1/alternativeDistributionPackages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAlternativeDistributionPackages' => [
                        'path' => '/v1/alternativeDistributionPackages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[versions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAlternativeDistributionPackagesVersions' => [
                        'path' => '/v1/alternativeDistributionPackages/{id}/versions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageVariants]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageDeltas]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[variants]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[deltas]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->analyticsReportInstances = new AppStore\Resource\AnalyticsReportInstances(
            $this,
            $this->serviceName,
            'analyticsReportInstances',
            [
                'methods' => [
                    'getAnalyticsReportInstances' => [
                        'path' => '/v1/analyticsReportInstances/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[analyticsReportInstances]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReportSegments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAnalyticsReportInstancesSegments' => [
                        'path' => '/v1/analyticsReportInstances/{id}/segments',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[analyticsReportSegments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->analyticsReportRequests = new AppStore\Resource\AnalyticsReportRequests(
            $this,
            $this->serviceName,
            'analyticsReportRequests',
            [
                'methods' => [
                    'createAnalyticsReportRequests' => [
                        'path' => '/v1/analyticsReportRequests',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAnalyticsReportRequests' => [
                        'path' => '/v1/analyticsReportRequests/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[analyticsReportRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReports]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[reports]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteAnalyticsReportRequests' => [
                        'path' => '/v1/analyticsReportRequests/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAnalyticsReportRequestsReports' => [
                        'path' => '/v1/analyticsReportRequests/{id}/reports',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[category]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReports]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->analyticsReportSegments = new AppStore\Resource\AnalyticsReportSegments(
            $this,
            $this->serviceName,
            'analyticsReportSegments',
            [
                'methods' => [
                    'getAnalyticsReportSegments' => [
                        'path' => '/v1/analyticsReportSegments/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[analyticsReportSegments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->analyticsReports = new AppStore\Resource\AnalyticsReports(
            $this,
            $this->serviceName,
            'analyticsReports',
            [
                'methods' => [
                    'getAnalyticsReports' => [
                        'path' => '/v1/analyticsReports/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[analyticsReports]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReportInstances]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAnalyticsReportsInstances' => [
                        'path' => '/v1/analyticsReports/{id}/instances',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[granularity]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[processingDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReportInstances]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appAvailabilities = new AppStore\Resource\AppAvailabilities(
            $this,
            $this->serviceName,
            'appAvailabilities',
            [
                'methods' => [
                    'createAppAvailabilitiesV2' => [
                        'path' => '/v2/appAvailabilities',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppAvailabilitiesV2' => [
                        'path' => '/v2/appAvailabilities/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territoryAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[territoryAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createAppAvailabilities' => [
                        'path' => '/v1/appAvailabilities',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppAvailabilities' => [
                        'path' => '/v1/appAvailabilities/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAppAvailabilitiesV2TerritoryAvailabilities' => [
                        'path' => '/v2/appAvailabilities/{id}/territoryAvailabilities',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[territoryAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppAvailabilitiesAvailableTerritories' => [
                        'path' => '/v1/appAvailabilities/{id}/availableTerritories',
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
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appCategories = new AppStore\Resource\AppCategories(
            $this,
            $this->serviceName,
            'appCategories',
            [
                'methods' => [
                    'listAppCategories' => [
                        'path' => '/v1/appCategories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[platforms]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'exists[parent]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppCategories' => [
                        'path' => '/v1/appCategories/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppCategoriesParent' => [
                        'path' => '/v1/appCategories/{id}/parent',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppCategoriesSubcategories' => [
                        'path' => '/v1/appCategories/{id}/subcategories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClipAdvancedExperienceImages = new AppStore\Resource\AppClipAdvancedExperienceImages(
            $this,
            $this->serviceName,
            'appClipAdvancedExperienceImages',
            [
                'methods' => [
                    'createAppClipAdvancedExperienceImages' => [
                        'path' => '/v1/appClipAdvancedExperienceImages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppClipAdvancedExperienceImages' => [
                        'path' => '/v1/appClipAdvancedExperienceImages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipAdvancedExperienceImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppClipAdvancedExperienceImages' => [
                        'path' => '/v1/appClipAdvancedExperienceImages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClipAdvancedExperiences = new AppStore\Resource\AppClipAdvancedExperiences(
            $this,
            $this->serviceName,
            'appClipAdvancedExperiences',
            [
                'methods' => [
                    'createAppClipAdvancedExperiences' => [
                        'path' => '/v1/appClipAdvancedExperiences',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppClipAdvancedExperiences' => [
                        'path' => '/v1/appClipAdvancedExperiences/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipAdvancedExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppClipAdvancedExperiences' => [
                        'path' => '/v1/appClipAdvancedExperiences/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClipAppStoreReviewDetails = new AppStore\Resource\AppClipAppStoreReviewDetails(
            $this,
            $this->serviceName,
            'appClipAppStoreReviewDetails',
            [
                'methods' => [
                    'createAppClipAppStoreReviewDetails' => [
                        'path' => '/v1/appClipAppStoreReviewDetails',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppClipAppStoreReviewDetails' => [
                        'path' => '/v1/appClipAppStoreReviewDetails/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipAppStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppClipAppStoreReviewDetails' => [
                        'path' => '/v1/appClipAppStoreReviewDetails/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClipDefaultExperienceLocalizations = new AppStore\Resource\AppClipDefaultExperienceLocalizations(
            $this,
            $this->serviceName,
            'appClipDefaultExperienceLocalizations',
            [
                'methods' => [
                    'createAppClipDefaultExperienceLocalizations' => [
                        'path' => '/v1/appClipDefaultExperienceLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppClipDefaultExperienceLocalizations' => [
                        'path' => '/v1/appClipDefaultExperienceLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipHeaderImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppClipDefaultExperienceLocalizations' => [
                        'path' => '/v1/appClipDefaultExperienceLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppClipDefaultExperienceLocalizations' => [
                        'path' => '/v1/appClipDefaultExperienceLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppClipDefaultExperienceLocalizationsAppClipHeaderImage' => [
                        'path' => '/v1/appClipDefaultExperienceLocalizations/{id}/appClipHeaderImage',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipHeaderImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClipDefaultExperiences = new AppStore\Resource\AppClipDefaultExperiences(
            $this,
            $this->serviceName,
            'appClipDefaultExperiences',
            [
                'methods' => [
                    'createAppClipDefaultExperiences' => [
                        'path' => '/v1/appClipDefaultExperiences',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppClipDefaultExperiences' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAppStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppClipDefaultExperiences' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppClipDefaultExperiences' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppClipDefaultExperiencesAppClipAppStoreReviewDetail' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}/appClipAppStoreReviewDetail',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipAppStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppClipDefaultExperiencesAppClipDefaultExperienceLocalizations' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}/appClipDefaultExperienceLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipHeaderImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppClipDefaultExperiencesReleaseWithAppStoreVersionLinkages' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}/relationships/releaseWithAppStoreVersion',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateAppClipDefaultExperiencesReleaseWithAppStoreVersion' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}/relationships/releaseWithAppStoreVersion',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppClipDefaultExperiencesReleaseWithAppStoreVersion' => [
                        'path' => '/v1/appClipDefaultExperiences/{id}/releaseWithAppStoreVersion',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionPhasedReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClipHeaderImages = new AppStore\Resource\AppClipHeaderImages(
            $this,
            $this->serviceName,
            'appClipHeaderImages',
            [
                'methods' => [
                    'createAppClipHeaderImages' => [
                        'path' => '/v1/appClipHeaderImages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppClipHeaderImages' => [
                        'path' => '/v1/appClipHeaderImages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipHeaderImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppClipHeaderImages' => [
                        'path' => '/v1/appClipHeaderImages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppClipHeaderImages' => [
                        'path' => '/v1/appClipHeaderImages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appClips = new AppStore\Resource\AppClips(
            $this,
            $this->serviceName,
            'appClips',
            [
                'methods' => [
                    'getAppClips' => [
                        'path' => '/v1/appClips/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAdvancedExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAppClipsAppClipAdvancedExperiences' => [
                        'path' => '/v1/appClips/{id}/appClipAdvancedExperiences',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[action]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[placeStatus]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[status]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAdvancedExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAdvancedExperienceImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAdvancedExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppClipsAppClipDefaultExperiences' => [
                        'path' => '/v1/appClips/{id}/appClipDefaultExperiences',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'exists[releaseWithAppStoreVersion]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAppStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appCustomProductPageLocalizations = new AppStore\Resource\AppCustomProductPageLocalizations(
            $this,
            $this->serviceName,
            'appCustomProductPageLocalizations',
            [
                'methods' => [
                    'createAppCustomProductPageLocalizations' => [
                        'path' => '/v1/appCustomProductPageLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppCustomProductPageLocalizations' => [
                        'path' => '/v1/appCustomProductPageLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppCustomProductPageLocalizations' => [
                        'path' => '/v1/appCustomProductPageLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppCustomProductPageLocalizations' => [
                        'path' => '/v1/appCustomProductPageLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppCustomProductPageLocalizationsAppPreviewSets' => [
                        'path' => '/v1/appCustomProductPageLocalizations/{id}/appPreviewSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[previewType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionExperimentTreatmentLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppCustomProductPageLocalizationsAppScreenshotSets' => [
                        'path' => '/v1/appCustomProductPageLocalizations/{id}/appScreenshotSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[screenshotDisplayType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionExperimentTreatmentLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appCustomProductPageVersions = new AppStore\Resource\AppCustomProductPageVersions(
            $this,
            $this->serviceName,
            'appCustomProductPageVersions',
            [
                'methods' => [
                    'createAppCustomProductPageVersions' => [
                        'path' => '/v1/appCustomProductPageVersions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppCustomProductPageVersions' => [
                        'path' => '/v1/appCustomProductPageVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppCustomProductPageVersions' => [
                        'path' => '/v1/appCustomProductPageVersions/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppCustomProductPageVersionsAppCustomProductPageLocalizations' => [
                        'path' => '/v1/appCustomProductPageVersions/{id}/appCustomProductPageLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appCustomProductPages = new AppStore\Resource\AppCustomProductPages(
            $this,
            $this->serviceName,
            'appCustomProductPages',
            [
                'methods' => [
                    'createAppCustomProductPages' => [
                        'path' => '/v1/appCustomProductPages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppCustomProductPages' => [
                        'path' => '/v1/appCustomProductPages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppCustomProductPages' => [
                        'path' => '/v1/appCustomProductPages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppCustomProductPages' => [
                        'path' => '/v1/appCustomProductPages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppCustomProductPagesAppCustomProductPageVersions' => [
                        'path' => '/v1/appCustomProductPages/{id}/appCustomProductPageVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appEncryptionDeclarationDocuments = new AppStore\Resource\AppEncryptionDeclarationDocuments(
            $this,
            $this->serviceName,
            'appEncryptionDeclarationDocuments',
            [
                'methods' => [
                    'createAppEncryptionDeclarationDocuments' => [
                        'path' => '/v1/appEncryptionDeclarationDocuments',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppEncryptionDeclarationDocuments' => [
                        'path' => '/v1/appEncryptionDeclarationDocuments/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEncryptionDeclarationDocuments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppEncryptionDeclarationDocuments' => [
                        'path' => '/v1/appEncryptionDeclarationDocuments/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appEncryptionDeclarations = new AppStore\Resource\AppEncryptionDeclarations(
            $this,
            $this->serviceName,
            'appEncryptionDeclarations',
            [
                'methods' => [
                    'listAppEncryptionDeclarations' => [
                        'path' => '/v1/appEncryptionDeclarations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarationDocuments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppEncryptionDeclarations' => [
                        'path' => '/v1/appEncryptionDeclarations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarationDocuments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppEncryptionDeclarationsApp' => [
                        'path' => '/v1/appEncryptionDeclarations/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppEncryptionDeclarationsAppEncryptionDeclarationDocument' => [
                        'path' => '/v1/appEncryptionDeclarations/{id}/appEncryptionDeclarationDocument',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEncryptionDeclarationDocuments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'createListAppEncryptionDeclarationsBuilds' => [
                        'path' => '/v1/appEncryptionDeclarations/{id}/relationships/builds',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appEventLocalizations = new AppStore\Resource\AppEventLocalizations(
            $this,
            $this->serviceName,
            'appEventLocalizations',
            [
                'methods' => [
                    'createAppEventLocalizations' => [
                        'path' => '/v1/appEventLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppEventLocalizations' => [
                        'path' => '/v1/appEventLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEventLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventVideoClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appEventScreenshots]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEventVideoClips]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppEventLocalizations' => [
                        'path' => '/v1/appEventLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppEventLocalizations' => [
                        'path' => '/v1/appEventLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppEventLocalizationsAppEventScreenshots' => [
                        'path' => '/v1/appEventLocalizations/{id}/appEventScreenshots',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEventScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppEventLocalizationsAppEventVideoClips' => [
                        'path' => '/v1/appEventLocalizations/{id}/appEventVideoClips',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEventVideoClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appEventScreenshots = new AppStore\Resource\AppEventScreenshots(
            $this,
            $this->serviceName,
            'appEventScreenshots',
            [
                'methods' => [
                    'createAppEventScreenshots' => [
                        'path' => '/v1/appEventScreenshots',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppEventScreenshots' => [
                        'path' => '/v1/appEventScreenshots/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEventScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppEventScreenshots' => [
                        'path' => '/v1/appEventScreenshots/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppEventScreenshots' => [
                        'path' => '/v1/appEventScreenshots/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appEventVideoClips = new AppStore\Resource\AppEventVideoClips(
            $this,
            $this->serviceName,
            'appEventVideoClips',
            [
                'methods' => [
                    'createAppEventVideoClips' => [
                        'path' => '/v1/appEventVideoClips',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppEventVideoClips' => [
                        'path' => '/v1/appEventVideoClips/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEventVideoClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppEventVideoClips' => [
                        'path' => '/v1/appEventVideoClips/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppEventVideoClips' => [
                        'path' => '/v1/appEventVideoClips/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appEvents = new AppStore\Resource\AppEvents(
            $this,
            $this->serviceName,
            'appEvents',
            [
                'methods' => [
                    'createAppEvents' => [
                        'path' => '/v1/appEvents',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppEvents' => [
                        'path' => '/v1/appEvents/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppEvents' => [
                        'path' => '/v1/appEvents/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppEvents' => [
                        'path' => '/v1/appEvents/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppEventsLocalizations' => [
                        'path' => '/v1/appEvents/{id}/localizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEventScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventVideoClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEventScreenshots]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEventVideoClips]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appInfoLocalizations = new AppStore\Resource\AppInfoLocalizations(
            $this,
            $this->serviceName,
            'appInfoLocalizations',
            [
                'methods' => [
                    'createAppInfoLocalizations' => [
                        'path' => '/v1/appInfoLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppInfoLocalizations' => [
                        'path' => '/v1/appInfoLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appInfoLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppInfoLocalizations' => [
                        'path' => '/v1/appInfoLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppInfoLocalizations' => [
                        'path' => '/v1/appInfoLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appInfos = new AppStore\Resource\AppInfos(
            $this,
            $this->serviceName,
            'appInfos',
            [
                'methods' => [
                    'getAppInfos' => [
                        'path' => '/v1/appInfos/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfoLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appInfoLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppInfos' => [
                        'path' => '/v1/appInfos/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppInfosAgeRatingDeclaration' => [
                        'path' => '/v1/appInfos/{id}/ageRatingDeclaration',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppInfosAppInfoLocalizations' => [
                        'path' => '/v1/appInfos/{id}/appInfoLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfoLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppInfosPrimaryCategory' => [
                        'path' => '/v1/appInfos/{id}/primaryCategory',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppInfosPrimarySubcategoryOne' => [
                        'path' => '/v1/appInfos/{id}/primarySubcategoryOne',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppInfosPrimarySubcategoryTwo' => [
                        'path' => '/v1/appInfos/{id}/primarySubcategoryTwo',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppInfosSecondaryCategory' => [
                        'path' => '/v1/appInfos/{id}/secondaryCategory',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppInfosSecondarySubcategoryOne' => [
                        'path' => '/v1/appInfos/{id}/secondarySubcategoryOne',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppInfosSecondarySubcategoryTwo' => [
                        'path' => '/v1/appInfos/{id}/secondarySubcategoryTwo',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subcategories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appPreOrders = new AppStore\Resource\AppPreOrders(
            $this,
            $this->serviceName,
            'appPreOrders',
            [
                'methods' => [
                    'createAppPreOrders' => [
                        'path' => '/v1/appPreOrders',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppPreOrders' => [
                        'path' => '/v1/appPreOrders/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPreOrders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppPreOrders' => [
                        'path' => '/v1/appPreOrders/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppPreOrders' => [
                        'path' => '/v1/appPreOrders/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appPreviewSets = new AppStore\Resource\AppPreviewSets(
            $this,
            $this->serviceName,
            'appPreviewSets',
            [
                'methods' => [
                    'createAppPreviewSets' => [
                        'path' => '/v1/appPreviewSets',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppPreviewSets' => [
                        'path' => '/v1/appPreviewSets/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteAppPreviewSets' => [
                        'path' => '/v1/appPreviewSets/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppPreviewSetsAppPreviewsLinkages' => [
                        'path' => '/v1/appPreviewSets/{id}/relationships/appPreviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListAppPreviewSetsAppPreviews' => [
                        'path' => '/v1/appPreviewSets/{id}/relationships/appPreviews',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppPreviewSetsAppPreviews' => [
                        'path' => '/v1/appPreviewSets/{id}/appPreviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appPreviews = new AppStore\Resource\AppPreviews(
            $this,
            $this->serviceName,
            'appPreviews',
            [
                'methods' => [
                    'createAppPreviews' => [
                        'path' => '/v1/appPreviews',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppPreviews' => [
                        'path' => '/v1/appPreviews/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppPreviews' => [
                        'path' => '/v1/appPreviews/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppPreviews' => [
                        'path' => '/v1/appPreviews/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appPricePoints = new AppStore\Resource\AppPricePoints(
            $this,
            $this->serviceName,
            'appPricePoints',
            [
                'methods' => [
                    'getAppPricePointsV3' => [
                        'path' => '/v3/appPricePoints/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppPricePointsV3Equalizations' => [
                        'path' => '/v3/appPricePoints/{id}/equalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appPriceSchedules = new AppStore\Resource\AppPriceSchedules(
            $this,
            $this->serviceName,
            'appPriceSchedules',
            [
                'methods' => [
                    'createAppPriceSchedules' => [
                        'path' => '/v1/appPriceSchedules',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppPriceSchedules' => [
                        'path' => '/v1/appPriceSchedules/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[automaticPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[manualPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAppPriceSchedulesAutomaticPrices' => [
                        'path' => '/v1/appPriceSchedules/{id}/automaticPrices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[endDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[startDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppPriceSchedulesBaseTerritory' => [
                        'path' => '/v1/appPriceSchedules/{id}/baseTerritory',
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
                        ]
                    ],
                    'listAppPriceSchedulesManualPrices' => [
                        'path' => '/v1/appPriceSchedules/{id}/manualPrices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[endDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[startDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appScreenshotSets = new AppStore\Resource\AppScreenshotSets(
            $this,
            $this->serviceName,
            'appScreenshotSets',
            [
                'methods' => [
                    'createAppScreenshotSets' => [
                        'path' => '/v1/appScreenshotSets',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppScreenshotSets' => [
                        'path' => '/v1/appScreenshotSets/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteAppScreenshotSets' => [
                        'path' => '/v1/appScreenshotSets/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppScreenshotSetsAppScreenshotsLinkages' => [
                        'path' => '/v1/appScreenshotSets/{id}/relationships/appScreenshots',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListAppScreenshotSetsAppScreenshots' => [
                        'path' => '/v1/appScreenshotSets/{id}/relationships/appScreenshots',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppScreenshotSetsAppScreenshots' => [
                        'path' => '/v1/appScreenshotSets/{id}/appScreenshots',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appScreenshots = new AppStore\Resource\AppScreenshots(
            $this,
            $this->serviceName,
            'appScreenshots',
            [
                'methods' => [
                    'createAppScreenshots' => [
                        'path' => '/v1/appScreenshots',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppScreenshots' => [
                        'path' => '/v1/appScreenshots/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppScreenshots' => [
                        'path' => '/v1/appScreenshots/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppScreenshots' => [
                        'path' => '/v1/appScreenshots/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreReviewAttachments = new AppStore\Resource\AppStoreReviewAttachments(
            $this,
            $this->serviceName,
            'appStoreReviewAttachments',
            [
                'methods' => [
                    'createAppStoreReviewAttachments' => [
                        'path' => '/v1/appStoreReviewAttachments',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreReviewAttachments' => [
                        'path' => '/v1/appStoreReviewAttachments/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreReviewAttachments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateAppStoreReviewAttachments' => [
                        'path' => '/v1/appStoreReviewAttachments/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreReviewAttachments' => [
                        'path' => '/v1/appStoreReviewAttachments/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreReviewDetails = new AppStore\Resource\AppStoreReviewDetails(
            $this,
            $this->serviceName,
            'appStoreReviewDetails',
            [
                'methods' => [
                    'createAppStoreReviewDetails' => [
                        'path' => '/v1/appStoreReviewDetails',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreReviewDetails' => [
                        'path' => '/v1/appStoreReviewDetails/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewAttachments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreReviewAttachments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppStoreReviewDetails' => [
                        'path' => '/v1/appStoreReviewDetails/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppStoreReviewDetailsAppStoreReviewAttachments' => [
                        'path' => '/v1/appStoreReviewDetails/{id}/appStoreReviewAttachments',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewAttachments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionExperimentTreatmentLocalizations = new AppStore\Resource\AppStoreVersionExperimentTreatmentLocalizations(
            $this,
            $this->serviceName,
            'appStoreVersionExperimentTreatmentLocalizations',
            [
                'methods' => [
                    'createAppStoreVersionExperimentTreatmentLocalizations' => [
                        'path' => '/v1/appStoreVersionExperimentTreatmentLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreVersionExperimentTreatmentLocalizations' => [
                        'path' => '/v1/appStoreVersionExperimentTreatmentLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersionExperimentTreatmentLocalizations' => [
                        'path' => '/v1/appStoreVersionExperimentTreatmentLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppStoreVersionExperimentTreatmentLocalizationsAppPreviewSets' => [
                        'path' => '/v1/appStoreVersionExperimentTreatmentLocalizations/{id}/appPreviewSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[previewType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appCustomProductPageLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionExperimentTreatmentLocalizationsAppScreenshotSets' => [
                        'path' => '/v1/appStoreVersionExperimentTreatmentLocalizations/{id}/appScreenshotSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[screenshotDisplayType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appCustomProductPageLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionExperimentTreatments = new AppStore\Resource\AppStoreVersionExperimentTreatments(
            $this,
            $this->serviceName,
            'appStoreVersionExperimentTreatments',
            [
                'methods' => [
                    'createAppStoreVersionExperimentTreatments' => [
                        'path' => '/v1/appStoreVersionExperimentTreatments',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreVersionExperimentTreatments' => [
                        'path' => '/v1/appStoreVersionExperimentTreatments/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppStoreVersionExperimentTreatments' => [
                        'path' => '/v1/appStoreVersionExperimentTreatments/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersionExperimentTreatments' => [
                        'path' => '/v1/appStoreVersionExperimentTreatments/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizations' => [
                        'path' => '/v1/appStoreVersionExperimentTreatments/{id}/appStoreVersionExperimentTreatmentLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionExperiments = new AppStore\Resource\AppStoreVersionExperiments(
            $this,
            $this->serviceName,
            'appStoreVersionExperiments',
            [
                'methods' => [
                    'createAppStoreVersionExperimentsV2' => [
                        'path' => '/v2/appStoreVersionExperiments',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreVersionExperimentsV2' => [
                        'path' => '/v2/appStoreVersionExperiments/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[controlVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppStoreVersionExperimentsV2' => [
                        'path' => '/v2/appStoreVersionExperiments/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersionExperimentsV2' => [
                        'path' => '/v2/appStoreVersionExperiments/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'createAppStoreVersionExperimentsV1' => [
                        'path' => '/v1/appStoreVersionExperiments',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreVersionExperimentsV1' => [
                        'path' => '/v1/appStoreVersionExperiments/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppStoreVersionExperimentsV1' => [
                        'path' => '/v1/appStoreVersionExperiments/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersionExperimentsV1' => [
                        'path' => '/v1/appStoreVersionExperiments/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppStoreVersionExperimentsV2AppStoreVersionExperimentTreatments' => [
                        'path' => '/v2/appStoreVersionExperiments/{id}/appStoreVersionExperimentTreatments',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsV1' => [
                        'path' => '/v1/appStoreVersionExperiments/{id}/appStoreVersionExperimentTreatments',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionLocalizations = new AppStore\Resource\AppStoreVersionLocalizations(
            $this,
            $this->serviceName,
            'appStoreVersionLocalizations',
            [
                'methods' => [
                    'createAppStoreVersionLocalizations' => [
                        'path' => '/v1/appStoreVersionLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreVersionLocalizations' => [
                        'path' => '/v1/appStoreVersionLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppStoreVersionLocalizations' => [
                        'path' => '/v1/appStoreVersionLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersionLocalizations' => [
                        'path' => '/v1/appStoreVersionLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppStoreVersionLocalizationsAppPreviewSets' => [
                        'path' => '/v1/appStoreVersionLocalizations/{id}/appPreviewSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[previewType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appCustomProductPageLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionExperimentTreatmentLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appPreviews]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionLocalizationsAppScreenshotSets' => [
                        'path' => '/v1/appStoreVersionLocalizations/{id}/appScreenshotSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[screenshotDisplayType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appCustomProductPageLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersionExperimentTreatmentLocalization]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatmentLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshots]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionPhasedReleases = new AppStore\Resource\AppStoreVersionPhasedReleases(
            $this,
            $this->serviceName,
            'appStoreVersionPhasedReleases',
            [
                'methods' => [
                    'createAppStoreVersionPhasedReleases' => [
                        'path' => '/v1/appStoreVersionPhasedReleases',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateAppStoreVersionPhasedReleases' => [
                        'path' => '/v1/appStoreVersionPhasedReleases/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersionPhasedReleases' => [
                        'path' => '/v1/appStoreVersionPhasedReleases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionPromotions = new AppStore\Resource\AppStoreVersionPromotions(
            $this,
            $this->serviceName,
            'appStoreVersionPromotions',
            [
                'methods' => [
                    'createAppStoreVersionPromotions' => [
                        'path' => '/v1/appStoreVersionPromotions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionReleaseRequests = new AppStore\Resource\AppStoreVersionReleaseRequests(
            $this,
            $this->serviceName,
            'appStoreVersionReleaseRequests',
            [
                'methods' => [
                    'createAppStoreVersionReleaseRequests' => [
                        'path' => '/v1/appStoreVersionReleaseRequests',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersionSubmissions = new AppStore\Resource\AppStoreVersionSubmissions(
            $this,
            $this->serviceName,
            'appStoreVersionSubmissions',
            [
                'methods' => [
                    'createAppStoreVersionSubmissions' => [
                        'path' => '/v1/appStoreVersionSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'deleteAppStoreVersionSubmissions' => [
                        'path' => '/v1/appStoreVersionSubmissions/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->appStoreVersions = new AppStore\Resource\AppStoreVersions(
            $this,
            $this->serviceName,
            'appStoreVersions',
            [
                'methods' => [
                    'createAppStoreVersions' => [
                        'path' => '/v1/appStoreVersions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getAppStoreVersions' => [
                        'path' => '/v1/appStoreVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionPhasedReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateAppStoreVersions' => [
                        'path' => '/v1/appStoreVersions/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteAppStoreVersions' => [
                        'path' => '/v1/appStoreVersions/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAgeRatingDeclaration' => [
                        'path' => '/v1/appStoreVersions/{id}/ageRatingDeclaration',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAlternativeDistributionPackage' => [
                        'path' => '/v1/appStoreVersions/{id}/alternativeDistributionPackage',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[versions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAppClipDefaultExperienceLinkages' => [
                        'path' => '/v1/appStoreVersions/{id}/relationships/appClipDefaultExperience',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateAppStoreVersionsAppClipDefaultExperience' => [
                        'path' => '/v1/appStoreVersions/{id}/relationships/appClipDefaultExperience',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAppClipDefaultExperience' => [
                        'path' => '/v1/appStoreVersions/{id}/appClipDefaultExperience',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipAppStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appClipDefaultExperienceLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAppStoreReviewDetail' => [
                        'path' => '/v1/appStoreVersions/{id}/appStoreReviewDetail',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewAttachments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreReviewAttachments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionsAppStoreVersionExperiments' => [
                        'path' => '/v1/appStoreVersions/{id}/appStoreVersionExperiments',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionsAppStoreVersionExperimentsV2' => [
                        'path' => '/v1/appStoreVersions/{id}/appStoreVersionExperimentsV2',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[controlVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionsAppStoreVersionLocalizations' => [
                        'path' => '/v1/appStoreVersions/{id}/appStoreVersionLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appScreenshotSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appPreviewSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAppStoreVersionPhasedRelease' => [
                        'path' => '/v1/appStoreVersions/{id}/appStoreVersionPhasedRelease',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionPhasedReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsAppStoreVersionSubmission' => [
                        'path' => '/v1/appStoreVersions/{id}/appStoreVersionSubmission',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsBuildLinkages' => [
                        'path' => '/v1/appStoreVersions/{id}/relationships/build',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateAppStoreVersionsBuild' => [
                        'path' => '/v1/appStoreVersions/{id}/relationships/build',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsBuild' => [
                        'path' => '/v1/appStoreVersions/{id}/build',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppStoreVersionsCustomerReviews' => [
                        'path' => '/v1/appStoreVersions/{id}/customerReviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[rating]' => [
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
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppStoreVersionsRoutingAppCoverage' => [
                        'path' => '/v1/appStoreVersions/{id}/routingAppCoverage',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->apps = new AppStore\Resource\Apps(
            $this,
            $this->serviceName,
            'apps',
            [
                'methods' => [
                    'listApps' => [
                        'path' => '/v1/apps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[appStoreVersions.appStoreState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersions.appVersionState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersions.platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[bundleId]' => [
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
                            'filter[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'exists[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'boolean'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionKeys]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[marketplaceSearchDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReportRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreOrders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGracePeriods]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[endUserLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[perfPowerMetrics]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appClips]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEvents]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appInfos]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchasesV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getApps' => [
                        'path' => '/v1/apps/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionKeys]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[marketplaceSearchDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReportRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreOrders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGracePeriods]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[endUserLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[perfPowerMetrics]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appClips]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appEvents]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appInfos]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchasesV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateApps' => [
                        'path' => '/v1/apps/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getAppsAlternativeDistributionKey' => [
                        'path' => '/v1/apps/{id}/alternativeDistributionKey',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[alternativeDistributionKeys]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAnalyticsReportRequests' => [
                        'path' => '/v1/apps/{id}/analyticsReportRequests',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[accessType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReportRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[analyticsReports]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[reports]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsAppAvailability' => [
                        'path' => '/v1/apps/{id}/appAvailability',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppClips' => [
                        'path' => '/v1/apps/{id}/appClips',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[bundleId]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppCustomProductPages' => [
                        'path' => '/v1/apps/{id}/appCustomProductPages',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[visible]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppEncryptionDeclarations' => [
                        'path' => '/v1/apps/{id}/appEncryptionDeclarations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarationDocuments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppEvents' => [
                        'path' => '/v1/apps/{id}/appEvents',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[eventState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEventLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppInfos' => [
                        'path' => '/v1/apps/{id}/appInfos',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfoLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCategories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appInfoLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppPricePoints' => [
                        'path' => '/v1/apps/{id}/appPricePoints',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsAppPriceSchedule' => [
                        'path' => '/v1/apps/{id}/appPriceSchedule',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[manualPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[automaticPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppStoreVersionExperimentsV2' => [
                        'path' => '/v1/apps/{id}/appStoreVersionExperimentsV2',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[controlVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentTreatments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsAppStoreVersions' => [
                        'path' => '/v1/apps/{id}/appStoreVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[appStoreState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appVersionState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[versionString]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionPhasedReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsBetaAppLocalizations' => [
                        'path' => '/v1/apps/{id}/betaAppLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppsBetaAppReviewDetail' => [
                        'path' => '/v1/apps/{id}/betaAppReviewDetail',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsBetaGroups' => [
                        'path' => '/v1/apps/{id}/betaGroups',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppsBetaLicenseAgreement' => [
                        'path' => '/v1/apps/{id}/betaLicenseAgreement',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteListAppsBetaTesters' => [
                        'path' => '/v1/apps/{id}/relationships/betaTesters',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppsBuilds' => [
                        'path' => '/v1/apps/{id}/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getAppsCiProduct' => [
                        'path' => '/v1/apps/{id}/ciProduct',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[bundleIds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[primaryRepositories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsCustomerReviews' => [
                        'path' => '/v1/apps/{id}/customerReviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[rating]' => [
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
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsEndUserLicenseAgreement' => [
                        'path' => '/v1/apps/{id}/endUserLicenseAgreement',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[endUserLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsGameCenterDetail' => [
                        'path' => '/v1/apps/{id}/gameCenterDetail',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[achievementReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[leaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[leaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsGameCenterEnabledVersions' => [
                        'path' => '/v1/apps/{id}/gameCenterEnabledVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[versionString]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[compatibleVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsInAppPurchases' => [
                        'path' => '/v1/apps/{id}/inAppPurchases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[inAppPurchaseType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[canBeSubmitted]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[apps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsInAppPurchasesV2' => [
                        'path' => '/v1/apps/{id}/inAppPurchasesV2',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
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
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
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
                            'fields[inAppPurchasePriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseContents]' => [
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
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsMarketplaceSearchDetail' => [
                        'path' => '/v1/apps/{id}/marketplaceSearchDetail',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[marketplaceSearchDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsPerfPowerMetrics' => [
                        'path' => '/v1/apps/{id}/perfPowerMetrics',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[deviceType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[metricType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsPreOrder' => [
                        'path' => '/v1/apps/{id}/preOrder',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appPreOrders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsPreReleaseVersions' => [
                        'path' => '/v1/apps/{id}/preReleaseVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listAppsPromotedPurchasesLinkages' => [
                        'path' => '/v1/apps/{id}/relationships/promotedPurchases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListAppsPromotedPurchases' => [
                        'path' => '/v1/apps/{id}/relationships/promotedPurchases',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listAppsPromotedPurchases' => [
                        'path' => '/v1/apps/{id}/promotedPurchases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchaseImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotionImages]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsReviewSubmissions' => [
                        'path' => '/v1/apps/{id}/reviewSubmissions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissionItems]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[actors]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[items]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsSubscriptionGracePeriod' => [
                        'path' => '/v1/apps/{id}/subscriptionGracePeriod',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionGracePeriods]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listAppsSubscriptionGroups' => [
                        'path' => '/v1/apps/{id}/subscriptionGroups',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[subscriptions.state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroupLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionGroupLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getAppsBetaTesterUsagesMetrics' => [
                        'path' => '/v1/apps/{id}/metrics/betaTesterUsages',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'period' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaAppClipInvocationLocalizations = new AppStore\Resource\BetaAppClipInvocationLocalizations(
            $this,
            $this->serviceName,
            'betaAppClipInvocationLocalizations',
            [
                'methods' => [
                    'createBetaAppClipInvocationLocalizations' => [
                        'path' => '/v1/betaAppClipInvocationLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateBetaAppClipInvocationLocalizations' => [
                        'path' => '/v1/betaAppClipInvocationLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBetaAppClipInvocationLocalizations' => [
                        'path' => '/v1/betaAppClipInvocationLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaAppClipInvocations = new AppStore\Resource\BetaAppClipInvocations(
            $this,
            $this->serviceName,
            'betaAppClipInvocations',
            [
                'methods' => [
                    'createBetaAppClipInvocations' => [
                        'path' => '/v1/betaAppClipInvocations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBetaAppClipInvocations' => [
                        'path' => '/v1/betaAppClipInvocations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppClipInvocations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[betaAppClipInvocationLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateBetaAppClipInvocations' => [
                        'path' => '/v1/betaAppClipInvocations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBetaAppClipInvocations' => [
                        'path' => '/v1/betaAppClipInvocations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaAppLocalizations = new AppStore\Resource\BetaAppLocalizations(
            $this,
            $this->serviceName,
            'betaAppLocalizations',
            [
                'methods' => [
                    'listBetaAppLocalizations' => [
                        'path' => '/v1/betaAppLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'createBetaAppLocalizations' => [
                        'path' => '/v1/betaAppLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBetaAppLocalizations' => [
                        'path' => '/v1/betaAppLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateBetaAppLocalizations' => [
                        'path' => '/v1/betaAppLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBetaAppLocalizations' => [
                        'path' => '/v1/betaAppLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBetaAppLocalizationsApp' => [
                        'path' => '/v1/betaAppLocalizations/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaAppReviewDetails = new AppStore\Resource\BetaAppReviewDetails(
            $this,
            $this->serviceName,
            'betaAppReviewDetails',
            [
                'methods' => [
                    'listBetaAppReviewDetails' => [
                        'path' => '/v1/betaAppReviewDetails',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBetaAppReviewDetails' => [
                        'path' => '/v1/betaAppReviewDetails/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateBetaAppReviewDetails' => [
                        'path' => '/v1/betaAppReviewDetails/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBetaAppReviewDetailsApp' => [
                        'path' => '/v1/betaAppReviewDetails/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaAppReviewSubmissions = new AppStore\Resource\BetaAppReviewSubmissions(
            $this,
            $this->serviceName,
            'betaAppReviewSubmissions',
            [
                'methods' => [
                    'listBetaAppReviewSubmissions' => [
                        'path' => '/v1/betaAppReviewSubmissions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[betaReviewState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[build]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'createBetaAppReviewSubmissions' => [
                        'path' => '/v1/betaAppReviewSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBetaAppReviewSubmissions' => [
                        'path' => '/v1/betaAppReviewSubmissions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppReviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBetaAppReviewSubmissionsBuild' => [
                        'path' => '/v1/betaAppReviewSubmissions/{id}/build',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaBuildLocalizations = new AppStore\Resource\BetaBuildLocalizations(
            $this,
            $this->serviceName,
            'betaBuildLocalizations',
            [
                'methods' => [
                    'listBetaBuildLocalizations' => [
                        'path' => '/v1/betaBuildLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[locale]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[build]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'createBetaBuildLocalizations' => [
                        'path' => '/v1/betaBuildLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBetaBuildLocalizations' => [
                        'path' => '/v1/betaBuildLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateBetaBuildLocalizations' => [
                        'path' => '/v1/betaBuildLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBetaBuildLocalizations' => [
                        'path' => '/v1/betaBuildLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBetaBuildLocalizationsBuild' => [
                        'path' => '/v1/betaBuildLocalizations/{id}/build',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaGroups = new AppStore\Resource\BetaGroups(
            $this,
            $this->serviceName,
            'betaGroups',
            [
                'methods' => [
                    'listBetaGroups' => [
                        'path' => '/v1/betaGroups',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[isInternalGroup]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[publicLink]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[publicLinkEnabled]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[publicLinkLimitEnabled]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createBetaGroups' => [
                        'path' => '/v1/betaGroups',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBetaGroups' => [
                        'path' => '/v1/betaGroups/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateBetaGroups' => [
                        'path' => '/v1/betaGroups/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBetaGroups' => [
                        'path' => '/v1/betaGroups/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBetaGroupsApp' => [
                        'path' => '/v1/betaGroups/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listBetaGroupsBetaTestersLinkages' => [
                        'path' => '/v1/betaGroups/{id}/relationships/betaTesters',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListBetaGroupsBetaTesters' => [
                        'path' => '/v1/betaGroups/{id}/relationships/betaTesters',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListBetaGroupsBetaTesters' => [
                        'path' => '/v1/betaGroups/{id}/relationships/betaTesters',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBetaGroupsBetaTesters' => [
                        'path' => '/v1/betaGroups/{id}/betaTesters',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBetaGroupsBuildsLinkages' => [
                        'path' => '/v1/betaGroups/{id}/relationships/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListBetaGroupsBuilds' => [
                        'path' => '/v1/betaGroups/{id}/relationships/builds',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListBetaGroupsBuilds' => [
                        'path' => '/v1/betaGroups/{id}/relationships/builds',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBetaGroupsBuilds' => [
                        'path' => '/v1/betaGroups/{id}/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getBetaGroupsBetaTesterUsagesMetrics' => [
                        'path' => '/v1/betaGroups/{id}/metrics/betaTesterUsages',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'period' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaLicenseAgreements = new AppStore\Resource\BetaLicenseAgreements(
            $this,
            $this->serviceName,
            'betaLicenseAgreements',
            [
                'methods' => [
                    'listBetaLicenseAgreements' => [
                        'path' => '/v1/betaLicenseAgreements',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBetaLicenseAgreements' => [
                        'path' => '/v1/betaLicenseAgreements/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateBetaLicenseAgreements' => [
                        'path' => '/v1/betaLicenseAgreements/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBetaLicenseAgreementsApp' => [
                        'path' => '/v1/betaLicenseAgreements/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->betaTesterInvitations = new AppStore\Resource\BetaTesterInvitations(
            $this,
            $this->serviceName,
            'betaTesterInvitations',
            [
                'methods' => [
                    'createBetaTesterInvitations' => [
                        'path' => '/v1/betaTesterInvitations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->betaTesters = new AppStore\Resource\BetaTesters(
            $this,
            $this->serviceName,
            'betaTesters',
            [
                'methods' => [
                    'listBetaTesters' => [
                        'path' => '/v1/betaTesters',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[email]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[firstName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[inviteType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[lastName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
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
                            'limit[apps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createBetaTesters' => [
                        'path' => '/v1/betaTesters',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBetaTesters' => [
                        'path' => '/v1/betaTesters/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
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
                            'limit[apps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteBetaTesters' => [
                        'path' => '/v1/betaTesters/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBetaTestersAppsLinkages' => [
                        'path' => '/v1/betaTesters/{id}/relationships/apps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteListBetaTestersApps' => [
                        'path' => '/v1/betaTesters/{id}/relationships/apps',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBetaTestersApps' => [
                        'path' => '/v1/betaTesters/{id}/apps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBetaTestersBetaGroupsLinkages' => [
                        'path' => '/v1/betaTesters/{id}/relationships/betaGroups',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListBetaTestersBetaGroups' => [
                        'path' => '/v1/betaTesters/{id}/relationships/betaGroups',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListBetaTestersBetaGroups' => [
                        'path' => '/v1/betaTesters/{id}/relationships/betaGroups',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBetaTestersBetaGroups' => [
                        'path' => '/v1/betaTesters/{id}/betaGroups',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBetaTestersBuildsLinkages' => [
                        'path' => '/v1/betaTesters/{id}/relationships/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListBetaTestersBuilds' => [
                        'path' => '/v1/betaTesters/{id}/relationships/builds',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListBetaTestersBuilds' => [
                        'path' => '/v1/betaTesters/{id}/relationships/builds',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBetaTestersBuilds' => [
                        'path' => '/v1/betaTesters/{id}/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getBetaTestersBetaTesterUsagesMetrics' => [
                        'path' => '/v1/betaTesters/{id}/metrics/betaTesterUsages',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'filter[apps]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'period' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->buildBetaDetails = new AppStore\Resource\BuildBetaDetails(
            $this,
            $this->serviceName,
            'buildBetaDetails',
            [
                'methods' => [
                    'listBuildBetaDetails' => [
                        'path' => '/v1/buildBetaDetails',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[build]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildBetaDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildBetaDetails' => [
                        'path' => '/v1/buildBetaDetails/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[buildBetaDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateBuildBetaDetails' => [
                        'path' => '/v1/buildBetaDetails/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBuildBetaDetailsBuild' => [
                        'path' => '/v1/buildBetaDetails/{id}/build',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->buildBetaNotifications = new AppStore\Resource\BuildBetaNotifications(
            $this,
            $this->serviceName,
            'buildBetaNotifications',
            [
                'methods' => [
                    'createBuildBetaNotifications' => [
                        'path' => '/v1/buildBetaNotifications',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->builds = new AppStore\Resource\Builds(
            $this,
            $this->serviceName,
            'builds',
            [
                'methods' => [
                    'listBuilds' => [
                        'path' => '/v1/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[betaAppReviewSubmission.betaReviewState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[buildAudienceType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[expired]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[preReleaseVersion.platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[preReleaseVersion.version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[processingState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[usesNonExemptEncryption]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersion]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[preReleaseVersion]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[diagnosticSignatures]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildIcons]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildBetaDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[perfPowerMetrics]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[buildBundles]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[icons]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[individualTesters]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getBuilds' => [
                        'path' => '/v1/builds/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[diagnosticSignatures]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildIcons]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildBetaDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[perfPowerMetrics]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[buildBundles]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[icons]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[individualTesters]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateBuilds' => [
                        'path' => '/v1/builds/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBuildsApp' => [
                        'path' => '/v1/builds/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildsAppEncryptionDeclarationLinkages' => [
                        'path' => '/v1/builds/{id}/relationships/appEncryptionDeclaration',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateBuildsAppEncryptionDeclaration' => [
                        'path' => '/v1/builds/{id}/relationships/appEncryptionDeclaration',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBuildsAppEncryptionDeclaration' => [
                        'path' => '/v1/builds/{id}/appEncryptionDeclaration',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildsAppStoreVersion' => [
                        'path' => '/v1/builds/{id}/appStoreVersion',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionPhasedReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildsBetaAppReviewSubmission' => [
                        'path' => '/v1/builds/{id}/betaAppReviewSubmission',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppReviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listBuildsBetaBuildLocalizations' => [
                        'path' => '/v1/builds/{id}/betaBuildLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListBuildsBetaGroups' => [
                        'path' => '/v1/builds/{id}/relationships/betaGroups',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListBuildsBetaGroups' => [
                        'path' => '/v1/builds/{id}/relationships/betaGroups',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBuildsBuildBetaDetail' => [
                        'path' => '/v1/builds/{id}/buildBetaDetail',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[buildBetaDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listBuildsDiagnosticSignatures' => [
                        'path' => '/v1/builds/{id}/diagnosticSignatures',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[diagnosticType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[diagnosticSignatures]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBuildsIcons' => [
                        'path' => '/v1/builds/{id}/icons',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[buildIcons]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBuildsIndividualTestersLinkages' => [
                        'path' => '/v1/builds/{id}/relationships/individualTesters',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListBuildsIndividualTesters' => [
                        'path' => '/v1/builds/{id}/relationships/individualTesters',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListBuildsIndividualTesters' => [
                        'path' => '/v1/builds/{id}/relationships/individualTesters',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listBuildsIndividualTesters' => [
                        'path' => '/v1/builds/{id}/individualTesters',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBuildsPerfPowerMetrics' => [
                        'path' => '/v1/builds/{id}/perfPowerMetrics',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[deviceType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[metricType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildsPreReleaseVersion' => [
                        'path' => '/v1/builds/{id}/preReleaseVersion',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildsBetaBuildUsagesMetrics' => [
                        'path' => '/v1/builds/{id}/metrics/betaBuildUsages',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->bundleIdCapabilities = new AppStore\Resource\BundleIdCapabilities(
            $this,
            $this->serviceName,
            'bundleIdCapabilities',
            [
                'methods' => [
                    'createBundleIdCapabilities' => [
                        'path' => '/v1/bundleIdCapabilities',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateBundleIdCapabilities' => [
                        'path' => '/v1/bundleIdCapabilities/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBundleIdCapabilities' => [
                        'path' => '/v1/bundleIdCapabilities/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->bundleIds = new AppStore\Resource\BundleIds(
            $this,
            $this->serviceName,
            'bundleIds',
            [
                'methods' => [
                    'listBundleIds' => [
                        'path' => '/v1/bundleIds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[identifier]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[seedId]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[bundleIds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[bundleIdCapabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[profiles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[bundleIdCapabilities]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[profiles]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createBundleIds' => [
                        'path' => '/v1/bundleIds',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getBundleIds' => [
                        'path' => '/v1/bundleIds/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[bundleIds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[bundleIdCapabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[profiles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[bundleIdCapabilities]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[profiles]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateBundleIds' => [
                        'path' => '/v1/bundleIds/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteBundleIds' => [
                        'path' => '/v1/bundleIds/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getBundleIdsApp' => [
                        'path' => '/v1/bundleIds/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listBundleIdsBundleIdCapabilities' => [
                        'path' => '/v1/bundleIds/{id}/bundleIdCapabilities',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[bundleIdCapabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listBundleIdsProfiles' => [
                        'path' => '/v1/bundleIds/{id}/profiles',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[profiles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->certificates = new AppStore\Resource\Certificates(
            $this,
            $this->serviceName,
            'certificates',
            [
                'methods' => [
                    'listCertificates' => [
                        'path' => '/v1/certificates',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[certificateType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[displayName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[serialNumber]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[certificates]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createCertificates' => [
                        'path' => '/v1/certificates',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getCertificates' => [
                        'path' => '/v1/certificates/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[certificates]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteCertificates' => [
                        'path' => '/v1/certificates/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciArtifacts = new AppStore\Resource\CiArtifacts(
            $this,
            $this->serviceName,
            'ciArtifacts',
            [
                'methods' => [
                    'getCiArtifacts' => [
                        'path' => '/v1/ciArtifacts/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciArtifacts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciBuildActions = new AppStore\Resource\CiBuildActions(
            $this,
            $this->serviceName,
            'ciBuildActions',
            [
                'methods' => [
                    'getCiBuildActions' => [
                        'path' => '/v1/ciBuildActions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciBuildActions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciIssues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciTestResults]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciArtifacts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listCiBuildActionsArtifacts' => [
                        'path' => '/v1/ciBuildActions/{id}/artifacts',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciArtifacts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getCiBuildActionsBuildRun' => [
                        'path' => '/v1/ciBuildActions/{id}/buildRun',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listCiBuildActionsIssues' => [
                        'path' => '/v1/ciBuildActions/{id}/issues',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciIssues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listCiBuildActionsTestResults' => [
                        'path' => '/v1/ciBuildActions/{id}/testResults',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciTestResults]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciBuildRuns = new AppStore\Resource\CiBuildRuns(
            $this,
            $this->serviceName,
            'ciBuildRuns',
            [
                'methods' => [
                    'createCiBuildRuns' => [
                        'path' => '/v1/ciBuildRuns',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getCiBuildRuns' => [
                        'path' => '/v1/ciBuildRuns/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildActions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listCiBuildRunsActions' => [
                        'path' => '/v1/ciBuildRuns/{id}/actions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildActions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listCiBuildRunsBuilds' => [
                        'path' => '/v1/ciBuildRuns/{id}/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[betaAppReviewSubmission.betaReviewState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[buildAudienceType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[expired]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[preReleaseVersion.platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[preReleaseVersion.version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[processingState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[usesNonExemptEncryption]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[appStoreVersion]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[preReleaseVersion]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildBundles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildIcons]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppReviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[buildBetaDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
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
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[individualTesters]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaBuildLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[icons]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[buildBundles]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciIssues = new AppStore\Resource\CiIssues(
            $this,
            $this->serviceName,
            'ciIssues',
            [
                'methods' => [
                    'getCiIssues' => [
                        'path' => '/v1/ciIssues/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciIssues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciMacOsVersions = new AppStore\Resource\CiMacOsVersions(
            $this,
            $this->serviceName,
            'ciMacOsVersions',
            [
                'methods' => [
                    'listCiMacOsVersions' => [
                        'path' => '/v1/ciMacOsVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[xcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getCiMacOsVersions' => [
                        'path' => '/v1/ciMacOsVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[xcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listCiMacOsVersionsXcodeVersions' => [
                        'path' => '/v1/ciMacOsVersions/{id}/xcodeVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[macOsVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciProducts = new AppStore\Resource\CiProducts(
            $this,
            $this->serviceName,
            'ciProducts',
            [
                'methods' => [
                    'listCiProducts' => [
                        'path' => '/v1/ciProducts',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[productType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[primaryRepositories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getCiProducts' => [
                        'path' => '/v1/ciProducts/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[primaryRepositories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteCiProducts' => [
                        'path' => '/v1/ciProducts/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listCiProductsAdditionalRepositories' => [
                        'path' => '/v1/ciProducts/{id}/additionalRepositories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmProviders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getCiProductsApp' => [
                        'path' => '/v1/ciProducts/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClips]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appInfos]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appPreOrders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGracePeriods]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[endUserLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appEncryptionDeclarations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaAppLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appInfos]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appClips]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appCustomProductPages]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[inAppPurchasesV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotedPurchases]' => [
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
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listCiProductsBuildRuns' => [
                        'path' => '/v1/ciProducts/{id}/buildRuns',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listCiProductsPrimaryRepositories' => [
                        'path' => '/v1/ciProducts/{id}/primaryRepositories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmProviders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listCiProductsWorkflows' => [
                        'path' => '/v1/ciProducts/{id}/workflows',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciTestResults = new AppStore\Resource\CiTestResults(
            $this,
            $this->serviceName,
            'ciTestResults',
            [
                'methods' => [
                    'getCiTestResults' => [
                        'path' => '/v1/ciTestResults/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciTestResults]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciWorkflows = new AppStore\Resource\CiWorkflows(
            $this,
            $this->serviceName,
            'ciWorkflows',
            [
                'methods' => [
                    'createCiWorkflows' => [
                        'path' => '/v1/ciWorkflows',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getCiWorkflows' => [
                        'path' => '/v1/ciWorkflows/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateCiWorkflows' => [
                        'path' => '/v1/ciWorkflows/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteCiWorkflows' => [
                        'path' => '/v1/ciWorkflows/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listCiWorkflowsBuildRuns' => [
                        'path' => '/v1/ciWorkflows/{id}/buildRuns',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciBuildRuns]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciWorkflows]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciProducts]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getCiWorkflowsRepository' => [
                        'path' => '/v1/ciWorkflows/{id}/repository',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmProviders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->ciXcodeVersions = new AppStore\Resource\CiXcodeVersions(
            $this,
            $this->serviceName,
            'ciXcodeVersions',
            [
                'methods' => [
                    'listCiXcodeVersions' => [
                        'path' => '/v1/ciXcodeVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[macOsVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getCiXcodeVersions' => [
                        'path' => '/v1/ciXcodeVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[macOsVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listCiXcodeVersionsMacOsVersions' => [
                        'path' => '/v1/ciXcodeVersions/{id}/macOsVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ciXcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[ciMacOsVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[xcodeVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->customerReviewResponses = new AppStore\Resource\CustomerReviewResponses(
            $this,
            $this->serviceName,
            'customerReviewResponses',
            [
                'methods' => [
                    'createCustomerReviewResponses' => [
                        'path' => '/v1/customerReviewResponses',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getCustomerReviewResponses' => [
                        'path' => '/v1/customerReviewResponses/{id}',
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
                    'deleteCustomerReviewResponses' => [
                        'path' => '/v1/customerReviewResponses/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->customerReviews = new AppStore\Resource\CustomerReviews(
            $this,
            $this->serviceName,
            'customerReviews',
            [
                'methods' => [
                    'getCustomerReviews' => [
                        'path' => '/v1/customerReviews/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[customerReviewResponses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getCustomerReviewsResponse' => [
                        'path' => '/v1/customerReviews/{id}/response',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[customerReviews]' => [
                                'location' => 'query',
                                'type' => 'array'
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

                ]
            ]
        );
        $this->devices = new AppStore\Resource\Devices(
            $this,
            $this->serviceName,
            'devices',
            [
                'methods' => [
                    'listDevices' => [
                        'path' => '/v1/devices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[status]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[udid]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[devices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createDevices' => [
                        'path' => '/v1/devices',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getDevices' => [
                        'path' => '/v1/devices/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[devices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateDevices' => [
                        'path' => '/v1/devices/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->endAppAvailabilityPreOrders = new AppStore\Resource\EndAppAvailabilityPreOrders(
            $this,
            $this->serviceName,
            'endAppAvailabilityPreOrders',
            [
                'methods' => [
                    'createEndAppAvailabilityPreOrders' => [
                        'path' => '/v1/endAppAvailabilityPreOrders',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->endUserLicenseAgreements = new AppStore\Resource\EndUserLicenseAgreements(
            $this,
            $this->serviceName,
            'endUserLicenseAgreements',
            [
                'methods' => [
                    'createEndUserLicenseAgreements' => [
                        'path' => '/v1/endUserLicenseAgreements',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getEndUserLicenseAgreements' => [
                        'path' => '/v1/endUserLicenseAgreements/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[endUserLicenseAgreements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[territories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateEndUserLicenseAgreements' => [
                        'path' => '/v1/endUserLicenseAgreements/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteEndUserLicenseAgreements' => [
                        'path' => '/v1/endUserLicenseAgreements/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listEndUserLicenseAgreementsTerritories' => [
                        'path' => '/v1/endUserLicenseAgreements/{id}/territories',
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
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->financeReports = new AppStore\Resource\FinanceReports(
            $this,
            $this->serviceName,
            'financeReports',
            [
                'methods' => [
                    'listFinanceReports' => [
                        'path' => '/v1/financeReports',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[regionCode]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[reportDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[reportType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[vendorNumber]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterAchievementImages = new AppStore\Resource\GameCenterAchievementImages(
            $this,
            $this->serviceName,
            'gameCenterAchievementImages',
            [
                'methods' => [
                    'createGameCenterAchievementImages' => [
                        'path' => '/v1/gameCenterAchievementImages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterAchievementImages' => [
                        'path' => '/v1/gameCenterAchievementImages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterAchievementImages' => [
                        'path' => '/v1/gameCenterAchievementImages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterAchievementImages' => [
                        'path' => '/v1/gameCenterAchievementImages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterAchievementLocalizations = new AppStore\Resource\GameCenterAchievementLocalizations(
            $this,
            $this->serviceName,
            'gameCenterAchievementLocalizations',
            [
                'methods' => [
                    'createGameCenterAchievementLocalizations' => [
                        'path' => '/v1/gameCenterAchievementLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterAchievementLocalizations' => [
                        'path' => '/v1/gameCenterAchievementLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterAchievementLocalizations' => [
                        'path' => '/v1/gameCenterAchievementLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterAchievementLocalizations' => [
                        'path' => '/v1/gameCenterAchievementLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterAchievementLocalizationsGameCenterAchievement' => [
                        'path' => '/v1/gameCenterAchievementLocalizations/{id}/gameCenterAchievement',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterAchievementLocalizationsGameCenterAchievementImage' => [
                        'path' => '/v1/gameCenterAchievementLocalizations/{id}/gameCenterAchievementImage',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterAchievementReleases = new AppStore\Resource\GameCenterAchievementReleases(
            $this,
            $this->serviceName,
            'gameCenterAchievementReleases',
            [
                'methods' => [
                    'createGameCenterAchievementReleases' => [
                        'path' => '/v1/gameCenterAchievementReleases',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterAchievementReleases' => [
                        'path' => '/v1/gameCenterAchievementReleases/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteGameCenterAchievementReleases' => [
                        'path' => '/v1/gameCenterAchievementReleases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterAchievements = new AppStore\Resource\GameCenterAchievements(
            $this,
            $this->serviceName,
            'gameCenterAchievements',
            [
                'methods' => [
                    'createGameCenterAchievements' => [
                        'path' => '/v1/gameCenterAchievements',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterAchievements' => [
                        'path' => '/v1/gameCenterAchievements/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterAchievements' => [
                        'path' => '/v1/gameCenterAchievements/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterAchievements' => [
                        'path' => '/v1/gameCenterAchievements/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterAchievementsGroupAchievementLinkages' => [
                        'path' => '/v1/gameCenterAchievements/{id}/relationships/groupAchievement',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateGameCenterAchievementsGroupAchievement' => [
                        'path' => '/v1/gameCenterAchievements/{id}/relationships/groupAchievement',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterAchievementsGroupAchievement' => [
                        'path' => '/v1/gameCenterAchievements/{id}/groupAchievement',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterAchievementsLocalizations' => [
                        'path' => '/v1/gameCenterAchievements/{id}/localizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAchievementImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterAchievementsReleases' => [
                        'path' => '/v1/gameCenterAchievements/{id}/releases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[live]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterDetail]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterAppVersions = new AppStore\Resource\GameCenterAppVersions(
            $this,
            $this->serviceName,
            'gameCenterAppVersions',
            [
                'methods' => [
                    'createGameCenterAppVersions' => [
                        'path' => '/v1/gameCenterAppVersions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterAppVersions' => [
                        'path' => '/v1/gameCenterAppVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[compatibilityVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterAppVersions' => [
                        'path' => '/v1/gameCenterAppVersions/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterAppVersionsAppStoreVersion' => [
                        'path' => '/v1/gameCenterAppVersions/{id}/appStoreVersion',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[ageRatingDeclarations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreReviewDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[alternativeDistributionPackages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appClipDefaultExperiences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersionPhasedReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[appStoreVersionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[appStoreVersionExperimentsV2]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterAppVersionsCompatibilityVersionsLinkages' => [
                        'path' => '/v1/gameCenterAppVersions/{id}/relationships/compatibilityVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListGameCenterAppVersionsCompatibilityVersions' => [
                        'path' => '/v1/gameCenterAppVersions/{id}/relationships/compatibilityVersions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListGameCenterAppVersionsCompatibilityVersions' => [
                        'path' => '/v1/gameCenterAppVersions/{id}/relationships/compatibilityVersions',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterAppVersionsCompatibilityVersions' => [
                        'path' => '/v1/gameCenterAppVersions/{id}/compatibilityVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[enabled]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[compatibilityVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterDetails = new AppStore\Resource\GameCenterDetails(
            $this,
            $this->serviceName,
            'gameCenterDetails',
            [
                'methods' => [
                    'createGameCenterDetails' => [
                        'path' => '/v1/gameCenterDetails',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterDetails' => [
                        'path' => '/v1/gameCenterDetails/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[achievementReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[leaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[leaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterDetails' => [
                        'path' => '/v1/gameCenterDetails/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsAchievementReleases' => [
                        'path' => '/v1/gameCenterDetails/{id}/achievementReleases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[live]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterAchievement]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterAchievementsLinkages' => [
                        'path' => '/v1/gameCenterDetails/{id}/relationships/gameCenterAchievements',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListGameCenterDetailsGameCenterAchievements' => [
                        'path' => '/v1/gameCenterDetails/{id}/relationships/gameCenterAchievements',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterAchievements' => [
                        'path' => '/v1/gameCenterDetails/{id}/gameCenterAchievements',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[archived]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterAppVersions' => [
                        'path' => '/v1/gameCenterDetails/{id}/gameCenterAppVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[enabled]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[compatibilityVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterDetailsGameCenterGroup' => [
                        'path' => '/v1/gameCenterDetails/{id}/gameCenterGroup',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterLeaderboardSetsLinkages' => [
                        'path' => '/v1/gameCenterDetails/{id}/relationships/gameCenterLeaderboardSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListGameCenterDetailsGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterDetails/{id}/relationships/gameCenterLeaderboardSets',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterDetails/{id}/gameCenterLeaderboardSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterLeaderboardsLinkages' => [
                        'path' => '/v1/gameCenterDetails/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListGameCenterDetailsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterDetails/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterDetails/{id}/gameCenterLeaderboards',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[archived]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsLeaderboardReleases' => [
                        'path' => '/v1/gameCenterDetails/{id}/leaderboardReleases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[live]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterLeaderboard]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterDetailsLeaderboardSetReleases' => [
                        'path' => '/v1/gameCenterDetails/{id}/leaderboardSetReleases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[live]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterLeaderboardSet]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterDetailsClassicMatchmakingRequestsMetrics' => [
                        'path' => '/v1/gameCenterDetails/{id}/metrics/classicMatchmakingRequests',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[result]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterDetailsRuleBasedMatchmakingRequestsMetrics' => [
                        'path' => '/v1/gameCenterDetails/{id}/metrics/ruleBasedMatchmakingRequests',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[result]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterGroups = new AppStore\Resource\GameCenterGroups(
            $this,
            $this->serviceName,
            'gameCenterGroups',
            [
                'methods' => [
                    'listGameCenterGroups' => [
                        'path' => '/v1/gameCenterGroups',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createGameCenterGroups' => [
                        'path' => '/v1/gameCenterGroups',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterGroups' => [
                        'path' => '/v1/gameCenterGroups/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterGroups' => [
                        'path' => '/v1/gameCenterGroups/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterGroups' => [
                        'path' => '/v1/gameCenterGroups/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterAchievementsLinkages' => [
                        'path' => '/v1/gameCenterGroups/{id}/relationships/gameCenterAchievements',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListGameCenterGroupsGameCenterAchievements' => [
                        'path' => '/v1/gameCenterGroups/{id}/relationships/gameCenterAchievements',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterAchievements' => [
                        'path' => '/v1/gameCenterGroups/{id}/gameCenterAchievements',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[archived]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterDetails' => [
                        'path' => '/v1/gameCenterGroups/{id}/gameCenterDetails',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[gameCenterAppVersions.enabled]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievementReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterAppVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterAchievements]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[achievementReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[leaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[leaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterLeaderboardSetsLinkages' => [
                        'path' => '/v1/gameCenterGroups/{id}/relationships/gameCenterLeaderboardSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListGameCenterGroupsGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterGroups/{id}/relationships/gameCenterLeaderboardSets',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterGroups/{id}/gameCenterLeaderboardSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterLeaderboardsLinkages' => [
                        'path' => '/v1/gameCenterGroups/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateListGameCenterGroupsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterGroups/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterGroupsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterGroups/{id}/gameCenterLeaderboards',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[archived]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardEntrySubmissions = new AppStore\Resource\GameCenterLeaderboardEntrySubmissions(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardEntrySubmissions',
            [
                'methods' => [
                    'createGameCenterLeaderboardEntrySubmissions' => [
                        'path' => '/v1/gameCenterLeaderboardEntrySubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardImages = new AppStore\Resource\GameCenterLeaderboardImages(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardImages',
            [
                'methods' => [
                    'createGameCenterLeaderboardImages' => [
                        'path' => '/v1/gameCenterLeaderboardImages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardImages' => [
                        'path' => '/v1/gameCenterLeaderboardImages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardImages' => [
                        'path' => '/v1/gameCenterLeaderboardImages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardImages' => [
                        'path' => '/v1/gameCenterLeaderboardImages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardLocalizations = new AppStore\Resource\GameCenterLeaderboardLocalizations(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardLocalizations',
            [
                'methods' => [
                    'createGameCenterLeaderboardLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardLocalizationsGameCenterLeaderboardImage' => [
                        'path' => '/v1/gameCenterLeaderboardLocalizations/{id}/gameCenterLeaderboardImage',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardReleases = new AppStore\Resource\GameCenterLeaderboardReleases(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardReleases',
            [
                'methods' => [
                    'createGameCenterLeaderboardReleases' => [
                        'path' => '/v1/gameCenterLeaderboardReleases',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardReleases' => [
                        'path' => '/v1/gameCenterLeaderboardReleases/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardReleases' => [
                        'path' => '/v1/gameCenterLeaderboardReleases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardSetImages = new AppStore\Resource\GameCenterLeaderboardSetImages(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardSetImages',
            [
                'methods' => [
                    'createGameCenterLeaderboardSetImages' => [
                        'path' => '/v1/gameCenterLeaderboardSetImages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardSetImages' => [
                        'path' => '/v1/gameCenterLeaderboardSetImages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardSetImages' => [
                        'path' => '/v1/gameCenterLeaderboardSetImages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardSetImages' => [
                        'path' => '/v1/gameCenterLeaderboardSetImages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardSetLocalizations = new AppStore\Resource\GameCenterLeaderboardSetLocalizations(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardSetLocalizations',
            [
                'methods' => [
                    'createGameCenterLeaderboardSetLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardSetLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardSetLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardSetLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImage' => [
                        'path' => '/v1/gameCenterLeaderboardSetLocalizations/{id}/gameCenterLeaderboardSetImage',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardSetMemberLocalizations = new AppStore\Resource\GameCenterLeaderboardSetMemberLocalizations(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardSetMemberLocalizations',
            [
                'methods' => [
                    'listGameCenterLeaderboardSetMemberLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetMemberLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[gameCenterLeaderboard]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterLeaderboardSet]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetMemberLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'createGameCenterLeaderboardSetMemberLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetMemberLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateGameCenterLeaderboardSetMemberLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetMemberLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardSetMemberLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSetMemberLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboard' => [
                        'path' => '/v1/gameCenterLeaderboardSetMemberLocalizations/{id}/gameCenterLeaderboard',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSet' => [
                        'path' => '/v1/gameCenterLeaderboardSetMemberLocalizations/{id}/gameCenterLeaderboardSet',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardSetReleases = new AppStore\Resource\GameCenterLeaderboardSetReleases(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardSetReleases',
            [
                'methods' => [
                    'createGameCenterLeaderboardSetReleases' => [
                        'path' => '/v1/gameCenterLeaderboardSetReleases',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardSetReleases' => [
                        'path' => '/v1/gameCenterLeaderboardSetReleases/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardSetReleases' => [
                        'path' => '/v1/gameCenterLeaderboardSetReleases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboardSets = new AppStore\Resource\GameCenterLeaderboardSets(
            $this,
            $this->serviceName,
            'gameCenterLeaderboardSets',
            [
                'methods' => [
                    'createGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterLeaderboardSets',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboardSets' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterLeaderboardSetsGameCenterLeaderboardsLinkages' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListGameCenterLeaderboardSetsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateListGameCenterLeaderboardSetsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListGameCenterLeaderboardSetsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/relationships/gameCenterLeaderboards',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterLeaderboardSetsGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/gameCenterLeaderboards',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[archived]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[referenceName]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardSetsGroupLeaderboardSetLinkages' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/relationships/groupLeaderboardSet',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardSetsGroupLeaderboardSet' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/relationships/groupLeaderboardSet',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardSetsGroupLeaderboardSet' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/groupLeaderboardSet',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterLeaderboardSetsLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/localizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardSetLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterLeaderboardSetsReleases' => [
                        'path' => '/v1/gameCenterLeaderboardSets/{id}/releases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[live]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterDetail]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSetReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterLeaderboards = new AppStore\Resource\GameCenterLeaderboards(
            $this,
            $this->serviceName,
            'gameCenterLeaderboards',
            [
                'methods' => [
                    'createGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboards',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterLeaderboards' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardsGroupLeaderboardLinkages' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}/relationships/groupLeaderboard',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateGameCenterLeaderboardsGroupLeaderboard' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}/relationships/groupLeaderboard',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterLeaderboardsGroupLeaderboard' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}/groupLeaderboard',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[gameCenterLeaderboardSets]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[localizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[releases]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterLeaderboardsLocalizations' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}/localizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterLeaderboardLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterLeaderboardsReleases' => [
                        'path' => '/v1/gameCenterLeaderboards/{id}/releases',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[live]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterDetail]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterDetails]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboards]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterLeaderboardReleases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterMatchmakingQueues = new AppStore\Resource\GameCenterMatchmakingQueues(
            $this,
            $this->serviceName,
            'gameCenterMatchmakingQueues',
            [
                'methods' => [
                    'listGameCenterMatchmakingQueues' => [
                        'path' => '/v1/gameCenterMatchmakingQueues',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[gameCenterMatchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'createGameCenterMatchmakingQueues' => [
                        'path' => '/v1/gameCenterMatchmakingQueues',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterMatchmakingQueues' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterMatchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateGameCenterMatchmakingQueues' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterMatchmakingQueues' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingQueuesExperimentMatchmakingQueueSizesMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}/metrics/experimentMatchmakingQueueSizes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingQueuesExperimentMatchmakingRequestsMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}/metrics/experimentMatchmakingRequests',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[result]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'filter[gameCenterDetail]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingQueuesMatchmakingQueueSizesMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}/metrics/matchmakingQueueSizes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingQueuesMatchmakingRequestsMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}/metrics/matchmakingRequests',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[result]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'filter[gameCenterDetail]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingQueuesMatchmakingSessionsMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingQueues/{id}/metrics/matchmakingSessions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterMatchmakingRuleSetTests = new AppStore\Resource\GameCenterMatchmakingRuleSetTests(
            $this,
            $this->serviceName,
            'gameCenterMatchmakingRuleSetTests',
            [
                'methods' => [
                    'createGameCenterMatchmakingRuleSetTests' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSetTests',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterMatchmakingRuleSets = new AppStore\Resource\GameCenterMatchmakingRuleSets(
            $this,
            $this->serviceName,
            'gameCenterMatchmakingRuleSets',
            [
                'methods' => [
                    'listGameCenterMatchmakingRuleSets' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[gameCenterMatchmakingRuleSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingTeams]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingRules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[matchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[rules]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[teams]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createGameCenterMatchmakingRuleSets' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getGameCenterMatchmakingRuleSets' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterMatchmakingRuleSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingTeams]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingRules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[matchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[rules]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[teams]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateGameCenterMatchmakingRuleSets' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterMatchmakingRuleSets' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterMatchmakingRuleSetsMatchmakingQueues' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets/{id}/matchmakingQueues',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterMatchmakingQueues]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterMatchmakingRuleSets]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listGameCenterMatchmakingRuleSetsRules' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets/{id}/rules',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterMatchmakingRules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listGameCenterMatchmakingRuleSetsTeams' => [
                        'path' => '/v1/gameCenterMatchmakingRuleSets/{id}/teams',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[gameCenterMatchmakingTeams]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterMatchmakingRules = new AppStore\Resource\GameCenterMatchmakingRules(
            $this,
            $this->serviceName,
            'gameCenterMatchmakingRules',
            [
                'methods' => [
                    'createGameCenterMatchmakingRules' => [
                        'path' => '/v1/gameCenterMatchmakingRules',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateGameCenterMatchmakingRules' => [
                        'path' => '/v1/gameCenterMatchmakingRules/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterMatchmakingRules' => [
                        'path' => '/v1/gameCenterMatchmakingRules/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingRulesMatchmakingBooleanRuleResultsMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingRules/{id}/metrics/matchmakingBooleanRuleResults',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[result]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'filter[gameCenterMatchmakingQueue]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingRulesMatchmakingNumberRuleResultsMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingRules/{id}/metrics/matchmakingNumberRuleResults',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterMatchmakingQueue]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getGameCenterMatchmakingRulesMatchmakingRuleErrorsMetrics' => [
                        'path' => '/v1/gameCenterMatchmakingRules/{id}/metrics/matchmakingRuleErrors',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'granularity' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'groupBy' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[gameCenterMatchmakingQueue]' => [
                                'location' => 'query',
                                'type' => 'string'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterMatchmakingTeams = new AppStore\Resource\GameCenterMatchmakingTeams(
            $this,
            $this->serviceName,
            'gameCenterMatchmakingTeams',
            [
                'methods' => [
                    'createGameCenterMatchmakingTeams' => [
                        'path' => '/v1/gameCenterMatchmakingTeams',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateGameCenterMatchmakingTeams' => [
                        'path' => '/v1/gameCenterMatchmakingTeams/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteGameCenterMatchmakingTeams' => [
                        'path' => '/v1/gameCenterMatchmakingTeams/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterPlayerAchievementSubmissions = new AppStore\Resource\GameCenterPlayerAchievementSubmissions(
            $this,
            $this->serviceName,
            'gameCenterPlayerAchievementSubmissions',
            [
                'methods' => [
                    'createGameCenterPlayerAchievementSubmissions' => [
                        'path' => '/v1/gameCenterPlayerAchievementSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchaseAppStoreReviewScreenshots = new AppStore\Resource\InAppPurchaseAppStoreReviewScreenshots(
            $this,
            $this->serviceName,
            'inAppPurchaseAppStoreReviewScreenshots',
            [
                'methods' => [
                    'createInAppPurchaseAppStoreReviewScreenshots' => [
                        'path' => '/v1/inAppPurchaseAppStoreReviewScreenshots',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getInAppPurchaseAppStoreReviewScreenshots' => [
                        'path' => '/v1/inAppPurchaseAppStoreReviewScreenshots/{id}',
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
                            ],
                        ]
                    ],
                    'updateInAppPurchaseAppStoreReviewScreenshots' => [
                        'path' => '/v1/inAppPurchaseAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteInAppPurchaseAppStoreReviewScreenshots' => [
                        'path' => '/v1/inAppPurchaseAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchaseAvailabilities = new AppStore\Resource\InAppPurchaseAvailabilities(
            $this,
            $this->serviceName,
            'inAppPurchaseAvailabilities',
            [
                'methods' => [
                    'createInAppPurchaseAvailabilities' => [
                        'path' => '/v1/inAppPurchaseAvailabilities',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getInAppPurchaseAvailabilities' => [
                        'path' => '/v1/inAppPurchaseAvailabilities/{id}',
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
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listInAppPurchaseAvailabilitiesAvailableTerritories' => [
                        'path' => '/v1/inAppPurchaseAvailabilities/{id}/availableTerritories',
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
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchaseContents = new AppStore\Resource\InAppPurchaseContents(
            $this,
            $this->serviceName,
            'inAppPurchaseContents',
            [
                'methods' => [
                    'getInAppPurchaseContents' => [
                        'path' => '/v1/inAppPurchaseContents/{id}',
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
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchaseLocalizations = new AppStore\Resource\InAppPurchaseLocalizations(
            $this,
            $this->serviceName,
            'inAppPurchaseLocalizations',
            [
                'methods' => [
                    'createInAppPurchaseLocalizations' => [
                        'path' => '/v1/inAppPurchaseLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getInAppPurchaseLocalizations' => [
                        'path' => '/v1/inAppPurchaseLocalizations/{id}',
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
                            ],
                        ]
                    ],
                    'updateInAppPurchaseLocalizations' => [
                        'path' => '/v1/inAppPurchaseLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteInAppPurchaseLocalizations' => [
                        'path' => '/v1/inAppPurchaseLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchasePriceSchedules = new AppStore\Resource\InAppPurchasePriceSchedules(
            $this,
            $this->serviceName,
            'inAppPurchasePriceSchedules',
            [
                'methods' => [
                    'createInAppPurchasePriceSchedules' => [
                        'path' => '/v1/inAppPurchasePriceSchedules',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getInAppPurchasePriceSchedules' => [
                        'path' => '/v1/inAppPurchasePriceSchedules/{id}',
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
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[automaticPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[manualPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listInAppPurchasePriceSchedulesAutomaticPrices' => [
                        'path' => '/v1/inAppPurchasePriceSchedules/{id}/automaticPrices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getInAppPurchasePriceSchedulesBaseTerritory' => [
                        'path' => '/v1/inAppPurchasePriceSchedules/{id}/baseTerritory',
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
                        ]
                    ],
                    'listInAppPurchasePriceSchedulesManualPrices' => [
                        'path' => '/v1/inAppPurchasePriceSchedules/{id}/manualPrices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchaseSubmissions = new AppStore\Resource\InAppPurchaseSubmissions(
            $this,
            $this->serviceName,
            'inAppPurchaseSubmissions',
            [
                'methods' => [
                    'createInAppPurchaseSubmissions' => [
                        'path' => '/v1/inAppPurchaseSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->inAppPurchases = new AppStore\Resource\InAppPurchases(
            $this,
            $this->serviceName,
            'inAppPurchases',
            [
                'methods' => [
                    'getInAppPurchasesV1' => [
                        'path' => '/v1/inAppPurchases/{id}',
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
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[apps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createInAppPurchasesV2' => [
                        'path' => '/v2/inAppPurchases',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getInAppPurchasesV2' => [
                        'path' => '/v2/inAppPurchases/{id}',
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
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchaseContents]' => [
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
                        ]
                    ],
                    'updateInAppPurchasesV2' => [
                        'path' => '/v2/inAppPurchases/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteInAppPurchasesV2' => [
                        'path' => '/v2/inAppPurchases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getInAppPurchasesV2AppStoreReviewScreenshot' => [
                        'path' => '/v2/inAppPurchases/{id}/appStoreReviewScreenshot',
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
                            ],
                        ]
                    ],
                    'getInAppPurchasesV2Content' => [
                        'path' => '/v2/inAppPurchases/{id}/content',
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
                            'fields[inAppPurchaseContents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getInAppPurchasesV2IapPriceSchedule' => [
                        'path' => '/v2/inAppPurchases/{id}/iapPriceSchedule',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[inAppPurchasePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePriceSchedules]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[manualPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[automaticPrices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getInAppPurchasesV2InAppPurchaseAvailability' => [
                        'path' => '/v2/inAppPurchases/{id}/inAppPurchaseAvailability',
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
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listInAppPurchasesV2InAppPurchaseLocalizations' => [
                        'path' => '/v2/inAppPurchases/{id}/inAppPurchaseLocalizations',
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
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listInAppPurchasesV2PricePoints' => [
                        'path' => '/v2/inAppPurchases/{id}/pricePoints',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchasePricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getInAppPurchasesV2PromotedPurchase' => [
                        'path' => '/v2/inAppPurchases/{id}/promotedPurchase',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
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
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->marketplaceDomains = new AppStore\Resource\MarketplaceDomains(
            $this,
            $this->serviceName,
            'marketplaceDomains',
            [
                'methods' => [
                    'listMarketplaceDomains' => [
                        'path' => '/v1/marketplaceDomains',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[marketplaceDomains]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createMarketplaceDomains' => [
                        'path' => '/v1/marketplaceDomains',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getMarketplaceDomains' => [
                        'path' => '/v1/marketplaceDomains/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[marketplaceDomains]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'deleteMarketplaceDomains' => [
                        'path' => '/v1/marketplaceDomains/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->marketplaceSearchDetails = new AppStore\Resource\MarketplaceSearchDetails(
            $this,
            $this->serviceName,
            'marketplaceSearchDetails',
            [
                'methods' => [
                    'createMarketplaceSearchDetails' => [
                        'path' => '/v1/marketplaceSearchDetails',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateMarketplaceSearchDetails' => [
                        'path' => '/v1/marketplaceSearchDetails/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteMarketplaceSearchDetails' => [
                        'path' => '/v1/marketplaceSearchDetails/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->marketplaceWebhooks = new AppStore\Resource\MarketplaceWebhooks(
            $this,
            $this->serviceName,
            'marketplaceWebhooks',
            [
                'methods' => [
                    'listMarketplaceWebhooks' => [
                        'path' => '/v1/marketplaceWebhooks',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[marketplaceWebhooks]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createMarketplaceWebhooks' => [
                        'path' => '/v1/marketplaceWebhooks',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateMarketplaceWebhooks' => [
                        'path' => '/v1/marketplaceWebhooks/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteMarketplaceWebhooks' => [
                        'path' => '/v1/marketplaceWebhooks/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->preReleaseVersions = new AppStore\Resource\PreReleaseVersions(
            $this,
            $this->serviceName,
            'preReleaseVersions',
            [
                'methods' => [
                    'listPreReleaseVersions' => [
                        'path' => '/v1/preReleaseVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[builds.expired]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds.processingState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds.version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getPreReleaseVersions' => [
                        'path' => '/v1/preReleaseVersions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[preReleaseVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[builds]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getPreReleaseVersionsApp' => [
                        'path' => '/v1/preReleaseVersions/{id}/app',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listPreReleaseVersionsBuilds' => [
                        'path' => '/v1/preReleaseVersions/{id}/builds',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[builds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->profiles = new AppStore\Resource\Profiles(
            $this,
            $this->serviceName,
            'profiles',
            [
                'methods' => [
                    'listProfiles' => [
                        'path' => '/v1/profiles',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[name]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[profileState]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[profileType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[profiles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[certificates]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[devices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[bundleIds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[certificates]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[devices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createProfiles' => [
                        'path' => '/v1/profiles',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getProfiles' => [
                        'path' => '/v1/profiles/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[profiles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[certificates]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[devices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[bundleIds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[certificates]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[devices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteProfiles' => [
                        'path' => '/v1/profiles/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getProfilesBundleId' => [
                        'path' => '/v1/profiles/{id}/bundleId',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[bundleIds]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listProfilesCertificates' => [
                        'path' => '/v1/profiles/{id}/certificates',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[certificates]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listProfilesDevices' => [
                        'path' => '/v1/profiles/{id}/devices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[devices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->promotedPurchaseImages = new AppStore\Resource\PromotedPurchaseImages(
            $this,
            $this->serviceName,
            'promotedPurchaseImages',
            [
                'methods' => [
                    'createPromotedPurchaseImages' => [
                        'path' => '/v1/promotedPurchaseImages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getPromotedPurchaseImages' => [
                        'path' => '/v1/promotedPurchaseImages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[promotedPurchaseImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updatePromotedPurchaseImages' => [
                        'path' => '/v1/promotedPurchaseImages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deletePromotedPurchaseImages' => [
                        'path' => '/v1/promotedPurchaseImages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->promotedPurchases = new AppStore\Resource\PromotedPurchases(
            $this,
            $this->serviceName,
            'promotedPurchases',
            [
                'methods' => [
                    'createPromotedPurchases' => [
                        'path' => '/v1/promotedPurchases',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getPromotedPurchases' => [
                        'path' => '/v1/promotedPurchases/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[promotedPurchases]' => [
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
                            ],
                        ]
                    ],
                    'updatePromotedPurchases' => [
                        'path' => '/v1/promotedPurchases/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deletePromotedPurchases' => [
                        'path' => '/v1/promotedPurchases/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listPromotedPurchasesPromotionImages' => [
                        'path' => '/v1/promotedPurchases/{id}/promotionImages',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchaseImages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->reviewSubmissionItems = new AppStore\Resource\ReviewSubmissionItems(
            $this,
            $this->serviceName,
            'reviewSubmissionItems',
            [
                'methods' => [
                    'createReviewSubmissionItems' => [
                        'path' => '/v1/reviewSubmissionItems',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateReviewSubmissionItems' => [
                        'path' => '/v1/reviewSubmissionItems/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteReviewSubmissionItems' => [
                        'path' => '/v1/reviewSubmissionItems/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->reviewSubmissions = new AppStore\Resource\ReviewSubmissions(
            $this,
            $this->serviceName,
            'reviewSubmissions',
            [
                'methods' => [
                    'listReviewSubmissions' => [
                        'path' => '/v1/reviewSubmissions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[state]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissionItems]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[items]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createReviewSubmissions' => [
                        'path' => '/v1/reviewSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getReviewSubmissions' => [
                        'path' => '/v1/reviewSubmissions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[reviewSubmissions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissionItems]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[items]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateReviewSubmissions' => [
                        'path' => '/v1/reviewSubmissions/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listReviewSubmissionsItems' => [
                        'path' => '/v1/reviewSubmissions/{id}/items',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appStoreVersionExperiments]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[reviewSubmissionItems]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appStoreVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appCustomProductPageVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[appEvents]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->routingAppCoverages = new AppStore\Resource\RoutingAppCoverages(
            $this,
            $this->serviceName,
            'routingAppCoverages',
            [
                'methods' => [
                    'createRoutingAppCoverages' => [
                        'path' => '/v1/routingAppCoverages',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getRoutingAppCoverages' => [
                        'path' => '/v1/routingAppCoverages/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[routingAppCoverages]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateRoutingAppCoverages' => [
                        'path' => '/v1/routingAppCoverages/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteRoutingAppCoverages' => [
                        'path' => '/v1/routingAppCoverages/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->salesReports = new AppStore\Resource\SalesReports(
            $this,
            $this->serviceName,
            'salesReports',
            [
                'methods' => [
                    'listSalesReports' => [
                        'path' => '/v1/salesReports',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[frequency]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[reportDate]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[reportSubType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[reportType]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[vendorNumber]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[version]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->sandboxTesters = new AppStore\Resource\SandboxTesters(
            $this,
            $this->serviceName,
            'sandboxTesters',
            [
                'methods' => [
                    'listSandboxTestersV2' => [
                        'path' => '/v2/sandboxTesters',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[sandboxTesters]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateSandboxTestersV2' => [
                        'path' => '/v2/sandboxTesters/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->sandboxTestersClearPurchaseHistoryRequest = new AppStore\Resource\SandboxTestersClearPurchaseHistoryRequest(
            $this,
            $this->serviceName,
            'sandboxTestersClearPurchaseHistoryRequest',
            [
                'methods' => [
                    'createSandboxTestersClearPurchaseHistoryRequestV2' => [
                        'path' => '/v2/sandboxTestersClearPurchaseHistoryRequest',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->scmGitReferences = new AppStore\Resource\ScmGitReferences(
            $this,
            $this->serviceName,
            'scmGitReferences',
            [
                'methods' => [
                    'getScmGitReferences' => [
                        'path' => '/v1/scmGitReferences/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->scmProviders = new AppStore\Resource\ScmProviders(
            $this,
            $this->serviceName,
            'scmProviders',
            [
                'methods' => [
                    'listScmProviders' => [
                        'path' => '/v1/scmProviders',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[scmProviders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getScmProviders' => [
                        'path' => '/v1/scmProviders/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmProviders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listScmProvidersRepositories' => [
                        'path' => '/v1/scmProviders/{id}/repositories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmProviders]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->scmPullRequests = new AppStore\Resource\ScmPullRequests(
            $this,
            $this->serviceName,
            'scmPullRequests',
            [
                'methods' => [
                    'getScmPullRequests' => [
                        'path' => '/v1/scmPullRequests/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->scmRepositories = new AppStore\Resource\ScmRepositories(
            $this,
            $this->serviceName,
            'scmRepositories',
            [
                'methods' => [
                    'listScmRepositories' => [
                        'path' => '/v1/scmRepositories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getScmRepositories' => [
                        'path' => '/v1/scmRepositories/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listScmRepositoriesGitReferences' => [
                        'path' => '/v1/scmRepositories/{id}/gitReferences',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmGitReferences]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listScmRepositoriesPullRequests' => [
                        'path' => '/v1/scmRepositories/{id}/pullRequests',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[scmPullRequests]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[scmRepositories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionAppStoreReviewScreenshots = new AppStore\Resource\SubscriptionAppStoreReviewScreenshots(
            $this,
            $this->serviceName,
            'subscriptionAppStoreReviewScreenshots',
            [
                'methods' => [
                    'createSubscriptionAppStoreReviewScreenshots' => [
                        'path' => '/v1/subscriptionAppStoreReviewScreenshots',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionAppStoreReviewScreenshots' => [
                        'path' => '/v1/subscriptionAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateSubscriptionAppStoreReviewScreenshots' => [
                        'path' => '/v1/subscriptionAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptionAppStoreReviewScreenshots' => [
                        'path' => '/v1/subscriptionAppStoreReviewScreenshots/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionAvailabilities = new AppStore\Resource\SubscriptionAvailabilities(
            $this,
            $this->serviceName,
            'subscriptionAvailabilities',
            [
                'methods' => [
                    'createSubscriptionAvailabilities' => [
                        'path' => '/v1/subscriptionAvailabilities',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionAvailabilities' => [
                        'path' => '/v1/subscriptionAvailabilities/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'listSubscriptionAvailabilitiesAvailableTerritories' => [
                        'path' => '/v1/subscriptionAvailabilities/{id}/availableTerritories',
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
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionGracePeriods = new AppStore\Resource\SubscriptionGracePeriods(
            $this,
            $this->serviceName,
            'subscriptionGracePeriods',
            [
                'methods' => [
                    'getSubscriptionGracePeriods' => [
                        'path' => '/v1/subscriptionGracePeriods/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionGracePeriods]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateSubscriptionGracePeriods' => [
                        'path' => '/v1/subscriptionGracePeriods/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionGroupLocalizations = new AppStore\Resource\SubscriptionGroupLocalizations(
            $this,
            $this->serviceName,
            'subscriptionGroupLocalizations',
            [
                'methods' => [
                    'createSubscriptionGroupLocalizations' => [
                        'path' => '/v1/subscriptionGroupLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionGroupLocalizations' => [
                        'path' => '/v1/subscriptionGroupLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionGroupLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateSubscriptionGroupLocalizations' => [
                        'path' => '/v1/subscriptionGroupLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptionGroupLocalizations' => [
                        'path' => '/v1/subscriptionGroupLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionGroupSubmissions = new AppStore\Resource\SubscriptionGroupSubmissions(
            $this,
            $this->serviceName,
            'subscriptionGroupSubmissions',
            [
                'methods' => [
                    'createSubscriptionGroupSubmissions' => [
                        'path' => '/v1/subscriptionGroupSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionGroups = new AppStore\Resource\SubscriptionGroups(
            $this,
            $this->serviceName,
            'subscriptionGroups',
            [
                'methods' => [
                    'createSubscriptionGroups' => [
                        'path' => '/v1/subscriptionGroups',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionGroups' => [
                        'path' => '/v1/subscriptionGroups/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroupLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[subscriptionGroupLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateSubscriptionGroups' => [
                        'path' => '/v1/subscriptionGroups/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptionGroups' => [
                        'path' => '/v1/subscriptionGroups/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listSubscriptionGroupsSubscriptionGroupLocalizations' => [
                        'path' => '/v1/subscriptionGroups/{id}/subscriptionGroupLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroupLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionGroupsSubscriptions' => [
                        'path' => '/v1/subscriptionGroups/{id}/subscriptions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
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
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPromotionalOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionGroups]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionIntroductoryOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[introductoryOffers]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotionalOffers]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[offerCodes]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionIntroductoryOffers = new AppStore\Resource\SubscriptionIntroductoryOffers(
            $this,
            $this->serviceName,
            'subscriptionIntroductoryOffers',
            [
                'methods' => [
                    'createSubscriptionIntroductoryOffers' => [
                        'path' => '/v1/subscriptionIntroductoryOffers',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'updateSubscriptionIntroductoryOffers' => [
                        'path' => '/v1/subscriptionIntroductoryOffers/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptionIntroductoryOffers' => [
                        'path' => '/v1/subscriptionIntroductoryOffers/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionLocalizations = new AppStore\Resource\SubscriptionLocalizations(
            $this,
            $this->serviceName,
            'subscriptionLocalizations',
            [
                'methods' => [
                    'createSubscriptionLocalizations' => [
                        'path' => '/v1/subscriptionLocalizations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionLocalizations' => [
                        'path' => '/v1/subscriptionLocalizations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateSubscriptionLocalizations' => [
                        'path' => '/v1/subscriptionLocalizations/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptionLocalizations' => [
                        'path' => '/v1/subscriptionLocalizations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionOfferCodeCustomCodes = new AppStore\Resource\SubscriptionOfferCodeCustomCodes(
            $this,
            $this->serviceName,
            'subscriptionOfferCodeCustomCodes',
            [
                'methods' => [
                    'createSubscriptionOfferCodeCustomCodes' => [
                        'path' => '/v1/subscriptionOfferCodeCustomCodes',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionOfferCodeCustomCodes' => [
                        'path' => '/v1/subscriptionOfferCodeCustomCodes/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionOfferCodeCustomCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateSubscriptionOfferCodeCustomCodes' => [
                        'path' => '/v1/subscriptionOfferCodeCustomCodes/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionOfferCodeOneTimeUseCodes = new AppStore\Resource\SubscriptionOfferCodeOneTimeUseCodes(
            $this,
            $this->serviceName,
            'subscriptionOfferCodeOneTimeUseCodes',
            [
                'methods' => [
                    'createSubscriptionOfferCodeOneTimeUseCodes' => [
                        'path' => '/v1/subscriptionOfferCodeOneTimeUseCodes',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionOfferCodeOneTimeUseCodes' => [
                        'path' => '/v1/subscriptionOfferCodeOneTimeUseCodes/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionOfferCodeOneTimeUseCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'updateSubscriptionOfferCodeOneTimeUseCodes' => [
                        'path' => '/v1/subscriptionOfferCodeOneTimeUseCodes/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getSubscriptionOfferCodeOneTimeUseCodesValues' => [
                        'path' => '/v1/subscriptionOfferCodeOneTimeUseCodes/{id}/values',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionOfferCodes = new AppStore\Resource\SubscriptionOfferCodes(
            $this,
            $this->serviceName,
            'subscriptionOfferCodes',
            [
                'methods' => [
                    'createSubscriptionOfferCodes' => [
                        'path' => '/v1/subscriptionOfferCodes',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionOfferCodes' => [
                        'path' => '/v1/subscriptionOfferCodes/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionOfferCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodeCustomCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodeOneTimeUseCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[customCodes]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[oneTimeUseCodes]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateSubscriptionOfferCodes' => [
                        'path' => '/v1/subscriptionOfferCodes/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listSubscriptionOfferCodesCustomCodes' => [
                        'path' => '/v1/subscriptionOfferCodes/{id}/customCodes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionOfferCodeCustomCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionOfferCodesOneTimeUseCodes' => [
                        'path' => '/v1/subscriptionOfferCodes/{id}/oneTimeUseCodes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionOfferCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodeOneTimeUseCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionOfferCodesPrices' => [
                        'path' => '/v1/subscriptionOfferCodes/{id}/prices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionPricePoints = new AppStore\Resource\SubscriptionPricePoints(
            $this,
            $this->serviceName,
            'subscriptionPricePoints',
            [
                'methods' => [
                    'getSubscriptionPricePoints' => [
                        'path' => '/v1/subscriptionPricePoints/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionPricePointsEqualizations' => [
                        'path' => '/v1/subscriptionPricePoints/{id}/equalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[subscription]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionPrices = new AppStore\Resource\SubscriptionPrices(
            $this,
            $this->serviceName,
            'subscriptionPrices',
            [
                'methods' => [
                    'createSubscriptionPrices' => [
                        'path' => '/v1/subscriptionPrices',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'deleteSubscriptionPrices' => [
                        'path' => '/v1/subscriptionPrices/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionPromotionalOffers = new AppStore\Resource\SubscriptionPromotionalOffers(
            $this,
            $this->serviceName,
            'subscriptionPromotionalOffers',
            [
                'methods' => [
                    'createSubscriptionPromotionalOffers' => [
                        'path' => '/v1/subscriptionPromotionalOffers',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptionPromotionalOffers' => [
                        'path' => '/v1/subscriptionPromotionalOffers/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionPromotionalOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPromotionalOfferPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateSubscriptionPromotionalOffers' => [
                        'path' => '/v1/subscriptionPromotionalOffers/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptionPromotionalOffers' => [
                        'path' => '/v1/subscriptionPromotionalOffers/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listSubscriptionPromotionalOffersPrices' => [
                        'path' => '/v1/subscriptionPromotionalOffers/{id}/prices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPromotionalOfferPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptionSubmissions = new AppStore\Resource\SubscriptionSubmissions(
            $this,
            $this->serviceName,
            'subscriptionSubmissions',
            [
                'methods' => [
                    'createSubscriptionSubmissions' => [
                        'path' => '/v1/subscriptionSubmissions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],

                ]
            ]
        );
        $this->subscriptions = new AppStore\Resource\Subscriptions(
            $this,
            $this->serviceName,
            'subscriptions',
            [
                'methods' => [
                    'createSubscriptions' => [
                        'path' => '/v1/subscriptions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getSubscriptions' => [
                        'path' => '/v1/subscriptions/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPromotionalOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionAppStoreReviewScreenshots]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionIntroductoryOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[introductoryOffers]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[offerCodes]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[promotionalOffers]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[subscriptionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateSubscriptions' => [
                        'path' => '/v1/subscriptions/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteSubscriptions' => [
                        'path' => '/v1/subscriptions/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'getSubscriptionsAppStoreReviewScreenshot' => [
                        'path' => '/v1/subscriptions/{id}/appStoreReviewScreenshot',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionAppStoreReviewScreenshots]' => [
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
                        ]
                    ],
                    'listSubscriptionsIntroductoryOffersLinkages' => [
                        'path' => '/v1/subscriptions/{id}/relationships/introductoryOffers',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteListSubscriptionsIntroductoryOffers' => [
                        'path' => '/v1/subscriptions/{id}/relationships/introductoryOffers',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listSubscriptionsIntroductoryOffers' => [
                        'path' => '/v1/subscriptions/{id}/introductoryOffers',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionIntroductoryOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionsOfferCodes' => [
                        'path' => '/v1/subscriptions/{id}/offerCodes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodeCustomCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodeOneTimeUseCodes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionOfferCodePrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[oneTimeUseCodes]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[customCodes]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionsPricePoints' => [
                        'path' => '/v1/subscriptions/{id}/pricePoints',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionsPricesLinkages' => [
                        'path' => '/v1/subscriptions/{id}/relationships/prices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteListSubscriptionsPrices' => [
                        'path' => '/v1/subscriptions/{id}/relationships/prices',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listSubscriptionsPrices' => [
                        'path' => '/v1/subscriptions/{id}/prices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[subscriptionPricePoint]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPricePoints]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getSubscriptionsPromotedPurchase' => [
                        'path' => '/v1/subscriptions/{id}/promotedPurchase',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[promotedPurchases]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[inAppPurchases]' => [
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
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionsPromotionalOffers' => [
                        'path' => '/v1/subscriptions/{id}/promotionalOffers',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[territory]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPromotionalOffers]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionPromotionalOfferPrices]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[prices]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getSubscriptionsSubscriptionAvailability' => [
                        'path' => '/v1/subscriptions/{id}/subscriptionAvailability',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptionAvailabilities]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[availableTerritories]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listSubscriptionsSubscriptionLocalizations' => [
                        'path' => '/v1/subscriptions/{id}/subscriptionLocalizations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[subscriptions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[subscriptionLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->territories = new AppStore\Resource\Territories(
            $this,
            $this->serviceName,
            'territories',
            [
                'methods' => [
                    'listTerritories' => [
                        'path' => '/v1/territories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'fields[territories]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->territoryAvailabilities = new AppStore\Resource\TerritoryAvailabilities(
            $this,
            $this->serviceName,
            'territoryAvailabilities',
            [
                'methods' => [
                    'updateTerritoryAvailabilities' => [
                        'path' => '/v1/territoryAvailabilities/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->userInvitations = new AppStore\Resource\UserInvitations(
            $this,
            $this->serviceName,
            'userInvitations',
            [
                'methods' => [
                    'listUserInvitations' => [
                        'path' => '/v1/userInvitations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[email]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[roles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[visibleApps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[userInvitations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[visibleApps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createUserInvitations' => [
                        'path' => '/v1/userInvitations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                        ]
                    ],
                    'getUserInvitations' => [
                        'path' => '/v1/userInvitations/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[userInvitations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[visibleApps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'deleteUserInvitations' => [
                        'path' => '/v1/userInvitations/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listUserInvitationsVisibleApps' => [
                        'path' => '/v1/userInvitations/{id}/visibleApps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->users = new AppStore\Resource\Users(
            $this,
            $this->serviceName,
            'users',
            [
                'methods' => [
                    'listUsers' => [
                        'path' => '/v1/users',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter[roles]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[username]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[visibleApps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[users]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[visibleApps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'getUsers' => [
                        'path' => '/v1/users/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[users]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit[visibleApps]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'updateUsers' => [
                        'path' => '/v1/users/{id}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteUsers' => [
                        'path' => '/v1/users/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listUsersVisibleAppsLinkages' => [
                        'path' => '/v1/users/{id}/relationships/visibleApps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListUsersVisibleApps' => [
                        'path' => '/v1/users/{id}/relationships/visibleApps',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateListUsersVisibleApps' => [
                        'path' => '/v1/users/{id}/relationships/visibleApps',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListUsersVisibleApps' => [
                        'path' => '/v1/users/{id}/relationships/visibleApps',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listUsersVisibleApps' => [
                        'path' => '/v1/users/{id}/visibleApps',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->buildBundles = new AppStore\Resource\BuildBundles(
            $this,
            $this->serviceName,
            'buildBundles',
            [
                'methods' => [
                    'getBuildBundlesAppClipDomainCacheStatus' => [
                        'path' => '/v1/buildBundles/{id}/appClipDomainCacheStatus',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipDomainStatuses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'getBuildBundlesAppClipDomainDebugStatus' => [
                        'path' => '/v1/buildBundles/{id}/appClipDomainDebugStatus',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[appClipDomainStatuses]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listBuildBundlesBetaAppClipInvocations' => [
                        'path' => '/v1/buildBundles/{id}/betaAppClipInvocations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[betaAppClipInvocations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[betaAppClipInvocationLocalizations]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[betaAppClipInvocationLocalizations]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],
                    'listBuildBundlesBuildBundleFileSizes' => [
                        'path' => '/v1/buildBundles/{id}/buildBundleFileSizes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'fields[buildBundleFileSizes]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->diagnosticSignatures = new AppStore\Resource\DiagnosticSignatures(
            $this,
            $this->serviceName,
            'diagnosticSignatures',
            [
                'methods' => [
                    'listDiagnosticSignaturesLogs' => [
                        'path' => '/v1/diagnosticSignatures/{id}/logs',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],

                ]
            ]
        );
        $this->gameCenterEnabledVersions = new AppStore\Resource\GameCenterEnabledVersions(
            $this,
            $this->serviceName,
            'gameCenterEnabledVersions',
            [
                'methods' => [
                    'listGameCenterEnabledVersionsCompatibleVersionsLinkages' => [
                        'path' => '/v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                        ]
                    ],
                    'createListGameCenterEnabledVersionsCompatibleVersions' => [
                        'path' => '/v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'updateListGameCenterEnabledVersionsCompatibleVersions' => [
                        'path' => '/v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'deleteListGameCenterEnabledVersionsCompatibleVersions' => [
                        'path' => '/v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                        ]
                    ],
                    'listGameCenterEnabledVersionsCompatibleVersions' => [
                        'path' => '/v1/gameCenterEnabledVersions/{id}/compatibleVersions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'id' => [
                                'location' => 'path',
                                'type' => 'string'
                            ],
                            'filter[platform]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[versionString]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[app]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'filter[id]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'sort' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[gameCenterEnabledVersions]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'fields[apps]' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                            'limit' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'limit[compatibleVersions]' => [
                                'location' => 'query',
                                'type' => 'integer'
                            ],
                            'include' => [
                                'location' => 'query',
                                'type' => 'array'
                            ],
                        ]
                    ],

                ]
            ]
        );

    }

}

