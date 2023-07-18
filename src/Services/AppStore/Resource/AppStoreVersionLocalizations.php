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

use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppStoreVersionLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppPreviewSetsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotSetsResponse;

/**
 * The "appStoreVersionLocalizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $appStoreVersionLocalizations = $appStoreService->appStoreVersionLocalizations;
 *  </code>
 */
class AppStoreVersionLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppStoreVersionLocalizationCreateRequest $postBody
     * @return AppStoreVersionLocalizationResponse
     */
    public function createAppStoreVersionLocalizations(AppStoreVersionLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppStoreVersionLocalizations', [$params], AppStoreVersionLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppStoreVersionLocalizationResponse
     */
    public function getAppStoreVersionLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppStoreVersionLocalizations', [$params], AppStoreVersionLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppStoreVersionLocalizationUpdateRequest $postBody
     * @return AppStoreVersionLocalizationResponse
     */
    public function updateAppStoreVersionLocalizations($id, AppStoreVersionLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppStoreVersionLocalizations', [$params], AppStoreVersionLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppStoreVersionLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppStoreVersionLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppPreviewSetsResponse
     */
    public function listAppStoreVersionLocalizationsAppPreviewSets($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionLocalizationsAppPreviewSets', [$params], AppPreviewSetsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppScreenshotSetsResponse
     */
    public function listAppStoreVersionLocalizationsAppScreenshotSets($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppStoreVersionLocalizationsAppScreenshotSets', [$params], AppScreenshotSetsResponse::class);
    }
}

class_alias(AppStoreVersionLocalizations::class, 'AppleService_AppStore_ResourceAppStoreVersionLocalizations');
