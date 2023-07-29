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

class SubscriptionCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $productId;
	public $familySharable;
	public $subscriptionPeriod; // ONE_WEEK, ONE_MONTH, TWO_MONTHS, THREE_MONTHS, SIX_MONTHS, ONE_YEAR
	public $reviewNote;
	public $groupLevel;
	public $availableInAllTerritories;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($productId)
	{
		$this->productId = $productId;
		return $this;
	}
	public function getFamilySharable()
	{
		return $this->familySharable;
	}
	public function setFamilySharable($familySharable)
	{
		$this->familySharable = $familySharable;
		return $this;
	}
	public function getSubscriptionPeriod()
	{
		return $this->subscriptionPeriod;
	}
	public function setSubscriptionPeriod($subscriptionPeriod)
	{
		$this->subscriptionPeriod = $subscriptionPeriod;
		return $this;
	}
	public function getReviewNote()
	{
		return $this->reviewNote;
	}
	public function setReviewNote($reviewNote)
	{
		$this->reviewNote = $reviewNote;
		return $this;
	}
	public function getGroupLevel()
	{
		return $this->groupLevel;
	}
	public function setGroupLevel($groupLevel)
	{
		$this->groupLevel = $groupLevel;
		return $this;
	}
	public function getAvailableInAllTerritories()
	{
		return $this->availableInAllTerritories;
	}
	public function setAvailableInAllTerritories($availableInAllTerritories)
	{
		$this->availableInAllTerritories = $availableInAllTerritories;
		return $this;
	}

}

class SubscriptionCreateRequest_Data_Relationships_Group_Data extends \Cantie\AppStoreConnect\Model
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

class SubscriptionCreateRequest_Data_Relationships_Group extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionCreateRequest_Data_Relationships_Group_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionCreateRequest_Data_Relationships_Group_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionCreateRequest_Data_Relationships_Group_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class SubscriptionCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $groupType = SubscriptionCreateRequest_Data_Relationships_Group::class;
	protected $groupDataType = 'object';

	/**
	* @return  SubscriptionCreateRequest_Data_Relationships_Group
	*/
	public function getGroup()
	{
		return $this->group;
	}
	/**
	* @param  SubscriptionCreateRequest_Data_Relationships_Group
	*/
	public function setGroup($group)
	{
		$this->group = $group;
		return $this;
	}

}

class SubscriptionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptions';
	protected $attributesType = SubscriptionCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionCreateRequest_Data_Relationships::class;
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
	* @return  SubscriptionCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class SubscriptionCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

