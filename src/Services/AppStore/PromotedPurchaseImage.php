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

class PromotedPurchaseImage_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $sourceFileChecksum;
	public $assetToken;
	protected $imageAssetType = ImageAsset::class;
	protected $imageAssetDataType = '';
	public $assetType;
	protected $uploadOperationsType = UploadOperation::class;
	protected $uploadOperationsDataType = 'array';
	public $state; // AWAITING_UPLOAD, UPLOAD_COMPLETE, FAILED, PREPARE_FOR_SUBMISSION, WAITING_FOR_REVIEW, APPROVED, REJECTED

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
	public function getAssetToken()
	{
		return $this->assetToken;
	}
	public function setAssetToken($assetToken)
	{
		$this->assetToken = $assetToken;
		return $assetToken;
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
	public function getAssetType()
	{
		return $this->assetType;
	}
	public function setAssetType($assetType)
	{
		$this->assetType = $assetType;
		return $assetType;
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
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $state;
	}

}
class_alias(PromotedPurchaseImage_Attributes::class, 'AppleService_AppStore_PromotedPurchaseImage_Attributes');

class PromotedPurchaseImage_Relationships_PromotedPurchase_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(PromotedPurchaseImage_Relationships_PromotedPurchase_Links::class, 'AppleService_AppStore_PromotedPurchaseImage_Relationships_PromotedPurchase_Links');

class PromotedPurchaseImage_Relationships_PromotedPurchase_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchases';
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
class_alias(PromotedPurchaseImage_Relationships_PromotedPurchase_Data::class, 'AppleService_AppStore_PromotedPurchaseImage_Relationships_PromotedPurchase_Data');

class PromotedPurchaseImage_Relationships_PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = PromotedPurchaseImage_Relationships_PromotedPurchase_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = PromotedPurchaseImage_Relationships_PromotedPurchase_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseImage_Relationships_PromotedPurchase_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PromotedPurchaseImage_Relationships_PromotedPurchase_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PromotedPurchaseImage_Relationships_PromotedPurchase_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseImage_Relationships_PromotedPurchase_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseImage_Relationships_PromotedPurchase::class, 'AppleService_AppStore_PromotedPurchaseImage_Relationships_PromotedPurchase');

class PromotedPurchaseImage_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $promotedPurchaseType = PromotedPurchaseImage_Relationships_PromotedPurchase::class;
	protected $promotedPurchaseDataType = 'object';

	/**
	* @return  PromotedPurchaseImage_Relationships_PromotedPurchase
	*/
	public function getPromotedPurchase()
	{
		return $this->promotedPurchase;
	}
	/**
	* @param  PromotedPurchaseImage_Relationships_PromotedPurchase
	*/
	public function setPromotedPurchase($promotedPurchase)
	{
		$this->promotedPurchase = $promotedPurchase;
		return $promotedPurchase;
	}

}
class_alias(PromotedPurchaseImage_Relationships::class, 'AppleService_AppStore_PromotedPurchaseImage_Relationships');

class PromotedPurchaseImage extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchaseImages';
	public $id;
	protected $attributesType = PromotedPurchaseImage_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = PromotedPurchaseImage_Relationships::class;
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
	* @return  PromotedPurchaseImage_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  PromotedPurchaseImage_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  PromotedPurchaseImage_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  PromotedPurchaseImage_Relationships
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
class_alias(PromotedPurchaseImage::class, 'AppleService_AppStore_PromotedPurchaseImage');

