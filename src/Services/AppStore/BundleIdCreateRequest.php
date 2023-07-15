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

class BundleIdCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $platformType = BundleIdPlatform::class;
	protected $platformDataType = '';
	public $identifier;
	public $seedId;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $name;
	}
	/**
	* @return  BundleIdPlatform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  BundleIdPlatform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
	}
	public function getIdentifier()
	{
		return $this->identifier;
	}
	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		return $identifier;
	}
	public function getSeedId()
	{
		return $this->seedId;
	}
	public function setSeedId($seedId)
	{
		$this->seedId = $seedId;
		return $seedId;
	}

}
class_alias(BundleIdCreateRequest_Data_Attributes::class, 'AppleService_AppStore_BundleIdCreateRequest_Data_Attributes');

class BundleIdCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIds';
	protected $attributesType = BundleIdCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	/**
	* @return  BundleIdCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BundleIdCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}

}
class_alias(BundleIdCreateRequest_Data::class, 'AppleService_AppStore_BundleIdCreateRequest_Data');

class BundleIdCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BundleIdCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BundleIdCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BundleIdCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BundleIdCreateRequest::class, 'AppleService_AppStore_BundleIdCreateRequest');
