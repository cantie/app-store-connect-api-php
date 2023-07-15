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

class AppStoreReviewAttachment_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;
	public $sourceFileChecksum;
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
class_alias(AppStoreReviewAttachment_Attributes::class, 'AppleService_AppStore_AppStoreReviewAttachment_Attributes');

class AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Links::class, 'AppleService_AppStore_AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Links');

class AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreReviewDetails';
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
class_alias(AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Data::class, 'AppleService_AppStore_AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Data');

class AppStoreReviewAttachment_Relationships_AppStoreReviewDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreReviewAttachment_Relationships_AppStoreReviewDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreReviewAttachment_Relationships_AppStoreReviewDetail::class, 'AppleService_AppStore_AppStoreReviewAttachment_Relationships_AppStoreReviewDetail');

class AppStoreReviewAttachment_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreReviewDetailType = AppStoreReviewAttachment_Relationships_AppStoreReviewDetail::class;
	protected $appStoreReviewDetailDataType = 'object';

	/**
	* @return  AppStoreReviewAttachment_Relationships_AppStoreReviewDetail
	*/
	public function getAppStoreReviewDetail()
	{
		return $this->appStoreReviewDetail;
	}
	/**
	* @param  AppStoreReviewAttachment_Relationships_AppStoreReviewDetail
	*/
	public function setAppStoreReviewDetail($appStoreReviewDetail)
	{
		$this->appStoreReviewDetail = $appStoreReviewDetail;
		return $appStoreReviewDetail;
	}

}
class_alias(AppStoreReviewAttachment_Relationships::class, 'AppleService_AppStore_AppStoreReviewAttachment_Relationships');

class AppStoreReviewAttachment extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreReviewAttachments';
	public $id;
	protected $attributesType = AppStoreReviewAttachment_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreReviewAttachment_Relationships::class;
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
	* @return  AppStoreReviewAttachment_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreReviewAttachment_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppStoreReviewAttachment_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreReviewAttachment_Relationships
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
class_alias(AppStoreReviewAttachment::class, 'AppleService_AppStore_AppStoreReviewAttachment');

