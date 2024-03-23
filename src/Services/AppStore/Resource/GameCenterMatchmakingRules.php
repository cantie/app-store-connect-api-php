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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingBooleanRuleResultsV1MetricResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingNumberRuleResultsV1MetricResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingRuleErrorsV1MetricResponse;

/**
 * The "gameCenterMatchmakingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterMatchmakingRules = $appStoreService->gameCenterMatchmakingRules;
 *  </code>
 */
class GameCenterMatchmakingRules extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param GameCenterMatchmakingRuleCreateRequest $postBody
     * @return GameCenterMatchmakingRuleResponse
     */
    public function createGameCenterMatchmakingRules(GameCenterMatchmakingRuleCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterMatchmakingRules', [$params], GameCenterMatchmakingRuleResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterMatchmakingRuleUpdateRequest $postBody
     * @return GameCenterMatchmakingRuleResponse
     */
    public function updateGameCenterMatchmakingRules($id, GameCenterMatchmakingRuleUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterMatchmakingRules', [$params], GameCenterMatchmakingRuleResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterMatchmakingRules($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterMatchmakingRules', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingBooleanRuleResultsV1MetricResponse
     */
    public function getGameCenterMatchmakingRulesMatchmakingBooleanRuleResultsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingRulesMatchmakingBooleanRuleResultsMetrics', [$params], GameCenterMatchmakingBooleanRuleResultsV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingNumberRuleResultsV1MetricResponse
     */
    public function getGameCenterMatchmakingRulesMatchmakingNumberRuleResultsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingRulesMatchmakingNumberRuleResultsMetrics', [$params], GameCenterMatchmakingNumberRuleResultsV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingRuleErrorsV1MetricResponse
     */
    public function getGameCenterMatchmakingRulesMatchmakingRuleErrorsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingRulesMatchmakingRuleErrorsMetrics', [$params], GameCenterMatchmakingRuleErrorsV1MetricResponse::class);
    }
}

