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

class AppStoreVersionLocalization_Attributes extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Attributes::class, 'AppleService_AppStore_AppStoreVersionLocalization_Attributes');

class AppStoreVersionLocalization_Relationships_AppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Relationships_AppStoreVersion_Links::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppStoreVersion_Links');

class AppStoreVersionLocalization_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppStoreVersion_Data');

class AppStoreVersionLocalization_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionLocalization_Relationships_AppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionLocalization_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionLocalization_Relationships_AppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppStoreVersionLocalization_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionLocalization_Relationships_AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppStoreVersion');

class AppStoreVersionLocalization_Relationships_AppScreenshotSets_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Relationships_AppScreenshotSets_Links::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppScreenshotSets_Links');

class AppStoreVersionLocalization_Relationships_AppScreenshotSets_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Relationships_AppScreenshotSets_Data::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppScreenshotSets_Data');

class AppStoreVersionLocalization_Relationships_AppScreenshotSets extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionLocalization_Relationships_AppScreenshotSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionLocalization_Relationships_AppScreenshotSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionLocalization_Relationships_AppScreenshotSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppScreenshotSets_Links
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
	* @return  AppStoreVersionLocalization_Relationships_AppScreenshotSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppScreenshotSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionLocalization_Relationships_AppScreenshotSets::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppScreenshotSets');

class AppStoreVersionLocalization_Relationships_AppPreviewSets_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Relationships_AppPreviewSets_Links::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppPreviewSets_Links');

class AppStoreVersionLocalization_Relationships_AppPreviewSets_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionLocalization_Relationships_AppPreviewSets_Data::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppPreviewSets_Data');

class AppStoreVersionLocalization_Relationships_AppPreviewSets extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionLocalization_Relationships_AppPreviewSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionLocalization_Relationships_AppPreviewSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionLocalization_Relationships_AppPreviewSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppPreviewSets_Links
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
	* @return  AppStoreVersionLocalization_Relationships_AppPreviewSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppPreviewSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionLocalization_Relationships_AppPreviewSets::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships_AppPreviewSets');

class AppStoreVersionLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = AppStoreVersionLocalization_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';
	protected $appScreenshotSetsType = AppStoreVersionLocalization_Relationships_AppScreenshotSets::class;
	protected $appScreenshotSetsDataType = 'object';
	protected $appPreviewSetsType = AppStoreVersionLocalization_Relationships_AppPreviewSets::class;
	protected $appPreviewSetsDataType = 'object';

	/**
	* @return  AppStoreVersionLocalization_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $appStoreVersion;
	}
	/**
	* @return  AppStoreVersionLocalization_Relationships_AppScreenshotSets
	*/
	public function getAppScreenshotSets()
	{
		return $this->appScreenshotSets;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppScreenshotSets
	*/
	public function setAppScreenshotSets($appScreenshotSets)
	{
		$this->appScreenshotSets = $appScreenshotSets;
		return $appScreenshotSets;
	}
	/**
	* @return  AppStoreVersionLocalization_Relationships_AppPreviewSets
	*/
	public function getAppPreviewSets()
	{
		return $this->appPreviewSets;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships_AppPreviewSets
	*/
	public function setAppPreviewSets($appPreviewSets)
	{
		$this->appPreviewSets = $appPreviewSets;
		return $appPreviewSets;
	}

}
class_alias(AppStoreVersionLocalization_Relationships::class, 'AppleService_AppStore_AppStoreVersionLocalization_Relationships');

class AppStoreVersionLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionLocalizations';
	public $id;
	protected $attributesType = AppStoreVersionLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionLocalization_Relationships::class;
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
	* @return  AppStoreVersionLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppStoreVersionLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionLocalization_Relationships
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
class_alias(AppStoreVersionLocalization::class, 'AppleService_AppStore_AppStoreVersionLocalization');

