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

class AppInfoLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
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
		return $this;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getSubtitle()
	{
		return $this->subtitle;
	}
	public function setSubtitle($subtitle)
	{
		$this->subtitle = $subtitle;
		return $this;
	}
	public function getPrivacyPolicyUrl()
	{
		return $this->privacyPolicyUrl;
	}
	public function setPrivacyPolicyUrl($privacyPolicyUrl)
	{
		$this->privacyPolicyUrl = $privacyPolicyUrl;
		return $this;
	}
	public function getPrivacyChoicesUrl()
	{
		return $this->privacyChoicesUrl;
	}
	public function setPrivacyChoicesUrl($privacyChoicesUrl)
	{
		$this->privacyChoicesUrl = $privacyChoicesUrl;
		return $this;
	}
	public function getPrivacyPolicyText()
	{
		return $this->privacyPolicyText;
	}
	public function setPrivacyPolicyText($privacyPolicyText)
	{
		$this->privacyPolicyText = $privacyPolicyText;
		return $this;
	}

}

class AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfoLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appInfoType = AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo::class;
	protected $appInfoDataType = 'object';

	/**
	* @return  AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo
	*/
	public function getAppInfo()
	{
		return $this->appInfo;
	}
	/**
	* @param  AppInfoLocalizationCreateRequest_Data_Relationships_AppInfo
	*/
	public function setAppInfo($appInfo)
	{
		$this->appInfo = $appInfo;
		return $this;
	}

}

class AppInfoLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfoLocalizations';
	protected $attributesType = AppInfoLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppInfoLocalizationCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  AppInfoLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppInfoLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppInfoLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppInfoLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppInfoLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

