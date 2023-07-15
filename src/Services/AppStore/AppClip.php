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

class AppClip_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $bundleId;

	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $bundleId;
	}

}
class_alias(AppClip_Attributes::class, 'AppleService_AppStore_AppClip_Attributes');

class AppClip_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClip_Relationships_App_Links::class, 'AppleService_AppStore_AppClip_Relationships_App_Links');

class AppClip_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClip_Relationships_App_Data::class, 'AppleService_AppStore_AppClip_Relationships_App_Data');

class AppClip_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClip_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClip_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClip_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClip_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppClip_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClip_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClip_Relationships_App::class, 'AppleService_AppStore_AppClip_Relationships_App');

class AppClip_Relationships_AppClipDefaultExperiences_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClip_Relationships_AppClipDefaultExperiences_Links::class, 'AppleService_AppStore_AppClip_Relationships_AppClipDefaultExperiences_Links');

class AppClip_Relationships_AppClipDefaultExperiences_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClip_Relationships_AppClipDefaultExperiences_Data::class, 'AppleService_AppStore_AppClip_Relationships_AppClipDefaultExperiences_Data');

class AppClip_Relationships_AppClipDefaultExperiences extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClip_Relationships_AppClipDefaultExperiences_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppClip_Relationships_AppClipDefaultExperiences_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppClip_Relationships_AppClipDefaultExperiences_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClip_Relationships_AppClipDefaultExperiences_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
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
		return $meta;
	}
	/**
	* @return  AppClip_Relationships_AppClipDefaultExperiences_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClip_Relationships_AppClipDefaultExperiences_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClip_Relationships_AppClipDefaultExperiences::class, 'AppleService_AppStore_AppClip_Relationships_AppClipDefaultExperiences');

class AppClip_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppClip_Relationships_App::class;
	protected $appDataType = 'object';
	protected $appClipDefaultExperiencesType = AppClip_Relationships_AppClipDefaultExperiences::class;
	protected $appClipDefaultExperiencesDataType = 'object';

	/**
	* @return  AppClip_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppClip_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  AppClip_Relationships_AppClipDefaultExperiences
	*/
	public function getAppClipDefaultExperiences()
	{
		return $this->appClipDefaultExperiences;
	}
	/**
	* @param  AppClip_Relationships_AppClipDefaultExperiences
	*/
	public function setAppClipDefaultExperiences($appClipDefaultExperiences)
	{
		$this->appClipDefaultExperiences = $appClipDefaultExperiences;
		return $appClipDefaultExperiences;
	}

}
class_alias(AppClip_Relationships::class, 'AppleService_AppStore_AppClip_Relationships');

class AppClip extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClips';
	public $id;
	protected $attributesType = AppClip_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClip_Relationships::class;
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
	* @return  AppClip_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClip_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppClip_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClip_Relationships
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
class_alias(AppClip::class, 'AppleService_AppStore_AppClip');

