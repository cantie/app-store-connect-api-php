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

class AppPricePointV2_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $customerPrice;
	public $proceeds;

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

}

class AppPricePointV2_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class AppPricePointV2_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppPricePointV2_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePointV2_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePointV2_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePointV2_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePointV2_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPricePointV2_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePointV2_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPricePointV2_Relationships_PriceTier_Links extends \Cantie\AppStoreConnect\Model
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

class AppPricePointV2_Relationships_PriceTier_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPriceTiers';
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

class AppPricePointV2_Relationships_PriceTier extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePointV2_Relationships_PriceTier_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePointV2_Relationships_PriceTier_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePointV2_Relationships_PriceTier_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePointV2_Relationships_PriceTier_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPricePointV2_Relationships_PriceTier_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePointV2_Relationships_PriceTier_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPricePointV2_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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

class AppPricePointV2_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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

class AppPricePointV2_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePointV2_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePointV2_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePointV2_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePointV2_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPricePointV2_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePointV2_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPricePointV2_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppPricePointV2_Relationships_App::class;
	protected $appDataType = 'object';
	protected $priceTierType = AppPricePointV2_Relationships_PriceTier::class;
	protected $priceTierDataType = 'object';
	protected $territoryType = AppPricePointV2_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  AppPricePointV2_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppPricePointV2_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppPricePointV2_Relationships_PriceTier
	*/
	public function getPriceTier()
	{
		return $this->priceTier;
	}
	/**
	* @param  AppPricePointV2_Relationships_PriceTier
	*/
	public function setPriceTier($priceTier)
	{
		$this->priceTier = $priceTier;
		return $this;
	}
	/**
	* @return  AppPricePointV2_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  AppPricePointV2_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}

}

class AppPricePointV2 extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPricePoints';
	public $id;
	protected $attributesType = AppPricePointV2_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPricePointV2_Relationships::class;
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
	* @return  AppPricePointV2_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPricePointV2_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppPricePointV2_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPricePointV2_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

