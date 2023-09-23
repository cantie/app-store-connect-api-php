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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupGameCenterAchievementsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupGameCenterAchievementsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupGameCenterLeaderboardSetsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupGameCenterLeaderboardsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupGameCenterLeaderboardsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardsResponse;

/**
 * The "gameCenterGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterGroups = $appStoreService->gameCenterGroups;
 *  </code>
 */
class GameCenterGroups extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return GameCenterGroupsResponse
     */
    public function listGameCenterGroups($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroups', [$params], GameCenterGroupsResponse::class);
    }
    /**
	 * @param GameCenterGroupCreateRequest $postBody
     * @return GameCenterGroupResponse
     */
    public function createGameCenterGroups(GameCenterGroupCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterGroups', [$params], GameCenterGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterGroupResponse
     */
    public function getGameCenterGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterGroups', [$params], GameCenterGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterGroupUpdateRequest $postBody
     * @return GameCenterGroupResponse
     */
    public function updateGameCenterGroups($id, GameCenterGroupUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterGroups', [$params], GameCenterGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterGroups($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterGroupGameCenterAchievementsLinkagesResponse
     */
    public function listGameCenterGroupsGameCenterAchievementsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterAchievementsLinkages', [$params], GameCenterGroupGameCenterAchievementsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterGroupGameCenterAchievementsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterGroupsGameCenterAchievements($id, GameCenterGroupGameCenterAchievementsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterGroupsGameCenterAchievements', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementsResponse
     */
    public function listGameCenterGroupsGameCenterAchievements($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterAchievements', [$params], GameCenterAchievementsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterDetailsResponse
     */
    public function listGameCenterGroupsGameCenterDetails($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterDetails', [$params], GameCenterDetailsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterGroupGameCenterLeaderboardSetsLinkagesResponse
     */
    public function listGameCenterGroupsGameCenterLeaderboardSetsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterLeaderboardSetsLinkages', [$params], GameCenterGroupGameCenterLeaderboardSetsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterGroupsGameCenterLeaderboardSets($id, GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterGroupsGameCenterLeaderboardSets', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetsResponse
     */
    public function listGameCenterGroupsGameCenterLeaderboardSets($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterLeaderboardSets', [$params], GameCenterLeaderboardSetsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterGroupGameCenterLeaderboardsLinkagesResponse
     */
    public function listGameCenterGroupsGameCenterLeaderboardsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterLeaderboardsLinkages', [$params], GameCenterGroupGameCenterLeaderboardsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterGroupGameCenterLeaderboardsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterGroupsGameCenterLeaderboards($id, GameCenterGroupGameCenterLeaderboardsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterGroupsGameCenterLeaderboards', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardsResponse
     */
    public function listGameCenterGroupsGameCenterLeaderboards($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterGroupsGameCenterLeaderboards', [$params], GameCenterLeaderboardsResponse::class);
    }
}

