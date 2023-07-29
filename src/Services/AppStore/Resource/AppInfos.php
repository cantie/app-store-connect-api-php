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

use Cantie\AppStoreConnect\Services\AppStore\AppInfoResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppInfoUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AgeRatingDeclarationResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppInfoLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppCategoryResponse;

/**
 * The "appInfos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $appInfos = $appStoreService->appInfos;
 *  </code>
 */
class AppInfos extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppInfoResponse
     */
    public function getAppInfos($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfos', [$params], AppInfoResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppInfoUpdateRequest $postBody
     * @return AppInfoResponse
     */
    public function updateAppInfos($id, AppInfoUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateAppInfos', [$params], AppInfoResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AgeRatingDeclarationResponse
     */
    public function getAppInfosAgeRatingDeclaration($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosAgeRatingDeclaration', [$params], AgeRatingDeclarationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppInfoLocalizationsResponse
     */
    public function listAppInfosAppInfoLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppInfosAppInfoLocalizations', [$params], AppInfoLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCategoryResponse
     */
    public function getAppInfosPrimaryCategory($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosPrimaryCategory', [$params], AppCategoryResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCategoryResponse
     */
    public function getAppInfosPrimarySubcategoryOne($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosPrimarySubcategoryOne', [$params], AppCategoryResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCategoryResponse
     */
    public function getAppInfosPrimarySubcategoryTwo($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosPrimarySubcategoryTwo', [$params], AppCategoryResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCategoryResponse
     */
    public function getAppInfosSecondaryCategory($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosSecondaryCategory', [$params], AppCategoryResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCategoryResponse
     */
    public function getAppInfosSecondarySubcategoryOne($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosSecondarySubcategoryOne', [$params], AppCategoryResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCategoryResponse
     */
    public function getAppInfosSecondarySubcategoryTwo($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppInfosSecondarySubcategoryTwo', [$params], AppCategoryResponse::class);
    }
}

