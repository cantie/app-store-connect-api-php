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

use Cantie\AppStoreConnect\Services\AppStore\BetaAppLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppLocalizationUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppWithoutIncludesResponse;

/**
 * The "betaAppLocalizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $betaAppLocalizations = $appStoreService->betaAppLocalizations;
 *  </code>
 */
class BetaAppLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BetaAppLocalizationsResponse
     */
    public function listBetaAppLocalizations($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaAppLocalizations', [$params], BetaAppLocalizationsResponse::class);
    }
    /**
	 * @param BetaAppLocalizationCreateRequest $postBody
     * @return BetaAppLocalizationResponse
     */
    public function createBetaAppLocalizations(BetaAppLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBetaAppLocalizations', [$params], BetaAppLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaAppLocalizationResponse
     */
    public function getBetaAppLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaAppLocalizations', [$params], BetaAppLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaAppLocalizationUpdateRequest $postBody
     * @return BetaAppLocalizationResponse
     */
    public function updateBetaAppLocalizations($id, BetaAppLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBetaAppLocalizations', [$params], BetaAppLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBetaAppLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBetaAppLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppWithoutIncludesResponse
     */
    public function getBetaAppLocalizationsApp($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaAppLocalizationsApp', [$params], AppWithoutIncludesResponse::class);
    }
}

