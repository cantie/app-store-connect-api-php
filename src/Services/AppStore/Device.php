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

class Device_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $platform; // 
	public $udid;
	public $deviceClass; // APPLE_WATCH, IPAD, IPHONE, IPOD, APPLE_TV, MAC
	public $status; // ENABLED, DISABLED
	public $model;
	public $addedDate;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  string
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $this;
	}
	public function getUdid()
	{
		return $this->udid;
	}
	public function setUdid($udid)
	{
		$this->udid = $udid;
		return $this;
	}
	public function getDeviceClass()
	{
		return $this->deviceClass;
	}
	public function setDeviceClass($deviceClass)
	{
		$this->deviceClass = $deviceClass;
		return $this;
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}
	public function getModel()
	{
		return $this->model;
	}
	public function setModel($model)
	{
		$this->model = $model;
		return $this;
	}
	public function getAddedDate()
	{
		return $this->addedDate;
	}
	public function setAddedDate($addedDate)
	{
		$this->addedDate = $addedDate;
		return $this;
	}

}

class Device extends \Cantie\AppStoreConnect\Model
{
	public $type = 'devices';
	public $id;
	protected $attributesType = Device_Attributes::class;
	protected $attributesDataType = 'object';
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
	* @return  Device_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  Device_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
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

