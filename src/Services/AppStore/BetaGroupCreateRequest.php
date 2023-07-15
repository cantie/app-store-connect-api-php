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

class BetaGroupCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $isInternalGroup;
	public $hasAccessToAllBuilds;
	public $publicLinkEnabled;
	public $publicLinkLimitEnabled;
	public $publicLinkLimit;
	public $feedbackEnabled;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $name;
	}
	public function getIsInternalGroup()
	{
		return $this->isInternalGroup;
	}
	public function setIsInternalGroup($isInternalGroup)
	{
		$this->isInternalGroup = $isInternalGroup;
		return $isInternalGroup;
	}
	public function getHasAccessToAllBuilds()
	{
		return $this->hasAccessToAllBuilds;
	}
	public function setHasAccessToAllBuilds($hasAccessToAllBuilds)
	{
		$this->hasAccessToAllBuilds = $hasAccessToAllBuilds;
		return $hasAccessToAllBuilds;
	}
	public function getPublicLinkEnabled()
	{
		return $this->publicLinkEnabled;
	}
	public function setPublicLinkEnabled($publicLinkEnabled)
	{
		$this->publicLinkEnabled = $publicLinkEnabled;
		return $publicLinkEnabled;
	}
	public function getPublicLinkLimitEnabled()
	{
		return $this->publicLinkLimitEnabled;
	}
	public function setPublicLinkLimitEnabled($publicLinkLimitEnabled)
	{
		$this->publicLinkLimitEnabled = $publicLinkLimitEnabled;
		return $publicLinkLimitEnabled;
	}
	public function getPublicLinkLimit()
	{
		return $this->publicLinkLimit;
	}
	public function setPublicLinkLimit($publicLinkLimit)
	{
		$this->publicLinkLimit = $publicLinkLimit;
		return $publicLinkLimit;
	}
	public function getFeedbackEnabled()
	{
		return $this->feedbackEnabled;
	}
	public function setFeedbackEnabled($feedbackEnabled)
	{
		$this->feedbackEnabled = $feedbackEnabled;
		return $feedbackEnabled;
	}

}
class_alias(BetaGroupCreateRequest_Data_Attributes::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Attributes');

class BetaGroupCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaGroupCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships_App_Data');

class BetaGroupCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaGroupCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaGroupCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaGroupCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships_App');

class BetaGroupCreateRequest_Data_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaGroupCreateRequest_Data_Relationships_Builds_Data::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships_Builds_Data');

class BetaGroupCreateRequest_Data_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaGroupCreateRequest_Data_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaGroupCreateRequest_Data_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaGroupCreateRequest_Data_Relationships_Builds::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships_Builds');

class BetaGroupCreateRequest_Data_Relationships_BetaTesters_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaGroupCreateRequest_Data_Relationships_BetaTesters_Data::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships_BetaTesters_Data');

class BetaGroupCreateRequest_Data_Relationships_BetaTesters extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaGroupCreateRequest_Data_Relationships_BetaTesters_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaGroupCreateRequest_Data_Relationships_BetaTesters_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships_BetaTesters_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaGroupCreateRequest_Data_Relationships_BetaTesters::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships_BetaTesters');

class BetaGroupCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = BetaGroupCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $buildsType = BetaGroupCreateRequest_Data_Relationships_Builds::class;
	protected $buildsDataType = 'object';
	protected $betaTestersType = BetaGroupCreateRequest_Data_Relationships_BetaTesters::class;
	protected $betaTestersDataType = 'object';

	/**
	* @return  BetaGroupCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  BetaGroupCreateRequest_Data_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $builds;
	}
	/**
	* @return  BetaGroupCreateRequest_Data_Relationships_BetaTesters
	*/
	public function getBetaTesters()
	{
		return $this->betaTesters;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships_BetaTesters
	*/
	public function setBetaTesters($betaTesters)
	{
		$this->betaTesters = $betaTesters;
		return $betaTesters;
	}

}
class_alias(BetaGroupCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data_Relationships');

class BetaGroupCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
	protected $attributesType = BetaGroupCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaGroupCreateRequest_Data_Relationships::class;
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
	* @return  BetaGroupCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaGroupCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaGroupCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(BetaGroupCreateRequest_Data::class, 'AppleService_AppStore_BetaGroupCreateRequest_Data');

class BetaGroupCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaGroupCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaGroupCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroupCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaGroupCreateRequest::class, 'AppleService_AppStore_BetaGroupCreateRequest');

