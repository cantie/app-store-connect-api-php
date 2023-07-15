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

class SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $numberOfCodes;
	public $expirationDate;

	public function getNumberOfCodes()
	{
		return $this->numberOfCodes;
	}
	public function setNumberOfCodes($numberOfCodes)
	{
		$this->numberOfCodes = $numberOfCodes;
		return $numberOfCodes;
	}
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate($expirationDate)
	{
		$this->expirationDate = $expirationDate;
		return $expirationDate;
	}

}
class_alias(SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Attributes');

class SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode_Data');

class SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode::class, 'AppleService_AppStore_SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode');

class SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $offerCodeType = SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode::class;
	protected $offerCodeDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode
	*/
	public function getOfferCode()
	{
		return $this->offerCode;
	}
	/**
	* @param  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships_OfferCode
	*/
	public function setOfferCode($offerCode)
	{
		$this->offerCode = $offerCode;
		return $offerCode;
	}

}
class_alias(SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships::class, 'AppleService_AppStore_SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships');

class SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodeOneTimeUseCodes';
	protected $attributesType = SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships::class;
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
	/**
	* @return  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data');

class SubscriptionOfferCodeOneTimeUseCodeCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeOneTimeUseCodeCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionOfferCodeOneTimeUseCodeCreateRequest::class, 'AppleService_AppStore_SubscriptionOfferCodeOneTimeUseCodeCreateRequest');
