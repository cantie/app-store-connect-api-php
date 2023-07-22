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

class SubscriptionOfferCode_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $customerEligibilities; // 
	public $offerEligibility; // 
	public $duration; // 
	public $offerMode; // 
	public $numberOfPeriods;
	public $totalNumberOfCodes;
	public $active;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	/**
	* @return  string[]
	*/
	public function getCustomerEligibilities()
	{
		return $this->customerEligibilities;
	}
	/**
	* @param  string[]
	*/
	public function setCustomerEligibilities($customerEligibilities)
	{
		$this->customerEligibilities = $customerEligibilities;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getOfferEligibility()
	{
		return $this->offerEligibility;
	}
	/**
	* @param  string
	*/
	public function setOfferEligibility($offerEligibility)
	{
		$this->offerEligibility = $offerEligibility;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	* @param  string
	*/
	public function setDuration($duration)
	{
		$this->duration = $duration;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getOfferMode()
	{
		return $this->offerMode;
	}
	/**
	* @param  string
	*/
	public function setOfferMode($offerMode)
	{
		$this->offerMode = $offerMode;
		return $this;
	}
	public function getNumberOfPeriods()
	{
		return $this->numberOfPeriods;
	}
	public function setNumberOfPeriods($numberOfPeriods)
	{
		$this->numberOfPeriods = $numberOfPeriods;
		return $this;
	}
	public function getTotalNumberOfCodes()
	{
		return $this->totalNumberOfCodes;
	}
	public function setTotalNumberOfCodes($totalNumberOfCodes)
	{
		$this->totalNumberOfCodes = $totalNumberOfCodes;
		return $this;
	}
	public function getActive()
	{
		return $this->active;
	}
	public function setActive($active)
	{
		$this->active = $active;
		return $this;
	}

}
class_alias(SubscriptionOfferCode_Attributes::class, 'AppleService_AppStore_SubscriptionOfferCode_Attributes');

class SubscriptionOfferCode_Relationships_Subscription_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionOfferCode_Relationships_Subscription_Links::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_Subscription_Links');

class SubscriptionOfferCode_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionOfferCode_Relationships_Subscription_Data::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_Subscription_Data');

class SubscriptionOfferCode_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionOfferCode_Relationships_Subscription_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = SubscriptionOfferCode_Relationships_Subscription_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionOfferCode_Relationships_Subscription_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_Subscription_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_Subscription_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_Subscription_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCode_Relationships_Subscription::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_Subscription');

class SubscriptionOfferCode_Relationships_OneTimeUseCodes_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionOfferCode_Relationships_OneTimeUseCodes_Links::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_OneTimeUseCodes_Links');

class SubscriptionOfferCode_Relationships_OneTimeUseCodes_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodeOneTimeUseCodes';
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
class_alias(SubscriptionOfferCode_Relationships_OneTimeUseCodes_Data::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_OneTimeUseCodes_Data');

class SubscriptionOfferCode_Relationships_OneTimeUseCodes extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionOfferCode_Relationships_OneTimeUseCodes_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = SubscriptionOfferCode_Relationships_OneTimeUseCodes_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionOfferCode_Relationships_OneTimeUseCodes_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_OneTimeUseCodes_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_OneTimeUseCodes_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_OneTimeUseCodes_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCode_Relationships_OneTimeUseCodes::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_OneTimeUseCodes');

class SubscriptionOfferCode_Relationships_CustomCodes_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionOfferCode_Relationships_CustomCodes_Links::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_CustomCodes_Links');

class SubscriptionOfferCode_Relationships_CustomCodes_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodeCustomCodes';
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
class_alias(SubscriptionOfferCode_Relationships_CustomCodes_Data::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_CustomCodes_Data');

class SubscriptionOfferCode_Relationships_CustomCodes extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionOfferCode_Relationships_CustomCodes_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = SubscriptionOfferCode_Relationships_CustomCodes_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionOfferCode_Relationships_CustomCodes_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_CustomCodes_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_CustomCodes_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_CustomCodes_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCode_Relationships_CustomCodes::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_CustomCodes');

class SubscriptionOfferCode_Relationships_Prices_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionOfferCode_Relationships_Prices_Links::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_Prices_Links');

class SubscriptionOfferCode_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodePrices';
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
class_alias(SubscriptionOfferCode_Relationships_Prices_Data::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_Prices_Data');

class SubscriptionOfferCode_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionOfferCode_Relationships_Prices_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = SubscriptionOfferCode_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionOfferCode_Relationships_Prices_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_Prices_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SubscriptionOfferCode_Relationships_Prices::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships_Prices');

class SubscriptionOfferCode_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionType = SubscriptionOfferCode_Relationships_Subscription::class;
	protected $subscriptionDataType = 'object';
	protected $oneTimeUseCodesType = SubscriptionOfferCode_Relationships_OneTimeUseCodes::class;
	protected $oneTimeUseCodesDataType = 'object';
	protected $customCodesType = SubscriptionOfferCode_Relationships_CustomCodes::class;
	protected $customCodesDataType = 'object';
	protected $pricesType = SubscriptionOfferCode_Relationships_Prices::class;
	protected $pricesDataType = 'object';

	/**
	* @return  SubscriptionOfferCode_Relationships_Subscription
	*/
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_Subscription
	*/
	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_OneTimeUseCodes
	*/
	public function getOneTimeUseCodes()
	{
		return $this->oneTimeUseCodes;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_OneTimeUseCodes
	*/
	public function setOneTimeUseCodes($oneTimeUseCodes)
	{
		$this->oneTimeUseCodes = $oneTimeUseCodes;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_CustomCodes
	*/
	public function getCustomCodes()
	{
		return $this->customCodes;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_CustomCodes
	*/
	public function setCustomCodes($customCodes)
	{
		$this->customCodes = $customCodes;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $this;
	}

}
class_alias(SubscriptionOfferCode_Relationships::class, 'AppleService_AppStore_SubscriptionOfferCode_Relationships');

class SubscriptionOfferCode extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodes';
	public $id;
	protected $attributesType = SubscriptionOfferCode_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionOfferCode_Relationships::class;
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
	* @return  SubscriptionOfferCode_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionOfferCode_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionOfferCode_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionOfferCode_Relationships
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
class_alias(SubscriptionOfferCode::class, 'AppleService_AppStore_SubscriptionOfferCode');

