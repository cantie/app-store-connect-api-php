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

class SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription_Data');

class SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription');

class SubscriptionSubmissionCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';

	/**
	* @return  SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionSubmissionCreateRequest_Data_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}

}
class_alias(SubscriptionSubmissionCreateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionSubmissionCreateRequest_Data_Relationships');

class SubscriptionSubmissionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionSubmissions';
	protected $relationshipsType = SubscriptionSubmissionCreateRequest_Data_Relationships::class;
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
	* @return  SubscriptionSubmissionCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionSubmissionCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(SubscriptionSubmissionCreateRequest_Data::class, 'AppleService_AppStore_SubscriptionSubmissionCreateRequest_Data');

class SubscriptionSubmissionCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionSubmissionCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionSubmissionCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionSubmissionCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionSubmissionCreateRequest::class, 'AppleService_AppStore_SubscriptionSubmissionCreateRequest');

