<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseState
{
    const APPROVED = "APPROVED";
    const DEVELOPER_ACTION_NEEDED = "DEVELOPER_ACTION_NEEDED";
    const DEVELOPER_REMOVED_FROM_SALE = "DEVELOPER_REMOVED_FROM_SALE";
    const IN_REVIEW = "IN_REVIEW";
    const MISSING_METADATA = "MISSING_METADATA";
    const PENDING_BINARY_APPROVAL = "PENDING_BINARY_APPROVAL";
    const PROCESSING_CONTENT = "PROCESSING_CONTENT";
    const READY_TO_SUBMIT = "READY_TO_SUBMIT";
    const REJECTED = "REJECTED";
    const REMOVED_FROM_SALE = "REMOVED_FROM_SALE";
    const WAITING_FOR_REVIEW = "WAITING_FOR_REVIEW";
    const WAITING_FOR_UPLOAD = "WAITING_FOR_UPLOAD";
}

class_alias(InAppPurchaseState::class, 'AppleService_AppStore_InAppPurchaseState');