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

use Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionGroupLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionsResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class SubscriptionGroups extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param SubscriptionGroupCreateRequest $postBody
     * @return SubscriptionGroupResponse
     */
    public function createSubscriptionGroups(SubscriptionGroupCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createSubscriptionGroups', [$params], SubscriptionGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionGroupResponse
     */
    public function getSubscriptionGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionGroups', [$params], SubscriptionGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionGroupUpdateRequest $postBody
     * @return SubscriptionGroupResponse
     */
    public function updateSubscriptionGroups($id, SubscriptionGroupUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateSubscriptionGroups', [$params], SubscriptionGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteSubscriptionGroups($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteSubscriptionGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionGroupLocalizationsResponse
     */
    public function listSubscriptionGroupsSubscriptionGroupLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionGroupsSubscriptionGroupLocalizations', [$params], SubscriptionGroupLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionsResponse
     */
    public function listSubscriptionGroupsSubscriptions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionGroupsSubscriptions', [$params], SubscriptionsResponse::class);
    }
}

class_alias(SubscriptionGroups::class, 'AppleService_AppStore_ResourceSubscriptionGroups');
