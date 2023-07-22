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

class AppScreenshotSetCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $screenshotDisplayType; // 

	/**
	* @return  string
	*/
	public function getScreenshotDisplayType()
	{
		return $this->screenshotDisplayType;
	}
	/**
	* @param  string
	*/
	public function setScreenshotDisplayType($screenshotDisplayType)
	{
		$this->screenshotDisplayType = $screenshotDisplayType;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Attributes');

class AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization_Data::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization_Data');

class AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization');

class AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageLocalizations';
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
class_alias(AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization_Data::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization_Data');

class AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization');

class AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatmentLocalizations';
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
class_alias(AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data');

class AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization');

class AppScreenshotSetCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionLocalizationType = AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization::class;
	protected $appStoreVersionLocalizationDataType = 'object';
	protected $appCustomProductPageLocalizationType = AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization::class;
	protected $appCustomProductPageLocalizationDataType = 'object';
	protected $appStoreVersionExperimentTreatmentLocalizationType = AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization::class;
	protected $appStoreVersionExperimentTreatmentLocalizationDataType = 'object';

	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization
	*/
	public function getAppStoreVersionLocalization()
	{
		return $this->appStoreVersionLocalization;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionLocalization
	*/
	public function setAppStoreVersionLocalization($appStoreVersionLocalization)
	{
		$this->appStoreVersionLocalization = $appStoreVersionLocalization;
		return $this;
	}
	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization
	*/
	public function getAppCustomProductPageLocalization()
	{
		return $this->appCustomProductPageLocalization;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships_AppCustomProductPageLocalization
	*/
	public function setAppCustomProductPageLocalization($appCustomProductPageLocalization)
	{
		$this->appCustomProductPageLocalization = $appCustomProductPageLocalization;
		return $this;
	}
	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization
	*/
	public function getAppStoreVersionExperimentTreatmentLocalization()
	{
		return $this->appStoreVersionExperimentTreatmentLocalization;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships_AppStoreVersionExperimentTreatmentLocalization
	*/
	public function setAppStoreVersionExperimentTreatmentLocalization($appStoreVersionExperimentTreatmentLocalization)
	{
		$this->appStoreVersionExperimentTreatmentLocalization = $appStoreVersionExperimentTreatmentLocalization;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data_Relationships');

class AppScreenshotSetCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appScreenshotSets';
	protected $attributesType = AppScreenshotSetCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppScreenshotSetCreateRequest_Data_Relationships::class;
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
	* @return  AppScreenshotSetCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppScreenshotSetCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest_Data::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest_Data');

class AppScreenshotSetCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppScreenshotSetCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppScreenshotSetCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppScreenshotSetCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppScreenshotSetCreateRequest::class, 'AppleService_AppStore_AppScreenshotSetCreateRequest');

