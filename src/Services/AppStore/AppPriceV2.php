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

class AppPriceV2_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $manual;
	public $startDate;
	public $endDate;

	public function getManual()
	{
		return $this->manual;
	}
	public function setManual($manual)
	{
		$this->manual = $manual;
		return $this;
	}
	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $this;
	}
	public function getEndDate()
	{
		return $this->endDate;
	}
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $this;
	}

}
class_alias(AppPriceV2_Attributes::class, 'AppleService_AppStore_AppPriceV2_Attributes');

class AppPriceV2_Relationships_AppPricePoint_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceV2_Relationships_AppPricePoint_Links::class, 'AppleService_AppStore_AppPriceV2_Relationships_AppPricePoint_Links');

class AppPriceV2_Relationships_AppPricePoint_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPricePoints';
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
class_alias(AppPriceV2_Relationships_AppPricePoint_Data::class, 'AppleService_AppStore_AppPriceV2_Relationships_AppPricePoint_Data');

class AppPriceV2_Relationships_AppPricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPriceV2_Relationships_AppPricePoint_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPriceV2_Relationships_AppPricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPriceV2_Relationships_AppPricePoint_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPriceV2_Relationships_AppPricePoint_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPriceV2_Relationships_AppPricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceV2_Relationships_AppPricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPriceV2_Relationships_AppPricePoint::class, 'AppleService_AppStore_AppPriceV2_Relationships_AppPricePoint');

class AppPriceV2_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceV2_Relationships_Territory_Links::class, 'AppleService_AppStore_AppPriceV2_Relationships_Territory_Links');

class AppPriceV2_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceV2_Relationships_Territory_Data::class, 'AppleService_AppStore_AppPriceV2_Relationships_Territory_Data');

class AppPriceV2_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPriceV2_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPriceV2_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPriceV2_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPriceV2_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPriceV2_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceV2_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPriceV2_Relationships_Territory::class, 'AppleService_AppStore_AppPriceV2_Relationships_Territory');

class AppPriceV2_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appPricePointType = AppPriceV2_Relationships_AppPricePoint::class;
	protected $appPricePointDataType = 'object';
	protected $territoryType = AppPriceV2_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  AppPriceV2_Relationships_AppPricePoint
	*/
	public function getAppPricePoint()
	{
		return $this->appPricePoint;
	}
	/**
	* @param  AppPriceV2_Relationships_AppPricePoint
	*/
	public function setAppPricePoint($appPricePoint)
	{
		$this->appPricePoint = $appPricePoint;
		return $this;
	}
	/**
	* @return  AppPriceV2_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  AppPriceV2_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}

}
class_alias(AppPriceV2_Relationships::class, 'AppleService_AppStore_AppPriceV2_Relationships');

class AppPriceV2 extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPrices';
	public $id;
	protected $attributesType = AppPriceV2_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPriceV2_Relationships::class;
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
	* @return  AppPriceV2_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPriceV2_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppPriceV2_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPriceV2_Relationships
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
class_alias(AppPriceV2::class, 'AppleService_AppStore_AppPriceV2');

