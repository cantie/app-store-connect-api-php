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

class CiMacOsVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $version;
	public $name;

	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $version;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $name;
	}

}
class_alias(CiMacOsVersion_Attributes::class, 'AppleService_AppStore_CiMacOsVersion_Attributes');

class CiMacOsVersion_Relationships_XcodeVersions_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiMacOsVersion_Relationships_XcodeVersions_Links::class, 'AppleService_AppStore_CiMacOsVersion_Relationships_XcodeVersions_Links');

class CiMacOsVersion_Relationships_XcodeVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciXcodeVersions';
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
class_alias(CiMacOsVersion_Relationships_XcodeVersions_Data::class, 'AppleService_AppStore_CiMacOsVersion_Relationships_XcodeVersions_Data');

class CiMacOsVersion_Relationships_XcodeVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiMacOsVersion_Relationships_XcodeVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = CiMacOsVersion_Relationships_XcodeVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  CiMacOsVersion_Relationships_XcodeVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiMacOsVersion_Relationships_XcodeVersions_Links
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
	* @return  CiMacOsVersion_Relationships_XcodeVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiMacOsVersion_Relationships_XcodeVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(CiMacOsVersion_Relationships_XcodeVersions::class, 'AppleService_AppStore_CiMacOsVersion_Relationships_XcodeVersions');

class CiMacOsVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $xcodeVersionsType = CiMacOsVersion_Relationships_XcodeVersions::class;
	protected $xcodeVersionsDataType = 'object';

	/**
	* @return  CiMacOsVersion_Relationships_XcodeVersions
	*/
	public function getXcodeVersions()
	{
		return $this->xcodeVersions;
	}
	/**
	* @param  CiMacOsVersion_Relationships_XcodeVersions
	*/
	public function setXcodeVersions($xcodeVersions)
	{
		$this->xcodeVersions = $xcodeVersions;
		return $xcodeVersions;
	}

}
class_alias(CiMacOsVersion_Relationships::class, 'AppleService_AppStore_CiMacOsVersion_Relationships');

class CiMacOsVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciMacOsVersions';
	public $id;
	protected $attributesType = CiMacOsVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiMacOsVersion_Relationships::class;
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
	* @return  CiMacOsVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiMacOsVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  CiMacOsVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiMacOsVersion_Relationships
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
class_alias(CiMacOsVersion::class, 'AppleService_AppStore_CiMacOsVersion');

