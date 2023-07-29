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

class PreReleaseVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $version;
	public $platform; // 

	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  string
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $this;
	}

}

class PreReleaseVersion_Relationships_Builds_Links extends \Cantie\AppStoreConnect\Model
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

class PreReleaseVersion_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
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

class PreReleaseVersion_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = PreReleaseVersion_Relationships_Builds_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = PreReleaseVersion_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  PreReleaseVersion_Relationships_Builds_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PreReleaseVersion_Relationships_Builds_Links
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
	* @return  PreReleaseVersion_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PreReleaseVersion_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class PreReleaseVersion_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class PreReleaseVersion_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class PreReleaseVersion_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = PreReleaseVersion_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = PreReleaseVersion_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PreReleaseVersion_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PreReleaseVersion_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PreReleaseVersion_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PreReleaseVersion_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class PreReleaseVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildsType = PreReleaseVersion_Relationships_Builds::class;
	protected $buildsDataType = 'object';
	protected $appType = PreReleaseVersion_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  PreReleaseVersion_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  PreReleaseVersion_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $this;
	}
	/**
	* @return  PreReleaseVersion_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  PreReleaseVersion_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}

}

class PreReleaseVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'preReleaseVersions';
	public $id;
	protected $attributesType = PreReleaseVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = PreReleaseVersion_Relationships::class;
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
	* @return  PreReleaseVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  PreReleaseVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  PreReleaseVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  PreReleaseVersion_Relationships
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

