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

class InAppPurchaseAppStoreReviewScreenshot_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $sourceFileChecksum;
	protected $imageAssetType = ImageAsset::class;
	protected $imageAssetDataType = '';
	public $assetToken;
	public $assetType;
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
	public function getAssetType()
	{
		return $this->assetType;
	}
	public function setAssetType($assetType)
	{
		$this->assetType = $assetType;
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
class_alias(InAppPurchaseAppStoreReviewScreenshot_Attributes::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Attributes');

class InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links');

class InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
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
class_alias(InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data');

class InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2');

class InAppPurchaseAppStoreReviewScreenshot_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $inAppPurchaseV2Type = InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2::class;
	protected $inAppPurchaseV2DataType = 'object';

	/**
	* @return  InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2
	*/
	public function getInAppPurchaseV2()
	{
		return $this->inAppPurchaseV2;
	}
	/**
	* @param  InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2
	*/
	public function setInAppPurchaseV2($inAppPurchaseV2)
	{
		$this->inAppPurchaseV2 = $inAppPurchaseV2;
		return $this;
	}

}
class_alias(InAppPurchaseAppStoreReviewScreenshot_Relationships::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Relationships');

class InAppPurchaseAppStoreReviewScreenshot extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseAppStoreReviewScreenshots';
	public $id;
	protected $attributesType = InAppPurchaseAppStoreReviewScreenshot_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchaseAppStoreReviewScreenshot_Relationships::class;
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
	* @return  InAppPurchaseAppStoreReviewScreenshot_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchaseAppStoreReviewScreenshot_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  InAppPurchaseAppStoreReviewScreenshot_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchaseAppStoreReviewScreenshot_Relationships
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
class_alias(InAppPurchaseAppStoreReviewScreenshot::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot');

