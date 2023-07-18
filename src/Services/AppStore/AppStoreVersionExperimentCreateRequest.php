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

class AppStoreVersionExperimentCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $trafficProportion;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getTrafficProportion()
	{
		return $this->trafficProportion;
	}
	public function setTrafficProportion($trafficProportion)
	{
		$this->trafficProportion = $trafficProportion;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppStoreVersionExperimentCreateRequest_Data_Attributes');

class AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion_Data');

class AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion');

class AppStoreVersionExperimentCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  AppStoreVersionExperimentCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppStoreVersionExperimentCreateRequest_Data_Relationships');

class AppStoreVersionExperimentCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
	protected $attributesType = AppStoreVersionExperimentCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionExperimentCreateRequest_Data_Relationships::class;
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
	* @return  AppStoreVersionExperimentCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionExperimentCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionExperimentCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentCreateRequest_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentCreateRequest_Data');

class AppStoreVersionExperimentCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionExperimentCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentCreateRequest::class, 'AppleService_AppStore_AppStoreVersionExperimentCreateRequest');

