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

class AppEventUpdateRequest_Data_Attributes_TerritorySchedules extends \Cantie\AppStoreConnect\Model
{
	protected $territoriesType = '';
	protected $territoriesDataType = 'array';
	public $publishStart;
	public $eventStart;
	public $eventEnd;

	/**
	* @return  []
	*/
	public function getTerritories()
	{
		return $this->territories;
	}
	/**
	* @param  []
	*/
	public function setTerritories($territories)
	{
		$this->territories = $territories;
		return $this;
	}
	public function getPublishStart()
	{
		return $this->publishStart;
	}
	public function setPublishStart($publishStart)
	{
		$this->publishStart = $publishStart;
		return $this;
	}
	public function getEventStart()
	{
		return $this->eventStart;
	}
	public function setEventStart($eventStart)
	{
		$this->eventStart = $eventStart;
		return $this;
	}
	public function getEventEnd()
	{
		return $this->eventEnd;
	}
	public function setEventEnd($eventEnd)
	{
		$this->eventEnd = $eventEnd;
		return $this;
	}

}
class_alias(AppEventUpdateRequest_Data_Attributes_TerritorySchedules::class, 'AppleService_AppStore_AppEventUpdateRequest_Data_Attributes_TerritorySchedules');

class AppEventUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $badge; // LIVE_EVENT, PREMIERE, CHALLENGE, COMPETITION, NEW_SEASON, MAJOR_UPDATE, SPECIAL_EVENT
	public $deepLink;
	public $purchaseRequirement; // NO_COST_ASSOCIATED, IN_APP_PURCHASE, SUBSCRIPTION, IN_APP_PURCHASE_AND_SUBSCRIPTION, IN_APP_PURCHASE_OR_SUBSCRIPTION
	public $primaryLocale;
	public $priority; // HIGH, NORMAL
	public $purpose; // APPROPRIATE_FOR_ALL_USERS, ATTRACT_NEW_USERS, KEEP_ACTIVE_USERS_INFORMED, BRING_BACK_LAPSED_USERS
	protected $territorySchedulesType = AppEventUpdateRequest_Data_Attributes_TerritorySchedules::class;
	protected $territorySchedulesDataType = 'array';

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $this;
	}
	public function getBadge()
	{
		return $this->badge;
	}
	public function setBadge($badge)
	{
		$this->badge = $badge;
		return $this;
	}
	public function getDeepLink()
	{
		return $this->deepLink;
	}
	public function setDeepLink($deepLink)
	{
		$this->deepLink = $deepLink;
		return $this;
	}
	public function getPurchaseRequirement()
	{
		return $this->purchaseRequirement;
	}
	public function setPurchaseRequirement($purchaseRequirement)
	{
		$this->purchaseRequirement = $purchaseRequirement;
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
	public function getPriority()
	{
		return $this->priority;
	}
	public function setPriority($priority)
	{
		$this->priority = $priority;
		return $this;
	}
	public function getPurpose()
	{
		return $this->purpose;
	}
	public function setPurpose($purpose)
	{
		$this->purpose = $purpose;
		return $this;
	}
	/**
	* @return  AppEventUpdateRequest_Data_Attributes_TerritorySchedules[]
	*/
	public function getTerritorySchedules()
	{
		return $this->territorySchedules;
	}
	/**
	* @param  AppEventUpdateRequest_Data_Attributes_TerritorySchedules[]
	*/
	public function setTerritorySchedules($territorySchedules)
	{
		$this->territorySchedules = $territorySchedules;
		return $this;
	}

}
class_alias(AppEventUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_AppEventUpdateRequest_Data_Attributes');

class AppEventUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEvents';
	public $id;
	protected $attributesType = AppEventUpdateRequest_Data_Attributes::class;
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
	* @return  AppEventUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}
class_alias(AppEventUpdateRequest_Data::class, 'AppleService_AppStore_AppEventUpdateRequest_Data');

class AppEventUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEventUpdateRequest::class, 'AppleService_AppStore_AppEventUpdateRequest');

