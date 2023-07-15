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

class AppPreviewCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $previewFrameTimeCode;
	public $mimeType;

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
	public function getPreviewFrameTimeCode()
	{
		return $this->previewFrameTimeCode;
	}
	public function setPreviewFrameTimeCode($previewFrameTimeCode)
	{
		$this->previewFrameTimeCode = $previewFrameTimeCode;
		return $previewFrameTimeCode;
	}
	public function getMimeType()
	{
		return $this->mimeType;
	}
	public function setMimeType($mimeType)
	{
		$this->mimeType = $mimeType;
		return $mimeType;
	}

}
class_alias(AppPreviewCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppPreviewCreateRequest_Data_Attributes');

class AppPreviewCreateRequest_Data_Relationships_AppPreviewSet_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreviewSets';
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
class_alias(AppPreviewCreateRequest_Data_Relationships_AppPreviewSet_Data::class, 'AppleService_AppStore_AppPreviewCreateRequest_Data_Relationships_AppPreviewSet_Data');

class AppPreviewCreateRequest_Data_Relationships_AppPreviewSet extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPreviewCreateRequest_Data_Relationships_AppPreviewSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreviewCreateRequest_Data_Relationships_AppPreviewSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreviewCreateRequest_Data_Relationships_AppPreviewSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPreviewCreateRequest_Data_Relationships_AppPreviewSet::class, 'AppleService_AppStore_AppPreviewCreateRequest_Data_Relationships_AppPreviewSet');

class AppPreviewCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appPreviewSetType = AppPreviewCreateRequest_Data_Relationships_AppPreviewSet::class;
	protected $appPreviewSetDataType = 'object';

	/**
	* @return  AppPreviewCreateRequest_Data_Relationships_AppPreviewSet
	*/
	public function getAppPreviewSet()
	{
		return $this->appPreviewSet;
	}
	/**
	* @param  AppPreviewCreateRequest_Data_Relationships_AppPreviewSet
	*/
	public function setAppPreviewSet($appPreviewSet)
	{
		$this->appPreviewSet = $appPreviewSet;
		return $appPreviewSet;
	}

}
class_alias(AppPreviewCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppPreviewCreateRequest_Data_Relationships');

class AppPreviewCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreviews';
	protected $attributesType = AppPreviewCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPreviewCreateRequest_Data_Relationships::class;
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
	* @return  AppPreviewCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPreviewCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppPreviewCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPreviewCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppPreviewCreateRequest_Data::class, 'AppleService_AppStore_AppPreviewCreateRequest_Data');

class AppPreviewCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPreviewCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreviewCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreviewCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPreviewCreateRequest::class, 'AppleService_AppStore_AppPreviewCreateRequest');

