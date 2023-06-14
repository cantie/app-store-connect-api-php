<?php

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\AppsResponse;

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
     * Find and list apps in App Store Connect.
     * 
     * @param array $optParams Optional parameters.
     * @return AppsResponse
     */
    public function listApps($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('listApps', [$params], AppsResponse::class);
    }
}

class_alias(Apps::class, 'AppleService_AppStore_ResourceApps');
