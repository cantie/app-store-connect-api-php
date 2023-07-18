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

use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeCustomCodesResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodeOneTimeUseCodesResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionOfferCodePricesResponse;

/**
 * The "subscriptionOfferCodes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $subscriptionOfferCodes = $appStoreService->subscriptionOfferCodes;
 *  </code>
 */
class SubscriptionOfferCodes extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param SubscriptionOfferCodeCreateRequest $postBody
     * @return SubscriptionOfferCodeResponse
     */
    public function createSubscriptionOfferCodes(SubscriptionOfferCodeCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createSubscriptionOfferCodes', [$params], SubscriptionOfferCodeResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionOfferCodeResponse
     */
    public function getSubscriptionOfferCodes($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionOfferCodes', [$params], SubscriptionOfferCodeResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionOfferCodeUpdateRequest $postBody
     * @return SubscriptionOfferCodeResponse
     */
    public function updateSubscriptionOfferCodes($id, SubscriptionOfferCodeUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateSubscriptionOfferCodes', [$params], SubscriptionOfferCodeResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionOfferCodeCustomCodesResponse
     */
    public function listSubscriptionOfferCodesCustomCodes($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionOfferCodesCustomCodes', [$params], SubscriptionOfferCodeCustomCodesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionOfferCodeOneTimeUseCodesResponse
     */
    public function listSubscriptionOfferCodesOneTimeUseCodes($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionOfferCodesOneTimeUseCodes', [$params], SubscriptionOfferCodeOneTimeUseCodesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionOfferCodePricesResponse
     */
    public function listSubscriptionOfferCodesPrices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionOfferCodesPrices', [$params], SubscriptionOfferCodePricesResponse::class);
    }
}

class_alias(SubscriptionOfferCodes::class, 'AppleService_AppStore_ResourceSubscriptionOfferCodes');
