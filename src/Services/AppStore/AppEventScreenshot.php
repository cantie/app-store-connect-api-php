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

class AppEventScreenshot_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	protected $imageAssetType = ImageAsset::class;
	protected $imageAssetDataType = '';
	public $assetToken;
	protected $uploadOperationsType = UploadOperation::class;
	protected $uploadOperationsDataType = 'array';
	protected $assetDeliveryStateType = AppMediaAssetState::class;
	protected $assetDeliveryStateDataType = '';
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
		return $this;
	}
	public function getAssetToken()
	{
		return $this->assetToken;
	}
	public function setAssetToken($assetToken)
	{
		$this->assetToken = $assetToken;
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
class_alias(AppEventScreenshot_Attributes::class, 'AppleService_AppStore_AppEventScreenshot_Attributes');

class AppEventScreenshot_Relationships_AppEventLocalization_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppEventScreenshot_Relationships_AppEventLocalization_Links::class, 'AppleService_AppStore_AppEventScreenshot_Relationships_AppEventLocalization_Links');

class AppEventScreenshot_Relationships_AppEventLocalization_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppEventScreenshot_Relationships_AppEventLocalization_Data::class, 'AppleService_AppStore_AppEventScreenshot_Relationships_AppEventLocalization_Data');

class AppEventScreenshot_Relationships_AppEventLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEventScreenshot_Relationships_AppEventLocalization_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppEventScreenshot_Relationships_AppEventLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventScreenshot_Relationships_AppEventLocalization_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEventScreenshot_Relationships_AppEventLocalization_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppEventScreenshot_Relationships_AppEventLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventScreenshot_Relationships_AppEventLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEventScreenshot_Relationships_AppEventLocalization::class, 'AppleService_AppStore_AppEventScreenshot_Relationships_AppEventLocalization');

class AppEventScreenshot_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEventLocalizationType = AppEventScreenshot_Relationships_AppEventLocalization::class;
	protected $appEventLocalizationDataType = 'object';

	/**
	* @return  AppEventScreenshot_Relationships_AppEventLocalization
	*/
	public function getAppEventLocalization()
	{
		return $this->appEventLocalization;
	}
	/**
	* @param  AppEventScreenshot_Relationships_AppEventLocalization
	*/
	public function setAppEventLocalization($appEventLocalization)
	{
		$this->appEventLocalization = $appEventLocalization;
		return $this;
	}

}
class_alias(AppEventScreenshot_Relationships::class, 'AppleService_AppStore_AppEventScreenshot_Relationships');

class AppEventScreenshot extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventScreenshots';
	public $id;
	protected $attributesType = AppEventScreenshot_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEventScreenshot_Relationships::class;
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
	* @return  AppEventScreenshot_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventScreenshot_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEventScreenshot_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEventScreenshot_Relationships
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
class_alias(AppEventScreenshot::class, 'AppleService_AppStore_AppEventScreenshot');

