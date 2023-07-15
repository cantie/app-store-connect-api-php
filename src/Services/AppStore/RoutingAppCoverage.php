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

class RoutingAppCoverage_Attributes extends \Cantie\AppStoreConnect\Model
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
class_alias(RoutingAppCoverage_Attributes::class, 'AppleService_AppStore_RoutingAppCoverage_Attributes');

class RoutingAppCoverage_Relationships_AppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(RoutingAppCoverage_Relationships_AppStoreVersion_Links::class, 'AppleService_AppStore_RoutingAppCoverage_Relationships_AppStoreVersion_Links');

class RoutingAppCoverage_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(RoutingAppCoverage_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_RoutingAppCoverage_Relationships_AppStoreVersion_Data');

class RoutingAppCoverage_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = RoutingAppCoverage_Relationships_AppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = RoutingAppCoverage_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  RoutingAppCoverage_Relationships_AppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  RoutingAppCoverage_Relationships_AppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  RoutingAppCoverage_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  RoutingAppCoverage_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(RoutingAppCoverage_Relationships_AppStoreVersion::class, 'AppleService_AppStore_RoutingAppCoverage_Relationships_AppStoreVersion');

class RoutingAppCoverage_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = RoutingAppCoverage_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';

	/**
	* @return  RoutingAppCoverage_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  RoutingAppCoverage_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $appStoreVersion;
	}

}
class_alias(RoutingAppCoverage_Relationships::class, 'AppleService_AppStore_RoutingAppCoverage_Relationships');

class RoutingAppCoverage extends \Cantie\AppStoreConnect\Model
{
	public $type = 'routingAppCoverages';
	public $id;
	protected $attributesType = RoutingAppCoverage_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = RoutingAppCoverage_Relationships::class;
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
	* @return  RoutingAppCoverage_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  RoutingAppCoverage_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  RoutingAppCoverage_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  RoutingAppCoverage_Relationships
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
class_alias(RoutingAppCoverage::class, 'AppleService_AppStore_RoutingAppCoverage');

