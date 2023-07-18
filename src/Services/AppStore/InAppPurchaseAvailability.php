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

class InAppPurchaseAvailability_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $availableInNewTerritories;

	public function getAvailableInNewTerritories()
	{
		return $this->availableInNewTerritories;
	}
	public function setAvailableInNewTerritories($availableInNewTerritories)
	{
		$this->availableInNewTerritories = $availableInNewTerritories;
		return $this;
	}

}
class_alias(InAppPurchaseAvailability_Attributes::class, 'AppleService_AppStore_InAppPurchaseAvailability_Attributes');

class InAppPurchaseAvailability_Relationships_AvailableTerritories_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(InAppPurchaseAvailability_Relationships_AvailableTerritories_Links::class, 'AppleService_AppStore_InAppPurchaseAvailability_Relationships_AvailableTerritories_Links');

class InAppPurchaseAvailability_Relationships_AvailableTerritories_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(InAppPurchaseAvailability_Relationships_AvailableTerritories_Data::class, 'AppleService_AppStore_InAppPurchaseAvailability_Relationships_AvailableTerritories_Data');

class InAppPurchaseAvailability_Relationships_AvailableTerritories extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseAvailability_Relationships_AvailableTerritories_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = InAppPurchaseAvailability_Relationships_AvailableTerritories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  InAppPurchaseAvailability_Relationships_AvailableTerritories_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseAvailability_Relationships_AvailableTerritories_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  InAppPurchaseAvailability_Relationships_AvailableTerritories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseAvailability_Relationships_AvailableTerritories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(InAppPurchaseAvailability_Relationships_AvailableTerritories::class, 'AppleService_AppStore_InAppPurchaseAvailability_Relationships_AvailableTerritories');

class InAppPurchaseAvailability_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $availableTerritoriesType = InAppPurchaseAvailability_Relationships_AvailableTerritories::class;
	protected $availableTerritoriesDataType = 'object';

	/**
	* @return  InAppPurchaseAvailability_Relationships_AvailableTerritories
	*/
	public function getAvailableTerritories()
	{
		return $this->availableTerritories;
	}
	/**
	* @param  InAppPurchaseAvailability_Relationships_AvailableTerritories
	*/
	public function setAvailableTerritories($availableTerritories)
	{
		$this->availableTerritories = $availableTerritories;
		return $this;
	}

}
class_alias(InAppPurchaseAvailability_Relationships::class, 'AppleService_AppStore_InAppPurchaseAvailability_Relationships');

class InAppPurchaseAvailability extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseAvailabilities';
	public $id;
	protected $attributesType = InAppPurchaseAvailability_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchaseAvailability_Relationships::class;
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
	* @return  InAppPurchaseAvailability_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchaseAvailability_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  InAppPurchaseAvailability_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchaseAvailability_Relationships
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
class_alias(InAppPurchaseAvailability::class, 'AppleService_AppStore_InAppPurchaseAvailability');

