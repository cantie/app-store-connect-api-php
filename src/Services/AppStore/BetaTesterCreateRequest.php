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

class BetaTesterCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $firstName;
	public $lastName;
	public $email;

	public function getFirstName()
	{
		return $this->firstName;
	}
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $this;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

}
class_alias(BetaTesterCreateRequest_Data_Attributes::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data_Attributes');

class BetaTesterCreateRequest_Data_Relationships_BetaGroups_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
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
class_alias(BetaTesterCreateRequest_Data_Relationships_BetaGroups_Data::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data_Relationships_BetaGroups_Data');

class BetaTesterCreateRequest_Data_Relationships_BetaGroups extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterCreateRequest_Data_Relationships_BetaGroups_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaTesterCreateRequest_Data_Relationships_BetaGroups_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterCreateRequest_Data_Relationships_BetaGroups_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaTesterCreateRequest_Data_Relationships_BetaGroups::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data_Relationships_BetaGroups');

class BetaTesterCreateRequest_Data_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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
class_alias(BetaTesterCreateRequest_Data_Relationships_Builds_Data::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data_Relationships_Builds_Data');

class BetaTesterCreateRequest_Data_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterCreateRequest_Data_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaTesterCreateRequest_Data_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterCreateRequest_Data_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaTesterCreateRequest_Data_Relationships_Builds::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data_Relationships_Builds');

class BetaTesterCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $betaGroupsType = BetaTesterCreateRequest_Data_Relationships_BetaGroups::class;
	protected $betaGroupsDataType = 'object';
	protected $buildsType = BetaTesterCreateRequest_Data_Relationships_Builds::class;
	protected $buildsDataType = 'object';

	/**
	* @return  BetaTesterCreateRequest_Data_Relationships_BetaGroups
	*/
	public function getBetaGroups()
	{
		return $this->betaGroups;
	}
	/**
	* @param  BetaTesterCreateRequest_Data_Relationships_BetaGroups
	*/
	public function setBetaGroups($betaGroups)
	{
		$this->betaGroups = $betaGroups;
		return $this;
	}
	/**
	* @return  BetaTesterCreateRequest_Data_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  BetaTesterCreateRequest_Data_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $this;
	}

}
class_alias(BetaTesterCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data_Relationships');

class BetaTesterCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesters';
	protected $attributesType = BetaTesterCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaTesterCreateRequest_Data_Relationships::class;
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
	* @return  BetaTesterCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaTesterCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BetaTesterCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaTesterCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(BetaTesterCreateRequest_Data::class, 'AppleService_AppStore_BetaTesterCreateRequest_Data');

class BetaTesterCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaTesterCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaTesterCreateRequest::class, 'AppleService_AppStore_BetaTesterCreateRequest');

