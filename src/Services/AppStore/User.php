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

class User_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $username;
	public $firstName;
	public $lastName;
	protected $rolesType = UserRole::class;
	protected $rolesDataType = 'array';
	public $allAppsVisible;
	public $provisioningAllowed;

	public function getUsername()
	{
		return $this->username;
	}
	public function setUsername($username)
	{
		$this->username = $username;
		return $username;
	}
	public function getFirstName()
	{
		return $this->firstName;
	}
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $firstName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $lastName;
	}
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
class_alias(User_Attributes::class, 'AppleService_AppStore_User_Attributes');

class User_Relationships_VisibleApps_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(User_Relationships_VisibleApps_Links::class, 'AppleService_AppStore_User_Relationships_VisibleApps_Links');

class User_Relationships_VisibleApps_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(User_Relationships_VisibleApps_Data::class, 'AppleService_AppStore_User_Relationships_VisibleApps_Data');

class User_Relationships_VisibleApps extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = User_Relationships_VisibleApps_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = User_Relationships_VisibleApps_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  User_Relationships_VisibleApps_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  User_Relationships_VisibleApps_Links
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
	* @return  User_Relationships_VisibleApps_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  User_Relationships_VisibleApps_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(User_Relationships_VisibleApps::class, 'AppleService_AppStore_User_Relationships_VisibleApps');

class User_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $visibleAppsType = User_Relationships_VisibleApps::class;
	protected $visibleAppsDataType = 'object';

	/**
	* @return  User_Relationships_VisibleApps
	*/
	public function getVisibleApps()
	{
		return $this->visibleApps;
	}
	/**
	* @param  User_Relationships_VisibleApps
	*/
	public function setVisibleApps($visibleApps)
	{
		$this->visibleApps = $visibleApps;
		return $visibleApps;
	}

}
class_alias(User_Relationships::class, 'AppleService_AppStore_User_Relationships');

class User extends \Cantie\AppStoreConnect\Model
{
	public $type = 'users';
	public $id;
	protected $attributesType = User_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = User_Relationships::class;
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
	* @return  User_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  User_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  User_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  User_Relationships
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
class_alias(User::class, 'AppleService_AppStore_User');
