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

class InAppPurchasePricePoint_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $customerPrice;
	public $proceeds;
	public $priceTier;

	public function getCustomerPrice()
	{
		return $this->customerPrice;
	}
	public function setCustomerPrice($customerPrice)
	{
		$this->customerPrice = $customerPrice;
		return $this;
	}
	public function getProceeds()
	{
		return $this->proceeds;
	}
	public function setProceeds($proceeds)
	{
		$this->proceeds = $proceeds;
		return $this;
	}
	public function getPriceTier()
	{
		return $this->priceTier;
	}
	public function setPriceTier($priceTier)
	{
		$this->priceTier = $priceTier;
		return $this;
	}

}

class InAppPurchasePricePoint_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePricePoint_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePricePoint_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchasePricePoint_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchasePricePoint_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchasePricePoint_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchasePricePoint_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchasePricePoint_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchasePricePoint_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchasePricePoint_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $territoryType = InAppPurchasePricePoint_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  InAppPurchasePricePoint_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  InAppPurchasePricePoint_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}

}

class InAppPurchasePricePoint extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchasePricePoints';
	public $id;
	protected $attributesType = InAppPurchasePricePoint_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchasePricePoint_Relationships::class;
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
	* @return  InAppPurchasePricePoint_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchasePricePoint_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  InAppPurchasePricePoint_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchasePricePoint_Relationships
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

