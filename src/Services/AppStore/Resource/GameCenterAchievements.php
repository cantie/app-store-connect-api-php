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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementGroupAchievementLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementGroupAchievementLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementReleasesResponse;

/**
 * The "gameCenterAchievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterAchievements = $appStoreService->gameCenterAchievements;
 *  </code>
 */
class GameCenterAchievements extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterAchievementCreateRequest $postBody
     * @return GameCenterAchievementResponse
     */
    public function createGameCenterAchievements(GameCenterAchievementCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterAchievements', [$params], GameCenterAchievementResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementResponse
     */
    public function getGameCenterAchievements($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAchievements', [$params], GameCenterAchievementResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterAchievementUpdateRequest $postBody
     * @return GameCenterAchievementResponse
     */
    public function updateGameCenterAchievements($id, GameCenterAchievementUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterAchievements', [$params], GameCenterAchievementResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterAchievements($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterAchievements', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return GameCenterAchievementGroupAchievementLinkageResponse
     */
    public function getGameCenterAchievementsGroupAchievementLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getGameCenterAchievementsGroupAchievementLinkages', [$params], GameCenterAchievementGroupAchievementLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterAchievementGroupAchievementLinkageRequest $postBody
     * @return null
     */
    public function updateGameCenterAchievementsGroupAchievement($id, GameCenterAchievementGroupAchievementLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterAchievementsGroupAchievement', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementResponse
     */
    public function getGameCenterAchievementsGroupAchievement($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAchievementsGroupAchievement', [$params], GameCenterAchievementResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementLocalizationsResponse
     */
    public function listGameCenterAchievementsLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterAchievementsLocalizations', [$params], GameCenterAchievementLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementReleasesResponse
     */
    public function listGameCenterAchievementsReleases($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterAchievementsReleases', [$params], GameCenterAchievementReleasesResponse::class);
    }
}

