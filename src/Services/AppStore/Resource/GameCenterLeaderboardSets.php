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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetGroupLeaderboardSetLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetReleasesResponse;

/**
 * The "gameCenterLeaderboardSets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterLeaderboardSets = $appStoreService->gameCenterLeaderboardSets;
 *  </code>
 */
class GameCenterLeaderboardSets extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterLeaderboardSetCreateRequest $postBody
     * @return GameCenterLeaderboardSetResponse
     */
    public function createGameCenterLeaderboardSets(GameCenterLeaderboardSetCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterLeaderboardSets', [$params], GameCenterLeaderboardSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetResponse
     */
    public function getGameCenterLeaderboardSets($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterLeaderboardSets', [$params], GameCenterLeaderboardSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardSetUpdateRequest $postBody
     * @return GameCenterLeaderboardSetResponse
     */
    public function updateGameCenterLeaderboardSets($id, GameCenterLeaderboardSetUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterLeaderboardSets', [$params], GameCenterLeaderboardSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterLeaderboardSets($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterLeaderboardSets', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponse
     */
    public function listGameCenterLeaderboardSetsGameCenterLeaderboardsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardSetsGameCenterLeaderboardsLinkages', [$params], GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $postBody
     * @return null
     */
    public function createListGameCenterLeaderboardSetsGameCenterLeaderboards($id, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListGameCenterLeaderboardSetsGameCenterLeaderboards', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterLeaderboardSetsGameCenterLeaderboards($id, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterLeaderboardSetsGameCenterLeaderboards', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListGameCenterLeaderboardSetsGameCenterLeaderboards($id, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListGameCenterLeaderboardSetsGameCenterLeaderboards', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardsResponse
     */
    public function listGameCenterLeaderboardSetsGameCenterLeaderboards($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardSetsGameCenterLeaderboards', [$params], GameCenterLeaderboardsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return GameCenterLeaderboardSetGroupLeaderboardSetLinkageResponse
     */
    public function getGameCenterLeaderboardSetsGroupLeaderboardSetLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getGameCenterLeaderboardSetsGroupLeaderboardSetLinkages', [$params], GameCenterLeaderboardSetGroupLeaderboardSetLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest $postBody
     * @return null
     */
    public function updateGameCenterLeaderboardSetsGroupLeaderboardSet($id, GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterLeaderboardSetsGroupLeaderboardSet', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetResponse
     */
    public function getGameCenterLeaderboardSetsGroupLeaderboardSet($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterLeaderboardSetsGroupLeaderboardSet', [$params], GameCenterLeaderboardSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetLocalizationsResponse
     */
    public function listGameCenterLeaderboardSetsLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardSetsLocalizations', [$params], GameCenterLeaderboardSetLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetReleasesResponse
     */
    public function listGameCenterLeaderboardSetsReleases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardSetsReleases', [$params], GameCenterLeaderboardSetReleasesResponse::class);
    }
}

