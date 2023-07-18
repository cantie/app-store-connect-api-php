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

use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppClipAppStoreReviewDetailResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionResponse;

/**
 * The "appClipDefaultExperiences" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $appClipDefaultExperiences = $appStoreService->appClipDefaultExperiences;
 *  </code>
 */
class AppClipDefaultExperiences extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppClipDefaultExperienceCreateRequest $postBody
     * @return AppClipDefaultExperienceResponse
     */
    public function createAppClipDefaultExperiences(AppClipDefaultExperienceCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppClipDefaultExperiences', [$params], AppClipDefaultExperienceResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipDefaultExperienceResponse
     */
    public function getAppClipDefaultExperiences($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppClipDefaultExperiences', [$params], AppClipDefaultExperienceResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppClipDefaultExperienceUpdateRequest $postBody
     * @return AppClipDefaultExperienceResponse
     */
    public function updateAppClipDefaultExperiences($id, AppClipDefaultExperienceUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppClipDefaultExperiences', [$params], AppClipDefaultExperienceResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppClipDefaultExperiences($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppClipDefaultExperiences', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipAppStoreReviewDetailResponse
     */
    public function getAppClipDefaultExperiencesAppClipAppStoreReviewDetail($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppClipDefaultExperiencesAppClipAppStoreReviewDetail', [$params], AppClipAppStoreReviewDetailResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipDefaultExperienceLocalizationsResponse
     */
    public function listAppClipDefaultExperiencesAppClipDefaultExperienceLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppClipDefaultExperiencesAppClipDefaultExperienceLocalizations', [$params], AppClipDefaultExperienceLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageResponse
     */
    public function getAppClipDefaultExperiencesReleaseWithAppStoreVersionLinkages($id)
    {
		$params = ['id' => $id];
        return $this->call('getAppClipDefaultExperiencesReleaseWithAppStoreVersionLinkages', [$params], AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest $postBody
     * @return null
     */
    public function updateAppClipDefaultExperiencesReleaseWithAppStoreVersion($id, AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppClipDefaultExperiencesReleaseWithAppStoreVersion', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionResponse
     */
    public function getAppClipDefaultExperiencesReleaseWithAppStoreVersion($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppClipDefaultExperiencesReleaseWithAppStoreVersion', [$params], AppStoreVersionResponse::class);
    }
}

class_alias(AppClipDefaultExperiences::class, 'AppleService_AppStore_ResourceAppClipDefaultExperiences');
