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

namespace Cantie\AppStoreConnect;

class ModelConfig
{
    private static $mapTypeToClassName = [
		"actors" => "Cantie\AppStoreConnect\Services\AppStore\Actor",
		"ageRatingDeclarations" => "Cantie\AppStoreConnect\Services\AppStore\AgeRatingDeclaration",
		"appAvailabilities" => "Cantie\AppStoreConnect\Services\AppStore\AppAvailability",
		"appCategories" => "Cantie\AppStoreConnect\Services\AppStore\AppCategory",
		"appClipAdvancedExperienceImages" => "Cantie\AppStoreConnect\Services\AppStore\AppClipAdvancedExperienceImage",
		"appClipAdvancedExperienceLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppClipAdvancedExperienceLocalization",
		"appClipAdvancedExperiences" => "Cantie\AppStoreConnect\Services\AppStore\AppClipAdvancedExperience",
		"appClipAppStoreReviewDetails" => "Cantie\AppStoreConnect\Services\AppStore\AppClipAppStoreReviewDetail",
		"appClipDefaultExperienceLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceLocalization",
		"appClipDefaultExperiences" => "Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperience",
		"appClipDomainStatuses" => "Cantie\AppStoreConnect\Services\AppStore\AppClipDomainStatus",
		"appClipHeaderImages" => "Cantie\AppStoreConnect\Services\AppStore\AppClipHeaderImage",
		"appClips" => "Cantie\AppStoreConnect\Services\AppStore\AppClip",
		"appCustomProductPageLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPageLocalization",
		"appCustomProductPageVersions" => "Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPageVersion",
		"appCustomProductPages" => "Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPage",
		"appEncryptionDeclarationDocuments" => "Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationDocument",
		"appEncryptionDeclarations" => "Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclaration",
		"appEventLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppEventLocalization",
		"appEventScreenshots" => "Cantie\AppStoreConnect\Services\AppStore\AppEventScreenshot",
		"appEventVideoClips" => "Cantie\AppStoreConnect\Services\AppStore\AppEventVideoClip",
		"appEvents" => "Cantie\AppStoreConnect\Services\AppStore\AppEvent",
		"appInfoLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppInfoLocalization",
		"appInfos" => "Cantie\AppStoreConnect\Services\AppStore\AppInfo",
		"appPreOrders" => "Cantie\AppStoreConnect\Services\AppStore\AppPreOrder",
		"appPreviewSets" => "Cantie\AppStoreConnect\Services\AppStore\AppPreviewSet",
		"appPreviews" => "Cantie\AppStoreConnect\Services\AppStore\AppPreview",
		"appPricePoints" => "Cantie\AppStoreConnect\Services\AppStore\AppPricePoint",
		"appPriceSchedules" => "Cantie\AppStoreConnect\Services\AppStore\AppPriceSchedule",
		"appPriceTiers" => "Cantie\AppStoreConnect\Services\AppStore\AppPriceTier",
		"appPrices" => "Cantie\AppStoreConnect\Services\AppStore\AppPrice",
		"appScreenshotSets" => "Cantie\AppStoreConnect\Services\AppStore\AppScreenshotSet",
		"appScreenshots" => "Cantie\AppStoreConnect\Services\AppStore\AppScreenshot",
		"appStoreReviewAttachments" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreReviewAttachment",
		"appStoreReviewDetails" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreReviewDetail",
		"appStoreVersionExperimentTreatmentLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentTreatmentLocalization",
		"appStoreVersionExperimentTreatments" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentTreatment",
		"appStoreVersionExperiments" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperiment",
		"appStoreVersionLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionLocalization",
		"appStoreVersionPhasedReleases" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionPhasedRelease",
		"appStoreVersionPromotions" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionPromotion",
		"appStoreVersionReleaseRequests" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionReleaseRequest",
		"appStoreVersionSubmissions" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionSubmission",
		"appStoreVersions" => "Cantie\AppStoreConnect\Services\AppStore\AppStoreVersion",
		"apps" => "Cantie\AppStoreConnect\Services\AppStore\App",
		"betaAppClipInvocationLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\BetaAppClipInvocationLocalization",
		"betaAppClipInvocations" => "Cantie\AppStoreConnect\Services\AppStore\BetaAppClipInvocation",
		"betaAppLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\BetaAppLocalization",
		"betaAppReviewDetails" => "Cantie\AppStoreConnect\Services\AppStore\BetaAppReviewDetail",
		"betaAppReviewSubmissions" => "Cantie\AppStoreConnect\Services\AppStore\BetaAppReviewSubmission",
		"betaBuildLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\BetaBuildLocalization",
		"betaGroups" => "Cantie\AppStoreConnect\Services\AppStore\BetaGroup",
		"betaLicenseAgreements" => "Cantie\AppStoreConnect\Services\AppStore\BetaLicenseAgreement",
		"betaTesterInvitations" => "Cantie\AppStoreConnect\Services\AppStore\BetaTesterInvitation",
		"betaTesters" => "Cantie\AppStoreConnect\Services\AppStore\BetaTester",
		"buildBetaDetails" => "Cantie\AppStoreConnect\Services\AppStore\BuildBetaDetail",
		"buildBetaNotifications" => "Cantie\AppStoreConnect\Services\AppStore\BuildBetaNotification",
		"buildBundleFileSizes" => "Cantie\AppStoreConnect\Services\AppStore\BuildBundleFileSize",
		"buildBundles" => "Cantie\AppStoreConnect\Services\AppStore\BuildBundle",
		"buildIcons" => "Cantie\AppStoreConnect\Services\AppStore\BuildIcon",
		"builds" => "Cantie\AppStoreConnect\Services\AppStore\Build",
		"bundleIdCapabilities" => "Cantie\AppStoreConnect\Services\AppStore\BundleIdCapability",
		"bundleIds" => "Cantie\AppStoreConnect\Services\AppStore\BundleId",
		"certificates" => "Cantie\AppStoreConnect\Services\AppStore\Certificate",
		"ciArtifacts" => "Cantie\AppStoreConnect\Services\AppStore\CiArtifact",
		"ciBuildActions" => "Cantie\AppStoreConnect\Services\AppStore\CiBuildAction",
		"ciBuildRuns" => "Cantie\AppStoreConnect\Services\AppStore\CiBuildRun",
		"ciIssues" => "Cantie\AppStoreConnect\Services\AppStore\CiIssue",
		"ciMacOsVersions" => "Cantie\AppStoreConnect\Services\AppStore\CiMacOsVersion",
		"ciProducts" => "Cantie\AppStoreConnect\Services\AppStore\CiProduct",
		"ciTestResults" => "Cantie\AppStoreConnect\Services\AppStore\CiTestResult",
		"ciWorkflows" => "Cantie\AppStoreConnect\Services\AppStore\CiWorkflow",
		"ciXcodeVersions" => "Cantie\AppStoreConnect\Services\AppStore\CiXcodeVersion",
		"customerReviewResponses" => "Cantie\AppStoreConnect\Services\AppStore\CustomerReviewResponseV1",
		"customerReviews" => "Cantie\AppStoreConnect\Services\AppStore\CustomerReview",
		"devices" => "Cantie\AppStoreConnect\Services\AppStore\Device",
		"diagnosticLogs" => "Cantie\AppStoreConnect\Services\AppStore\DiagnosticLog",
		"diagnosticSignatures" => "Cantie\AppStoreConnect\Services\AppStore\DiagnosticSignature",
		"endAppAvailabilityPreOrders" => "Cantie\AppStoreConnect\Services\AppStore\EndAppAvailabilityPreOrder",
		"endUserLicenseAgreements" => "Cantie\AppStoreConnect\Services\AppStore\EndUserLicenseAgreement",
		"gameCenterAchievementImages" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementImage",
		"gameCenterAchievementLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementLocalization",
		"gameCenterAchievementReleases" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementRelease",
		"gameCenterAchievements" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievement",
		"gameCenterAppVersions" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersion",
		"gameCenterDetails" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterDetail",
		"gameCenterEnabledVersions" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterEnabledVersion",
		"gameCenterGroups" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterGroup",
		"gameCenterLeaderboardImages" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardImage",
		"gameCenterLeaderboardLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardLocalization",
		"gameCenterLeaderboardReleases" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardRelease",
		"gameCenterLeaderboardSetImages" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetImage",
		"gameCenterLeaderboardSetLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetLocalization",
		"gameCenterLeaderboardSetMemberLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetMemberLocalization",
		"gameCenterLeaderboardSetReleases" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetRelease",
		"gameCenterLeaderboardSets" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSet",
		"gameCenterLeaderboards" => "Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboard",
		"inAppPurchaseAppStoreReviewScreenshots" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAppStoreReviewScreenshot",
		"inAppPurchaseAvailabilities" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAvailability",
		"inAppPurchaseContents" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseContent",
		"inAppPurchaseLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseLocalization",
		"inAppPurchasePricePoints" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePricePoint",
		"inAppPurchasePriceSchedules" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePriceSchedule",
		"inAppPurchasePrices" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePrice",
		"inAppPurchaseSubmissions" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseSubmission",
		"inAppPurchases" => "Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2",
		"perfPowerMetrics" => "Cantie\AppStoreConnect\Services\AppStore\PerfPowerMetric",
		"preReleaseVersions" => "Cantie\AppStoreConnect\Services\AppStore\PrereleaseVersion",
		"profiles" => "Cantie\AppStoreConnect\Services\AppStore\Profile",
		"promotedPurchaseImages" => "Cantie\AppStoreConnect\Services\AppStore\PromotedPurchaseImage",
		"promotedPurchases" => "Cantie\AppStoreConnect\Services\AppStore\PromotedPurchase",
		"reviewSubmissionItems" => "Cantie\AppStoreConnect\Services\AppStore\ReviewSubmissionItem",
		"reviewSubmissions" => "Cantie\AppStoreConnect\Services\AppStore\ReviewSubmission",
		"routingAppCoverages" => "Cantie\AppStoreConnect\Services\AppStore\RoutingAppCoverage",
		"sandboxTesters" => "Cantie\AppStoreConnect\Services\AppStore\SandboxTesterV2",
		"sandboxTestersClearPurchaseHistoryRequest" => "Cantie\AppStoreConnect\Services\AppStore\SandboxTestersClearPurchaseHistoryRequestV2",
		"scmGitReferences" => "Cantie\AppStoreConnect\Services\AppStore\ScmGitReference",
		"scmProviders" => "Cantie\AppStoreConnect\Services\AppStore\ScmProvider",
		"scmPullRequests" => "Cantie\AppStoreConnect\Services\AppStore\ScmPullRequest",
		"scmRepositories" => "Cantie\AppStoreConnect\Services\AppStore\ScmRepository",
		"subscriptionAppStoreReviewScreenshots" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionAppStoreReviewScreenshot",
		"subscriptionAvailabilities" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionAvailability",
		"subscriptionGracePeriods" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionGracePeriod",
		"subscriptionGroupLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupLocalization",
		"subscriptionGroupSubmissions" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupSubmission",
		"subscriptionGroups" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroup",
		"subscriptionIntroductoryOffers" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOffer",
		"subscriptionLocalizations" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionLocalization",
		"subscriptionOfferCodeCustomCodes" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeCustomCode",
		"subscriptionOfferCodeOneTimeUseCodeValues" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeOneTimeUseCodeValue",
		"subscriptionOfferCodeOneTimeUseCodes" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeOneTimeUseCode",
		"subscriptionOfferCodePrices" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodePrice",
		"subscriptionOfferCodes" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCode",
		"subscriptionPricePoints" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionPricePoint",
		"subscriptionPrices" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionPrice",
		"subscriptionPromotionalOfferPrices" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOfferPrice",
		"subscriptionPromotionalOffers" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOffer",
		"subscriptionSubmissions" => "Cantie\AppStoreConnect\Services\AppStore\SubscriptionSubmission",
		"subscriptions" => "Cantie\AppStoreConnect\Services\AppStore\Subscription",
		"territories" => "Cantie\AppStoreConnect\Services\AppStore\Territory",
		"territoryAvailabilities" => "Cantie\AppStoreConnect\Services\AppStore\TerritoryAvailability",
		"userInvitations" => "Cantie\AppStoreConnect\Services\AppStore\UserInvitation",
		"users" => "Cantie\AppStoreConnect\Services\AppStore\User"
    ];

    public static function getModelNameByType($type)
    {
        return isset(self::$mapTypeToClassName[$type]) ? self::$mapTypeToClassName[$type] : "";
    }
}
