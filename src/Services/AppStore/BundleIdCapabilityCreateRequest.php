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

class BundleIdCapabilityCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $capabilityTypeType = CapabilityType::class;
	protected $capabilityTypeDataType = '';
	protected $settingsType = CapabilitySetting::class;
	protected $settingsDataType = 'array';

	/**
	* @return  CapabilityType
	*/
	public function getCapabilityType()
	{
		return $this->capabilityType;
	}
	/**
	* @param  CapabilityType
	*/
	public function setCapabilityType($capabilityType)
	{
		$this->capabilityType = $capabilityType;
		return $capabilityType;
	}
	/**
	* @return  CapabilitySetting[]
	*/
	public function getSettings()
	{
		return $this->settings;
	}
	/**
	* @param  CapabilitySetting[]
	*/
	public function setSettings($settings)
	{
		$this->settings = $settings;
		return $settings;
	}

}
class_alias(BundleIdCapabilityCreateRequest_Data_Attributes::class, 'AppleService_AppStore_BundleIdCapabilityCreateRequest_Data_Attributes');

class BundleIdCapabilityCreateRequest_Data_Relationships_BundleId_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIds';
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
class_alias(BundleIdCapabilityCreateRequest_Data_Relationships_BundleId_Data::class, 'AppleService_AppStore_BundleIdCapabilityCreateRequest_Data_Relationships_BundleId_Data');

class BundleIdCapabilityCreateRequest_Data_Relationships_BundleId extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BundleIdCapabilityCreateRequest_Data_Relationships_BundleId_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BundleIdCapabilityCreateRequest_Data_Relationships_BundleId_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BundleIdCapabilityCreateRequest_Data_Relationships_BundleId_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BundleIdCapabilityCreateRequest_Data_Relationships_BundleId::class, 'AppleService_AppStore_BundleIdCapabilityCreateRequest_Data_Relationships_BundleId');

class BundleIdCapabilityCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $bundleIdType = BundleIdCapabilityCreateRequest_Data_Relationships_BundleId::class;
	protected $bundleIdDataType = 'object';

	/**
	* @return  BundleIdCapabilityCreateRequest_Data_Relationships_BundleId
	*/
	public function getBundleId()
	{
		return $this->bundleId;
	}
	/**
	* @param  BundleIdCapabilityCreateRequest_Data_Relationships_BundleId
	*/
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $bundleId;
	}

}
class_alias(BundleIdCapabilityCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BundleIdCapabilityCreateRequest_Data_Relationships');

class BundleIdCapabilityCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIdCapabilities';
	protected $attributesType = BundleIdCapabilityCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BundleIdCapabilityCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

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
	* @return  BundleIdCapabilityCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BundleIdCapabilityCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BundleIdCapabilityCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BundleIdCapabilityCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(BundleIdCapabilityCreateRequest_Data::class, 'AppleService_AppStore_BundleIdCapabilityCreateRequest_Data');

class BundleIdCapabilityCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BundleIdCapabilityCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BundleIdCapabilityCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BundleIdCapabilityCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BundleIdCapabilityCreateRequest::class, 'AppleService_AppStore_BundleIdCapabilityCreateRequest');

