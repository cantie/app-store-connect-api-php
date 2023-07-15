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

class AppInfoLocalization_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $name;
	public $subtitle;
	public $privacyPolicyUrl;
	public $privacyChoicesUrl;
	public $privacyPolicyText;

	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $locale;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $name;
	}
	public function getSubtitle()
	{
		return $this->subtitle;
	}
	public function setSubtitle($subtitle)
	{
		$this->subtitle = $subtitle;
		return $subtitle;
	}
	public function getPrivacyPolicyUrl()
	{
		return $this->privacyPolicyUrl;
	}
	public function setPrivacyPolicyUrl($privacyPolicyUrl)
	{
		$this->privacyPolicyUrl = $privacyPolicyUrl;
		return $privacyPolicyUrl;
	}
	public function getPrivacyChoicesUrl()
	{
		return $this->privacyChoicesUrl;
	}
	public function setPrivacyChoicesUrl($privacyChoicesUrl)
	{
		$this->privacyChoicesUrl = $privacyChoicesUrl;
		return $privacyChoicesUrl;
	}
	public function getPrivacyPolicyText()
	{
		return $this->privacyPolicyText;
	}
	public function setPrivacyPolicyText($privacyPolicyText)
	{
		$this->privacyPolicyText = $privacyPolicyText;
		return $privacyPolicyText;
	}

}
class_alias(AppInfoLocalization_Attributes::class, 'AppleService_AppStore_AppInfoLocalization_Attributes');

class AppInfoLocalization_Relationships_AppInfo_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppInfoLocalization_Relationships_AppInfo_Links::class, 'AppleService_AppStore_AppInfoLocalization_Relationships_AppInfo_Links');

class AppInfoLocalization_Relationships_AppInfo_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfos';
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
class_alias(AppInfoLocalization_Relationships_AppInfo_Data::class, 'AppleService_AppStore_AppInfoLocalization_Relationships_AppInfo_Data');

class AppInfoLocalization_Relationships_AppInfo extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfoLocalization_Relationships_AppInfo_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfoLocalization_Relationships_AppInfo_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoLocalization_Relationships_AppInfo_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfoLocalization_Relationships_AppInfo_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppInfoLocalization_Relationships_AppInfo_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoLocalization_Relationships_AppInfo_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoLocalization_Relationships_AppInfo::class, 'AppleService_AppStore_AppInfoLocalization_Relationships_AppInfo');

class AppInfoLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appInfoType = AppInfoLocalization_Relationships_AppInfo::class;
	protected $appInfoDataType = 'object';

	/**
	* @return  AppInfoLocalization_Relationships_AppInfo
	*/
	public function getAppInfo()
	{
		return $this->appInfo;
	}
	/**
	* @param  AppInfoLocalization_Relationships_AppInfo
	*/
	public function setAppInfo($appInfo)
	{
		$this->appInfo = $appInfo;
		return $appInfo;
	}

}
class_alias(AppInfoLocalization_Relationships::class, 'AppleService_AppStore_AppInfoLocalization_Relationships');

class AppInfoLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfoLocalizations';
	public $id;
	protected $attributesType = AppInfoLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppInfoLocalization_Relationships::class;
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
	* @return  AppInfoLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppInfoLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppInfoLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppInfoLocalization_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
		return $links;
	}

}
class_alias(AppInfoLocalization::class, 'AppleService_AppStore_AppInfoLocalization');

