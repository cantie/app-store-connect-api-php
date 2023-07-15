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

class PromotedPurchaseCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $visibleForAllUsers;
	public $enabled;

	public function getVisibleForAllUsers()
	{
		return $this->visibleForAllUsers;
	}
	public function setVisibleForAllUsers($visibleForAllUsers)
	{
		$this->visibleForAllUsers = $visibleForAllUsers;
		return $visibleForAllUsers;
	}
	public function getEnabled()
	{
		return $this->enabled;
	}
	public function setEnabled($enabled)
	{
		$this->enabled = $enabled;
		return $enabled;
	}

}
class_alias(PromotedPurchaseCreateRequest_Data_Attributes::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Attributes');

class PromotedPurchaseCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
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
class_alias(PromotedPurchaseCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships_App_Data');

class PromotedPurchaseCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = PromotedPurchaseCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships_App');

class PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
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
class_alias(PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2_Data');

class PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2');

class PromotedPurchaseCreateRequest_Data_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(PromotedPurchaseCreateRequest_Data_Relationships_Subscription_Data::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships_Subscription_Data');

class PromotedPurchaseCreateRequest_Data_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = PromotedPurchaseCreateRequest_Data_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseCreateRequest_Data_Relationships_Subscription::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships_Subscription');

class PromotedPurchaseCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = PromotedPurchaseCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $inAppPurchaseV2Type = PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2::class;
	protected $inAppPurchaseV2DataType = 'object';
	protected $subscriptionType = PromotedPurchaseCreateRequest_Data_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';

	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2
	*/
	public function getInAppPurchaseV2()
	{
		return $this->inAppPurchaseV2;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships_InAppPurchaseV2
	*/
	public function setInAppPurchaseV2($inAppPurchaseV2)
	{
		$this->inAppPurchaseV2 = $inAppPurchaseV2;
		return $inAppPurchaseV2;
	}
	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $subscription;
	}

}
class_alias(PromotedPurchaseCreateRequest_Data_Relationships::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data_Relationships');

class PromotedPurchaseCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchases';
	protected $attributesType = PromotedPurchaseCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = PromotedPurchaseCreateRequest_Data_Relationships::class;
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
	* @return  PromotedPurchaseCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  PromotedPurchaseCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(PromotedPurchaseCreateRequest_Data::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest_Data');

class PromotedPurchaseCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = PromotedPurchaseCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseCreateRequest::class, 'AppleService_AppStore_PromotedPurchaseCreateRequest');

