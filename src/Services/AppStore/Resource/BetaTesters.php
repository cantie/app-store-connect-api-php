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

use Cantie\AppStoreConnect\Services\AppStore\BetaTestersResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterAppsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterAppsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppsResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterBetaGroupsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterBetaGroupsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\BetaGroupsResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterBuildsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaTesterBuildsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\BuildsResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class BetaTesters extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BetaTestersResponse
     */
    public function listBetaTesters($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTesters', [$params], BetaTestersResponse::class);
    }
    /**
	 * @param BetaTesterCreateRequest $postBody
     * @return BetaTesterResponse
     */
    public function createBetaTesters(BetaTesterCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBetaTesters', [$params], BetaTesterResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterResponse
     */
    public function getBetaTesters($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaTesters', [$params], BetaTesterResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBetaTesters($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBetaTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterAppsLinkagesResponse
     */
    public function listBetaTestersAppsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersAppsLinkages', [$params], BetaTesterAppsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterAppsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaTestersApps($id, BetaTesterAppsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaTestersApps', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppsResponse
     */
    public function listBetaTestersApps($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersApps', [$params], AppsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterBetaGroupsLinkagesResponse
     */
    public function listBetaTestersBetaGroupsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBetaGroupsLinkages', [$params], BetaTesterBetaGroupsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBetaGroupsLinkagesRequest $postBody
     * @return null
     */
    public function createListBetaTestersBetaGroups($id, BetaTesterBetaGroupsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBetaTestersBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBetaGroupsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaTestersBetaGroups($id, BetaTesterBetaGroupsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaTestersBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaGroupsResponse
     */
    public function listBetaTestersBetaGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBetaGroups', [$params], BetaGroupsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterBuildsLinkagesResponse
     */
    public function listBetaTestersBuildsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBuildsLinkages', [$params], BetaTesterBuildsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBuildsLinkagesRequest $postBody
     * @return null
     */
    public function createListBetaTestersBuilds($id, BetaTesterBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBetaTestersBuilds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBuildsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaTestersBuilds($id, BetaTesterBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaTestersBuilds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildsResponse
     */
    public function listBetaTestersBuilds($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBuilds', [$params], BuildsResponse::class);
    }
}

class_alias(BetaTesters::class, 'AppleService_AppStore_ResourceBetaTesters');
