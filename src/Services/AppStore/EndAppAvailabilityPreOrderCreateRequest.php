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

class EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities_Data extends \Cantie\AppStoreConnect\Model
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

class EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class EndAppAvailabilityPreOrderCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $territoryAvailabilitiesType = EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities::class;
	protected $territoryAvailabilitiesDataType = 'object';

	/**
	* @return  EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities
	*/
	public function getTerritoryAvailabilities()
	{
		return $this->territoryAvailabilities;
	}
	/**
	* @param  EndAppAvailabilityPreOrderCreateRequest_Data_Relationships_TerritoryAvailabilities
	*/
	public function setTerritoryAvailabilities($territoryAvailabilities)
	{
		$this->territoryAvailabilities = $territoryAvailabilities;
		return $this;
	}

}

class EndAppAvailabilityPreOrderCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'endAppAvailabilityPreOrders';
	protected $relationshipsType = EndAppAvailabilityPreOrderCreateRequest_Data_Relationships::class;
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
	* @return  EndAppAvailabilityPreOrderCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  EndAppAvailabilityPreOrderCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class EndAppAvailabilityPreOrderCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndAppAvailabilityPreOrderCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  EndAppAvailabilityPreOrderCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndAppAvailabilityPreOrderCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

