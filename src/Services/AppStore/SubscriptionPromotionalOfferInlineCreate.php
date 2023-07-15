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

class SubscriptionPromotionalOfferInlineCreate_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $offerCode;
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
		return $name;
	}
	public function getOfferCode()
	{
		return $this->offerCode;
	}
	public function setOfferCode($offerCode)
	{
		$this->offerCode = $offerCode;
		return $offerCode;
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
		return $duration;
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
		return $offerMode;
	}
	public function getNumberOfPeriods()
	{
		return $this->numberOfPeriods;
	}
	public function setNumberOfPeriods($numberOfPeriods)
	{
		$this->numberOfPeriods = $numberOfPeriods;
		return $numberOfPeriods;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate_Attributes::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate_Attributes');

class SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription_Data');

class SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription');

class SubscriptionPromotionalOfferInlineCreate_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
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
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate_Relationships_Prices_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate_Relationships_Prices_Data');

class SubscriptionPromotionalOfferInlineCreate_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferInlineCreate_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionPromotionalOfferInlineCreate_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferInlineCreate_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate_Relationships_Prices::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate_Relationships_Prices');

class SubscriptionPromotionalOfferInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $pricesType = SubscriptionPromotionalOfferInlineCreate_Relationships_Prices::class;
	protected $pricesDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionPromotionalOfferInlineCreate_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $subscription;
	}
	/**
	* @return  SubscriptionPromotionalOfferInlineCreate_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  SubscriptionPromotionalOfferInlineCreate_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $prices;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate_Relationships::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate_Relationships');

class SubscriptionPromotionalOfferInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOffers';
	public $id;
	protected $attributesType = SubscriptionPromotionalOfferInlineCreate_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionPromotionalOfferInlineCreate_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  SubscriptionPromotionalOfferInlineCreate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionPromotionalOfferInlineCreate_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  SubscriptionPromotionalOfferInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPromotionalOfferInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionPromotionalOfferInlineCreate::class, 'AppleService_AppStore_SubscriptionPromotionalOfferInlineCreate');

