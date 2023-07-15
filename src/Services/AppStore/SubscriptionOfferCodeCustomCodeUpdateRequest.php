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

class SubscriptionOfferCodeCustomCodeUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $active;

	public function getActive()
	{
		return $this->active;
	}
	public function setActive($active)
	{
		$this->active = $active;
		return $active;
	}

}
class_alias(SubscriptionOfferCodeCustomCodeUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCodeUpdateRequest_Data_Attributes');

class SubscriptionOfferCodeCustomCodeUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionOfferCodeCustomCodes';
	public $id;
	protected $attributesType = SubscriptionOfferCodeCustomCodeUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

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
	* @return  SubscriptionOfferCodeCustomCodeUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCodeUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}

}
class_alias(SubscriptionOfferCodeCustomCodeUpdateRequest_Data::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCodeUpdateRequest_Data');

class SubscriptionOfferCodeCustomCodeUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionOfferCodeCustomCodeUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionOfferCodeCustomCodeUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionOfferCodeCustomCodeUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionOfferCodeCustomCodeUpdateRequest::class, 'AppleService_AppStore_SubscriptionOfferCodeCustomCodeUpdateRequest');
