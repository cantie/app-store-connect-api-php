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

class BetaGroup_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $createdDate;
	public $isInternalGroup;
	public $hasAccessToAllBuilds;
	public $publicLinkEnabled;
	public $publicLinkId;
	public $publicLinkLimitEnabled;
	public $publicLinkLimit;
	public $publicLink;
	public $feedbackEnabled;
	public $iosBuildsAvailableForAppleSiliconMac;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $this;
	}
	public function getIsInternalGroup()
	{
		return $this->isInternalGroup;
	}
	public function setIsInternalGroup($isInternalGroup)
	{
		$this->isInternalGroup = $isInternalGroup;
		return $this;
	}
	public function getHasAccessToAllBuilds()
	{
		return $this->hasAccessToAllBuilds;
	}
	public function setHasAccessToAllBuilds($hasAccessToAllBuilds)
	{
		$this->hasAccessToAllBuilds = $hasAccessToAllBuilds;
		return $this;
	}
	public function getPublicLinkEnabled()
	{
		return $this->publicLinkEnabled;
	}
	public function setPublicLinkEnabled($publicLinkEnabled)
	{
		$this->publicLinkEnabled = $publicLinkEnabled;
		return $this;
	}
	public function getPublicLinkId()
	{
		return $this->publicLinkId;
	}
	public function setPublicLinkId($publicLinkId)
	{
		$this->publicLinkId = $publicLinkId;
		return $this;
	}
	public function getPublicLinkLimitEnabled()
	{
		return $this->publicLinkLimitEnabled;
	}
	public function setPublicLinkLimitEnabled($publicLinkLimitEnabled)
	{
		$this->publicLinkLimitEnabled = $publicLinkLimitEnabled;
		return $this;
	}
	public function getPublicLinkLimit()
	{
		return $this->publicLinkLimit;
	}
	public function setPublicLinkLimit($publicLinkLimit)
	{
		$this->publicLinkLimit = $publicLinkLimit;
		return $this;
	}
	public function getPublicLink()
	{
		return $this->publicLink;
	}
	public function setPublicLink($publicLink)
	{
		$this->publicLink = $publicLink;
		return $this;
	}
	public function getFeedbackEnabled()
	{
		return $this->feedbackEnabled;
	}
	public function setFeedbackEnabled($feedbackEnabled)
	{
		$this->feedbackEnabled = $feedbackEnabled;
		return $this;
	}
	public function getIosBuildsAvailableForAppleSiliconMac()
	{
		return $this->iosBuildsAvailableForAppleSiliconMac;
	}
	public function setIosBuildsAvailableForAppleSiliconMac($iosBuildsAvailableForAppleSiliconMac)
	{
		$this->iosBuildsAvailableForAppleSiliconMac = $iosBuildsAvailableForAppleSiliconMac;
		return $this;
	}

}
class_alias(BetaGroup_Attributes::class, 'AppleService_AppStore_BetaGroup_Attributes');

class BetaGroup_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaGroup_Relationships_App_Links::class, 'AppleService_AppStore_BetaGroup_Relationships_App_Links');

class BetaGroup_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
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
class_alias(BetaGroup_Relationships_App_Data::class, 'AppleService_AppStore_BetaGroup_Relationships_App_Data');

class BetaGroup_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaGroup_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BetaGroup_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaGroup_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaGroup_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BetaGroup_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroup_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaGroup_Relationships_App::class, 'AppleService_AppStore_BetaGroup_Relationships_App');

class BetaGroup_Relationships_Builds_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaGroup_Relationships_Builds_Links::class, 'AppleService_AppStore_BetaGroup_Relationships_Builds_Links');

class BetaGroup_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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
class_alias(BetaGroup_Relationships_Builds_Data::class, 'AppleService_AppStore_BetaGroup_Relationships_Builds_Data');

class BetaGroup_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaGroup_Relationships_Builds_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BetaGroup_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaGroup_Relationships_Builds_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaGroup_Relationships_Builds_Links
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
	* @return  BetaGroup_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroup_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaGroup_Relationships_Builds::class, 'AppleService_AppStore_BetaGroup_Relationships_Builds');

class BetaGroup_Relationships_BetaTesters_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaGroup_Relationships_BetaTesters_Links::class, 'AppleService_AppStore_BetaGroup_Relationships_BetaTesters_Links');

class BetaGroup_Relationships_BetaTesters_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesters';
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
class_alias(BetaGroup_Relationships_BetaTesters_Data::class, 'AppleService_AppStore_BetaGroup_Relationships_BetaTesters_Data');

class BetaGroup_Relationships_BetaTesters extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaGroup_Relationships_BetaTesters_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BetaGroup_Relationships_BetaTesters_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaGroup_Relationships_BetaTesters_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaGroup_Relationships_BetaTesters_Links
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
	* @return  BetaGroup_Relationships_BetaTesters_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroup_Relationships_BetaTesters_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaGroup_Relationships_BetaTesters::class, 'AppleService_AppStore_BetaGroup_Relationships_BetaTesters');

class BetaGroup_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = BetaGroup_Relationships_App::class;
	protected $appDataType = 'object';
	protected $buildsType = BetaGroup_Relationships_Builds::class;
	protected $buildsDataType = 'object';
	protected $betaTestersType = BetaGroup_Relationships_BetaTesters::class;
	protected $betaTestersDataType = 'object';

	/**
	* @return  BetaGroup_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  BetaGroup_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  BetaGroup_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  BetaGroup_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $this;
	}
	/**
	* @return  BetaGroup_Relationships_BetaTesters
	*/
	public function getBetaTesters()
	{
		return $this->betaTesters;
	}
	/**
	* @param  BetaGroup_Relationships_BetaTesters
	*/
	public function setBetaTesters($betaTesters)
	{
		$this->betaTesters = $betaTesters;
		return $this;
	}

}
class_alias(BetaGroup_Relationships::class, 'AppleService_AppStore_BetaGroup_Relationships');

class BetaGroup extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
	public $id;
	protected $attributesType = BetaGroup_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaGroup_Relationships::class;
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
	* @return  BetaGroup_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaGroup_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BetaGroup_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaGroup_Relationships
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
class_alias(BetaGroup::class, 'AppleService_AppStore_BetaGroup');

