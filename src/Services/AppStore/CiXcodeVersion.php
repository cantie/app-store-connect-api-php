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

class CiXcodeVersion_Attributes_TestDestinations_AvailableRuntimes extends \Cantie\AppStoreConnect\Model
{
	public $runtimeName;
	public $runtimeIdentifier;

	public function getRuntimeName()
	{
		return $this->runtimeName;
	}
	public function setRuntimeName($runtimeName)
	{
		$this->runtimeName = $runtimeName;
		return $runtimeName;
	}
	public function getRuntimeIdentifier()
	{
		return $this->runtimeIdentifier;
	}
	public function setRuntimeIdentifier($runtimeIdentifier)
	{
		$this->runtimeIdentifier = $runtimeIdentifier;
		return $runtimeIdentifier;
	}

}
class_alias(CiXcodeVersion_Attributes_TestDestinations_AvailableRuntimes::class, 'AppleService_AppStore_CiXcodeVersion_Attributes_TestDestinations_AvailableRuntimes');

class CiXcodeVersion_Attributes_TestDestinations extends \Cantie\AppStoreConnect\Model
{
	public $deviceTypeName;
	public $deviceTypeIdentifier;
	protected $availableRuntimesType = CiXcodeVersion_Attributes_TestDestinations_AvailableRuntimes::class;
	protected $availableRuntimesDataType = 'array';
	protected $kindType = CiTestDestinationKind::class;
	protected $kindDataType = '';

	public function getDeviceTypeName()
	{
		return $this->deviceTypeName;
	}
	public function setDeviceTypeName($deviceTypeName)
	{
		$this->deviceTypeName = $deviceTypeName;
		return $deviceTypeName;
	}
	public function getDeviceTypeIdentifier()
	{
		return $this->deviceTypeIdentifier;
	}
	public function setDeviceTypeIdentifier($deviceTypeIdentifier)
	{
		$this->deviceTypeIdentifier = $deviceTypeIdentifier;
		return $deviceTypeIdentifier;
	}
	/**
	* @return  CiXcodeVersion_Attributes_TestDestinations_AvailableRuntimes[]
	*/
	public function getAvailableRuntimes()
	{
		return $this->availableRuntimes;
	}
	/**
	* @param  CiXcodeVersion_Attributes_TestDestinations_AvailableRuntimes[]
	*/
	public function setAvailableRuntimes($availableRuntimes)
	{
		$this->availableRuntimes = $availableRuntimes;
		return $availableRuntimes;
	}
	/**
	* @return  CiTestDestinationKind
	*/
	public function getKind()
	{
		return $this->kind;
	}
	/**
	* @param  CiTestDestinationKind
	*/
	public function setKind($kind)
	{
		$this->kind = $kind;
		return $kind;
	}

}
class_alias(CiXcodeVersion_Attributes_TestDestinations::class, 'AppleService_AppStore_CiXcodeVersion_Attributes_TestDestinations');

class CiXcodeVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $version;
	public $name;
	protected $testDestinationsType = CiXcodeVersion_Attributes_TestDestinations::class;
	protected $testDestinationsDataType = 'array';

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
	/**
	* @return  CiXcodeVersion_Attributes_TestDestinations[]
	*/
	public function getTestDestinations()
	{
		return $this->testDestinations;
	}
	/**
	* @param  CiXcodeVersion_Attributes_TestDestinations[]
	*/
	public function setTestDestinations($testDestinations)
	{
		$this->testDestinations = $testDestinations;
		return $testDestinations;
	}

}
class_alias(CiXcodeVersion_Attributes::class, 'AppleService_AppStore_CiXcodeVersion_Attributes');

class CiXcodeVersion_Relationships_MacOsVersions_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiXcodeVersion_Relationships_MacOsVersions_Links::class, 'AppleService_AppStore_CiXcodeVersion_Relationships_MacOsVersions_Links');

class CiXcodeVersion_Relationships_MacOsVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciMacOsVersions';
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
class_alias(CiXcodeVersion_Relationships_MacOsVersions_Data::class, 'AppleService_AppStore_CiXcodeVersion_Relationships_MacOsVersions_Data');

class CiXcodeVersion_Relationships_MacOsVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiXcodeVersion_Relationships_MacOsVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = CiXcodeVersion_Relationships_MacOsVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  CiXcodeVersion_Relationships_MacOsVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiXcodeVersion_Relationships_MacOsVersions_Links
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
	* @return  CiXcodeVersion_Relationships_MacOsVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiXcodeVersion_Relationships_MacOsVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(CiXcodeVersion_Relationships_MacOsVersions::class, 'AppleService_AppStore_CiXcodeVersion_Relationships_MacOsVersions');

class CiXcodeVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $macOsVersionsType = CiXcodeVersion_Relationships_MacOsVersions::class;
	protected $macOsVersionsDataType = 'object';

	/**
	* @return  CiXcodeVersion_Relationships_MacOsVersions
	*/
	public function getMacOsVersions()
	{
		return $this->macOsVersions;
	}
	/**
	* @param  CiXcodeVersion_Relationships_MacOsVersions
	*/
	public function setMacOsVersions($macOsVersions)
	{
		$this->macOsVersions = $macOsVersions;
		return $macOsVersions;
	}

}
class_alias(CiXcodeVersion_Relationships::class, 'AppleService_AppStore_CiXcodeVersion_Relationships');

class CiXcodeVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciXcodeVersions';
	public $id;
	protected $attributesType = CiXcodeVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiXcodeVersion_Relationships::class;
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
	* @return  CiXcodeVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiXcodeVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  CiXcodeVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiXcodeVersion_Relationships
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
class_alias(CiXcodeVersion::class, 'AppleService_AppStore_CiXcodeVersion');

