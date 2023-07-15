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

class InAppPurchase_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $productId;
	public $inAppPurchaseType; // AUTOMATICALLY_RENEWABLE_SUBSCRIPTION, NON_CONSUMABLE, CONSUMABLE, NON_RENEWING_SUBSCRIPTION, FREE_SUBSCRIPTION
	public $state; // CREATED, DEVELOPER_SIGNED_OFF, DEVELOPER_ACTION_NEEDED, DELETION_IN_PROGRESS, APPROVED, DELETED, REMOVED_FROM_SALE, DEVELOPER_REMOVED_FROM_SALE, WAITING_FOR_UPLOAD, PROCESSING_CONTENT, REPLACED, REJECTED, WAITING_FOR_SCREENSHOT, PREPARE_FOR_SUBMISSION, MISSING_METADATA, READY_TO_SUBMIT, WAITING_FOR_REVIEW, IN_REVIEW, PENDING_DEVELOPER_RELEASE

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $referenceName;
	}
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($productId)
	{
		$this->productId = $productId;
		return $productId;
	}
	public function getInAppPurchaseType()
	{
		return $this->inAppPurchaseType;
	}
	public function setInAppPurchaseType($inAppPurchaseType)
	{
		$this->inAppPurchaseType = $inAppPurchaseType;
		return $inAppPurchaseType;
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
class_alias(InAppPurchase_Attributes::class, 'AppleService_AppStore_InAppPurchase_Attributes');

class InAppPurchase_Relationships_Apps_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(InAppPurchase_Relationships_Apps_Links::class, 'AppleService_AppStore_InAppPurchase_Relationships_Apps_Links');

class InAppPurchase_Relationships_Apps_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
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
class_alias(InAppPurchase_Relationships_Apps_Data::class, 'AppleService_AppStore_InAppPurchase_Relationships_Apps_Data');

class InAppPurchase_Relationships_Apps extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchase_Relationships_Apps_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = InAppPurchase_Relationships_Apps_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  InAppPurchase_Relationships_Apps_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchase_Relationships_Apps_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $meta;
	}
	/**
	* @return  InAppPurchase_Relationships_Apps_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchase_Relationships_Apps_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(InAppPurchase_Relationships_Apps::class, 'AppleService_AppStore_InAppPurchase_Relationships_Apps');

class InAppPurchase_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appsType = InAppPurchase_Relationships_Apps::class;
	protected $appsDataType = 'object';

	/**
	* @return  InAppPurchase_Relationships_Apps
	*/
	public function getApps()
	{
		return $this->apps;
	}
	/**
	* @param  InAppPurchase_Relationships_Apps
	*/
	public function setApps($apps)
	{
		$this->apps = $apps;
		return $apps;
	}

}
class_alias(InAppPurchase_Relationships::class, 'AppleService_AppStore_InAppPurchase_Relationships');

class InAppPurchase extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
	public $id;
	protected $attributesType = InAppPurchase_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchase_Relationships::class;
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
	* @return  InAppPurchase_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchase_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  InAppPurchase_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchase_Relationships
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
class_alias(InAppPurchase::class, 'AppleService_AppStore_InAppPurchase');

