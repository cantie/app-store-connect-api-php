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

class AppStoreVersionLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $description;
	public $locale;
	public $keywords;
	public $marketingUrl;
	public $promotionalText;
	public $supportUrl;
	public $whatsNew;

	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
		return $description;
	}
	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $locale;
	}
	public function getKeywords()
	{
		return $this->keywords;
	}
	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		return $keywords;
	}
	public function getMarketingUrl()
	{
		return $this->marketingUrl;
	}
	public function setMarketingUrl($marketingUrl)
	{
		$this->marketingUrl = $marketingUrl;
		return $marketingUrl;
	}
	public function getPromotionalText()
	{
		return $this->promotionalText;
	}
	public function setPromotionalText($promotionalText)
	{
		$this->promotionalText = $promotionalText;
		return $promotionalText;
	}
	public function getSupportUrl()
	{
		return $this->supportUrl;
	}
	public function setSupportUrl($supportUrl)
	{
		$this->supportUrl = $supportUrl;
		return $supportUrl;
	}
	public function getWhatsNew()
	{
		return $this->whatsNew;
	}
	public function setWhatsNew($whatsNew)
	{
		$this->whatsNew = $whatsNew;
		return $whatsNew;
	}

}
class_alias(AppStoreVersionLocalizationCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppStoreVersionLocalizationCreateRequest_Data_Attributes');

class AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion_Data');

class AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion');

class AppStoreVersionLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';

	/**
	* @return  AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  AppStoreVersionLocalizationCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $appStoreVersion;
	}

}
class_alias(AppStoreVersionLocalizationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppStoreVersionLocalizationCreateRequest_Data_Relationships');

class AppStoreVersionLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionLocalizations';
	protected $attributesType = AppStoreVersionLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  AppStoreVersionLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppStoreVersionLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppStoreVersionLocalizationCreateRequest_Data::class, 'AppleService_AppStore_AppStoreVersionLocalizationCreateRequest_Data');

class AppStoreVersionLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionLocalizationCreateRequest::class, 'AppleService_AppStore_AppStoreVersionLocalizationCreateRequest');

