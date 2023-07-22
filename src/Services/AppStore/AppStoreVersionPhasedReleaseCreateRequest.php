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

class AppStoreVersionPhasedReleaseCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $phasedReleaseState; // 

	/**
	* @return  string
	*/
	public function getPhasedReleaseState()
	{
		return $this->phasedReleaseState;
	}
	/**
	* @param  string
	*/
	public function setPhasedReleaseState($phasedReleaseState)
	{
		$this->phasedReleaseState = $phasedReleaseState;
		return $this;
	}

}
class_alias(AppStoreVersionPhasedReleaseCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppStoreVersionPhasedReleaseCreateRequest_Data_Attributes');

class AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion_Data');

class AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion');

class AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';

	/**
	* @return  AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $this;
	}

}
class_alias(AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships');

class AppStoreVersionPhasedReleaseCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionPhasedReleases';
	protected $attributesType = AppStoreVersionPhasedReleaseCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships::class;
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
	* @return  AppStoreVersionPhasedReleaseCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionPhasedReleaseCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionPhasedReleaseCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppStoreVersionPhasedReleaseCreateRequest_Data::class, 'AppleService_AppStore_AppStoreVersionPhasedReleaseCreateRequest_Data');

class AppStoreVersionPhasedReleaseCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionPhasedReleaseCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionPhasedReleaseCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionPhasedReleaseCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionPhasedReleaseCreateRequest::class, 'AppleService_AppStore_AppStoreVersionPhasedReleaseCreateRequest');

