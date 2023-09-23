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

class TerritoryAvailabilityUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $available;
	public $releaseDate;
	public $preOrderEnabled;

	public function getAvailable()
	{
		return $this->available;
	}
	public function setAvailable($available)
	{
		$this->available = $available;
		return $this;
	}
	public function getReleaseDate()
	{
		return $this->releaseDate;
	}
	public function setReleaseDate($releaseDate)
	{
		$this->releaseDate = $releaseDate;
		return $this;
	}
	public function getPreOrderEnabled()
	{
		return $this->preOrderEnabled;
	}
	public function setPreOrderEnabled($preOrderEnabled)
	{
		$this->preOrderEnabled = $preOrderEnabled;
		return $this;
	}

}

class TerritoryAvailabilityUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territoryAvailabilities';
	public $id;
	protected $attributesType = TerritoryAvailabilityUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

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
	* @return  TerritoryAvailabilityUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  TerritoryAvailabilityUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}

class TerritoryAvailabilityUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = TerritoryAvailabilityUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  TerritoryAvailabilityUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  TerritoryAvailabilityUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

