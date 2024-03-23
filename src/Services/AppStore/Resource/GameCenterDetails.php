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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementReleasesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailGameCenterAchievementsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailGameCenterAchievementsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAppVersionsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterGroupResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailGameCenterLeaderboardSetsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailGameCenterLeaderboardsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterDetailGameCenterLeaderboardsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardReleasesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetReleasesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingAppRequestsV1MetricResponse;

/**
 * The "gameCenterDetails" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterDetails = $appStoreService->gameCenterDetails;
 *  </code>
 */
class GameCenterDetails extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterDetailCreateRequest $postBody
     * @return GameCenterDetailResponse
     */
    public function createGameCenterDetails(GameCenterDetailCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterDetails', [$params], GameCenterDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterDetailResponse
     */
    public function getGameCenterDetails($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterDetails', [$params], GameCenterDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterDetailUpdateRequest $postBody
     * @return GameCenterDetailResponse
     */
    public function updateGameCenterDetails($id, GameCenterDetailUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterDetails', [$params], GameCenterDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementReleasesResponse
     */
    public function listGameCenterDetailsAchievementReleases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsAchievementReleases', [$params], GameCenterAchievementReleasesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterDetailGameCenterAchievementsLinkagesResponse
     */
    public function listGameCenterDetailsGameCenterAchievementsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterAchievementsLinkages', [$params], GameCenterDetailGameCenterAchievementsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterDetailGameCenterAchievementsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterDetailsGameCenterAchievements($id, GameCenterDetailGameCenterAchievementsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterDetailsGameCenterAchievements', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementsResponse
     */
    public function listGameCenterDetailsGameCenterAchievements($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterAchievements', [$params], GameCenterAchievementsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAppVersionsResponse
     */
    public function listGameCenterDetailsGameCenterAppVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterAppVersions', [$params], GameCenterAppVersionsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterGroupResponse
     */
    public function getGameCenterDetailsGameCenterGroup($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterDetailsGameCenterGroup', [$params], GameCenterGroupResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterDetailGameCenterLeaderboardSetsLinkagesResponse
     */
    public function listGameCenterDetailsGameCenterLeaderboardSetsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterLeaderboardSetsLinkages', [$params], GameCenterDetailGameCenterLeaderboardSetsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterDetailsGameCenterLeaderboardSets($id, GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterDetailsGameCenterLeaderboardSets', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetsResponse
     */
    public function listGameCenterDetailsGameCenterLeaderboardSets($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterLeaderboardSets', [$params], GameCenterLeaderboardSetsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterDetailGameCenterLeaderboardsLinkagesResponse
     */
    public function listGameCenterDetailsGameCenterLeaderboardsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterLeaderboardsLinkages', [$params], GameCenterDetailGameCenterLeaderboardsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterDetailGameCenterLeaderboardsLinkagesRequest $postBody
     * @return null
     */
    public function updateListGameCenterDetailsGameCenterLeaderboards($id, GameCenterDetailGameCenterLeaderboardsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListGameCenterDetailsGameCenterLeaderboards', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardsResponse
     */
    public function listGameCenterDetailsGameCenterLeaderboards($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsGameCenterLeaderboards', [$params], GameCenterLeaderboardsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardReleasesResponse
     */
    public function listGameCenterDetailsLeaderboardReleases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsLeaderboardReleases', [$params], GameCenterLeaderboardReleasesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetReleasesResponse
     */
    public function listGameCenterDetailsLeaderboardSetReleases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterDetailsLeaderboardSetReleases', [$params], GameCenterLeaderboardSetReleasesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingAppRequestsV1MetricResponse
     */
    public function getGameCenterDetailsClassicMatchmakingRequestsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterDetailsClassicMatchmakingRequestsMetrics', [$params], GameCenterMatchmakingAppRequestsV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingAppRequestsV1MetricResponse
     */
    public function getGameCenterDetailsRuleBasedMatchmakingRequestsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterDetailsRuleBasedMatchmakingRequestsMetrics', [$params], GameCenterMatchmakingAppRequestsV1MetricResponse::class);
    }
}

