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

class SandboxTesterV2UpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $territory; // 
	public $interruptPurchases;
	public $subscriptionRenewalRate; // MONTHLY_RENEWAL_EVERY_ONE_HOUR, MONTHLY_RENEWAL_EVERY_THIRTY_MINUTES, MONTHLY_RENEWAL_EVERY_FIFTEEN_MINUTES, MONTHLY_RENEWAL_EVERY_FIVE_MINUTES, MONTHLY_RENEWAL_EVERY_THREE_MINUTES

	/**
	* @return  string
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  string
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}
	public function getInterruptPurchases()
	{
		return $this->interruptPurchases;
	}
	public function setInterruptPurchases($interruptPurchases)
	{
		$this->interruptPurchases = $interruptPurchases;
		return $this;
	}
	public function getSubscriptionRenewalRate()
	{
		return $this->subscriptionRenewalRate;
	}
	public function setSubscriptionRenewalRate($subscriptionRenewalRate)
	{
		$this->subscriptionRenewalRate = $subscriptionRenewalRate;
		return $this;
	}

}
class_alias(SandboxTesterV2UpdateRequest_Data_Attributes::class, 'AppleService_AppStore_SandboxTesterV2UpdateRequest_Data_Attributes');

class SandboxTesterV2UpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'sandboxTesters';
	public $id;
	protected $attributesType = SandboxTesterV2UpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

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
	* @return  SandboxTesterV2UpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SandboxTesterV2UpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}
class_alias(SandboxTesterV2UpdateRequest_Data::class, 'AppleService_AppStore_SandboxTesterV2UpdateRequest_Data');

class SandboxTesterV2UpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SandboxTesterV2UpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SandboxTesterV2UpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SandboxTesterV2UpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(SandboxTesterV2UpdateRequest::class, 'AppleService_AppStore_SandboxTesterV2UpdateRequest');

