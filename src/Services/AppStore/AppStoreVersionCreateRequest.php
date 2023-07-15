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

class AppStoreVersionCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $platformType = Platform::class;
	protected $platformDataType = '';
	public $versionString;
	public $copyright;
	public $releaseType; // MANUAL, AFTER_APPROVAL, SCHEDULED
	public $earliestReleaseDate;

	/**
	* @return  Platform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  Platform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
	}
	public function getVersionString()
	{
		return $this->versionString;
	}
	public function setVersionString($versionString)
	{
		$this->versionString = $versionString;
		return $versionString;
	}
	public function getCopyright()
	{
		return $this->copyright;
	}
	public function setCopyright($copyright)
	{
		$this->copyright = $copyright;
		return $copyright;
	}
	public function getReleaseType()
	{
		return $this->releaseType;
	}
	public function setReleaseType($releaseType)
	{
		$this->releaseType = $releaseType;
		return $releaseType;
	}
	public function getEarliestReleaseDate()
	{
		return $this->earliestReleaseDate;
	}
	public function setEarliestReleaseDate($earliestReleaseDate)
	{
		$this->earliestReleaseDate = $earliestReleaseDate;
		return $earliestReleaseDate;
	}

}
class_alias(AppStoreVersionCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Attributes');

class AppStoreVersionCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships_App_Data');

class AppStoreVersionCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships_App');

class AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionLocalizations';
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
class_alias(AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations_Data::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations_Data');

class AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations');

class AppStoreVersionCreateRequest_Data_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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
class_alias(AppStoreVersionCreateRequest_Data_Relationships_Build_Data::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships_Build_Data');

class AppStoreVersionCreateRequest_Data_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionCreateRequest_Data_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionCreateRequest_Data_Relationships_Build::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships_Build');

class AppStoreVersionCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppStoreVersionCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $appStoreVersionLocalizationsType = AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations::class;
	protected $appStoreVersionLocalizationsDataType = 'object';
	protected $buildType = AppStoreVersionCreateRequest_Data_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations
	*/
	public function getAppStoreVersionLocalizations()
	{
		return $this->appStoreVersionLocalizations;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships_AppStoreVersionLocalizations
	*/
	public function setAppStoreVersionLocalizations($appStoreVersionLocalizations)
	{
		$this->appStoreVersionLocalizations = $appStoreVersionLocalizations;
		return $appStoreVersionLocalizations;
	}
	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $build;
	}

}
class_alias(AppStoreVersionCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data_Relationships');

class AppStoreVersionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
	protected $attributesType = AppStoreVersionCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionCreateRequest_Data_Relationships::class;
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
	* @return  AppStoreVersionCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppStoreVersionCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppStoreVersionCreateRequest_Data::class, 'AppleService_AppStore_AppStoreVersionCreateRequest_Data');

class AppStoreVersionCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionCreateRequest::class, 'AppleService_AppStore_AppStoreVersionCreateRequest');

