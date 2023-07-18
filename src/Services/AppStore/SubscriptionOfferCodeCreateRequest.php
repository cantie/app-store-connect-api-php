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

namespace Cantie\AppStoreConnect\Services\AppStore;

class SubscriptionOfferCodeCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $customerEligibilitiesType = SubscriptionCustomerEligibility::class;
	protected $customerEligibilitiesDataType = 'array';
	protected $offerEligibilityType = SubscriptionOfferEligibility::class;
	protected $offerEligibilityDataType = '';
	protected $durationType = SubscriptionOfferDuration::class;
	protected $durationDataType = '';
	protected $offerModeType = SubscriptionOfferMode::class;
	protected $offerModeDataType = '';
	public $numberOfPeriods;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	/**
	* @return  SubscriptionCustomerEligibility[]
	*/
	public function getCustomerEligibilities()
	{
		return $this->customerEligibilities;
	}
	/**
	* @param  SubscriptionCustomerEligibility[]
	*/
	public function setCustomerEligibilities($customerEligibilities)
	{
		$this->customerEligibilities = $customerEligibilities;
		return $this;
	}
	/**
	* @return  SubscriptionOfferEligibility
	*/
	public function getOfferEligibility()
	{
		return $this->offerEligibility;
	}
	/**
	* @param  SubscriptionOfferEligibility
	*/
	public function setOfferEligibility($offerEligibility)
	{
		$this->offerEligibility = $offerEligibility;
		return $this;
	}
	/**
	* @return  SubscriptionOfferDuration
	*/
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	* @param  SubscriptionOfferDuration
	*/
	public function setDuration($duration)
	{
		$this->duration = $duration;
		return $this;
	}
	/**
	* @return  SubscriptionOfferMode
	*/
	public function getOfferMode()
	{
		return $this->offerMode;
	}
	/**
	* @param  SubscriptionOfferMode
	*/
	public function setOfferMode($offerMode)
	{
		$this->offerMode = $offerMode;
		return $this;
	}
	public function getNumberOfPeriods()
	{
		return $this->numberOfPeriods;
	}
	public function setNumberOfPeriods($numberOfPeriods)
	{
		$this->numberOfPeriods = $numberOfPeriods;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data_Attributes');

class SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptions';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription_Data');

class SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription');

class SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodePrices';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices_Data');

class SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices');

class SubscriptionOfferCodeCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $pricesType = SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices::class;
	protected $pricesDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data_Relationships');

class SubscriptionOfferCodeCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodes';
	protected $attributesType = SubscriptionOfferCodeCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionOfferCodeCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest_Data');

class SubscriptionOfferCodeCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionOfferCodeCreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = SubscriptionOfferCodePriceInlineCreate::class;
	protected $includedDataType = 'array';

	/**
	* @return  SubscriptionOfferCodeCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCodePriceInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  SubscriptionOfferCodePriceInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCreateRequest::class, 'AppleService_AppStore_SubscriptionOfferCodeCreateRequest');

