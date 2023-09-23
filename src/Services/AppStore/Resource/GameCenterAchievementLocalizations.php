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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterAchievementImageResponse;

/**
 * The "gameCenterAchievementLocalizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterAchievementLocalizations = $appStoreService->gameCenterAchievementLocalizations;
 *  </code>
 */
class GameCenterAchievementLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterAchievementLocalizationCreateRequest $postBody
     * @return GameCenterAchievementLocalizationResponse
     */
    public function createGameCenterAchievementLocalizations(GameCenterAchievementLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterAchievementLocalizations', [$params], GameCenterAchievementLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementLocalizationResponse
     */
    public function getGameCenterAchievementLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAchievementLocalizations', [$params], GameCenterAchievementLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterAchievementLocalizationUpdateRequest $postBody
     * @return GameCenterAchievementLocalizationResponse
     */
    public function updateGameCenterAchievementLocalizations($id, GameCenterAchievementLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterAchievementLocalizations', [$params], GameCenterAchievementLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterAchievementLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterAchievementLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementResponse
     */
    public function getGameCenterAchievementLocalizationsGameCenterAchievement($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAchievementLocalizationsGameCenterAchievement', [$params], GameCenterAchievementResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterAchievementImageResponse
     */
    public function getGameCenterAchievementLocalizationsGameCenterAchievementImage($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterAchievementLocalizationsGameCenterAchievementImage', [$params], GameCenterAchievementImageResponse::class);
    }
}

