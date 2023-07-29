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

class AppEventLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $name;
	public $shortDescription;
	public $longDescription;

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
	public function getShortDescription()
	{
		return $this->shortDescription;
	}
	public function setShortDescription($shortDescription)
	{
		$this->shortDescription = $shortDescription;
		return $this;
	}
	public function getLongDescription()
	{
		return $this->longDescription;
	}
	public function setLongDescription($longDescription)
	{
		$this->longDescription = $longDescription;
		return $this;
	}

}

class AppEventLocalizationCreateRequest_Data_Relationships_AppEvent_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEvents';
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

class AppEventLocalizationCreateRequest_Data_Relationships_AppEvent extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventLocalizationCreateRequest_Data_Relationships_AppEvent_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventLocalizationCreateRequest_Data_Relationships_AppEvent_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventLocalizationCreateRequest_Data_Relationships_AppEvent_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEventLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEventType = AppEventLocalizationCreateRequest_Data_Relationships_AppEvent::class;
	protected $appEventDataType = 'object';

	/**
	* @return  AppEventLocalizationCreateRequest_Data_Relationships_AppEvent
	*/
	public function getAppEvent()
	{
		return $this->appEvent;
	}
	/**
	* @param  AppEventLocalizationCreateRequest_Data_Relationships_AppEvent
	*/
	public function setAppEvent($appEvent)
	{
		$this->appEvent = $appEvent;
		return $this;
	}

}

class AppEventLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventLocalizations';
	protected $attributesType = AppEventLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEventLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  AppEventLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEventLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEventLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppEventLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

