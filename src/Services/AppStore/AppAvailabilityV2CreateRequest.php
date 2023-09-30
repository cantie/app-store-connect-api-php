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

class AppAvailabilityV2CreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
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

class AppAvailabilityV2CreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppAvailabilityV2CreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppAvailabilityV2CreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppAvailabilityV2CreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territoryAvailabilities';
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

class AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppAvailabilityV2CreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppAvailabilityV2CreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $territoryAvailabilitiesType = AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities::class;
	protected $territoryAvailabilitiesDataType = 'object';

	/**
	* @return  AppAvailabilityV2CreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities
	*/
	public function getTerritoryAvailabilities()
	{
		return $this->territoryAvailabilities;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data_Relationships_TerritoryAvailabilities
	*/
	public function setTerritoryAvailabilities($territoryAvailabilities)
	{
		$this->territoryAvailabilities = $territoryAvailabilities;
		return $this;
	}

}

class AppAvailabilityV2CreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appAvailabilities';
	protected $attributesType = AppAvailabilityV2CreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppAvailabilityV2CreateRequest_Data_Relationships::class;
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
	* @return  AppAvailabilityV2CreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppAvailabilityV2CreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppAvailabilityV2CreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppAvailabilityV2CreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = TerritoryAvailabilityInlineCreate::class;
	protected $includedDataType = 'array';

	/**
	* @return  AppAvailabilityV2CreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppAvailabilityV2CreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  TerritoryAvailabilityInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  TerritoryAvailabilityInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}

}

