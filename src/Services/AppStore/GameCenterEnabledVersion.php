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

class GameCenterEnabledVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $platformType = Platform::class;
	protected $platformDataType = '';
	public $versionString;
	protected $iconAssetType = ImageAsset::class;
	protected $iconAssetDataType = '';

	/**
	* @return  Platform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  Platform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
	}
	public function getVersionString()
	{
		return $this->versionString;
	}
	public function setVersionString($versionString)
	{
		$this->versionString = $versionString;
		return $versionString;
	}
	/**
	* @return  ImageAsset
	*/
	public function getIconAsset()
	{
		return $this->iconAsset;
	}
	/**
	* @param  ImageAsset
	*/
	public function setIconAsset($iconAsset)
	{
		$this->iconAsset = $iconAsset;
		return $iconAsset;
	}

}
class_alias(GameCenterEnabledVersion_Attributes::class, 'AppleService_AppStore_GameCenterEnabledVersion_Attributes');

class GameCenterEnabledVersion_Relationships_CompatibleVersions_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(GameCenterEnabledVersion_Relationships_CompatibleVersions_Links::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships_CompatibleVersions_Links');

class GameCenterEnabledVersion_Relationships_CompatibleVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterEnabledVersions';
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
class_alias(GameCenterEnabledVersion_Relationships_CompatibleVersions_Data::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships_CompatibleVersions_Data');

class GameCenterEnabledVersion_Relationships_CompatibleVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterEnabledVersion_Relationships_CompatibleVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterEnabledVersion_Relationships_CompatibleVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterEnabledVersion_Relationships_CompatibleVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships_CompatibleVersions_Links
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
	* @return  GameCenterEnabledVersion_Relationships_CompatibleVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships_CompatibleVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(GameCenterEnabledVersion_Relationships_CompatibleVersions::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships_CompatibleVersions');

class GameCenterEnabledVersion_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(GameCenterEnabledVersion_Relationships_App_Links::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships_App_Links');

class GameCenterEnabledVersion_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(GameCenterEnabledVersion_Relationships_App_Data::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships_App_Data');

class GameCenterEnabledVersion_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterEnabledVersion_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterEnabledVersion_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterEnabledVersion_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  GameCenterEnabledVersion_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(GameCenterEnabledVersion_Relationships_App::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships_App');

class GameCenterEnabledVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $compatibleVersionsType = GameCenterEnabledVersion_Relationships_CompatibleVersions::class;
	protected $compatibleVersionsDataType = 'object';
	protected $appType = GameCenterEnabledVersion_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  GameCenterEnabledVersion_Relationships_CompatibleVersions
	*/
	public function getCompatibleVersions()
	{
		return $this->compatibleVersions;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships_CompatibleVersions
	*/
	public function setCompatibleVersions($compatibleVersions)
	{
		$this->compatibleVersions = $compatibleVersions;
		return $compatibleVersions;
	}
	/**
	* @return  GameCenterEnabledVersion_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}

}
class_alias(GameCenterEnabledVersion_Relationships::class, 'AppleService_AppStore_GameCenterEnabledVersion_Relationships');

class GameCenterEnabledVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterEnabledVersions';
	public $id;
	protected $attributesType = GameCenterEnabledVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterEnabledVersion_Relationships::class;
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
	* @return  GameCenterEnabledVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterEnabledVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  GameCenterEnabledVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterEnabledVersion_Relationships
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
class_alias(GameCenterEnabledVersion::class, 'AppleService_AppStore_GameCenterEnabledVersion');

