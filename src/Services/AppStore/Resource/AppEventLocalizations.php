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

use Cantie\AppStoreConnect\Services\AppStore\AppEventLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEventLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppEventLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppEventScreenshotsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEventVideoClipsResponse;

/**
 * The "appEventLocalizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $appEventLocalizations = $appStoreService->appEventLocalizations;
 *  </code>
 */
class AppEventLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppEventLocalizationCreateRequest $postBody
     * @return AppEventLocalizationResponse
     */
    public function createAppEventLocalizations(AppEventLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppEventLocalizations', [$params], AppEventLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEventLocalizationResponse
     */
    public function getAppEventLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppEventLocalizations', [$params], AppEventLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppEventLocalizationUpdateRequest $postBody
     * @return AppEventLocalizationResponse
     */
    public function updateAppEventLocalizations($id, AppEventLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppEventLocalizations', [$params], AppEventLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppEventLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppEventLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEventScreenshotsResponse
     */
    public function listAppEventLocalizationsAppEventScreenshots($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppEventLocalizationsAppEventScreenshots', [$params], AppEventScreenshotsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEventVideoClipsResponse
     */
    public function listAppEventLocalizationsAppEventVideoClips($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppEventLocalizationsAppEventVideoClips', [$params], AppEventVideoClipsResponse::class);
    }
}

