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

use Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPageResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPageCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPageUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppCustomProductPageVersionsResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class AppCustomProductPages extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppCustomProductPageCreateRequest $postBody
     * @return AppCustomProductPageResponse
     */
    public function createAppCustomProductPages(AppCustomProductPageCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppCustomProductPages', [$params], AppCustomProductPageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCustomProductPageResponse
     */
    public function getAppCustomProductPages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppCustomProductPages', [$params], AppCustomProductPageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppCustomProductPageUpdateRequest $postBody
     * @return AppCustomProductPageResponse
     */
    public function updateAppCustomProductPages($id, AppCustomProductPageUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppCustomProductPages', [$params], AppCustomProductPageResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteAppCustomProductPages($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteAppCustomProductPages', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCustomProductPageVersionsResponse
     */
    public function listAppCustomProductPagesAppCustomProductPageVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppCustomProductPagesAppCustomProductPageVersions', [$params], AppCustomProductPageVersionsResponse::class);
    }
}

class_alias(AppCustomProductPages::class, 'AppleService_AppStore_ResourceAppCustomProductPages');
