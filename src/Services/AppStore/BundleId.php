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

class BundleId_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $platform; // 
	public $identifier;
	public $seedId;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
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
	public function getIdentifier()
	{
		return $this->identifier;
	}
	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		return $this;
	}
	public function getSeedId()
	{
		return $this->seedId;
	}
	public function setSeedId($seedId)
	{
		$this->seedId = $seedId;
		return $this;
	}

}
class_alias(BundleId_Attributes::class, 'AppleService_AppStore_BundleId_Attributes');

class BundleId_Relationships_Profiles_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BundleId_Relationships_Profiles_Links::class, 'AppleService_AppStore_BundleId_Relationships_Profiles_Links');

class BundleId_Relationships_Profiles_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'profiles';
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
class_alias(BundleId_Relationships_Profiles_Data::class, 'AppleService_AppStore_BundleId_Relationships_Profiles_Data');

class BundleId_Relationships_Profiles extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BundleId_Relationships_Profiles_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BundleId_Relationships_Profiles_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BundleId_Relationships_Profiles_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BundleId_Relationships_Profiles_Links
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
	* @return  BundleId_Relationships_Profiles_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BundleId_Relationships_Profiles_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BundleId_Relationships_Profiles::class, 'AppleService_AppStore_BundleId_Relationships_Profiles');

class BundleId_Relationships_BundleIdCapabilities_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BundleId_Relationships_BundleIdCapabilities_Links::class, 'AppleService_AppStore_BundleId_Relationships_BundleIdCapabilities_Links');

class BundleId_Relationships_BundleIdCapabilities_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIdCapabilities';
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
class_alias(BundleId_Relationships_BundleIdCapabilities_Data::class, 'AppleService_AppStore_BundleId_Relationships_BundleIdCapabilities_Data');

class BundleId_Relationships_BundleIdCapabilities extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BundleId_Relationships_BundleIdCapabilities_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BundleId_Relationships_BundleIdCapabilities_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BundleId_Relationships_BundleIdCapabilities_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BundleId_Relationships_BundleIdCapabilities_Links
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
	* @return  BundleId_Relationships_BundleIdCapabilities_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BundleId_Relationships_BundleIdCapabilities_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BundleId_Relationships_BundleIdCapabilities::class, 'AppleService_AppStore_BundleId_Relationships_BundleIdCapabilities');

class BundleId_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BundleId_Relationships_App_Links::class, 'AppleService_AppStore_BundleId_Relationships_App_Links');

class BundleId_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BundleId_Relationships_App_Data::class, 'AppleService_AppStore_BundleId_Relationships_App_Data');

class BundleId_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BundleId_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BundleId_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BundleId_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BundleId_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BundleId_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BundleId_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BundleId_Relationships_App::class, 'AppleService_AppStore_BundleId_Relationships_App');

class BundleId_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $profilesType = BundleId_Relationships_Profiles::class;
	protected $profilesDataType = 'object';
	protected $bundleIdCapabilitiesType = BundleId_Relationships_BundleIdCapabilities::class;
	protected $bundleIdCapabilitiesDataType = 'object';
	protected $appType = BundleId_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  BundleId_Relationships_Profiles
	*/
	public function getProfiles()
	{
		return $this->profiles;
	}
	/**
	* @param  BundleId_Relationships_Profiles
	*/
	public function setProfiles($profiles)
	{
		$this->profiles = $profiles;
		return $this;
	}
	/**
	* @return  BundleId_Relationships_BundleIdCapabilities
	*/
	public function getBundleIdCapabilities()
	{
		return $this->bundleIdCapabilities;
	}
	/**
	* @param  BundleId_Relationships_BundleIdCapabilities
	*/
	public function setBundleIdCapabilities($bundleIdCapabilities)
	{
		$this->bundleIdCapabilities = $bundleIdCapabilities;
		return $this;
	}
	/**
	* @return  BundleId_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  BundleId_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}

}
class_alias(BundleId_Relationships::class, 'AppleService_AppStore_BundleId_Relationships');

class BundleId extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIds';
	public $id;
	protected $attributesType = BundleId_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BundleId_Relationships::class;
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
	* @return  BundleId_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BundleId_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BundleId_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BundleId_Relationships
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
class_alias(BundleId::class, 'AppleService_AppStore_BundleId');

