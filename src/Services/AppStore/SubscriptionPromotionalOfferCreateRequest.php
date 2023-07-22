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

class SubscriptionPromotionalOfferCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $offerCode;
	public $duration; // 
	public $offerMode; // 
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
	public function getOfferCode()
	{
		return $this->offerCode;
	}
	public function setOfferCode($offerCode)
	{
		$this->offerCode = $offerCode;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	* @param  string
	*/
	public function setDuration($duration)
	{
		$this->duration = $duration;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getOfferMode()
	{
		return $this->offerMode;
	}
	/**
	* @param  string
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
class_alias(SubscriptionPromotionalOfferCreateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data_Attributes');

class SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription_Data');

class SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription');

class SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOfferPrices';
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
class_alias(SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices_Data');

class SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices');

class SubscriptionPromotionalOfferCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $pricesType = SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices::class;
	protected $pricesDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}
	/**
	* @return  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $this;
	}

}
class_alias(SubscriptionPromotionalOfferCreateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data_Relationships');

class SubscriptionPromotionalOfferCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOffers';
	protected $attributesType = SubscriptionPromotionalOfferCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionPromotionalOfferCreateRequest_Data_Relationships::class;
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
	* @return  SubscriptionPromotionalOfferCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionPromotionalOfferCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(SubscriptionPromotionalOfferCreateRequest_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest_Data');

class SubscriptionPromotionalOfferCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferCreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = SubscriptionPromotionalOfferPriceInlineCreate::class;
	protected $includedDataType = 'array';

	/**
	* @return  SubscriptionPromotionalOfferCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  SubscriptionPromotionalOfferPriceInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}

}
class_alias(SubscriptionPromotionalOfferCreateRequest::class, 'AppleService_AppStore_SubscriptionPromotionalOfferCreateRequest');

