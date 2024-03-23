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

class AppStoreVersionUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $versionString;
	public $copyright;
	public $reviewType; // APP_STORE, NOTARIZATION
	public $releaseType; // MANUAL, AFTER_APPROVAL, SCHEDULED
	public $earliestReleaseDate;
	public $downloadable;

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
	public function getDownloadable()
	{
		return $this->downloadable;
	}
	public function setDownloadable($downloadable)
	{
		$this->downloadable = $downloadable;
		return $this;
	}

}

class AppStoreVersionUpdateRequest_Data_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
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

class AppStoreVersionUpdateRequest_Data_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionUpdateRequest_Data_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionUpdateRequest_Data_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
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

class AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = AppStoreVersionUpdateRequest_Data_Relationships_Build::class;
	protected $buildDataType = 'object';
	protected $appClipDefaultExperienceType = AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience::class;
	protected $appClipDefaultExperienceDataType = 'object';

	/**
	* @return  AppStoreVersionUpdateRequest_Data_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $this;
	}
	/**
	* @return  AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience
	*/
	public function getAppClipDefaultExperience()
	{
		return $this->appClipDefaultExperience;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data_Relationships_AppClipDefaultExperience
	*/
	public function setAppClipDefaultExperience($appClipDefaultExperience)
	{
		$this->appClipDefaultExperience = $appClipDefaultExperience;
		return $this;
	}

}

class AppStoreVersionUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
	public $id;
	protected $attributesType = AppStoreVersionUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionUpdateRequest_Data_Relationships::class;
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
	* @return  AppStoreVersionUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppStoreVersionUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

