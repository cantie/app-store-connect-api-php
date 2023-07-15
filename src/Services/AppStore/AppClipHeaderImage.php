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

class AppClipHeaderImage_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $sourceFileChecksum;
	protected $imageAssetType = ImageAsset::class;
	protected $imageAssetDataType = '';
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
	public function getSourceFileChecksum()
	{
		return $this->sourceFileChecksum;
	}
	public function setSourceFileChecksum($sourceFileChecksum)
	{
		$this->sourceFileChecksum = $sourceFileChecksum;
		return $sourceFileChecksum;
	}
	/**
	* @return  ImageAsset
	*/
	public function getImageAsset()
	{
		return $this->imageAsset;
	}
	/**
	* @param  ImageAsset
	*/
	public function setImageAsset($imageAsset)
	{
		$this->imageAsset = $imageAsset;
		return $imageAsset;
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
		return $uploadOperations;
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
		return $assetDeliveryState;
	}

}
class_alias(AppClipHeaderImage_Attributes::class, 'AppleService_AppStore_AppClipHeaderImage_Attributes');

class AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Links::class, 'AppleService_AppStore_AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Links');

class AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperienceLocalizations';
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
class_alias(AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Data::class, 'AppleService_AppStore_AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Data');

class AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization::class, 'AppleService_AppStore_AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization');

class AppClipHeaderImage_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipDefaultExperienceLocalizationType = AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization::class;
	protected $appClipDefaultExperienceLocalizationDataType = 'object';

	/**
	* @return  AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization
	*/
	public function getAppClipDefaultExperienceLocalization()
	{
		return $this->appClipDefaultExperienceLocalization;
	}
	/**
	* @param  AppClipHeaderImage_Relationships_AppClipDefaultExperienceLocalization
	*/
	public function setAppClipDefaultExperienceLocalization($appClipDefaultExperienceLocalization)
	{
		$this->appClipDefaultExperienceLocalization = $appClipDefaultExperienceLocalization;
		return $appClipDefaultExperienceLocalization;
	}

}
class_alias(AppClipHeaderImage_Relationships::class, 'AppleService_AppStore_AppClipHeaderImage_Relationships');

class AppClipHeaderImage extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipHeaderImages';
	public $id;
	protected $attributesType = AppClipHeaderImage_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipHeaderImage_Relationships::class;
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
	/**
	* @return  AppClipHeaderImage_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipHeaderImage_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppClipHeaderImage_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipHeaderImage_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
		return $links;
	}

}
class_alias(AppClipHeaderImage::class, 'AppleService_AppStore_AppClipHeaderImage');

