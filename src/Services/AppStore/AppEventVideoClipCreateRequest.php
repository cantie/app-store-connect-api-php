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

class AppEventVideoClipCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $previewFrameTimeCode;
	public $appEventAssetType; // 

	public function getFileSize()
	{
		return $this->fileSize;
	}
	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		return $this;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $this;
	}
	public function getPreviewFrameTimeCode()
	{
		return $this->previewFrameTimeCode;
	}
	public function setPreviewFrameTimeCode($previewFrameTimeCode)
	{
		$this->previewFrameTimeCode = $previewFrameTimeCode;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getAppEventAssetType()
	{
		return $this->appEventAssetType;
	}
	/**
	* @param  string
	*/
	public function setAppEventAssetType($appEventAssetType)
	{
		$this->appEventAssetType = $appEventAssetType;
		return $this;
	}

}
class_alias(AppEventVideoClipCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppEventVideoClipCreateRequest_Data_Attributes');

class AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization_Data::class, 'AppleService_AppStore_AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization_Data');

class AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization::class, 'AppleService_AppStore_AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization');

class AppEventVideoClipCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEventLocalizationType = AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization::class;
	protected $appEventLocalizationDataType = 'object';

	/**
	* @return  AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization
	*/
	public function getAppEventLocalization()
	{
		return $this->appEventLocalization;
	}
	/**
	* @param  AppEventVideoClipCreateRequest_Data_Relationships_AppEventLocalization
	*/
	public function setAppEventLocalization($appEventLocalization)
	{
		$this->appEventLocalization = $appEventLocalization;
		return $this;
	}

}
class_alias(AppEventVideoClipCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppEventVideoClipCreateRequest_Data_Relationships');

class AppEventVideoClipCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventVideoClips';
	protected $attributesType = AppEventVideoClipCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEventVideoClipCreateRequest_Data_Relationships::class;
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
	* @return  AppEventVideoClipCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventVideoClipCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEventVideoClipCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEventVideoClipCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppEventVideoClipCreateRequest_Data::class, 'AppleService_AppStore_AppEventVideoClipCreateRequest_Data');

class AppEventVideoClipCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventVideoClipCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventVideoClipCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventVideoClipCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEventVideoClipCreateRequest::class, 'AppleService_AppStore_AppEventVideoClipCreateRequest');

