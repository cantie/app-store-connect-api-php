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

use Cantie\AppStoreConnect\Services\AppStore\AppEventScreenshotResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEventScreenshotCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppEventScreenshotUpdateRequest;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class AppEventScreenshots extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppEventScreenshotCreateRequest $postBody
     * @return AppEventScreenshotResponse
     */
    public function createAppEventScreenshots(AppEventScreenshotCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppEventScreenshots', [$params], AppEventScreenshotResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEventScreenshotResponse
     */
    public function getAppEventScreenshots($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppEventScreenshots', [$params], AppEventScreenshotResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppEventScreenshotUpdateRequest $postBody
     * @return AppEventScreenshotResponse
     */
    public function updateAppEventScreenshots($id, AppEventScreenshotUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppEventScreenshots', [$params], AppEventScreenshotResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppEventScreenshots($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppEventScreenshots', [$params], null);
    }
}

class_alias(AppEventScreenshots::class, 'AppleService_AppStore_ResourceAppEventScreenshots');
