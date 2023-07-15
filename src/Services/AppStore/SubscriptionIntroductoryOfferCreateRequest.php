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

class SubscriptionIntroductoryOfferCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $startDate;
	public $endDate;
	protected $durationType = SubscriptionOfferDuration::class;
	protected $durationDataType = '';
	protected $offerModeType = SubscriptionOfferMode::class;
	protected $offerModeDataType = '';
	public $numberOfPeriods;

	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $startDate;
	}
	public function getEndDate()
	{
		return $this->endDate;
	}
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $endDate;
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
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Attributes');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription_Data');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory_Data');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint_Data');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint');

class SubscriptionIntroductoryOfferCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $territoryType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory::class;
	protected $territoryDataType = 'object';
	protected $subscriptionPricePointType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint::class;
	protected $subscriptionPricePointDataType = 'object';

	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $subscription;
	}
	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}
	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint
	*/
	public function getSubscriptionPricePoint()
	{
		return $this->subscriptionPricePoint;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships_SubscriptionPricePoint
	*/
	public function setSubscriptionPricePoint($subscriptionPricePoint)
	{
		$this->subscriptionPricePoint = $subscriptionPricePoint;
		return $subscriptionPricePoint;
	}

}
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data_Relationships');

class SubscriptionIntroductoryOfferCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionIntroductoryOffers';
	protected $attributesType = SubscriptionIntroductoryOfferCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionIntroductoryOfferCreateRequest_Data_Relationships::class;
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
	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionIntroductoryOfferCreateRequest_Data::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest_Data');

class SubscriptionIntroductoryOfferCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionIntroductoryOfferCreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = SubscriptionPricePointInlineCreate::class;
	protected $includedDataType = 'array';

	/**
	* @return  SubscriptionIntroductoryOfferCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionIntroductoryOfferCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}
	/**
	* @return  SubscriptionPricePointInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  SubscriptionPricePointInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $included;
	}

}
class_alias(SubscriptionIntroductoryOfferCreateRequest::class, 'AppleService_AppStore_SubscriptionIntroductoryOfferCreateRequest');

