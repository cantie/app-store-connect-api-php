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

use Cantie\AppStoreConnect\Services\AppStore\CiBuildActionResponse;
use Cantie\AppStoreConnect\Services\AppStore\CiArtifactsResponse;
use Cantie\AppStoreConnect\Services\AppStore\CiBuildRunResponse;
use Cantie\AppStoreConnect\Services\AppStore\CiIssuesResponse;
use Cantie\AppStoreConnect\Services\AppStore\CiTestResultsResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class CiBuildActions extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiBuildActionResponse
     */
    public function getCiBuildActions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getCiBuildActions', [$params], CiBuildActionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiArtifactsResponse
     */
    public function listCiBuildActionsArtifacts($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listCiBuildActionsArtifacts', [$params], CiArtifactsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiBuildRunResponse
     */
    public function getCiBuildActionsBuildRun($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getCiBuildActionsBuildRun', [$params], CiBuildRunResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiIssuesResponse
     */
    public function listCiBuildActionsIssues($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listCiBuildActionsIssues', [$params], CiIssuesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CiTestResultsResponse
     */
    public function listCiBuildActionsTestResults($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listCiBuildActionsTestResults', [$params], CiTestResultsResponse::class);
    }
}

class_alias(CiBuildActions::class, 'AppleService_AppStore_ResourceCiBuildActions');
