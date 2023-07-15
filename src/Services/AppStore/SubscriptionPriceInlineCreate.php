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

class SubscriptionPriceInlineCreate_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $startDate;
	public $preserveCurrentPrice;

	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $startDate;
	}
	public function getPreserveCurrentPrice()
	{
		return $this->preserveCurrentPrice;
	}
	public function setPreserveCurrentPrice($preserveCurrentPrice)
	{
		$this->preserveCurrentPrice = $preserveCurrentPrice;
		return $preserveCurrentPrice;
	}

}
class_alias(SubscriptionPriceInlineCreate_Attributes::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Attributes');

class SubscriptionPriceInlineCreate_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPriceInlineCreate_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships_Subscription_Data');

class SubscriptionPriceInlineCreate_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPriceInlineCreate_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPriceInlineCreate_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPriceInlineCreate_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships_Subscription');

class SubscriptionPriceInlineCreate_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPriceInlineCreate_Relationships_Territory_Data::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships_Territory_Data');

class SubscriptionPriceInlineCreate_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPriceInlineCreate_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPriceInlineCreate_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPriceInlineCreate_Relationships_Territory::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships_Territory');

class SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint_Data::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint_Data');

class SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint');

class SubscriptionPriceInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionPriceInlineCreate_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $territoryType = SubscriptionPriceInlineCreate_Relationships_Territory::class;
	protected $territoryDataType = 'object';
	protected $subscriptionPricePointType = SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint::class;
	protected $subscriptionPricePointDataType = 'object';

	/**
	* @return  SubscriptionPriceInlineCreate_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $subscription;
	}
	/**
	* @return  SubscriptionPriceInlineCreate_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}
	/**
	* @return  SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint
	*/
	public function getSubscriptionPricePoint()
	{
		return $this->subscriptionPricePoint;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships_SubscriptionPricePoint
	*/
	public function setSubscriptionPricePoint($subscriptionPricePoint)
	{
		$this->subscriptionPricePoint = $subscriptionPricePoint;
		return $subscriptionPricePoint;
	}

}
class_alias(SubscriptionPriceInlineCreate_Relationships::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate_Relationships');

class SubscriptionPriceInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPrices';
	public $id;
	protected $attributesType = SubscriptionPriceInlineCreate_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionPriceInlineCreate_Relationships::class;
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
	* @return  SubscriptionPriceInlineCreate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  SubscriptionPriceInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPriceInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionPriceInlineCreate::class, 'AppleService_AppStore_SubscriptionPriceInlineCreate');

