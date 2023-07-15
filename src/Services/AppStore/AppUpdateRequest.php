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
	protected $subscriptionStatusUrlVersionType = SubscriptionStatusUrlVersion::class;
	protected $subscriptionStatusUrlVersionDataType = '';
	public $subscriptionStatusUrlForSandbox;
	protected $subscriptionStatusUrlVersionForSandboxType = SubscriptionStatusUrlVersion::class;
	protected $subscriptionStatusUrlVersionForSandboxDataType = '';
	public $availableInNewTerritories;
	public $contentRightsDeclaration; // DOES_NOT_USE_THIRD_PARTY_CONTENT, USES_THIRD_PARTY_CONTENT

	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $bundleId;
	}
	public function getPrimaryLocale()
	{
		return $this->primaryLocale;
	}
	public function setPrimaryLocale($primaryLocale)
	{
		$this->primaryLocale = $primaryLocale;
		return $primaryLocale;
	}
	public function getSubscriptionStatusUrl()
	{
		return $this->subscriptionStatusUrl;
	}
	public function setSubscriptionStatusUrl($subscriptionStatusUrl)
	{
		$this->subscriptionStatusUrl = $subscriptionStatusUrl;
		return $subscriptionStatusUrl;
	}
	/**
	* @return  SubscriptionStatusUrlVersion
	*/
	public function getSubscriptionStatusUrlVersion()
	{
		return $this->subscriptionStatusUrlVersion;
	}
	/**
	* @param  SubscriptionStatusUrlVersion
	*/
	public function setSubscriptionStatusUrlVersion($subscriptionStatusUrlVersion)
	{
		$this->subscriptionStatusUrlVersion = $subscriptionStatusUrlVersion;
		return $subscriptionStatusUrlVersion;
	}
	public function getSubscriptionStatusUrlForSandbox()
	{
		return $this->subscriptionStatusUrlForSandbox;
	}
	public function setSubscriptionStatusUrlForSandbox($subscriptionStatusUrlForSandbox)
	{
		$this->subscriptionStatusUrlForSandbox = $subscriptionStatusUrlForSandbox;
		return $subscriptionStatusUrlForSandbox;
	}
	/**
	* @return  SubscriptionStatusUrlVersion
	*/
	public function getSubscriptionStatusUrlVersionForSandbox()
	{
		return $this->subscriptionStatusUrlVersionForSandbox;
	}
	/**
	* @param  SubscriptionStatusUrlVersion
	*/
	public function setSubscriptionStatusUrlVersionForSandbox($subscriptionStatusUrlVersionForSandbox)
	{
		$this->subscriptionStatusUrlVersionForSandbox = $subscriptionStatusUrlVersionForSandbox;
		return $subscriptionStatusUrlVersionForSandbox;
	}
	public function getAvailableInNewTerritories()
	{
		return $this->availableInNewTerritories;
	}
	public function setAvailableInNewTerritories($availableInNewTerritories)
	{
		$this->availableInNewTerritories = $availableInNewTerritories;
		return $availableInNewTerritories;
	}
	public function getContentRightsDeclaration()
	{
		return $this->contentRightsDeclaration;
	}
	public function setContentRightsDeclaration($contentRightsDeclaration)
	{
		$this->contentRightsDeclaration = $contentRightsDeclaration;
		return $contentRightsDeclaration;
	}

}
class_alias(AppUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_AppUpdateRequest_Data_Attributes');

class AppUpdateRequest_Data_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPrices';
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
class_alias(AppUpdateRequest_Data_Relationships_Prices_Data::class, 'AppleService_AppStore_AppUpdateRequest_Data_Relationships_Prices_Data');

class AppUpdateRequest_Data_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppUpdateRequest_Data_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppUpdateRequest_Data_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppUpdateRequest_Data_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppUpdateRequest_Data_Relationships_Prices::class, 'AppleService_AppStore_AppUpdateRequest_Data_Relationships_Prices');

class AppUpdateRequest_Data_Relationships_AvailableTerritories_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territories';
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
class_alias(AppUpdateRequest_Data_Relationships_AvailableTerritories_Data::class, 'AppleService_AppStore_AppUpdateRequest_Data_Relationships_AvailableTerritories_Data');

class AppUpdateRequest_Data_Relationships_AvailableTerritories extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppUpdateRequest_Data_Relationships_AvailableTerritories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppUpdateRequest_Data_Relationships_AvailableTerritories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppUpdateRequest_Data_Relationships_AvailableTerritories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppUpdateRequest_Data_Relationships_AvailableTerritories::class, 'AppleService_AppStore_AppUpdateRequest_Data_Relationships_AvailableTerritories');

class AppUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $pricesType = AppUpdateRequest_Data_Relationships_Prices::class;
	protected $pricesDataType = 'object';
	protected $availableTerritoriesType = AppUpdateRequest_Data_Relationships_AvailableTerritories::class;
	protected $availableTerritoriesDataType = 'object';

	/**
	* @return  AppUpdateRequest_Data_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  AppUpdateRequest_Data_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $prices;
	}
	/**
	* @return  AppUpdateRequest_Data_Relationships_AvailableTerritories
	*/
	public function getAvailableTerritories()
	{
		return $this->availableTerritories;
	}
	/**
	* @param  AppUpdateRequest_Data_Relationships_AvailableTerritories
	*/
	public function setAvailableTerritories($availableTerritories)
	{
		$this->availableTerritories = $availableTerritories;
		return $availableTerritories;
	}

}
class_alias(AppUpdateRequest_Data_Relationships::class, 'AppleService_AppStore_AppUpdateRequest_Data_Relationships');

class AppUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
	public $id;
	protected $attributesType = AppUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppUpdateRequest_Data_Relationships::class;
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
		return $attributes;
	}
	/**
	* @return  AppUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppUpdateRequest_Data::class, 'AppleService_AppStore_AppUpdateRequest_Data');

class AppUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppUpdateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = AppPriceInlineCreate::class;
	protected $includedDataType = 'array';

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
		return $data;
	}
	/**
	* @return  AppPriceInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  AppPriceInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $included;
	}

}
class_alias(AppUpdateRequest::class, 'AppleService_AppStore_AppUpdateRequest');

