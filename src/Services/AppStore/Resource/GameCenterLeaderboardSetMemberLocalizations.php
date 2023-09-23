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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetMemberLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetMemberLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetMemberLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetMemberLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterLeaderboardSetResponse;

/**
 * The "gameCenterLeaderboardSetMemberLocalizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterLeaderboardSetMemberLocalizations = $appStoreService->gameCenterLeaderboardSetMemberLocalizations;
 *  </code>
 */
class GameCenterLeaderboardSetMemberLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetMemberLocalizationsResponse
     */
    public function listGameCenterLeaderboardSetMemberLocalizations($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterLeaderboardSetMemberLocalizations', [$params], GameCenterLeaderboardSetMemberLocalizationsResponse::class);
    }
    /**
	 * @param GameCenterLeaderboardSetMemberLocalizationCreateRequest $postBody
     * @return GameCenterLeaderboardSetMemberLocalizationResponse
     */
    public function createGameCenterLeaderboardSetMemberLocalizations(GameCenterLeaderboardSetMemberLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterLeaderboardSetMemberLocalizations', [$params], GameCenterLeaderboardSetMemberLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterLeaderboardSetMemberLocalizationUpdateRequest $postBody
     * @return GameCenterLeaderboardSetMemberLocalizationResponse
     */
    public function updateGameCenterLeaderboardSetMemberLocalizations($id, GameCenterLeaderboardSetMemberLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterLeaderboardSetMemberLocalizations', [$params], GameCenterLeaderboardSetMemberLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterLeaderboardSetMemberLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterLeaderboardSetMemberLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardResponse
     */
    public function getGameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboard($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboard', [$params], GameCenterLeaderboardResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterLeaderboardSetResponse
     */
    public function getGameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSet($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSet', [$params], GameCenterLeaderboardSetResponse::class);
    }
}

