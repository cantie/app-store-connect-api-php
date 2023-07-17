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

use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppClipDefaultExperienceLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppClipHeaderImageResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class AppClipDefaultExperienceLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppClipDefaultExperienceLocalizationCreateRequest $postBody
     * @return AppClipDefaultExperienceLocalizationResponse
     */
    public function createAppClipDefaultExperienceLocalizations(AppClipDefaultExperienceLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppClipDefaultExperienceLocalizations', [$params], AppClipDefaultExperienceLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipDefaultExperienceLocalizationResponse
     */
    public function getAppClipDefaultExperienceLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppClipDefaultExperienceLocalizations', [$params], AppClipDefaultExperienceLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppClipDefaultExperienceLocalizationUpdateRequest $postBody
     * @return AppClipDefaultExperienceLocalizationResponse
     */
    public function updateAppClipDefaultExperienceLocalizations($id, AppClipDefaultExperienceLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppClipDefaultExperienceLocalizations', [$params], AppClipDefaultExperienceLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppClipDefaultExperienceLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppClipDefaultExperienceLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppClipHeaderImageResponse
     */
    public function getAppClipDefaultExperienceLocalizationsAppClipHeaderImage($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppClipDefaultExperienceLocalizationsAppClipHeaderImage', [$params], AppClipHeaderImageResponse::class);
    }
}

class_alias(AppClipDefaultExperienceLocalizations::class, 'AppleService_AppStore_ResourceAppClipDefaultExperienceLocalizations');
