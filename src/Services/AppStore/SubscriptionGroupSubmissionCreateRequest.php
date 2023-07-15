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

class SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroups';
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
class_alias(SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup_Data::class, 'AppleService_AppStore_SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup_Data');

class SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup::class, 'AppleService_AppStore_SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup');

class SubscriptionGroupSubmissionCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionGroupType = SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup::class;
	protected $subscriptionGroupDataType = 'object';

	/**
	* @return  SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup
	*/
	public function getSubscriptionGroup()
	{
		return $this->subscriptionGroup;
	}
	/**
	* @param  SubscriptionGroupSubmissionCreateRequest_Data_Relationships_SubscriptionGroup
	*/
	public function setSubscriptionGroup($subscriptionGroup)
	{
		$this->subscriptionGroup = $subscriptionGroup;
		return $subscriptionGroup;
	}

}
class_alias(SubscriptionGroupSubmissionCreateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionGroupSubmissionCreateRequest_Data_Relationships');

class SubscriptionGroupSubmissionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroupSubmissions';
	protected $relationshipsType = SubscriptionGroupSubmissionCreateRequest_Data_Relationships::class;
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
	* @return  SubscriptionGroupSubmissionCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionGroupSubmissionCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionGroupSubmissionCreateRequest_Data::class, 'AppleService_AppStore_SubscriptionGroupSubmissionCreateRequest_Data');

class SubscriptionGroupSubmissionCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionGroupSubmissionCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionGroupSubmissionCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionGroupSubmissionCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionGroupSubmissionCreateRequest::class, 'AppleService_AppStore_SubscriptionGroupSubmissionCreateRequest');

