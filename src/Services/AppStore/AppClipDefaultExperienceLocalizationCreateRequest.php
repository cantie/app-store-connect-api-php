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

class AppClipDefaultExperienceLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $subtitle;

	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $locale;
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

}
class_alias(AppClipDefaultExperienceLocalizationCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalizationCreateRequest_Data_Attributes');

class AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
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
class_alias(AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience_Data');

class AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience');

class AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipDefaultExperienceType = AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience::class;
	protected $appClipDefaultExperienceDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience
	*/
	public function getAppClipDefaultExperience()
	{
		return $this->appClipDefaultExperience;
	}
	/**
	* @param  AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships_AppClipDefaultExperience
	*/
	public function setAppClipDefaultExperience($appClipDefaultExperience)
	{
		$this->appClipDefaultExperience = $appClipDefaultExperience;
		return $appClipDefaultExperience;
	}

}
class_alias(AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships');

class AppClipDefaultExperienceLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperienceLocalizations';
	protected $attributesType = AppClipDefaultExperienceLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  AppClipDefaultExperienceLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipDefaultExperienceLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipDefaultExperienceLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppClipDefaultExperienceLocalizationCreateRequest_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalizationCreateRequest_Data');

class AppClipDefaultExperienceLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppClipDefaultExperienceLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClipDefaultExperienceLocalizationCreateRequest::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalizationCreateRequest');

