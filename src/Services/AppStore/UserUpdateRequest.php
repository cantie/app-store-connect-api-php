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

class UserUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $rolesType = UserRole::class;
	protected $rolesDataType = 'array';
	public $allAppsVisible;
	public $provisioningAllowed;

	/**
	* @return  UserRole[]
	*/
	public function getRoles()
	{
		return $this->roles;
	}
	/**
	* @param  UserRole[]
	*/
	public function setRoles($roles)
	{
		$this->roles = $roles;
		return $roles;
	}
	public function getAllAppsVisible()
	{
		return $this->allAppsVisible;
	}
	public function setAllAppsVisible($allAppsVisible)
	{
		$this->allAppsVisible = $allAppsVisible;
		return $allAppsVisible;
	}
	public function getProvisioningAllowed()
	{
		return $this->provisioningAllowed;
	}
	public function setProvisioningAllowed($provisioningAllowed)
	{
		$this->provisioningAllowed = $provisioningAllowed;
		return $provisioningAllowed;
	}

}
class_alias(UserUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_UserUpdateRequest_Data_Attributes');

class UserUpdateRequest_Data_Relationships_VisibleApps_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(UserUpdateRequest_Data_Relationships_VisibleApps_Data::class, 'AppleService_AppStore_UserUpdateRequest_Data_Relationships_VisibleApps_Data');

class UserUpdateRequest_Data_Relationships_VisibleApps extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = UserUpdateRequest_Data_Relationships_VisibleApps_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  UserUpdateRequest_Data_Relationships_VisibleApps_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  UserUpdateRequest_Data_Relationships_VisibleApps_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(UserUpdateRequest_Data_Relationships_VisibleApps::class, 'AppleService_AppStore_UserUpdateRequest_Data_Relationships_VisibleApps');

class UserUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $visibleAppsType = UserUpdateRequest_Data_Relationships_VisibleApps::class;
	protected $visibleAppsDataType = 'object';

	/**
	* @return  UserUpdateRequest_Data_Relationships_VisibleApps
	*/
	public function getVisibleApps()
	{
		return $this->visibleApps;
	}
	/**
	* @param  UserUpdateRequest_Data_Relationships_VisibleApps
	*/
	public function setVisibleApps($visibleApps)
	{
		$this->visibleApps = $visibleApps;
		return $visibleApps;
	}

}
class_alias(UserUpdateRequest_Data_Relationships::class, 'AppleService_AppStore_UserUpdateRequest_Data_Relationships');

class UserUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'users';
	public $id;
	protected $attributesType = UserUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = UserUpdateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

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
	* @return  UserUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  UserUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  UserUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  UserUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(UserUpdateRequest_Data::class, 'AppleService_AppStore_UserUpdateRequest_Data');

class UserUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = UserUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  UserUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  UserUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(UserUpdateRequest::class, 'AppleService_AppStore_UserUpdateRequest');

