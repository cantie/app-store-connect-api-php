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

class AppCustomProductPageVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $version;
	public $state; // PREPARE_FOR_SUBMISSION, READY_FOR_REVIEW, WAITING_FOR_REVIEW, IN_REVIEW, ACCEPTED, APPROVED, REPLACED_WITH_NEW_VERSION, REJECTED

	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

}

class AppCustomProductPageVersion_Relationships_AppCustomProductPage_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageVersion_Relationships_AppCustomProductPage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPages';
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

class AppCustomProductPageVersion_Relationships_AppCustomProductPage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPageVersion_Relationships_AppCustomProductPage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppCustomProductPageVersion_Relationships_AppCustomProductPage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageVersion_Relationships_AppCustomProductPage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships_AppCustomProductPage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppCustomProductPageVersion_Relationships_AppCustomProductPage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships_AppCustomProductPage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageLocalizations';
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

class AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Links
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
	* @return  AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appCustomProductPageType = AppCustomProductPageVersion_Relationships_AppCustomProductPage::class;
	protected $appCustomProductPageDataType = 'object';
	protected $appCustomProductPageLocalizationsType = AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations::class;
	protected $appCustomProductPageLocalizationsDataType = 'object';

	/**
	* @return  AppCustomProductPageVersion_Relationships_AppCustomProductPage
	*/
	public function getAppCustomProductPage()
	{
		return $this->appCustomProductPage;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships_AppCustomProductPage
	*/
	public function setAppCustomProductPage($appCustomProductPage)
	{
		$this->appCustomProductPage = $appCustomProductPage;
		return $this;
	}
	/**
	* @return  AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations
	*/
	public function getAppCustomProductPageLocalizations()
	{
		return $this->appCustomProductPageLocalizations;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships_AppCustomProductPageLocalizations
	*/
	public function setAppCustomProductPageLocalizations($appCustomProductPageLocalizations)
	{
		$this->appCustomProductPageLocalizations = $appCustomProductPageLocalizations;
		return $this;
	}

}

class AppCustomProductPageVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageVersions';
	public $id;
	protected $attributesType = AppCustomProductPageVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppCustomProductPageVersion_Relationships::class;
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
	* @return  AppCustomProductPageVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppCustomProductPageVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppCustomProductPageVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPageVersion_Relationships
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

