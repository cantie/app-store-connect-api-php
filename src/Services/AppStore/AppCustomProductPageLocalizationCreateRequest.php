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

class AppCustomProductPageLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $promotionalText;

	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}
	public function getPromotionalText()
	{
		return $this->promotionalText;
	}
	public function setPromotionalText($promotionalText)
	{
		$this->promotionalText = $promotionalText;
		return $this;
	}

}
class_alias(AppCustomProductPageLocalizationCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppCustomProductPageLocalizationCreateRequest_Data_Attributes');

class AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageVersions';
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
class_alias(AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data::class, 'AppleService_AppStore_AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data');

class AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion::class, 'AppleService_AppStore_AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion');

class AppCustomProductPageLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appCustomProductPageVersionType = AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion::class;
	protected $appCustomProductPageVersionDataType = 'object';

	/**
	* @return  AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion
	*/
	public function getAppCustomProductPageVersion()
	{
		return $this->appCustomProductPageVersion;
	}
	/**
	* @param  AppCustomProductPageLocalizationCreateRequest_Data_Relationships_AppCustomProductPageVersion
	*/
	public function setAppCustomProductPageVersion($appCustomProductPageVersion)
	{
		$this->appCustomProductPageVersion = $appCustomProductPageVersion;
		return $this;
	}

}
class_alias(AppCustomProductPageLocalizationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppCustomProductPageLocalizationCreateRequest_Data_Relationships');

class AppCustomProductPageLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageLocalizations';
	protected $attributesType = AppCustomProductPageLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppCustomProductPageLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  AppCustomProductPageLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppCustomProductPageLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppCustomProductPageLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPageLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppCustomProductPageLocalizationCreateRequest_Data::class, 'AppleService_AppStore_AppCustomProductPageLocalizationCreateRequest_Data');

class AppCustomProductPageLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageLocalizationCreateRequest::class, 'AppleService_AppStore_AppCustomProductPageLocalizationCreateRequest');

