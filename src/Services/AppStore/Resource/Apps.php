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

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\AppsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AlternativeDistributionKeyResponse;
use Cantie\AppStoreConnect\Services\AppStore\AnalyticsReportRequestsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppAvailabilityResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppClipsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEventsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppInfosResponse;
use Cantie\AppStoreConnect\Services\AppStore\csv;
use Cantie\AppStoreConnect\Services\AppStore\AppPriceScheduleResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentsV2Response;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionsResponse;
use Cantie\AppStoreConnect\Services\AppStore\TerritoriesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppLocalizationsWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppReviewDetailWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaGroupsWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaLicenseAgreementWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppBetaTestersLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\BuildsWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\CiProductResponse;
use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewsResponse;
use Cantie\AppStoreConnect\Services\AppStore\EndUserLicenseAgreementWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterEnabledVersionsResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasesResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasesV2Response;
use Cantie\AppStoreConnect\Services\AppStore\MarketplaceSearchDetailResponse;
use Cantie\AppStoreConnect\Services\AppStore\xcodeMetrics;
use Cantie\AppStoreConnect\Services\AppStore\AppPreOrderWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\PreReleaseVersionsWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppPricePointsV2Response;
use Cantie\AppStoreConnect\Services\AppStore\AppPricesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppPromotedPurchasesLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppPromotedPurchasesLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\PromotedPurchasesResponse;
use Cantie\AppStoreConnect\Services\AppStore\ReviewSubmissionsResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionGracePeriodResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppsBetaTesterUsagesV1MetricResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class Apps extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return AppsResponse
     */
    public function listApps($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listApps', [$params], AppsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppResponse
     */
    public function getApps($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getApps', [$params], AppResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppUpdateRequest $postBody
     * @return AppResponse
     */
    public function updateApps($id, AppUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateApps', [$params], AppResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AlternativeDistributionKeyResponse
     */
    public function getAppsAlternativeDistributionKey($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsAlternativeDistributionKey', [$params], AlternativeDistributionKeyResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AnalyticsReportRequestsResponse
     */
    public function listAppsAnalyticsReportRequests($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAnalyticsReportRequests', [$params], AnalyticsReportRequestsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppAvailabilityResponse
     */
    public function getAppsAppAvailability($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsAppAvailability', [$params], AppAvailabilityResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipsResponse
     */
    public function listAppsAppClips($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppClips', [$params], AppClipsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCustomProductPagesResponse
     */
    public function listAppsAppCustomProductPages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppCustomProductPages', [$params], AppCustomProductPagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEncryptionDeclarationsResponse
     */
    public function listAppsAppEncryptionDeclarations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppEncryptionDeclarations', [$params], AppEncryptionDeclarationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEventsResponse
     */
    public function listAppsAppEvents($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppEvents', [$params], AppEventsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppInfosResponse
     */
    public function listAppsAppInfos($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppInfos', [$params], AppInfosResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return csv
     */
    public function listAppsAppPricePoints($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppPricePoints', [$params], csv::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppPriceScheduleResponse
     */
    public function getAppsAppPriceSchedule($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsAppPriceSchedule', [$params], AppPriceScheduleResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentsV2Response
     */
    public function listAppsAppStoreVersionExperimentsV2($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppStoreVersionExperimentsV2', [$params], AppStoreVersionExperimentsV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionsResponse
     */
    public function listAppsAppStoreVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAppStoreVersions', [$params], AppStoreVersionsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return TerritoriesResponse
     */
    public function listAppsAvailableTerritories($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsAvailableTerritories', [$params], TerritoriesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaAppLocalizationsWithoutIncludesResponse
     */
    public function listAppsBetaAppLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsBetaAppLocalizations', [$params], BetaAppLocalizationsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaAppReviewDetailWithoutIncludesResponse
     */
    public function getAppsBetaAppReviewDetail($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsBetaAppReviewDetail', [$params], BetaAppReviewDetailWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaGroupsWithoutIncludesResponse
     */
    public function listAppsBetaGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsBetaGroups', [$params], BetaGroupsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaLicenseAgreementWithoutIncludesResponse
     */
    public function getAppsBetaLicenseAgreement($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsBetaLicenseAgreement', [$params], BetaLicenseAgreementWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppBetaTestersLinkagesRequest $postBody
     * @return null
     */
    public function deleteListAppsBetaTesters($id, AppBetaTestersLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListAppsBetaTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildsWithoutIncludesResponse
     */
    public function listAppsBuilds($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsBuilds', [$params], BuildsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiProductResponse
     */
    public function getAppsCiProduct($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsCiProduct', [$params], CiProductResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CustomerReviewsResponse
     */
    public function listAppsCustomerReviews($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsCustomerReviews', [$params], CustomerReviewsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return EndUserLicenseAgreementWithoutIncludesResponse
     */
    public function getAppsEndUserLicenseAgreement($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsEndUserLicenseAgreement', [$params], EndUserLicenseAgreementWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterDetailResponse
     */
    public function getAppsGameCenterDetail($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsGameCenterDetail', [$params], GameCenterDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterEnabledVersionsResponse
     */
    public function listAppsGameCenterEnabledVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsGameCenterEnabledVersions', [$params], GameCenterEnabledVersionsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchasesResponse
     */
    public function listAppsInAppPurchases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsInAppPurchases', [$params], InAppPurchasesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchasesV2Response
     */
    public function listAppsInAppPurchasesV2($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsInAppPurchasesV2', [$params], InAppPurchasesV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return MarketplaceSearchDetailResponse
     */
    public function getAppsMarketplaceSearchDetail($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsMarketplaceSearchDetail', [$params], MarketplaceSearchDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return xcodeMetrics
     */
    public function listAppsPerfPowerMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsPerfPowerMetrics', [$params], xcodeMetrics::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppPreOrderWithoutIncludesResponse
     */
    public function getAppsPreOrder($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsPreOrder', [$params], AppPreOrderWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return PreReleaseVersionsWithoutIncludesResponse
     */
    public function listAppsPreReleaseVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsPreReleaseVersions', [$params], PreReleaseVersionsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppPricePointsV2Response
     */
    public function listAppsPricePoints($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsPricePoints', [$params], AppPricePointsV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppPricesResponse
     */
    public function listAppsPrices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsPrices', [$params], AppPricesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppPromotedPurchasesLinkagesResponse
     */
    public function listAppsPromotedPurchasesLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsPromotedPurchasesLinkages', [$params], AppPromotedPurchasesLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppPromotedPurchasesLinkagesRequest $postBody
     * @return null
     */
    public function updateListAppsPromotedPurchases($id, AppPromotedPurchasesLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListAppsPromotedPurchases', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return PromotedPurchasesResponse
     */
    public function listAppsPromotedPurchases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsPromotedPurchases', [$params], PromotedPurchasesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return ReviewSubmissionsResponse
     */
    public function listAppsReviewSubmissions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsReviewSubmissions', [$params], ReviewSubmissionsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionGracePeriodResponse
     */
    public function getAppsSubscriptionGracePeriod($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsSubscriptionGracePeriod', [$params], SubscriptionGracePeriodResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionGroupsResponse
     */
    public function listAppsSubscriptionGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppsSubscriptionGroups', [$params], SubscriptionGroupsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppsBetaTesterUsagesV1MetricResponse
     */
    public function getAppsBetaTesterUsagesMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppsBetaTesterUsagesMetrics', [$params], AppsBetaTesterUsagesV1MetricResponse::class);
    }
}

