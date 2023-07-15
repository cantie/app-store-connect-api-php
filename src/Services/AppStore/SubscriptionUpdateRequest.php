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

class SubscriptionUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $familySharable;
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
		return $name;
	}
	public function getFamilySharable()
	{
		return $this->familySharable;
	}
	public function setFamilySharable($familySharable)
	{
		$this->familySharable = $familySharable;
		return $familySharable;
	}
	public function getSubscriptionPeriod()
	{
		return $this->subscriptionPeriod;
	}
	public function setSubscriptionPeriod($subscriptionPeriod)
	{
		$this->subscriptionPeriod = $subscriptionPeriod;
		return $subscriptionPeriod;
	}
	public function getReviewNote()
	{
		return $this->reviewNote;
	}
	public function setReviewNote($reviewNote)
	{
		$this->reviewNote = $reviewNote;
		return $reviewNote;
	}
	public function getGroupLevel()
	{
		return $this->groupLevel;
	}
	public function setGroupLevel($groupLevel)
	{
		$this->groupLevel = $groupLevel;
		return $groupLevel;
	}
	public function getAvailableInAllTerritories()
	{
		return $this->availableInAllTerritories;
	}
	public function setAvailableInAllTerritories($availableInAllTerritories)
	{
		$this->availableInAllTerritories = $availableInAllTerritories;
		return $availableInAllTerritories;
	}

}
class_alias(SubscriptionUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Attributes');

class SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers_Data::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers_Data');

class SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers');

class SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers_Data::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers_Data');

class SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers');

class SubscriptionUpdateRequest_Data_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionUpdateRequest_Data_Relationships_Prices_Data::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships_Prices_Data');

class SubscriptionUpdateRequest_Data_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionUpdateRequest_Data_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionUpdateRequest_Data_Relationships_Prices::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships_Prices');

class SubscriptionUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $introductoryOffersType = SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers::class;
	protected $introductoryOffersDataType = 'object';
	protected $promotionalOffersType = SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers::class;
	protected $promotionalOffersDataType = 'object';
	protected $pricesType = SubscriptionUpdateRequest_Data_Relationships_Prices::class;
	protected $pricesDataType = 'object';

	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers
	*/
	public function getIntroductoryOffers()
	{
		return $this->introductoryOffers;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships_IntroductoryOffers
	*/
	public function setIntroductoryOffers($introductoryOffers)
	{
		$this->introductoryOffers = $introductoryOffers;
		return $introductoryOffers;
	}
	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers
	*/
	public function getPromotionalOffers()
	{
		return $this->promotionalOffers;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships_PromotionalOffers
	*/
	public function setPromotionalOffers($promotionalOffers)
	{
		$this->promotionalOffers = $promotionalOffers;
		return $promotionalOffers;
	}
	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $prices;
	}

}
class_alias(SubscriptionUpdateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data_Relationships');

class SubscriptionUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptions';
	public $id;
	protected $attributesType = SubscriptionUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionUpdateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

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
	* @return  SubscriptionUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  SubscriptionUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionUpdateRequest_Data::class, 'AppleService_AppStore_SubscriptionUpdateRequest_Data');

class SubscriptionUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionUpdateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = [SubscriptionPromotionalOfferInlineCreate::class, SubscriptionPriceInlineCreate::class, SubscriptionIntroductoryOfferInlineCreate::class];
	protected $includedDataType = 'array[*]';

	/**
	* @return  SubscriptionUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}
	public function getIncluded()
	{
		return $this->included;
	}
	public function setIncluded($included)
	{
		$this->included = $included;
		return $included;
	}

}
class_alias(SubscriptionUpdateRequest::class, 'AppleService_AppStore_SubscriptionUpdateRequest');
