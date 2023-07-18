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

use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentV2Response;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentV2CreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentV2UpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentTreatmentsResponse;

/**
 * The "appStoreVersionExperiments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $appStoreVersionExperiments = $appStoreService->appStoreVersionExperiments;
 *  </code>
 */
class AppStoreVersionExperiments extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppStoreVersionExperimentV2CreateRequest $postBody
     * @return AppStoreVersionExperimentV2Response
     */
    public function createAppStoreVersionExperimentsV2(AppStoreVersionExperimentV2CreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppStoreVersionExperimentsV2', [$params], AppStoreVersionExperimentV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentV2Response
     */
    public function getAppStoreVersionExperimentsV2($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionExperimentsV2', [$params], AppStoreVersionExperimentV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppStoreVersionExperimentV2UpdateRequest $postBody
     * @return AppStoreVersionExperimentV2Response
     */
    public function updateAppStoreVersionExperimentsV2($id, AppStoreVersionExperimentV2UpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppStoreVersionExperimentsV2', [$params], AppStoreVersionExperimentV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppStoreVersionExperimentsV2($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppStoreVersionExperimentsV2', [$params], null);
    }
    /**
	 * @param AppStoreVersionExperimentCreateRequest $postBody
     * @return AppStoreVersionExperimentResponse
     */
    public function createAppStoreVersionExperimentsV1(AppStoreVersionExperimentCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppStoreVersionExperimentsV1', [$params], AppStoreVersionExperimentResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentResponse
     */
    public function getAppStoreVersionExperimentsV1($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionExperimentsV1', [$params], AppStoreVersionExperimentResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppStoreVersionExperimentUpdateRequest $postBody
     * @return AppStoreVersionExperimentResponse
     */
    public function updateAppStoreVersionExperimentsV1($id, AppStoreVersionExperimentUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppStoreVersionExperimentsV1', [$params], AppStoreVersionExperimentResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppStoreVersionExperimentsV1($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppStoreVersionExperimentsV1', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentTreatmentsResponse
     */
    public function listAppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsV2($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsV2', [$params], AppStoreVersionExperimentTreatmentsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentTreatmentsResponse
     */
    public function listAppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsV1($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsV1', [$params], AppStoreVersionExperimentTreatmentsResponse::class);
    }
}

class_alias(AppStoreVersionExperiments::class, 'AppleService_AppStore_ResourceAppStoreVersionExperiments');
