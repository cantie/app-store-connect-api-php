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

use Cantie\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOfferResponse;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOfferCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\SubscriptionIntroductoryOfferUpdateRequest;

/**
 * The "subscriptionIntroductoryOffers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $subscriptionIntroductoryOffers = $appStoreService->subscriptionIntroductoryOffers;
 *  </code>
 */
class SubscriptionIntroductoryOffers extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param SubscriptionIntroductoryOfferCreateRequest $postBody
     * @return SubscriptionIntroductoryOfferResponse
     */
    public function createSubscriptionIntroductoryOffers(SubscriptionIntroductoryOfferCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createSubscriptionIntroductoryOffers', [$params], SubscriptionIntroductoryOfferResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param SubscriptionIntroductoryOfferUpdateRequest $postBody
     * @return SubscriptionIntroductoryOfferResponse
     */
    public function updateSubscriptionIntroductoryOffers($id, SubscriptionIntroductoryOfferUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateSubscriptionIntroductoryOffers', [$params], SubscriptionIntroductoryOfferResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteSubscriptionIntroductoryOffers($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteSubscriptionIntroductoryOffers', [$params], null);
    }
}

class_alias(SubscriptionIntroductoryOffers::class, 'AppleService_AppStore_ResourceSubscriptionIntroductoryOffers');
