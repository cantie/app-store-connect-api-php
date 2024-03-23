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

use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueuesResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueueResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueueCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueueUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueueSizesV1MetricResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingQueueRequestsV1MetricResponse;
use Cantie\AppStoreConnect\Services\AppStore\GameCenterMatchmakingSessionsV1MetricResponse;

/**
 * The "gameCenterMatchmakingQueues" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $gameCenterMatchmakingQueues = $appStoreService->gameCenterMatchmakingQueues;
 *  </code>
 */
class GameCenterMatchmakingQueues extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueuesResponse
     */
    public function listGameCenterMatchmakingQueues($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listGameCenterMatchmakingQueues', [$params], GameCenterMatchmakingQueuesResponse::class);
    }
    /**
	 * @param GameCenterMatchmakingQueueCreateRequest $postBody
     * @return GameCenterMatchmakingQueueResponse
     */
    public function createGameCenterMatchmakingQueues(GameCenterMatchmakingQueueCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createGameCenterMatchmakingQueues', [$params], GameCenterMatchmakingQueueResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueueResponse
     */
    public function getGameCenterMatchmakingQueues($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingQueues', [$params], GameCenterMatchmakingQueueResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param GameCenterMatchmakingQueueUpdateRequest $postBody
     * @return GameCenterMatchmakingQueueResponse
     */
    public function updateGameCenterMatchmakingQueues($id, GameCenterMatchmakingQueueUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateGameCenterMatchmakingQueues', [$params], GameCenterMatchmakingQueueResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteGameCenterMatchmakingQueues($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteGameCenterMatchmakingQueues', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueueSizesV1MetricResponse
     */
    public function getGameCenterMatchmakingQueuesExperimentMatchmakingQueueSizesMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingQueuesExperimentMatchmakingQueueSizesMetrics', [$params], GameCenterMatchmakingQueueSizesV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueueRequestsV1MetricResponse
     */
    public function getGameCenterMatchmakingQueuesExperimentMatchmakingRequestsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingQueuesExperimentMatchmakingRequestsMetrics', [$params], GameCenterMatchmakingQueueRequestsV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueueSizesV1MetricResponse
     */
    public function getGameCenterMatchmakingQueuesMatchmakingQueueSizesMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingQueuesMatchmakingQueueSizesMetrics', [$params], GameCenterMatchmakingQueueSizesV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingQueueRequestsV1MetricResponse
     */
    public function getGameCenterMatchmakingQueuesMatchmakingRequestsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingQueuesMatchmakingRequestsMetrics', [$params], GameCenterMatchmakingQueueRequestsV1MetricResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return GameCenterMatchmakingSessionsV1MetricResponse
     */
    public function getGameCenterMatchmakingQueuesMatchmakingSessionsMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getGameCenterMatchmakingQueuesMatchmakingSessionsMetrics', [$params], GameCenterMatchmakingSessionsV1MetricResponse::class);
    }
}

