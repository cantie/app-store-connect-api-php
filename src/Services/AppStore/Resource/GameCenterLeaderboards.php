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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardGroupLeaderboardLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardGroupLeaderboardLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardReleasesResponse;

/**
 * The "gameCenterLeaderboards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterLeaderboards = $appStoreService->gameCenterLeaderboards;
 *  </code>
 */
class GameCenterLeaderboards extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterLeaderboardCreateRequest $postBody
     * @return GameCenterLeaderboardResponse
     */
    public function createGameCenterLeaderboards(GameCenterLeaderboardCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterLeaderboards', [$params], GameCenterLeaderboardResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardResponse
     */
    public function getGameCenterLeaderboards($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterLeaderboards', [$params], GameCenterLeaderboardResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardUpdateRequest $postBody
     * @return GameCenterLeaderboardResponse
     */
    public function updateGameCenterLeaderboards($id, GameCenterLeaderboardUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterLeaderboards', [$params], GameCenterLeaderboardResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterLeaderboards($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterLeaderboards', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return GameCenterLeaderboardGroupLeaderboardLinkageResponse
     */
    public function getGameCenterLeaderboardsGroupLeaderboardLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getGameCenterLeaderboardsGroupLeaderboardLinkages', [$params], GameCenterLeaderboardGroupLeaderboardLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardGroupLeaderboardLinkageRequest $postBody
     * @return null
     */
    public function updateGameCenterLeaderboardsGroupLeaderboard($id, GameCenterLeaderboardGroupLeaderboardLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterLeaderboardsGroupLeaderboard', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardResponse
     */
    public function getGameCenterLeaderboardsGroupLeaderboard($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterLeaderboardsGroupLeaderboard', [$params], GameCenterLeaderboardResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardLocalizationsResponse
     */
    public function listGameCenterLeaderboardsLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardsLocalizations', [$params], GameCenterLeaderboardLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardReleasesResponse
     */
    public function listGameCenterLeaderboardsReleases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardsReleases', [$params], GameCenterLeaderboardReleasesResponse::class);
    }
}

