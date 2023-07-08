<?php

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2CreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2UpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2Response;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasesV2Response;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePricePointsResponse;
use Cantie\AppStoreConnect\Services\AppStore\PromotedPurchaseResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAppStoreReviewScreenshotResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseSubmissionCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseSubmissionResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePriceScheduleResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseContentResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAvailabilityResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePricesResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePriceScheduleCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\TerritoryResponse;
use Cantie\AppStoreConnect\Services\AppStore\TerritoriesResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAvailabilityCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAppStoreReviewScreenshotCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAppStoreReviewScreenshotUpdateRequest;

/**
 * The "inAppPurchases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $inAppPurchases = $appStoreService->inAppPurchases;
 *  </code>
 */
class InAppPurchases extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
     * Create an in-app purchase, including a consumable, non-consumable, or non-renewing subscription.
     *
     * @param InAppPurchaseV2CreateRequest $postBody
     * @return InAppPurchaseV2Response
     */
    public function createIAP(InAppPurchaseV2CreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('createIAP', [$params], InAppPurchaseV2Response::class);
    }

    /**
     * Get information about a specific in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseV2Response
     */
    public function getIAP($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getIAP', [$params], InAppPurchaseV2Response::class);
    }

    /**
     * Get a list of the in-app purchases for a specific app.
     * 
     * @param string $appId The resource ID representing a unique app.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasesV2Response
     */
    public function listIAPs($appId, $optParams = [])
    {
        $params = ['id' => $appId];
        $params = array_merge($params, $optParams);
        return $this->call('listIAPs', [$params], InAppPurchasesV2Response::class);
    }

    /**
     * Update the reference name of a specific in-app purchase.
     *
     * @param string $iapId The resource ID representing a unique IAP.
     * @param InAppPurchaseV2UpdateRequest $postBody
     * @return InAppPurchaseV2Response
     */
    public function updateIAP($iapId, InAppPurchaseV2UpdateRequest $postBody)
    {
        $params = ['id' => $iapId, 'postBody' => $postBody];
        return $this->call('updateIAP', [$params], InAppPurchaseV2Response::class);
    }
    
    /**
     * Delete a specific in-app purchase from your app.
     *
     * @param string $iapId The resource ID representing a unique IAP.
     * @return null
     */
    public function deleteIAP($iapId)
    {
        $params = ['id' => $iapId];
        return $this->call('deleteIAP', [$params], null);
    }

    /**
     * Get a list of possible price points for an in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePricePointsResponse
     */
    public function listPricePoints($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('listPricePoints', [$params], InAppPurchasePricePointsResponse::class);
    }

    /**
     * Get details about the promoted purchase of an in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return PromotedPurchaseResponse
     */
    public function getPromotedPurchase($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getPromotedPurchase', [$params], PromotedPurchaseResponse::class);
    }

    /**
     * Get a list of localized display names and descriptions for a specific in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePricePointsResponse
     */
    public function listLocalizations($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('listAllLocalizations', [$params], InAppPurchaseLocalizationsResponse::class);
    }

    /**
     * Get information about a review screenshot for a specific in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseAppStoreReviewScreenshotResponse
     */
    public function getReviewScreenshot($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getReviewScreenshot', [$params], InAppPurchaseAppStoreReviewScreenshotResponse::class);
    }

    /**
     * Create an in-app purchase submission for review.
     * 
     * @param InAppPurchaseSubmissionCreateRequest $postBody
     * @return InAppPurchaseSubmissionResponse
     */
    public function createReviewSubmission(InAppPurchaseSubmissionCreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('createReviewSubmission', [$params], InAppPurchaseSubmissionResponse::class);
    }

    /**
     * Get a list of the scheduled prices for an in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePriceScheduleResponse
     */
    public function getPriceSchedule($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getPriceSchedule', [$params], InAppPurchasePriceScheduleResponse::class);
    }

    /**
     * Get the details about hosted content for an in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseContentResponse
     */
    public function getContentByIAPId($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getContentByIAPId', [$params], InAppPurchaseContentResponse::class);
    }

    /**
     * Get the details about hosted content for an in-app purchase.
     * 
     * @param string $iapContentId The resource ID representing a unique IAP content.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseContentResponse
     */
    public function getContentByContentId($iapContentId, $optParams = [])
    {
        $params = ['id' => $iapContentId];
        $params = array_merge($params, $optParams);
        return $this->call('getContentByContentId', [$params], InAppPurchaseContentResponse::class);
    }

    /**
     * Get information about the territory availablity for an in-app purchase.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseAvailabilityResponse
     */
    public function getAvailability($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getAvailability', [$params], InAppPurchaseAvailabilityResponse::class);
    }

    /**
     * Create a localized display name and description for an in-app purchase.
     * 
     * @param InAppPurchaseLocalizationCreateRequest $postBody
     * @return InAppPurchaseLocalizationResponse
     */
    public function createLocalization(InAppPurchaseLocalizationCreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('createLocalization', [$params], InAppPurchaseLocalizationResponse::class);
    }

    /**
     * Get the display name and description for a specific locale for an in-app purchase.
     * 
     * @param string $iapLocalizationId The resource ID representing a unique IAP localization.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseLocalizationResponse
     */
    public function getLocalization($iapLocalizationId, $optParams = [])
    {
        $params = ['id' => $iapLocalizationId];
        $params = array_merge($params, $optParams);
        return $this->call('getLocalization', [$params], InAppPurchaseLocalizationResponse::class);
    }

    /**
     * Update the display name and description for a specific locale of an in-app purchase.
     * 
     * @param InAppPurchaseLocalizationUpdateRequest $postBody
     * @return InAppPurchaseLocalizationResponse
     */
    public function updateLocalization(InAppPurchaseLocalizationUpdateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('updateLocalization', [$params], InAppPurchaseLocalizationResponse::class);
    }
    
    /**
     * Delete the metadata for a single in-app purchase localization.
     *
     * @param string $iapLocalizationId The resource ID representing a unique IAP localization.
     * @return null
     */
    public function deleteLocalization($iapLocalizationId)
    {
        $params = ['id' => $iapLocalizationId];
        return $this->call('deleteLocalization', [$params], null);
    }

    /**
     * Get information about a set price or prices for an in-app purchase price schedule.
     * 
     * @param string $iapPriceScheduleId The resource ID representing a unique IAP price schedule.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePricesResponse
     */
    public function getPriceSchedulePrice($iapPriceScheduleId, $optParams = [])
    {
        $params = ['id' => $iapPriceScheduleId];
        $params = array_merge($params, $optParams);
        return $this->call('getPriceSchedulePrice', [$params], InAppPurchasePricesResponse::class);
    }

    /**
     * Create a scheduled price change for an in-app purchase.
     * 
     * @param InAppPurchasePriceScheduleCreateRequest $postBody
     * @return InAppPurchasePriceScheduleResponse
     */
    public function createScheduledPrice(InAppPurchasePriceScheduleCreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('createScheduledPrice', [$params], InAppPurchasePriceScheduleResponse::class);
    }

    /**
     * Get information about a price or prices automatically set based on a base territory for an in-app purchase price schedule.
     * 
     * @param string $iapPriceScheduleId The resource ID representing a unique IAP price schedule.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePricesResponse
     */
    public function listAutoGeneratedPrices($iapPriceScheduleId, $optParams = [])
    {
        $params = ['id' => $iapPriceScheduleId];
        $params = array_merge($params, $optParams);
        return $this->call('listAutoGeneratedPrices', [$params], InAppPurchasePricesResponse::class);
    }

    /**
     * Get information about the selected base territory for an in-app purchase price schedule.
     * 
     * @param string $iapPriceScheduleId The resource ID representing a unique IAP price schedule.
     * @param array $optParams Optional parameters.
     * @return TerritoryResponse
     */
    public function getBaseTerritory($iapPriceScheduleId, $optParams = [])
    {
        $params = ['id' => $iapPriceScheduleId];
        $params = array_merge($params, $optParams);
        return $this->call('getBaseTerritory', [$params], TerritoryResponse::class);
    }

    /**
     * Get information about the territory availablity for an in-app purchase (V1).
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseAvailabilityResponse
     */
    public function getAvailabilityV1($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('getAvailabilityV1', [$params], InAppPurchaseAvailabilityResponse::class);
    }

    /**
     * List all the territories where an in-app purchase is available.
     * 
     * @param string $iapId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return TerritoriesResponse
     */
    public function listAvailableTerritories($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('listAvailableTerritories', [$params], TerritoriesResponse::class);
    }

    /**
     * Update the territory availablity of a specific in-app purchase.
     * 
     * @param InAppPurchaseAvailabilityCreateRequest $postBody
     * @return InAppPurchaseAvailabilityResponse
     */
    public function updateAvailableTerritory(InAppPurchaseAvailabilityCreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('updateAvailableTerritory', [$params], InAppPurchaseAvailabilityResponse::class);
    }

    /**
     * Get information about a specific review screenshot for an in-app purchase.
     * 
     * @param string $iapReviewScreenshotId The resource ID representing a unique IAP review screenshot.
     * @param array $optParams Optional parameters.
     * @return InAppPurchaseAppStoreReviewScreenshotResponse
     */
    public function getReviewScreenshotV1($iapReviewScreenshotId, $optParams = [])
    {
        $params = ['id' => $iapReviewScreenshotId];
        $params = array_merge($params, $optParams);
        return $this->call('getReviewScreenshotV1', [$params], InAppPurchaseAppStoreReviewScreenshotResponse::class);
    }

    /**
     * Reserve a review screenshot for an in-app purchase.
     *
     * @param InAppPurchaseAppStoreReviewScreenshotCreateRequest $postBody
     * @return InAppPurchaseAppStoreReviewScreenshotResponse
     */
    public function createReviewScreenshot(InAppPurchaseAppStoreReviewScreenshotCreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('createReviewScreenshot', [$params], InAppPurchaseAppStoreReviewScreenshotResponse::class);
    }

    /**
     * Commit an uploaded image asset as a review screenshot for an in-app purchase.
     *
     * @param string $iapReviewScreenshotId The resource ID representing a unique IAP review screenshot.
     * @param InAppPurchaseAppStoreReviewScreenshotUpdateRequest $postBody
     * @return InAppPurchaseAppStoreReviewScreenshotResponse
     */
    public function commitReviewScreenshot($iapReviewScreenshotId, InAppPurchaseAppStoreReviewScreenshotUpdateRequest $postBody)
    {
        $params = ['id' => $iapReviewScreenshotId, 'postBody' => $postBody];
        return $this->call('commitReviewScreenshot', [$params], InAppPurchaseAppStoreReviewScreenshotResponse::class);
    }

    /**
     * Delete an image that you uploaded for review of an in-app purchase.
     *
     * @param string $iapReviewScreenshotId The resource ID representing a unique IAP review screenshot.
     * @return null
     */
    public function deleteReviewScreenshot($iapReviewScreenshotId)
    {
        $params = ['id' => $iapReviewScreenshotId];
        return $this->call('deleteReviewScreenshot', [$params], null);
    }
}

class_alias(InAppPurchases::class, 'AppleService_AppStore_InAppPurchases');
