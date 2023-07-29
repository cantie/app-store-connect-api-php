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

class Subscription_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $productId;
	public $familySharable;
	public $state; // MISSING_METADATA, READY_TO_SUBMIT, WAITING_FOR_REVIEW, IN_REVIEW, DEVELOPER_ACTION_NEEDED, PENDING_BINARY_APPROVAL, APPROVED, DEVELOPER_REMOVED_FROM_SALE, REMOVED_FROM_SALE, REJECTED
	public $subscriptionPeriod; // ONE_WEEK, ONE_MONTH, TWO_MONTHS, THREE_MONTHS, SIX_MONTHS, ONE_YEAR
	public $reviewNote;
	public $groupLevel;
	public $availableInAllTerritories;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($productId)
	{
		$this->productId = $productId;
		return $this;
	}
	public function getFamilySharable()
	{
		return $this->familySharable;
	}
	public function setFamilySharable($familySharable)
	{
		$this->familySharable = $familySharable;
		return $this;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}
	public function getSubscriptionPeriod()
	{
		return $this->subscriptionPeriod;
	}
	public function setSubscriptionPeriod($subscriptionPeriod)
	{
		$this->subscriptionPeriod = $subscriptionPeriod;
		return $this;
	}
	public function getReviewNote()
	{
		return $this->reviewNote;
	}
	public function setReviewNote($reviewNote)
	{
		$this->reviewNote = $reviewNote;
		return $this;
	}
	public function getGroupLevel()
	{
		return $this->groupLevel;
	}
	public function setGroupLevel($groupLevel)
	{
		$this->groupLevel = $groupLevel;
		return $this;
	}
	public function getAvailableInAllTerritories()
	{
		return $this->availableInAllTerritories;
	}
	public function setAvailableInAllTerritories($availableInAllTerritories)
	{
		$this->availableInAllTerritories = $availableInAllTerritories;
		return $this;
	}

}

class Subscription_Relationships_SubscriptionLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_SubscriptionLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionLocalizations';
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

class Subscription_Relationships_SubscriptionLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_SubscriptionLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Subscription_Relationships_SubscriptionLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Subscription_Relationships_SubscriptionLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_SubscriptionLocalizations_Links
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
	* @return  Subscription_Relationships_SubscriptionLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_SubscriptionLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_AppStoreReviewScreenshot_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_AppStoreReviewScreenshot_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionAppStoreReviewScreenshots';
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

class Subscription_Relationships_AppStoreReviewScreenshot extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_AppStoreReviewScreenshot_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Subscription_Relationships_AppStoreReviewScreenshot_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Subscription_Relationships_AppStoreReviewScreenshot_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_AppStoreReviewScreenshot_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_AppStoreReviewScreenshot_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_AppStoreReviewScreenshot_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_Group_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_Group_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroups';
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

class Subscription_Relationships_Group extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_Group_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Subscription_Relationships_Group_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Subscription_Relationships_Group_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_Group_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_Group_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_Group_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_IntroductoryOffers_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_IntroductoryOffers_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionIntroductoryOffers';
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

class Subscription_Relationships_IntroductoryOffers extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_IntroductoryOffers_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Subscription_Relationships_IntroductoryOffers_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Subscription_Relationships_IntroductoryOffers_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_IntroductoryOffers_Links
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
	* @return  Subscription_Relationships_IntroductoryOffers_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_IntroductoryOffers_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_PromotionalOffers_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_PromotionalOffers_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOffers';
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

class Subscription_Relationships_PromotionalOffers extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_PromotionalOffers_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Subscription_Relationships_PromotionalOffers_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Subscription_Relationships_PromotionalOffers_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_PromotionalOffers_Links
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
	* @return  Subscription_Relationships_PromotionalOffers_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_PromotionalOffers_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_OfferCodes_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_OfferCodes_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodes';
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

class Subscription_Relationships_OfferCodes extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_OfferCodes_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Subscription_Relationships_OfferCodes_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Subscription_Relationships_OfferCodes_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_OfferCodes_Links
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
	* @return  Subscription_Relationships_OfferCodes_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_OfferCodes_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_Prices_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPrices';
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

class Subscription_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_Prices_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Subscription_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Subscription_Relationships_Prices_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_Prices_Links
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
	* @return  Subscription_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_PromotedPurchase_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_PromotedPurchase_Data extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_PromotedPurchase_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Subscription_Relationships_PromotedPurchase_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Subscription_Relationships_PromotedPurchase_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_PromotedPurchase_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_PromotedPurchase_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_PromotedPurchase_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships_SubscriptionAvailability_Links extends \Cantie\AppStoreConnect\Model
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

class Subscription_Relationships_SubscriptionAvailability_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionAvailabilities';
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

class Subscription_Relationships_SubscriptionAvailability extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Subscription_Relationships_SubscriptionAvailability_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Subscription_Relationships_SubscriptionAvailability_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Subscription_Relationships_SubscriptionAvailability_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Subscription_Relationships_SubscriptionAvailability_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_SubscriptionAvailability_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Subscription_Relationships_SubscriptionAvailability_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Subscription_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionLocalizationsType = Subscription_Relationships_SubscriptionLocalizations::class;
	protected $subscriptionLocalizationsDataType = 'object';
	protected $appStoreReviewScreenshotType = Subscription_Relationships_AppStoreReviewScreenshot::class;
	protected $appStoreReviewScreenshotDataType = 'object';
	protected $groupType = Subscription_Relationships_Group::class;
	protected $groupDataType = 'object';
	protected $introductoryOffersType = Subscription_Relationships_IntroductoryOffers::class;
	protected $introductoryOffersDataType = 'object';
	protected $promotionalOffersType = Subscription_Relationships_PromotionalOffers::class;
	protected $promotionalOffersDataType = 'object';
	protected $offerCodesType = Subscription_Relationships_OfferCodes::class;
	protected $offerCodesDataType = 'object';
	protected $pricesType = Subscription_Relationships_Prices::class;
	protected $pricesDataType = 'object';
	protected $promotedPurchaseType = Subscription_Relationships_PromotedPurchase::class;
	protected $promotedPurchaseDataType = 'object';
	protected $subscriptionAvailabilityType = Subscription_Relationships_SubscriptionAvailability::class;
	protected $subscriptionAvailabilityDataType = 'object';

	/**
	* @return  Subscription_Relationships_SubscriptionLocalizations
	*/
	public function getSubscriptionLocalizations()
	{
		return $this->subscriptionLocalizations;
	}
	/**
	* @param  Subscription_Relationships_SubscriptionLocalizations
	*/
	public function setSubscriptionLocalizations($subscriptionLocalizations)
	{
		$this->subscriptionLocalizations = $subscriptionLocalizations;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_AppStoreReviewScreenshot
	*/
	public function getAppStoreReviewScreenshot()
	{
		return $this->appStoreReviewScreenshot;
	}
	/**
	* @param  Subscription_Relationships_AppStoreReviewScreenshot
	*/
	public function setAppStoreReviewScreenshot($appStoreReviewScreenshot)
	{
		$this->appStoreReviewScreenshot = $appStoreReviewScreenshot;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_Group
	*/
	public function getGroup()
	{
		return $this->group;
	}
	/**
	* @param  Subscription_Relationships_Group
	*/
	public function setGroup($group)
	{
		$this->group = $group;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_IntroductoryOffers
	*/
	public function getIntroductoryOffers()
	{
		return $this->introductoryOffers;
	}
	/**
	* @param  Subscription_Relationships_IntroductoryOffers
	*/
	public function setIntroductoryOffers($introductoryOffers)
	{
		$this->introductoryOffers = $introductoryOffers;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_PromotionalOffers
	*/
	public function getPromotionalOffers()
	{
		return $this->promotionalOffers;
	}
	/**
	* @param  Subscription_Relationships_PromotionalOffers
	*/
	public function setPromotionalOffers($promotionalOffers)
	{
		$this->promotionalOffers = $promotionalOffers;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_OfferCodes
	*/
	public function getOfferCodes()
	{
		return $this->offerCodes;
	}
	/**
	* @param  Subscription_Relationships_OfferCodes
	*/
	public function setOfferCodes($offerCodes)
	{
		$this->offerCodes = $offerCodes;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  Subscription_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_PromotedPurchase
	*/
	public function getPromotedPurchase()
	{
		return $this->promotedPurchase;
	}
	/**
	* @param  Subscription_Relationships_PromotedPurchase
	*/
	public function setPromotedPurchase($promotedPurchase)
	{
		$this->promotedPurchase = $promotedPurchase;
		return $this;
	}
	/**
	* @return  Subscription_Relationships_SubscriptionAvailability
	*/
	public function getSubscriptionAvailability()
	{
		return $this->subscriptionAvailability;
	}
	/**
	* @param  Subscription_Relationships_SubscriptionAvailability
	*/
	public function setSubscriptionAvailability($subscriptionAvailability)
	{
		$this->subscriptionAvailability = $subscriptionAvailability;
		return $this;
	}

}

class Subscription extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptions';
	public $id;
	protected $attributesType = Subscription_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = Subscription_Relationships::class;
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
	* @return  Subscription_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  Subscription_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  Subscription_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  Subscription_Relationships
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

