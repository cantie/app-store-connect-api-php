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
	public $platform; // 
	public $versionString;
	public $copyright;
	public $reviewType; // APP_STORE, NOTARIZATION
	public $releaseType; // MANUAL, AFTER_APPROVAL, SCHEDULED
	public $earliestReleaseDate;

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
	public function getVersionString()
	{
		return $this->versionString;
	}
	public function setVersionString($versionString)
	{
		$this->versionString = $versionString;
		return $this;
	}
	public function getCopyright()
	{
		return $this->copyright;
	}
	public function setCopyright($copyright)
	{
		$this->copyright = $copyright;
		return $this;
	}
	public function getReviewType()
	{
		return $this->reviewType;
	}
	public function setReviewType($reviewType)
	{
		$this->reviewType = $reviewType;
		return $this;
	}
	public function getReleaseType()
	{
		return $this->releaseType;
	}
	public function setReleaseType($releaseType)
	{
		$this->releaseType = $releaseType;
		return $this;
	}
	public function getEarliestReleaseDate()
	{
		return $this->earliestReleaseDate;
	}
	public function setEarliestReleaseDate($earliestReleaseDate)
	{
		$this->earliestReleaseDate = $earliestReleaseDate;
		return $this;
	}

}

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
		return $this;
	}

}

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
		return $this;
	}

}

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
		return $this;
	}

}

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
		return $this;
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
		return $this;
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
		return $this;
	}

}

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
		return $this;
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
		return $this;
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
		return $this;
	}

}

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
		return $this;
	}

}

