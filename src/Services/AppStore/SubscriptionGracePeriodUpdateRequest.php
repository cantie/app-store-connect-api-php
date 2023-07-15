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

class SubscriptionGracePeriodUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $optIn;
	public $sandboxOptIn;
	protected $durationType = SubscriptionGracePeriodDuration::class;
	protected $durationDataType = '';
	public $renewalType; // ALL_RENEWALS, PAID_TO_PAID_ONLY

	public function getOptIn()
	{
		return $this->optIn;
	}
	public function setOptIn($optIn)
	{
		$this->optIn = $optIn;
		return $optIn;
	}
	public function getSandboxOptIn()
	{
		return $this->sandboxOptIn;
	}
	public function setSandboxOptIn($sandboxOptIn)
	{
		$this->sandboxOptIn = $sandboxOptIn;
		return $sandboxOptIn;
	}
	/**
	* @return  SubscriptionGracePeriodDuration
	*/
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	* @param  SubscriptionGracePeriodDuration
	*/
	public function setDuration($duration)
	{
		$this->duration = $duration;
		return $duration;
	}
	public function getRenewalType()
	{
		return $this->renewalType;
	}
	public function setRenewalType($renewalType)
	{
		$this->renewalType = $renewalType;
		return $renewalType;
	}

}
class_alias(SubscriptionGracePeriodUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionGracePeriodUpdateRequest_Data_Attributes');

class SubscriptionGracePeriodUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGracePeriods';
	public $id;
	protected $attributesType = SubscriptionGracePeriodUpdateRequest_Data_Attributes::class;
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
	* @return  SubscriptionGracePeriodUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionGracePeriodUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}

}
class_alias(SubscriptionGracePeriodUpdateRequest_Data::class, 'AppleService_AppStore_SubscriptionGracePeriodUpdateRequest_Data');

class SubscriptionGracePeriodUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionGracePeriodUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionGracePeriodUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionGracePeriodUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionGracePeriodUpdateRequest::class, 'AppleService_AppStore_SubscriptionGracePeriodUpdateRequest');

