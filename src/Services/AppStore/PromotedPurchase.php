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

class PromotedPurchase_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $visibleForAllUsers;
	public $enabled;
	public $state; // APPROVED, IN_REVIEW, PREPARE_FOR_SUBMISSION, REJECTED

	public function getVisibleForAllUsers()
	{
		return $this->visibleForAllUsers;
	}
	public function setVisibleForAllUsers($visibleForAllUsers)
	{
		$this->visibleForAllUsers = $visibleForAllUsers;
		return $visibleForAllUsers;
	}
	public function getEnabled()
	{
		return $this->enabled;
	}
	public function setEnabled($enabled)
	{
		$this->enabled = $enabled;
		return $enabled;
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
class_alias(PromotedPurchase_Attributes::class, 'AppleService_AppStore_PromotedPurchase_Attributes');

class PromotedPurchase_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(PromotedPurchase_Relationships_InAppPurchaseV2_Links::class, 'AppleService_AppStore_PromotedPurchase_Relationships_InAppPurchaseV2_Links');

class PromotedPurchase_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(PromotedPurchase_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_PromotedPurchase_Relationships_InAppPurchaseV2_Data');

class PromotedPurchase_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = PromotedPurchase_Relationships_InAppPurchaseV2_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = PromotedPurchase_Relationships_InAppPurchaseV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchase_Relationships_InAppPurchaseV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PromotedPurchase_Relationships_InAppPurchaseV2_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PromotedPurchase_Relationships_InAppPurchaseV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchase_Relationships_InAppPurchaseV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchase_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_PromotedPurchase_Relationships_InAppPurchaseV2');

class PromotedPurchase_Relationships_Subscription_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(PromotedPurchase_Relationships_Subscription_Links::class, 'AppleService_AppStore_PromotedPurchase_Relationships_Subscription_Links');

class PromotedPurchase_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptions';
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
class_alias(PromotedPurchase_Relationships_Subscription_Data::class, 'AppleService_AppStore_PromotedPurchase_Relationships_Subscription_Data');

class PromotedPurchase_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = PromotedPurchase_Relationships_Subscription_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = PromotedPurchase_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchase_Relationships_Subscription_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PromotedPurchase_Relationships_Subscription_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PromotedPurchase_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchase_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchase_Relationships_Subscription::class, 'AppleService_AppStore_PromotedPurchase_Relationships_Subscription');

class PromotedPurchase_Relationships_PromotionImages_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(PromotedPurchase_Relationships_PromotionImages_Links::class, 'AppleService_AppStore_PromotedPurchase_Relationships_PromotionImages_Links');

class PromotedPurchase_Relationships_PromotionImages_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchaseImages';
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
class_alias(PromotedPurchase_Relationships_PromotionImages_Data::class, 'AppleService_AppStore_PromotedPurchase_Relationships_PromotionImages_Data');

class PromotedPurchase_Relationships_PromotionImages extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = PromotedPurchase_Relationships_PromotionImages_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = PromotedPurchase_Relationships_PromotionImages_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  PromotedPurchase_Relationships_PromotionImages_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PromotedPurchase_Relationships_PromotionImages_Links
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
	* @return  PromotedPurchase_Relationships_PromotionImages_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchase_Relationships_PromotionImages_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchase_Relationships_PromotionImages::class, 'AppleService_AppStore_PromotedPurchase_Relationships_PromotionImages');

class PromotedPurchase_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $inAppPurchaseV2Type = PromotedPurchase_Relationships_InAppPurchaseV2::class;
	protected $inAppPurchaseV2DataType = 'object';
	protected $subscriptionType = PromotedPurchase_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $promotionImagesType = PromotedPurchase_Relationships_PromotionImages::class;
	protected $promotionImagesDataType = 'object';

	/**
	* @return  PromotedPurchase_Relationships_InAppPurchaseV2
	*/
	public function getInAppPurchaseV2()
	{
		return $this->inAppPurchaseV2;
	}
	/**
	* @param  PromotedPurchase_Relationships_InAppPurchaseV2
	*/
	public function setInAppPurchaseV2($inAppPurchaseV2)
	{
		$this->inAppPurchaseV2 = $inAppPurchaseV2;
		return $inAppPurchaseV2;
	}
	/**
	* @return  PromotedPurchase_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  PromotedPurchase_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $subscription;
	}
	/**
	* @return  PromotedPurchase_Relationships_PromotionImages
	*/
	public function getPromotionImages()
	{
		return $this->promotionImages;
	}
	/**
	* @param  PromotedPurchase_Relationships_PromotionImages
	*/
	public function setPromotionImages($promotionImages)
	{
		$this->promotionImages = $promotionImages;
		return $promotionImages;
	}

}
class_alias(PromotedPurchase_Relationships::class, 'AppleService_AppStore_PromotedPurchase_Relationships');

class PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchases';
	public $id;
	protected $attributesType = PromotedPurchase_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = PromotedPurchase_Relationships::class;
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
	* @return  PromotedPurchase_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  PromotedPurchase_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  PromotedPurchase_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  PromotedPurchase_Relationships
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
class_alias(PromotedPurchase::class, 'AppleService_AppStore_PromotedPurchase');

