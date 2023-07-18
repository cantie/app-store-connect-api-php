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

class SubscriptionOfferCodeCustomCode_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $customCode;
	public $numberOfCodes;
	public $createdDate;
	public $expirationDate;
	public $active;

	public function getCustomCode()
	{
		return $this->customCode;
	}
	public function setCustomCode($customCode)
	{
		$this->customCode = $customCode;
		return $this;
	}
	public function getNumberOfCodes()
	{
		return $this->numberOfCodes;
	}
	public function setNumberOfCodes($numberOfCodes)
	{
		$this->numberOfCodes = $numberOfCodes;
		return $this;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $this;
	}
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate($expirationDate)
	{
		$this->expirationDate = $expirationDate;
		return $this;
	}
	public function getActive()
	{
		return $this->active;
	}
	public function setActive($active)
	{
		$this->active = $active;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCustomCode_Attributes::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCode_Attributes');

class SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Links::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Links');

class SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodes';
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
class_alias(SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Data');

class SubscriptionOfferCodeCustomCode_Relationships_OfferCode extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCode_Relationships_OfferCode_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCustomCode_Relationships_OfferCode::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCode_Relationships_OfferCode');

class SubscriptionOfferCodeCustomCode_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $offerCodeType = SubscriptionOfferCodeCustomCode_Relationships_OfferCode::class;
	protected $offerCodeDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeCustomCode_Relationships_OfferCode
	*/
	public function getOfferCode()
	{
		return $this->offerCode;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCode_Relationships_OfferCode
	*/
	public function setOfferCode($offerCode)
	{
		$this->offerCode = $offerCode;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCustomCode_Relationships::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCode_Relationships');

class SubscriptionOfferCodeCustomCode extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodeCustomCodes';
	public $id;
	protected $attributesType = SubscriptionOfferCodeCustomCode_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionOfferCodeCustomCode_Relationships::class;
	protected $relationshipsDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

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
	* @return  SubscriptionOfferCodeCustomCode_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCode_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCodeCustomCode_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCode_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}
class_alias(SubscriptionOfferCodeCustomCode::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCode');

