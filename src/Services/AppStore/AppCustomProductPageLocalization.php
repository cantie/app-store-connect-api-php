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

class AppCustomProductPageLocalization_Attributes extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Data extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appScreenshotSets';
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

class AppCustomProductPageLocalization_Relationships_AppScreenshotSets extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Links
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
	* @return  AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppScreenshotSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageLocalization_Relationships_AppPreviewSets_Links extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageLocalization_Relationships_AppPreviewSets_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreviewSets';
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

class AppCustomProductPageLocalization_Relationships_AppPreviewSets extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCustomProductPageLocalization_Relationships_AppPreviewSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppCustomProductPageLocalization_Relationships_AppPreviewSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppPreviewSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppPreviewSets_Links
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
	* @return  AppCustomProductPageLocalization_Relationships_AppPreviewSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppPreviewSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appCustomProductPageVersionType = AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion::class;
	protected $appCustomProductPageVersionDataType = 'object';
	protected $appScreenshotSetsType = AppCustomProductPageLocalization_Relationships_AppScreenshotSets::class;
	protected $appScreenshotSetsDataType = 'object';
	protected $appPreviewSetsType = AppCustomProductPageLocalization_Relationships_AppPreviewSets::class;
	protected $appPreviewSetsDataType = 'object';

	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion
	*/
	public function getAppCustomProductPageVersion()
	{
		return $this->appCustomProductPageVersion;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppCustomProductPageVersion
	*/
	public function setAppCustomProductPageVersion($appCustomProductPageVersion)
	{
		$this->appCustomProductPageVersion = $appCustomProductPageVersion;
		return $this;
	}
	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppScreenshotSets
	*/
	public function getAppScreenshotSets()
	{
		return $this->appScreenshotSets;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppScreenshotSets
	*/
	public function setAppScreenshotSets($appScreenshotSets)
	{
		$this->appScreenshotSets = $appScreenshotSets;
		return $this;
	}
	/**
	* @return  AppCustomProductPageLocalization_Relationships_AppPreviewSets
	*/
	public function getAppPreviewSets()
	{
		return $this->appPreviewSets;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships_AppPreviewSets
	*/
	public function setAppPreviewSets($appPreviewSets)
	{
		$this->appPreviewSets = $appPreviewSets;
		return $this;
	}

}

class AppCustomProductPageLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageLocalizations';
	public $id;
	protected $attributesType = AppCustomProductPageLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppCustomProductPageLocalization_Relationships::class;
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
	* @return  AppCustomProductPageLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppCustomProductPageLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppCustomProductPageLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPageLocalization_Relationships
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

