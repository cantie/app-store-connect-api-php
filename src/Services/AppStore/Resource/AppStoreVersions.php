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

use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AgeRatingDeclarationWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionAppClipDefaultExperienceLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionAppClipDefaultExperienceLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreReviewDetailResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionExperimentsV2Response;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionLocalizationsWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionPhasedReleaseWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionSubmissionResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionBuildLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionBuildLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\BuildWithoutIncludesResponse;
use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewsResponse;
use Cantie\AppStoreConnect\Services\AppStore\RoutingAppCoverageWithoutIncludesResponse;

/**
 * The "appStoreVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $appStoreVersions = $appStoreService->appStoreVersions;
 *  </code>
 */
class AppStoreVersions extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppStoreVersionCreateRequest $postBody
     * @return AppStoreVersionResponse
     */
    public function createAppStoreVersions(AppStoreVersionCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppStoreVersions', [$params], AppStoreVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionResponse
     */
    public function getAppStoreVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersions', [$params], AppStoreVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppStoreVersionUpdateRequest $postBody
     * @return AppStoreVersionResponse
     */
    public function updateAppStoreVersions($id, AppStoreVersionUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppStoreVersions', [$params], AppStoreVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppStoreVersions($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppStoreVersions', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AgeRatingDeclarationWithoutIncludesResponse
     */
    public function getAppStoreVersionsAgeRatingDeclaration($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsAgeRatingDeclaration', [$params], AgeRatingDeclarationWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return AppStoreVersionAppClipDefaultExperienceLinkageResponse
     */
    public function getAppStoreVersionsAppClipDefaultExperienceLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getAppStoreVersionsAppClipDefaultExperienceLinkages', [$params], AppStoreVersionAppClipDefaultExperienceLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppStoreVersionAppClipDefaultExperienceLinkageRequest $postBody
     * @return null
     */
    public function updateAppStoreVersionsAppClipDefaultExperience($id, AppStoreVersionAppClipDefaultExperienceLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppStoreVersionsAppClipDefaultExperience', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipDefaultExperienceResponse
     */
    public function getAppStoreVersionsAppClipDefaultExperience($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsAppClipDefaultExperience', [$params], AppClipDefaultExperienceResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreReviewDetailResponse
     */
    public function getAppStoreVersionsAppStoreReviewDetail($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsAppStoreReviewDetail', [$params], AppStoreReviewDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentsResponse
     */
    public function listAppStoreVersionsAppStoreVersionExperiments($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionsAppStoreVersionExperiments', [$params], AppStoreVersionExperimentsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionExperimentsV2Response
     */
    public function listAppStoreVersionsAppStoreVersionExperimentsV2($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionsAppStoreVersionExperimentsV2', [$params], AppStoreVersionExperimentsV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionLocalizationsWithoutIncludesResponse
     */
    public function listAppStoreVersionsAppStoreVersionLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionsAppStoreVersionLocalizations', [$params], AppStoreVersionLocalizationsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionPhasedReleaseWithoutIncludesResponse
     */
    public function getAppStoreVersionsAppStoreVersionPhasedRelease($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsAppStoreVersionPhasedRelease', [$params], AppStoreVersionPhasedReleaseWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionSubmissionResponse
     */
    public function getAppStoreVersionsAppStoreVersionSubmission($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsAppStoreVersionSubmission', [$params], AppStoreVersionSubmissionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return AppStoreVersionBuildLinkageResponse
     */
    public function getAppStoreVersionsBuildLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getAppStoreVersionsBuildLinkages', [$params], AppStoreVersionBuildLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppStoreVersionBuildLinkageRequest $postBody
     * @return null
     */
    public function updateAppStoreVersionsBuild($id, AppStoreVersionBuildLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppStoreVersionsBuild', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildWithoutIncludesResponse
     */
    public function getAppStoreVersionsBuild($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsBuild', [$params], BuildWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CustomerReviewsResponse
     */
    public function listAppStoreVersionsCustomerReviews($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionsCustomerReviews', [$params], CustomerReviewsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return RoutingAppCoverageWithoutIncludesResponse
     */
    public function getAppStoreVersionsRoutingAppCoverage($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionsRoutingAppCoverage', [$params], RoutingAppCoverageWithoutIncludesResponse::class);
    }
}

