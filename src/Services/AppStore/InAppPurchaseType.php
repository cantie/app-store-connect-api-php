<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseType
{
    const CONSUMABLE = "CONSUMABLE";
    const NON_CONSUMABLE = "NON_CONSUMABLE";
    const NON_RENEWING_SUBSCRIPTION = "NON_RENEWING_SUBSCRIPTION";
}

class_alias(InAppPurchaseType::class, 'AppleService_AppStore_InAppPurchaseType');
