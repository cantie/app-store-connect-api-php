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

class SubscriptionPrice_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $startDate;
	public $preserved;

	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $startDate;
	}
	public function getPreserved()
	{
		return $this->preserved;
	}
	public function setPreserved($preserved)
	{
		$this->preserved = $preserved;
		return $preserved;
	}

}
class_alias(SubscriptionPrice_Attributes::class, 'AppleService_AppStore_SubscriptionPrice_Attributes');

class SubscriptionPrice_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(SubscriptionPrice_Relationships_Territory_Links::class, 'AppleService_AppStore_SubscriptionPrice_Relationships_Territory_Links');

class SubscriptionPrice_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPrice_Relationships_Territory_Data::class, 'AppleService_AppStore_SubscriptionPrice_Relationships_Territory_Data');

class SubscriptionPrice_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionPrice_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = SubscriptionPrice_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPrice_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionPrice_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  SubscriptionPrice_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPrice_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPrice_Relationships_Territory::class, 'AppleService_AppStore_SubscriptionPrice_Relationships_Territory');

class SubscriptionPrice_Relationships_SubscriptionPricePoint_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(SubscriptionPrice_Relationships_SubscriptionPricePoint_Links::class, 'AppleService_AppStore_SubscriptionPrice_Relationships_SubscriptionPricePoint_Links');

class SubscriptionPrice_Relationships_SubscriptionPricePoint_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPrice_Relationships_SubscriptionPricePoint_Data::class, 'AppleService_AppStore_SubscriptionPrice_Relationships_SubscriptionPricePoint_Data');

class SubscriptionPrice_Relationships_SubscriptionPricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionPrice_Relationships_SubscriptionPricePoint_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = SubscriptionPrice_Relationships_SubscriptionPricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPrice_Relationships_SubscriptionPricePoint_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionPrice_Relationships_SubscriptionPricePoint_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  SubscriptionPrice_Relationships_SubscriptionPricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPrice_Relationships_SubscriptionPricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPrice_Relationships_SubscriptionPricePoint::class, 'AppleService_AppStore_SubscriptionPrice_Relationships_SubscriptionPricePoint');

class SubscriptionPrice_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $territoryType = SubscriptionPrice_Relationships_Territory::class;
	protected $territoryDataType = 'object';
	protected $subscriptionPricePointType = SubscriptionPrice_Relationships_SubscriptionPricePoint::class;
	protected $subscriptionPricePointDataType = 'object';

	/**
	* @return  SubscriptionPrice_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  SubscriptionPrice_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}
	/**
	* @return  SubscriptionPrice_Relationships_SubscriptionPricePoint
	*/
	public function getSubscriptionPricePoint()
	{
		return $this->subscriptionPricePoint;
	}
	/**
	* @param  SubscriptionPrice_Relationships_SubscriptionPricePoint
	*/
	public function setSubscriptionPricePoint($subscriptionPricePoint)
	{
		$this->subscriptionPricePoint = $subscriptionPricePoint;
		return $subscriptionPricePoint;
	}

}
class_alias(SubscriptionPrice_Relationships::class, 'AppleService_AppStore_SubscriptionPrice_Relationships');

class SubscriptionPrice extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPrices';
	public $id;
	protected $attributesType = SubscriptionPrice_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionPrice_Relationships::class;
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
	* @return  SubscriptionPrice_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionPrice_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  SubscriptionPrice_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPrice_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
		return $links;
	}

}
class_alias(SubscriptionPrice::class, 'AppleService_AppStore_SubscriptionPrice');

