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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterEnabledVersionCompatibleVersionsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterEnabledVersionsResponse;

/**
 * The "gameCenterEnabledVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterEnabledVersions = $appStoreService->gameCenterEnabledVersions;
 *  </code>
 */
class GameCenterEnabledVersions extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterEnabledVersionCompatibleVersionsLinkagesResponse
     */
    public function listGameCenterEnabledVersionsCompatibleVersionsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterEnabledVersionsCompatibleVersionsLinkages', [$params], GameCenterEnabledVersionCompatibleVersionsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $postBody
     * @return null
     */
    public function createListGameCenterEnabledVersionsCompatibleVersions($id, GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListGameCenterEnabledVersionsCompatibleVersions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterEnabledVersionsCompatibleVersions($id, GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterEnabledVersionsCompatibleVersions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListGameCenterEnabledVersionsCompatibleVersions($id, GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListGameCenterEnabledVersionsCompatibleVersions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterEnabledVersionsResponse
     */
    public function listGameCenterEnabledVersionsCompatibleVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterEnabledVersionsCompatibleVersions', [$params], GameCenterEnabledVersionsResponse::class);
    }
}

class_alias(GameCenterEnabledVersions::class, 'AppleService_AppStore_ResourceGameCenterEnabledVersions');
