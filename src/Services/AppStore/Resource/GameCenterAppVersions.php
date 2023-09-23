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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionCompatibilityVersionsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionCompatibilityVersionsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionsResponse;

/**
 * The "gameCenterAppVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterAppVersions = $appStoreService->gameCenterAppVersions;
 *  </code>
 */
class GameCenterAppVersions extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterAppVersionCreateRequest $postBody
     * @return GameCenterAppVersionResponse
     */
    public function createGameCenterAppVersions(GameCenterAppVersionCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterAppVersions', [$params], GameCenterAppVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAppVersionResponse
     */
    public function getGameCenterAppVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAppVersions', [$params], GameCenterAppVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterAppVersionUpdateRequest $postBody
     * @return GameCenterAppVersionResponse
     */
    public function updateGameCenterAppVersions($id, GameCenterAppVersionUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterAppVersions', [$params], GameCenterAppVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionResponse
     */
    public function getGameCenterAppVersionsAppStoreVersion($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAppVersionsAppStoreVersion', [$params], AppStoreVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAppVersionCompatibilityVersionsLinkagesResponse
     */
    public function listGameCenterAppVersionsCompatibilityVersionsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterAppVersionsCompatibilityVersionsLinkages', [$params], GameCenterAppVersionCompatibilityVersionsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterAppVersionCompatibilityVersionsLinkagesRequest $postBody
     * @return null
     */
    public function createListGameCenterAppVersionsCompatibilityVersions($id, GameCenterAppVersionCompatibilityVersionsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListGameCenterAppVersionsCompatibilityVersions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterAppVersionCompatibilityVersionsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListGameCenterAppVersionsCompatibilityVersions($id, GameCenterAppVersionCompatibilityVersionsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListGameCenterAppVersionsCompatibilityVersions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAppVersionsResponse
     */
    public function listGameCenterAppVersionsCompatibilityVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterAppVersionsCompatibilityVersions', [$params], GameCenterAppVersionsResponse::class);
    }
}

