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

class AppPricePointV3_Attributes extends \Cantie\AppStoreConnect\Model
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
		return $customerPrice;
	}
	public function getProceeds()
	{
		return $this->proceeds;
	}
	public function setProceeds($proceeds)
	{
		$this->proceeds = $proceeds;
		return $proceeds;
	}

}
class_alias(AppPricePointV3_Attributes::class, 'AppleService_AppStore_AppPricePointV3_Attributes');

class AppPricePointV3_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPricePointV3_Relationships_App_Links::class, 'AppleService_AppStore_AppPricePointV3_Relationships_App_Links');

class AppPricePointV3_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPricePointV3_Relationships_App_Data::class, 'AppleService_AppStore_AppPricePointV3_Relationships_App_Data');

class AppPricePointV3_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePointV3_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePointV3_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePointV3_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePointV3_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppPricePointV3_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePointV3_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPricePointV3_Relationships_App::class, 'AppleService_AppStore_AppPricePointV3_Relationships_App');

class AppPricePointV3_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPricePointV3_Relationships_Territory_Links::class, 'AppleService_AppStore_AppPricePointV3_Relationships_Territory_Links');

class AppPricePointV3_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPricePointV3_Relationships_Territory_Data::class, 'AppleService_AppStore_AppPricePointV3_Relationships_Territory_Data');

class AppPricePointV3_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePointV3_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePointV3_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePointV3_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePointV3_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppPricePointV3_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePointV3_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPricePointV3_Relationships_Territory::class, 'AppleService_AppStore_AppPricePointV3_Relationships_Territory');

class AppPricePointV3_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppPricePointV3_Relationships_App::class;
	protected $appDataType = 'object';
	protected $territoryType = AppPricePointV3_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  AppPricePointV3_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppPricePointV3_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  AppPricePointV3_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  AppPricePointV3_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}

}
class_alias(AppPricePointV3_Relationships::class, 'AppleService_AppStore_AppPricePointV3_Relationships');

class AppPricePointV3 extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPricePoints';
	public $id;
	protected $attributesType = AppPricePointV3_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPricePointV3_Relationships::class;
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
	* @return  AppPricePointV3_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPricePointV3_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppPricePointV3_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPricePointV3_Relationships
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
class_alias(AppPricePointV3::class, 'AppleService_AppStore_AppPricePointV3');

