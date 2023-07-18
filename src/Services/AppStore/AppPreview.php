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

class AppPreview_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $sourceFileChecksum;
	public $previewFrameTimeCode;
	public $mimeType;
	public $videoUrl;
	protected $previewImageType = ImageAsset::class;
	protected $previewImageDataType = '';
	protected $uploadOperationsType = UploadOperation::class;
	protected $uploadOperationsDataType = 'array';
	protected $assetDeliveryStateType = AppMediaAssetState::class;
	protected $assetDeliveryStateDataType = '';

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
	public function getSourceFileChecksum()
	{
		return $this->sourceFileChecksum;
	}
	public function setSourceFileChecksum($sourceFileChecksum)
	{
		$this->sourceFileChecksum = $sourceFileChecksum;
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
	public function getMimeType()
	{
		return $this->mimeType;
	}
	public function setMimeType($mimeType)
	{
		$this->mimeType = $mimeType;
		return $this;
	}
	public function getVideoUrl()
	{
		return $this->videoUrl;
	}
	public function setVideoUrl($videoUrl)
	{
		$this->videoUrl = $videoUrl;
		return $this;
	}
	/**
	* @return  ImageAsset
	*/
	public function getPreviewImage()
	{
		return $this->previewImage;
	}
	/**
	* @param  ImageAsset
	*/
	public function setPreviewImage($previewImage)
	{
		$this->previewImage = $previewImage;
		return $this;
	}
	/**
	* @return  UploadOperation[]
	*/
	public function getUploadOperations()
	{
		return $this->uploadOperations;
	}
	/**
	* @param  UploadOperation[]
	*/
	public function setUploadOperations($uploadOperations)
	{
		$this->uploadOperations = $uploadOperations;
		return $this;
	}
	/**
	* @return  AppMediaAssetState
	*/
	public function getAssetDeliveryState()
	{
		return $this->assetDeliveryState;
	}
	/**
	* @param  AppMediaAssetState
	*/
	public function setAssetDeliveryState($assetDeliveryState)
	{
		$this->assetDeliveryState = $assetDeliveryState;
		return $this;
	}

}
class_alias(AppPreview_Attributes::class, 'AppleService_AppStore_AppPreview_Attributes');

class AppPreview_Relationships_AppPreviewSet_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}
class_alias(AppPreview_Relationships_AppPreviewSet_Links::class, 'AppleService_AppStore_AppPreview_Relationships_AppPreviewSet_Links');

class AppPreview_Relationships_AppPreviewSet_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppPreview_Relationships_AppPreviewSet_Data::class, 'AppleService_AppStore_AppPreview_Relationships_AppPreviewSet_Data');

class AppPreview_Relationships_AppPreviewSet extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPreview_Relationships_AppPreviewSet_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPreview_Relationships_AppPreviewSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreview_Relationships_AppPreviewSet_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPreview_Relationships_AppPreviewSet_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPreview_Relationships_AppPreviewSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreview_Relationships_AppPreviewSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppPreview_Relationships_AppPreviewSet::class, 'AppleService_AppStore_AppPreview_Relationships_AppPreviewSet');

class AppPreview_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appPreviewSetType = AppPreview_Relationships_AppPreviewSet::class;
	protected $appPreviewSetDataType = 'object';

	/**
	* @return  AppPreview_Relationships_AppPreviewSet
	*/
	public function getAppPreviewSet()
	{
		return $this->appPreviewSet;
	}
	/**
	* @param  AppPreview_Relationships_AppPreviewSet
	*/
	public function setAppPreviewSet($appPreviewSet)
	{
		$this->appPreviewSet = $appPreviewSet;
		return $this;
	}

}
class_alias(AppPreview_Relationships::class, 'AppleService_AppStore_AppPreview_Relationships');

class AppPreview extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreviews';
	public $id;
	protected $attributesType = AppPreview_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPreview_Relationships::class;
	protected $relationshipsDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

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
	* @return  AppPreview_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPreview_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppPreview_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPreview_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}
class_alias(AppPreview::class, 'AppleService_AppStore_AppPreview');

