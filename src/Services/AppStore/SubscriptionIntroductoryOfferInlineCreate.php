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

class SubscriptionIntroductoryOfferInlineCreate_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $startDate;
	public $endDate;
	public $duration; // 
	public $offerMode; // 
	public $numberOfPeriods;

	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $this;
	}
	public function getEndDate()
	{
		return $this->endDate;
	}
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
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
class_alias(SubscriptionIntroductoryOfferInlineCreate_Attributes::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Attributes');

class SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription_Data');

class SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription');

class SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territories';
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
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory_Data');

class SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory');

class SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPricePoints';
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
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint_Data');

class SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint');

class SubscriptionIntroductoryOfferInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $territoryType = SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory::class;
	protected $territoryDataType = 'object';
	protected $subscriptionPricePointType = SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint::class;
	protected $subscriptionPricePointDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}
	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}
	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint
	*/
	public function getSubscriptionPricePoint()
	{
		return $this->subscriptionPricePoint;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships_SubscriptionPricePoint
	*/
	public function setSubscriptionPricePoint($subscriptionPricePoint)
	{
		$this->subscriptionPricePoint = $subscriptionPricePoint;
		return $this;
	}

}
class_alias(SubscriptionIntroductoryOfferInlineCreate_Relationships::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate_Relationships');

class SubscriptionIntroductoryOfferInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionIntroductoryOffers';
	public $id;
	protected $attributesType = SubscriptionIntroductoryOfferInlineCreate_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionIntroductoryOfferInlineCreate_Relationships::class;
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
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionIntroductoryOfferInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionIntroductoryOfferInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(SubscriptionIntroductoryOfferInlineCreate::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferInlineCreate');

