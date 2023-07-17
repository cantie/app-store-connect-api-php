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

use Cantie\AppStoreConnect\Services\AppStore\BuildsResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildAppEncryptionDeclarationLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildAppEncryptionDeclarationLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppReviewSubmissionResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaBuildLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildBetaGroupsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\BuildBetaDetailResponse;
use Cantie\AppStoreConnect\Services\AppStore\DiagnosticSignaturesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildIconsResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildIndividualTestersLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\BuildIndividualTestersLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\BetaTestersResponse;
use Cantie\AppStoreConnect\Services\AppStore\xcodeMetrics;
use Cantie\AppStoreConnect\Services\AppStore\PreReleaseVersionResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class Builds extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BuildsResponse
     */
    public function listBuilds($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBuilds', [$params], BuildsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildResponse
     */
    public function getBuilds($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuilds', [$params], BuildResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BuildUpdateRequest $postBody
     * @return BuildResponse
     */
    public function updateBuilds($id, BuildUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBuilds', [$params], BuildResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppResponse
     */
    public function getBuildsApp($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuildsApp', [$params], AppResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return BuildAppEncryptionDeclarationLinkageResponse
     */
    public function getBuildsAppEncryptionDeclarationLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getBuildsAppEncryptionDeclarationLinkages', [$params], BuildAppEncryptionDeclarationLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BuildAppEncryptionDeclarationLinkageRequest $postBody
     * @return null
     */
    public function updateBuildsAppEncryptionDeclaration($id, BuildAppEncryptionDeclarationLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBuildsAppEncryptionDeclaration', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEncryptionDeclarationResponse
     */
    public function getBuildsAppEncryptionDeclaration($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuildsAppEncryptionDeclaration', [$params], AppEncryptionDeclarationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionResponse
     */
    public function getBuildsAppStoreVersion($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuildsAppStoreVersion', [$params], AppStoreVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaAppReviewSubmissionResponse
     */
    public function getBuildsBetaAppReviewSubmission($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuildsBetaAppReviewSubmission', [$params], BetaAppReviewSubmissionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaBuildLocalizationsResponse
     */
    public function listBuildsBetaBuildLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBuildsBetaBuildLocalizations', [$params], BetaBuildLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BuildBetaGroupsLinkagesRequest $postBody
     * @return null
     */
    public function createListBuildsBetaGroups($id, BuildBetaGroupsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBuildsBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BuildBetaGroupsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBuildsBetaGroups($id, BuildBetaGroupsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBuildsBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildBetaDetailResponse
     */
    public function getBuildsBuildBetaDetail($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuildsBuildBetaDetail', [$params], BuildBetaDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return DiagnosticSignaturesResponse
     */
    public function listBuildsDiagnosticSignatures($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBuildsDiagnosticSignatures', [$params], DiagnosticSignaturesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildIconsResponse
     */
    public function listBuildsIcons($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBuildsIcons', [$params], BuildIconsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildIndividualTestersLinkagesResponse
     */
    public function listBuildsIndividualTestersLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBuildsIndividualTestersLinkages', [$params], BuildIndividualTestersLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BuildIndividualTestersLinkagesRequest $postBody
     * @return null
     */
    public function createListBuildsIndividualTesters($id, BuildIndividualTestersLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBuildsIndividualTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BuildIndividualTestersLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBuildsIndividualTesters($id, BuildIndividualTestersLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBuildsIndividualTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTestersResponse
     */
    public function listBuildsIndividualTesters($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBuildsIndividualTesters', [$params], BetaTestersResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return xcodeMetrics
     */
    public function listBuildsPerfPowerMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBuildsPerfPowerMetrics', [$params], xcodeMetrics::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return PreReleaseVersionResponse
     */
    public function getBuildsPreReleaseVersion($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBuildsPreReleaseVersion', [$params], PreReleaseVersionResponse::class);
    }
}

class_alias(Builds::class, 'AppleService_AppStore_ResourceBuilds');
