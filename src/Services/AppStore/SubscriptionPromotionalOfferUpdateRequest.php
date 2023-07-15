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

class SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOfferPrices';
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
class_alias(SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices_Data');

class SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices::class, 'AppleService_AppStore_SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices');

class SubscriptionPromotionalOfferUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $pricesType = SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices::class;
	protected $pricesDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  SubscriptionPromotionalOfferUpdateRequest_Data_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $prices;
	}

}
class_alias(SubscriptionPromotionalOfferUpdateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionPromotionalOfferUpdateRequest_Data_Relationships');

class SubscriptionPromotionalOfferUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOffers';
	public $id;
	protected $relationshipsType = SubscriptionPromotionalOfferUpdateRequest_Data_Relationships::class;
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
	* @return  SubscriptionPromotionalOfferUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPromotionalOfferUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionPromotionalOfferUpdateRequest_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferUpdateRequest_Data');

class SubscriptionPromotionalOfferUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferUpdateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = SubscriptionPromotionalOfferPriceInlineCreate::class;
	protected $includedDataType = 'array';

	/**
	* @return  SubscriptionPromotionalOfferUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}
	/**
	* @return  SubscriptionPromotionalOfferPriceInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $included;
	}

}
class_alias(SubscriptionPromotionalOfferUpdateRequest::class, 'AppleService_AppStore_SubscriptionPromotionalOfferUpdateRequest');

