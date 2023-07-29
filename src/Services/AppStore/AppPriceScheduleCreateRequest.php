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

class AppPriceScheduleCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppPriceScheduleCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPriceScheduleCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPriceScheduleCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data extends \Cantie\AppStoreConnect\Model
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

class AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data extends \Cantie\AppStoreConnect\Model
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

class AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPriceScheduleCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppPriceScheduleCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $baseTerritoryType = AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory::class;
	protected $baseTerritoryDataType = 'object';
	protected $manualPricesType = AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices::class;
	protected $manualPricesDataType = 'object';

	/**
	* @return  AppPriceScheduleCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory
	*/
	public function getBaseTerritory()
	{
		return $this->baseTerritory;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships_BaseTerritory
	*/
	public function setBaseTerritory($baseTerritory)
	{
		$this->baseTerritory = $baseTerritory;
		return $this;
	}
	/**
	* @return  AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices
	*/
	public function getManualPrices()
	{
		return $this->manualPrices;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships_ManualPrices
	*/
	public function setManualPrices($manualPrices)
	{
		$this->manualPrices = $manualPrices;
		return $this;
	}

}

class AppPriceScheduleCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPriceSchedules';
	protected $relationshipsType = AppPriceScheduleCreateRequest_Data_Relationships::class;
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
	* @return  AppPriceScheduleCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppPriceScheduleCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPriceScheduleCreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = [AppPriceV2InlineCreate::class, TerritoryInlineCreate::class];
	protected $includedDataType = 'array[*]';

	/**
	* @return  AppPriceScheduleCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPriceScheduleCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	public function getIncluded()
	{
		return $this->included;
	}
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}

}

