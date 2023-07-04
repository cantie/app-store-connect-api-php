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
    public function readIAP($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('readIAP', [$params], InAppPurchaseV2Response::class);
    }

    /**
     * Get a list of the in-app purchases for a specific app.
     * 
     * @param string $appId The resource ID representing a unique app.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasesV2Response
     */
    public function listAllAppIAP($appId, $optParams = [])
    {
        $params = ['id' => $appId];
        $params = array_merge($params, $optParams);
        return $this->call('listAllAppIAP', [$params], InAppPurchasesV2Response::class);
    }

    /**
     * Update the reference name of a specific in-app purchase.
     *
     * @param string $iapId The resource ID representing a unique IAP.
     * @param InAppPurchaseV2UpdateRequest $postBody
     * @return InAppPurchaseV2Response
     */
    public function modifyIAP($iapId, InAppPurchaseV2UpdateRequest $postBody)
    {
        $params = ['id' => $iapId, 'postBody' => $postBody];
        return $this->call('modifyIAP', [$params], InAppPurchaseV2Response::class);
    }
    
    /**
     * Delete a specific in-app purchase from your app.
     *
     * @param string $iapId The resource ID representing a unique IAP.
     * @return null
     */
    public function deleteResponseReview($iapId)
    {
        $params = ['id' => $iapId];
        return $this->call('deleteIAP', [$params], null);
    }

    /**
     * Get a list of possible price points for an in-app purchase.
     * 
     * @param string $appId The resource ID representing a unique IAP.
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
    public function readPromotedPurchase($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('readPromotedPurchase', [$params], PromotedPurchaseResponse::class);
    }

    /**
     * Get a list of localized display names and descriptions for a specific in-app purchase.
     * 
     * @param string $appId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePricePointsResponse
     */
    public function listAllLocalizations($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('listAllLocalizations', [$params], InAppPurchaseLocalizationsResponse::class);
    }

    /**
     * Get information about a review screenshot for a specific in-app purchase.
     * 
     * @param string $appId The resource ID representing a unique IAP.
     * @param array $optParams Optional parameters.
     * @return InAppPurchasePricePointsResponse
     */
    public function readReviewScreenshot($iapId, $optParams = [])
    {
        $params = ['id' => $iapId];
        $params = array_merge($params, $optParams);
        return $this->call('readReviewScreenshot', [$params], InAppPurchaseAppStoreReviewScreenshotResponse::class);
    }
}

class_alias(InAppPurchases::class, 'AppleService_AppStore_InAppPurchases');
