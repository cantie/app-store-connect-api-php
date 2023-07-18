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

use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeOneTimeUseCodeResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeOneTimeUseCodeCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeOneTimeUseCodeUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\csv;

/**
 * The "subscriptionOfferCodeOneTimeUseCodes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $subscriptionOfferCodeOneTimeUseCodes = $appStoreService->subscriptionOfferCodeOneTimeUseCodes;
 *  </code>
 */
class SubscriptionOfferCodeOneTimeUseCodes extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param SubscriptionOfferCodeOneTimeUseCodeCreateRequest $postBody
     * @return SubscriptionOfferCodeOneTimeUseCodeResponse
     */
    public function createSubscriptionOfferCodeOneTimeUseCodes(SubscriptionOfferCodeOneTimeUseCodeCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createSubscriptionOfferCodeOneTimeUseCodes', [$params], SubscriptionOfferCodeOneTimeUseCodeResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionOfferCodeOneTimeUseCodeResponse
     */
    public function getSubscriptionOfferCodeOneTimeUseCodes($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionOfferCodeOneTimeUseCodes', [$params], SubscriptionOfferCodeOneTimeUseCodeResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionOfferCodeOneTimeUseCodeUpdateRequest $postBody
     * @return SubscriptionOfferCodeOneTimeUseCodeResponse
     */
    public function updateSubscriptionOfferCodeOneTimeUseCodes($id, SubscriptionOfferCodeOneTimeUseCodeUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateSubscriptionOfferCodeOneTimeUseCodes', [$params], SubscriptionOfferCodeOneTimeUseCodeResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return csv
     */
    public function getSubscriptionOfferCodeOneTimeUseCodesValues($id)
    {
		$params = ['id' => $id];
        return $this->call('getSubscriptionOfferCodeOneTimeUseCodesValues', [$params], csv::class);
    }
}

class_alias(SubscriptionOfferCodeOneTimeUseCodes::class, 'AppleService_AppStore_ResourceSubscriptionOfferCodeOneTimeUseCodes');
