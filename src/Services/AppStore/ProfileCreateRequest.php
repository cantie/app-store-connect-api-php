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

class ProfileCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $profileType; // IOS_APP_DEVELOPMENT, IOS_APP_STORE, IOS_APP_ADHOC, IOS_APP_INHOUSE, MAC_APP_DEVELOPMENT, MAC_APP_STORE, MAC_APP_DIRECT, TVOS_APP_DEVELOPMENT, TVOS_APP_STORE, TVOS_APP_ADHOC, TVOS_APP_INHOUSE, MAC_CATALYST_APP_DEVELOPMENT, MAC_CATALYST_APP_STORE, MAC_CATALYST_APP_DIRECT

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getProfileType()
	{
		return $this->profileType;
	}
	public function setProfileType($profileType)
	{
		$this->profileType = $profileType;
		return $this;
	}

}
class_alias(ProfileCreateRequest_Data_Attributes::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Attributes');

class ProfileCreateRequest_Data_Relationships_BundleId_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ProfileCreateRequest_Data_Relationships_BundleId_Data::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships_BundleId_Data');

class ProfileCreateRequest_Data_Relationships_BundleId extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ProfileCreateRequest_Data_Relationships_BundleId_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ProfileCreateRequest_Data_Relationships_BundleId_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships_BundleId_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ProfileCreateRequest_Data_Relationships_BundleId::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships_BundleId');

class ProfileCreateRequest_Data_Relationships_Devices_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ProfileCreateRequest_Data_Relationships_Devices_Data::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships_Devices_Data');

class ProfileCreateRequest_Data_Relationships_Devices extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ProfileCreateRequest_Data_Relationships_Devices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  ProfileCreateRequest_Data_Relationships_Devices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships_Devices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ProfileCreateRequest_Data_Relationships_Devices::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships_Devices');

class ProfileCreateRequest_Data_Relationships_Certificates_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ProfileCreateRequest_Data_Relationships_Certificates_Data::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships_Certificates_Data');

class ProfileCreateRequest_Data_Relationships_Certificates extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ProfileCreateRequest_Data_Relationships_Certificates_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  ProfileCreateRequest_Data_Relationships_Certificates_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships_Certificates_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ProfileCreateRequest_Data_Relationships_Certificates::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships_Certificates');

class ProfileCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $bundleIdType = ProfileCreateRequest_Data_Relationships_BundleId::class;
	protected $bundleIdDataType = 'object';
	protected $devicesType = ProfileCreateRequest_Data_Relationships_Devices::class;
	protected $devicesDataType = 'object';
	protected $certificatesType = ProfileCreateRequest_Data_Relationships_Certificates::class;
	protected $certificatesDataType = 'object';

	/**
	* @return  ProfileCreateRequest_Data_Relationships_BundleId
	*/
	public function getBundleId()
	{
		return $this->bundleId;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships_BundleId
	*/
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	/**
	* @return  ProfileCreateRequest_Data_Relationships_Devices
	*/
	public function getDevices()
	{
		return $this->devices;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships_Devices
	*/
	public function setDevices($devices)
	{
		$this->devices = $devices;
		return $this;
	}
	/**
	* @return  ProfileCreateRequest_Data_Relationships_Certificates
	*/
	public function getCertificates()
	{
		return $this->certificates;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships_Certificates
	*/
	public function setCertificates($certificates)
	{
		$this->certificates = $certificates;
		return $this;
	}

}
class_alias(ProfileCreateRequest_Data_Relationships::class, 'AppleService_AppStore_ProfileCreateRequest_Data_Relationships');

class ProfileCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'profiles';
	protected $attributesType = ProfileCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = ProfileCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  ProfileCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ProfileCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  ProfileCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ProfileCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(ProfileCreateRequest_Data::class, 'AppleService_AppStore_ProfileCreateRequest_Data');

class ProfileCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ProfileCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ProfileCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ProfileCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ProfileCreateRequest::class, 'AppleService_AppStore_ProfileCreateRequest');

