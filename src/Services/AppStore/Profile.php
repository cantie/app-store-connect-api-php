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

class Profile_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $platformType = BundleIdPlatform::class;
	protected $platformDataType = '';
	public $profileType; // IOS_APP_DEVELOPMENT, IOS_APP_STORE, IOS_APP_ADHOC, IOS_APP_INHOUSE, MAC_APP_DEVELOPMENT, MAC_APP_STORE, MAC_APP_DIRECT, TVOS_APP_DEVELOPMENT, TVOS_APP_STORE, TVOS_APP_ADHOC, TVOS_APP_INHOUSE, MAC_CATALYST_APP_DEVELOPMENT, MAC_CATALYST_APP_STORE, MAC_CATALYST_APP_DIRECT
	public $profileState; // ACTIVE, INVALID
	public $profileContent;
	public $uuid;
	public $createdDate;
	public $expirationDate;

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
	* @return  BundleIdPlatform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  BundleIdPlatform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
	}
	public function getProfileType()
	{
		return $this->profileType;
	}
	public function setProfileType($profileType)
	{
		$this->profileType = $profileType;
		return $profileType;
	}
	public function getProfileState()
	{
		return $this->profileState;
	}
	public function setProfileState($profileState)
	{
		$this->profileState = $profileState;
		return $profileState;
	}
	public function getProfileContent()
	{
		return $this->profileContent;
	}
	public function setProfileContent($profileContent)
	{
		$this->profileContent = $profileContent;
		return $profileContent;
	}
	public function getUuid()
	{
		return $this->uuid;
	}
	public function setUuid($uuid)
	{
		$this->uuid = $uuid;
		return $uuid;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $createdDate;
	}
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate($expirationDate)
	{
		$this->expirationDate = $expirationDate;
		return $expirationDate;
	}

}
class_alias(Profile_Attributes::class, 'AppleService_AppStore_Profile_Attributes');

class Profile_Relationships_BundleId_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(Profile_Relationships_BundleId_Links::class, 'AppleService_AppStore_Profile_Relationships_BundleId_Links');

class Profile_Relationships_BundleId_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIds';
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
class_alias(Profile_Relationships_BundleId_Data::class, 'AppleService_AppStore_Profile_Relationships_BundleId_Data');

class Profile_Relationships_BundleId extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Profile_Relationships_BundleId_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Profile_Relationships_BundleId_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Profile_Relationships_BundleId_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Profile_Relationships_BundleId_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  Profile_Relationships_BundleId_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Profile_Relationships_BundleId_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(Profile_Relationships_BundleId::class, 'AppleService_AppStore_Profile_Relationships_BundleId');

class Profile_Relationships_Devices_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(Profile_Relationships_Devices_Links::class, 'AppleService_AppStore_Profile_Relationships_Devices_Links');

class Profile_Relationships_Devices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'devices';
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
class_alias(Profile_Relationships_Devices_Data::class, 'AppleService_AppStore_Profile_Relationships_Devices_Data');

class Profile_Relationships_Devices extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Profile_Relationships_Devices_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Profile_Relationships_Devices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Profile_Relationships_Devices_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Profile_Relationships_Devices_Links
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
	* @return  Profile_Relationships_Devices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Profile_Relationships_Devices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(Profile_Relationships_Devices::class, 'AppleService_AppStore_Profile_Relationships_Devices');

class Profile_Relationships_Certificates_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(Profile_Relationships_Certificates_Links::class, 'AppleService_AppStore_Profile_Relationships_Certificates_Links');

class Profile_Relationships_Certificates_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'certificates';
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
class_alias(Profile_Relationships_Certificates_Data::class, 'AppleService_AppStore_Profile_Relationships_Certificates_Data');

class Profile_Relationships_Certificates extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Profile_Relationships_Certificates_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Profile_Relationships_Certificates_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Profile_Relationships_Certificates_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Profile_Relationships_Certificates_Links
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
	* @return  Profile_Relationships_Certificates_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Profile_Relationships_Certificates_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(Profile_Relationships_Certificates::class, 'AppleService_AppStore_Profile_Relationships_Certificates');

class Profile_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $bundleIdType = Profile_Relationships_BundleId::class;
	protected $bundleIdDataType = 'object';
	protected $devicesType = Profile_Relationships_Devices::class;
	protected $devicesDataType = 'object';
	protected $certificatesType = Profile_Relationships_Certificates::class;
	protected $certificatesDataType = 'object';

	/**
	* @return  Profile_Relationships_BundleId
	*/
	public function getBundleId()
	{
		return $this->bundleId;
	}
	/**
	* @param  Profile_Relationships_BundleId
	*/
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $bundleId;
	}
	/**
	* @return  Profile_Relationships_Devices
	*/
	public function getDevices()
	{
		return $this->devices;
	}
	/**
	* @param  Profile_Relationships_Devices
	*/
	public function setDevices($devices)
	{
		$this->devices = $devices;
		return $devices;
	}
	/**
	* @return  Profile_Relationships_Certificates
	*/
	public function getCertificates()
	{
		return $this->certificates;
	}
	/**
	* @param  Profile_Relationships_Certificates
	*/
	public function setCertificates($certificates)
	{
		$this->certificates = $certificates;
		return $certificates;
	}

}
class_alias(Profile_Relationships::class, 'AppleService_AppStore_Profile_Relationships');

class Profile extends \Cantie\AppStoreConnect\Model
{
	public $type = 'profiles';
	public $id;
	protected $attributesType = Profile_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = Profile_Relationships::class;
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
	* @return  Profile_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  Profile_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  Profile_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  Profile_Relationships
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
class_alias(Profile::class, 'AppleService_AppStore_Profile');

