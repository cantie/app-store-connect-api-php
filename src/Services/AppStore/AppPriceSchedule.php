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

class AppPriceSchedule_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceSchedule_Relationships_App_Links::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_App_Links');

class AppPriceSchedule_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceSchedule_Relationships_App_Data::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_App_Data');

class AppPriceSchedule_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPriceSchedule_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPriceSchedule_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPriceSchedule_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPriceSchedule_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPriceSchedule_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceSchedule_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPriceSchedule_Relationships_App::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_App');

class AppPriceSchedule_Relationships_BaseTerritory_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceSchedule_Relationships_BaseTerritory_Links::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_BaseTerritory_Links');

class AppPriceSchedule_Relationships_BaseTerritory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceSchedule_Relationships_BaseTerritory_Data::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_BaseTerritory_Data');

class AppPriceSchedule_Relationships_BaseTerritory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPriceSchedule_Relationships_BaseTerritory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPriceSchedule_Relationships_BaseTerritory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPriceSchedule_Relationships_BaseTerritory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPriceSchedule_Relationships_BaseTerritory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPriceSchedule_Relationships_BaseTerritory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceSchedule_Relationships_BaseTerritory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPriceSchedule_Relationships_BaseTerritory::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_BaseTerritory');

class AppPriceSchedule_Relationships_ManualPrices_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceSchedule_Relationships_ManualPrices_Links::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_ManualPrices_Links');

class AppPriceSchedule_Relationships_ManualPrices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPrices';
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
class_alias(AppPriceSchedule_Relationships_ManualPrices_Data::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_ManualPrices_Data');

class AppPriceSchedule_Relationships_ManualPrices extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPriceSchedule_Relationships_ManualPrices_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppPriceSchedule_Relationships_ManualPrices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppPriceSchedule_Relationships_ManualPrices_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPriceSchedule_Relationships_ManualPrices_Links
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
	* @return  AppPriceSchedule_Relationships_ManualPrices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceSchedule_Relationships_ManualPrices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPriceSchedule_Relationships_ManualPrices::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_ManualPrices');

class AppPriceSchedule_Relationships_AutomaticPrices_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPriceSchedule_Relationships_AutomaticPrices_Links::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_AutomaticPrices_Links');

class AppPriceSchedule_Relationships_AutomaticPrices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPrices';
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
class_alias(AppPriceSchedule_Relationships_AutomaticPrices_Data::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_AutomaticPrices_Data');

class AppPriceSchedule_Relationships_AutomaticPrices extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPriceSchedule_Relationships_AutomaticPrices_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppPriceSchedule_Relationships_AutomaticPrices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppPriceSchedule_Relationships_AutomaticPrices_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPriceSchedule_Relationships_AutomaticPrices_Links
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
	* @return  AppPriceSchedule_Relationships_AutomaticPrices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceSchedule_Relationships_AutomaticPrices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPriceSchedule_Relationships_AutomaticPrices::class, 'AppleService_AppStore_AppPriceSchedule_Relationships_AutomaticPrices');

class AppPriceSchedule_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppPriceSchedule_Relationships_App::class;
	protected $appDataType = 'object';
	protected $baseTerritoryType = AppPriceSchedule_Relationships_BaseTerritory::class;
	protected $baseTerritoryDataType = 'object';
	protected $manualPricesType = AppPriceSchedule_Relationships_ManualPrices::class;
	protected $manualPricesDataType = 'object';
	protected $automaticPricesType = AppPriceSchedule_Relationships_AutomaticPrices::class;
	protected $automaticPricesDataType = 'object';

	/**
	* @return  AppPriceSchedule_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppPriceSchedule_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppPriceSchedule_Relationships_BaseTerritory
	*/
	public function getBaseTerritory()
	{
		return $this->baseTerritory;
	}
	/**
	* @param  AppPriceSchedule_Relationships_BaseTerritory
	*/
	public function setBaseTerritory($baseTerritory)
	{
		$this->baseTerritory = $baseTerritory;
		return $this;
	}
	/**
	* @return  AppPriceSchedule_Relationships_ManualPrices
	*/
	public function getManualPrices()
	{
		return $this->manualPrices;
	}
	/**
	* @param  AppPriceSchedule_Relationships_ManualPrices
	*/
	public function setManualPrices($manualPrices)
	{
		$this->manualPrices = $manualPrices;
		return $this;
	}
	/**
	* @return  AppPriceSchedule_Relationships_AutomaticPrices
	*/
	public function getAutomaticPrices()
	{
		return $this->automaticPrices;
	}
	/**
	* @param  AppPriceSchedule_Relationships_AutomaticPrices
	*/
	public function setAutomaticPrices($automaticPrices)
	{
		$this->automaticPrices = $automaticPrices;
		return $this;
	}

}
class_alias(AppPriceSchedule_Relationships::class, 'AppleService_AppStore_AppPriceSchedule_Relationships');

class AppPriceSchedule extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPriceSchedules';
	public $id;
	protected $relationshipsType = AppPriceSchedule_Relationships::class;
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
	* @return  AppPriceSchedule_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPriceSchedule_Relationships
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
class_alias(AppPriceSchedule::class, 'AppleService_AppStore_AppPriceSchedule');

