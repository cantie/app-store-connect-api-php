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

class UserInvitation_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $email;
	public $firstName;
	public $lastName;
	public $expirationDate;
	protected $rolesType = UserRole::class;
	protected $rolesDataType = 'array';
	public $allAppsVisible;
	public $provisioningAllowed;

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $email;
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
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate($expirationDate)
	{
		$this->expirationDate = $expirationDate;
		return $expirationDate;
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
class_alias(UserInvitation_Attributes::class, 'AppleService_AppStore_UserInvitation_Attributes');

class UserInvitation_Relationships_VisibleApps_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(UserInvitation_Relationships_VisibleApps_Links::class, 'AppleService_AppStore_UserInvitation_Relationships_VisibleApps_Links');

class UserInvitation_Relationships_VisibleApps_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(UserInvitation_Relationships_VisibleApps_Data::class, 'AppleService_AppStore_UserInvitation_Relationships_VisibleApps_Data');

class UserInvitation_Relationships_VisibleApps extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = UserInvitation_Relationships_VisibleApps_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = UserInvitation_Relationships_VisibleApps_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  UserInvitation_Relationships_VisibleApps_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  UserInvitation_Relationships_VisibleApps_Links
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
	* @return  UserInvitation_Relationships_VisibleApps_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  UserInvitation_Relationships_VisibleApps_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(UserInvitation_Relationships_VisibleApps::class, 'AppleService_AppStore_UserInvitation_Relationships_VisibleApps');

class UserInvitation_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $visibleAppsType = UserInvitation_Relationships_VisibleApps::class;
	protected $visibleAppsDataType = 'object';

	/**
	* @return  UserInvitation_Relationships_VisibleApps
	*/
	public function getVisibleApps()
	{
		return $this->visibleApps;
	}
	/**
	* @param  UserInvitation_Relationships_VisibleApps
	*/
	public function setVisibleApps($visibleApps)
	{
		$this->visibleApps = $visibleApps;
		return $visibleApps;
	}

}
class_alias(UserInvitation_Relationships::class, 'AppleService_AppStore_UserInvitation_Relationships');

class UserInvitation extends \Cantie\AppStoreConnect\Model
{
	public $type = 'userInvitations';
	public $id;
	protected $attributesType = UserInvitation_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = UserInvitation_Relationships::class;
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
	* @return  UserInvitation_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  UserInvitation_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  UserInvitation_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  UserInvitation_Relationships
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
class_alias(UserInvitation::class, 'AppleService_AppStore_UserInvitation');

