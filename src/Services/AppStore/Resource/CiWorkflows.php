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

use Cantie\AppStoreConnect\Services\AppStore\CiWorkflowResponse;
use Cantie\AppStoreConnect\Services\AppStore\CiWorkflowCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\CiWorkflowUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\CiBuildRunsResponse;
use Cantie\AppStoreConnect\Services\AppStore\ScmRepositoryResponse;

/**
 * The "ciWorkflows" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $ciWorkflows = $appStoreService->ciWorkflows;
 *  </code>
 */
class CiWorkflows extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param CiWorkflowCreateRequest $postBody
     * @return CiWorkflowResponse
     */
    public function createCiWorkflows(CiWorkflowCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createCiWorkflows', [$params], CiWorkflowResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiWorkflowResponse
     */
    public function getCiWorkflows($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getCiWorkflows', [$params], CiWorkflowResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param CiWorkflowUpdateRequest $postBody
     * @return CiWorkflowResponse
     */
    public function updateCiWorkflows($id, CiWorkflowUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateCiWorkflows', [$params], CiWorkflowResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteCiWorkflows($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteCiWorkflows', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiBuildRunsResponse
     */
    public function listCiWorkflowsBuildRuns($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listCiWorkflowsBuildRuns', [$params], CiBuildRunsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return ScmRepositoryResponse
     */
    public function getCiWorkflowsRepository($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getCiWorkflowsRepository', [$params], ScmRepositoryResponse::class);
    }
}

