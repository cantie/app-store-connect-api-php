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

use Cantie\AppStoreConnect\Services\AppStore\BetaAppClipInvocationLocalizationResponse;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppClipInvocationLocalizationCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\BetaAppClipInvocationLocalizationUpdateRequest;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class BetaAppClipInvocationLocalizations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param BetaAppClipInvocationLocalizationCreateRequest $postBody
     * @return BetaAppClipInvocationLocalizationResponse
     */
    public function createBetaAppClipInvocationLocalizations(BetaAppClipInvocationLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBetaAppClipInvocationLocalizations', [$params], BetaAppClipInvocationLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaAppClipInvocationLocalizationUpdateRequest $postBody
     * @return BetaAppClipInvocationLocalizationResponse
     */
    public function updateBetaAppClipInvocationLocalizations($id, BetaAppClipInvocationLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBetaAppClipInvocationLocalizations', [$params], BetaAppClipInvocationLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBetaAppClipInvocationLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBetaAppClipInvocationLocalizations', [$params], null);
    }
}

class_alias(BetaAppClipInvocationLocalizations::class, 'AppleService_AppStore_ResourceBetaAppClipInvocationLocalizations');
