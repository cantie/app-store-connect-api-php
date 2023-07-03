<?php

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2CreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2Response;

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
}

class_alias(InAppPurchases::class, 'AppleService_AppStore_InAppPurchases');
