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

class AppClipDefaultExperienceLocalization_Attributes extends \Cantie\AppStoreConnect\Model
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

}
class_alias(AppClipDefaultExperienceLocalization_Attributes::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Attributes');

class AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Links::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Links');

class AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Data');

class AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience');

class AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Links::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Links');

class AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipHeaderImages';
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
class_alias(AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Data');

class AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage');

class AppClipDefaultExperienceLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipDefaultExperienceType = AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience::class;
	protected $appClipDefaultExperienceDataType = 'object';
	protected $appClipHeaderImageType = AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage::class;
	protected $appClipHeaderImageDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience
	*/
	public function getAppClipDefaultExperience()
	{
		return $this->appClipDefaultExperience;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships_AppClipDefaultExperience
	*/
	public function setAppClipDefaultExperience($appClipDefaultExperience)
	{
		$this->appClipDefaultExperience = $appClipDefaultExperience;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage
	*/
	public function getAppClipHeaderImage()
	{
		return $this->appClipHeaderImage;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships_AppClipHeaderImage
	*/
	public function setAppClipHeaderImage($appClipHeaderImage)
	{
		$this->appClipHeaderImage = $appClipHeaderImage;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceLocalization_Relationships::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization_Relationships');

class AppClipDefaultExperienceLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperienceLocalizations';
	public $id;
	protected $attributesType = AppClipDefaultExperienceLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipDefaultExperienceLocalization_Relationships::class;
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
	* @return  AppClipDefaultExperienceLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipDefaultExperienceLocalization_Relationships
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
class_alias(AppClipDefaultExperienceLocalization::class, 'AppleService_AppStore_AppClipDefaultExperienceLocalization');

