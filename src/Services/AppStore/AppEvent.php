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

class AppEvent_Attributes_TerritorySchedules extends \Cantie\AppStoreConnect\Model
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

class AppEvent_Attributes_ArchivedTerritorySchedules extends \Cantie\AppStoreConnect\Model
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

class AppEvent_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $badge; // LIVE_EVENT, PREMIERE, CHALLENGE, COMPETITION, NEW_SEASON, MAJOR_UPDATE, SPECIAL_EVENT
	public $eventState; // DRAFT, READY_FOR_REVIEW, WAITING_FOR_REVIEW, IN_REVIEW, REJECTED, ACCEPTED, APPROVED, PUBLISHED, PAST, ARCHIVED
	public $deepLink;
	public $purchaseRequirement; // NO_COST_ASSOCIATED, IN_APP_PURCHASE, SUBSCRIPTION, IN_APP_PURCHASE_AND_SUBSCRIPTION, IN_APP_PURCHASE_OR_SUBSCRIPTION
	public $primaryLocale;
	public $priority; // HIGH, NORMAL
	public $purpose; // APPROPRIATE_FOR_ALL_USERS, ATTRACT_NEW_USERS, KEEP_ACTIVE_USERS_INFORMED, BRING_BACK_LAPSED_USERS
	protected $territorySchedulesType = AppEvent_Attributes_TerritorySchedules::class;
	protected $territorySchedulesDataType = 'array';
	protected $archivedTerritorySchedulesType = AppEvent_Attributes_ArchivedTerritorySchedules::class;
	protected $archivedTerritorySchedulesDataType = 'array';

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
	public function getEventState()
	{
		return $this->eventState;
	}
	public function setEventState($eventState)
	{
		$this->eventState = $eventState;
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
	* @return  AppEvent_Attributes_TerritorySchedules[]
	*/
	public function getTerritorySchedules()
	{
		return $this->territorySchedules;
	}
	/**
	* @param  AppEvent_Attributes_TerritorySchedules[]
	*/
	public function setTerritorySchedules($territorySchedules)
	{
		$this->territorySchedules = $territorySchedules;
		return $this;
	}
	/**
	* @return  AppEvent_Attributes_ArchivedTerritorySchedules[]
	*/
	public function getArchivedTerritorySchedules()
	{
		return $this->archivedTerritorySchedules;
	}
	/**
	* @param  AppEvent_Attributes_ArchivedTerritorySchedules[]
	*/
	public function setArchivedTerritorySchedules($archivedTerritorySchedules)
	{
		$this->archivedTerritorySchedules = $archivedTerritorySchedules;
		return $this;
	}

}

class AppEvent_Relationships_Localizations_Links extends \Cantie\AppStoreConnect\Model
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

class AppEvent_Relationships_Localizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventLocalizations';
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

class AppEvent_Relationships_Localizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEvent_Relationships_Localizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppEvent_Relationships_Localizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppEvent_Relationships_Localizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEvent_Relationships_Localizations_Links
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
	* @return  AppEvent_Relationships_Localizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEvent_Relationships_Localizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEvent_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $localizationsType = AppEvent_Relationships_Localizations::class;
	protected $localizationsDataType = 'object';

	/**
	* @return  AppEvent_Relationships_Localizations
	*/
	public function getLocalizations()
	{
		return $this->localizations;
	}
	/**
	* @param  AppEvent_Relationships_Localizations
	*/
	public function setLocalizations($localizations)
	{
		$this->localizations = $localizations;
		return $this;
	}

}

class AppEvent extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEvents';
	public $id;
	protected $attributesType = AppEvent_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEvent_Relationships::class;
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
	* @return  AppEvent_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEvent_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEvent_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEvent_Relationships
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

