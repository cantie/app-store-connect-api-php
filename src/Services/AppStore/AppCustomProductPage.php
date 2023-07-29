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

class AppCustomProductPage_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $url;
	public $visible;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getUrl()
	{
		return $this->url;
	}
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}
	public function getVisible()
	{
		return $this->visible;
	}
	public function setVisible($visible)
	{
		$this->visible = $visible;
		return $this;
	}

}

class AppCustomProductPage_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPage_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPage_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPage_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppCustomProductPage_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPage_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPage_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppCustomProductPage_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPage_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPage_Relationships_AppCustomProductPageVersions_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPage_Relationships_AppCustomProductPageVersions_Data extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPage_Relationships_AppCustomProductPageVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPage_Relationships_AppCustomProductPageVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppCustomProductPage_Relationships_AppCustomProductPageVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPage_Relationships_AppCustomProductPageVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPage_Relationships_AppCustomProductPageVersions_Links
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
	* @return  AppCustomProductPage_Relationships_AppCustomProductPageVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPage_Relationships_AppCustomProductPageVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPage_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppCustomProductPage_Relationships_App::class;
	protected $appDataType = 'object';
	protected $appCustomProductPageVersionsType = AppCustomProductPage_Relationships_AppCustomProductPageVersions::class;
	protected $appCustomProductPageVersionsDataType = 'object';

	/**
	* @return  AppCustomProductPage_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppCustomProductPage_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppCustomProductPage_Relationships_AppCustomProductPageVersions
	*/
	public function getAppCustomProductPageVersions()
	{
		return $this->appCustomProductPageVersions;
	}
	/**
	* @param  AppCustomProductPage_Relationships_AppCustomProductPageVersions
	*/
	public function setAppCustomProductPageVersions($appCustomProductPageVersions)
	{
		$this->appCustomProductPageVersions = $appCustomProductPageVersions;
		return $this;
	}

}

class AppCustomProductPage extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPages';
	public $id;
	protected $attributesType = AppCustomProductPage_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppCustomProductPage_Relationships::class;
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
	* @return  AppCustomProductPage_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppCustomProductPage_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppCustomProductPage_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPage_Relationships
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

