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

class AppUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $bundleId;
	public $primaryLocale;
	public $subscriptionStatusUrl;
	public $subscriptionStatusUrlVersion; // 
	public $subscriptionStatusUrlForSandbox;
	public $subscriptionStatusUrlVersionForSandbox; // 
	public $contentRightsDeclaration; // DOES_NOT_USE_THIRD_PARTY_CONTENT, USES_THIRD_PARTY_CONTENT

	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	public function getPrimaryLocale()
	{
		return $this->primaryLocale;
	}
	public function setPrimaryLocale($primaryLocale)
	{
		$this->primaryLocale = $primaryLocale;
		return $this;
	}
	public function getSubscriptionStatusUrl()
	{
		return $this->subscriptionStatusUrl;
	}
	public function setSubscriptionStatusUrl($subscriptionStatusUrl)
	{
		$this->subscriptionStatusUrl = $subscriptionStatusUrl;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getSubscriptionStatusUrlVersion()
	{
		return $this->subscriptionStatusUrlVersion;
	}
	/**
	* @param  string
	*/
	public function setSubscriptionStatusUrlVersion($subscriptionStatusUrlVersion)
	{
		$this->subscriptionStatusUrlVersion = $subscriptionStatusUrlVersion;
		return $this;
	}
	public function getSubscriptionStatusUrlForSandbox()
	{
		return $this->subscriptionStatusUrlForSandbox;
	}
	public function setSubscriptionStatusUrlForSandbox($subscriptionStatusUrlForSandbox)
	{
		$this->subscriptionStatusUrlForSandbox = $subscriptionStatusUrlForSandbox;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getSubscriptionStatusUrlVersionForSandbox()
	{
		return $this->subscriptionStatusUrlVersionForSandbox;
	}
	/**
	* @param  string
	*/
	public function setSubscriptionStatusUrlVersionForSandbox($subscriptionStatusUrlVersionForSandbox)
	{
		$this->subscriptionStatusUrlVersionForSandbox = $subscriptionStatusUrlVersionForSandbox;
		return $this;
	}
	public function getContentRightsDeclaration()
	{
		return $this->contentRightsDeclaration;
	}
	public function setContentRightsDeclaration($contentRightsDeclaration)
	{
		$this->contentRightsDeclaration = $contentRightsDeclaration;
		return $this;
	}

}

class AppUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
	public $id;
	protected $attributesType = AppUpdateRequest_Data_Attributes::class;
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
	* @return  AppUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}

class AppUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

