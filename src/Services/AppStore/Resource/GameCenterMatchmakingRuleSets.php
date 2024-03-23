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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleSetsResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleSetResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleSetCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleSetUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueuesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRulesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingTeamsResponse;

/**
 * The "gameCenterMatchmakingRuleSets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterMatchmakingRuleSets = $appStoreService->gameCenterMatchmakingRuleSets;
 *  </code>
 */
class GameCenterMatchmakingRuleSets extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingRuleSetsResponse
     */
    public function listGameCenterMatchmakingRuleSets($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterMatchmakingRuleSets', [$params], GameCenterMatchmakingRuleSetsResponse::class);
    }
    /**
	 * @param GameCenterMatchmakingRuleSetCreateRequest $postBody
     * @return GameCenterMatchmakingRuleSetResponse
     */
    public function createGameCenterMatchmakingRuleSets(GameCenterMatchmakingRuleSetCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterMatchmakingRuleSets', [$params], GameCenterMatchmakingRuleSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingRuleSetResponse
     */
    public function getGameCenterMatchmakingRuleSets($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingRuleSets', [$params], GameCenterMatchmakingRuleSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterMatchmakingRuleSetUpdateRequest $postBody
     * @return GameCenterMatchmakingRuleSetResponse
     */
    public function updateGameCenterMatchmakingRuleSets($id, GameCenterMatchmakingRuleSetUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterMatchmakingRuleSets', [$params], GameCenterMatchmakingRuleSetResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterMatchmakingRuleSets($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterMatchmakingRuleSets', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueuesResponse
     */
    public function listGameCenterMatchmakingRuleSetsMatchmakingQueues($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterMatchmakingRuleSetsMatchmakingQueues', [$params], GameCenterMatchmakingQueuesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingRulesResponse
     */
    public function listGameCenterMatchmakingRuleSetsRules($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterMatchmakingRuleSetsRules', [$params], GameCenterMatchmakingRulesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingTeamsResponse
     */
    public function listGameCenterMatchmakingRuleSetsTeams($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterMatchmakingRuleSetsTeams', [$params], GameCenterMatchmakingTeamsResponse::class);
    }
}

