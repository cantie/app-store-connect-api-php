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

class AppEventScreenshotCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	protected $appEventAssetTypeType = AppEventAssetType::class;
	protected $appEventAssetTypeDataType = '';

	public function getFileSize()
	{
		return $this->fileSize;
	}
	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		return $fileSize;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $fileName;
	}
	/**
	* @return  AppEventAssetType
	*/
	public function getAppEventAssetType()
	{
		return $this->appEventAssetType;
	}
	/**
	* @param  AppEventAssetType
	*/
	public function setAppEventAssetType($appEventAssetType)
	{
		$this->appEventAssetType = $appEventAssetType;
		return $appEventAssetType;
	}

}
class_alias(AppEventScreenshotCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppEventScreenshotCreateRequest_Data_Attributes');

class AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventLocalizations';
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
class_alias(AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization_Data::class, 'AppleService_AppStore_AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization_Data');

class AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization::class, 'AppleService_AppStore_AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization');

class AppEventScreenshotCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEventLocalizationType = AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization::class;
	protected $appEventLocalizationDataType = 'object';

	/**
	* @return  AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization
	*/
	public function getAppEventLocalization()
	{
		return $this->appEventLocalization;
	}
	/**
	* @param  AppEventScreenshotCreateRequest_Data_Relationships_AppEventLocalization
	*/
	public function setAppEventLocalization($appEventLocalization)
	{
		$this->appEventLocalization = $appEventLocalization;
		return $appEventLocalization;
	}

}
class_alias(AppEventScreenshotCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppEventScreenshotCreateRequest_Data_Relationships');

class AppEventScreenshotCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventScreenshots';
	protected $attributesType = AppEventScreenshotCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEventScreenshotCreateRequest_Data_Relationships::class;
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
	* @return  AppEventScreenshotCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventScreenshotCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppEventScreenshotCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEventScreenshotCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppEventScreenshotCreateRequest_Data::class, 'AppleService_AppStore_AppEventScreenshotCreateRequest_Data');

class AppEventScreenshotCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventScreenshotCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventScreenshotCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventScreenshotCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppEventScreenshotCreateRequest::class, 'AppleService_AppStore_AppEventScreenshotCreateRequest');

