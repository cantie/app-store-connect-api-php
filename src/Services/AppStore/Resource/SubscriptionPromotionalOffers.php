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

use Cantie\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOfferResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOfferCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOfferUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionPromotionalOfferPricesResponse;

/**
 * The "subscriptionPromotionalOffers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $subscriptionPromotionalOffers = $appStoreService->subscriptionPromotionalOffers;
 *  </code>
 */
class SubscriptionPromotionalOffers extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param SubscriptionPromotionalOfferCreateRequest $postBody
     * @return SubscriptionPromotionalOfferResponse
     */
    public function createSubscriptionPromotionalOffers(SubscriptionPromotionalOfferCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createSubscriptionPromotionalOffers', [$params], SubscriptionPromotionalOfferResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionPromotionalOfferResponse
     */
    public function getSubscriptionPromotionalOffers($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getSubscriptionPromotionalOffers', [$params], SubscriptionPromotionalOfferResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionPromotionalOfferUpdateRequest $postBody
     * @return SubscriptionPromotionalOfferResponse
     */
    public function updateSubscriptionPromotionalOffers($id, SubscriptionPromotionalOfferUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateSubscriptionPromotionalOffers', [$params], SubscriptionPromotionalOfferResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteSubscriptionPromotionalOffers($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteSubscriptionPromotionalOffers', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return SubscriptionPromotionalOfferPricesResponse
     */
    public function listSubscriptionPromotionalOffersPrices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listSubscriptionPromotionalOffersPrices', [$params], SubscriptionPromotionalOfferPricesResponse::class);
    }
}

class_alias(SubscriptionPromotionalOffers::class, 'AppleService_AppStore_ResourceSubscriptionPromotionalOffers');
