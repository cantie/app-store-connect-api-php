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

class ScmGitReference_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $canonicalName;
	public $isDeleted;
	public $kind; // 

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getCanonicalName()
	{
		return $this->canonicalName;
	}
	public function setCanonicalName($canonicalName)
	{
		$this->canonicalName = $canonicalName;
		return $this;
	}
	public function getIsDeleted()
	{
		return $this->isDeleted;
	}
	public function setIsDeleted($isDeleted)
	{
		$this->isDeleted = $isDeleted;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getKind()
	{
		return $this->kind;
	}
	/**
	* @param  string
	*/
	public function setKind($kind)
	{
		$this->kind = $kind;
		return $this;
	}

}
class_alias(ScmGitReference_Attributes::class, 'AppleService_AppStore_ScmGitReference_Attributes');

class ScmGitReference_Relationships_Repository_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ScmGitReference_Relationships_Repository_Links::class, 'AppleService_AppStore_ScmGitReference_Relationships_Repository_Links');

class ScmGitReference_Relationships_Repository_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmRepositories';
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
class_alias(ScmGitReference_Relationships_Repository_Data::class, 'AppleService_AppStore_ScmGitReference_Relationships_Repository_Data');

class ScmGitReference_Relationships_Repository extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ScmGitReference_Relationships_Repository_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ScmGitReference_Relationships_Repository_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ScmGitReference_Relationships_Repository_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ScmGitReference_Relationships_Repository_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  ScmGitReference_Relationships_Repository_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ScmGitReference_Relationships_Repository_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ScmGitReference_Relationships_Repository::class, 'AppleService_AppStore_ScmGitReference_Relationships_Repository');

class ScmGitReference_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $repositoryType = ScmGitReference_Relationships_Repository::class;
	protected $repositoryDataType = 'object';

	/**
	* @return  ScmGitReference_Relationships_Repository
	*/
	public function getRepository()
	{
		return $this->repository;
	}
	/**
	* @param  ScmGitReference_Relationships_Repository
	*/
	public function setRepository($repository)
	{
		$this->repository = $repository;
		return $this;
	}

}
class_alias(ScmGitReference_Relationships::class, 'AppleService_AppStore_ScmGitReference_Relationships');

class ScmGitReference extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmGitReferences';
	public $id;
	protected $attributesType = ScmGitReference_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = ScmGitReference_Relationships::class;
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
	* @return  ScmGitReference_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ScmGitReference_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  ScmGitReference_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ScmGitReference_Relationships
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
class_alias(ScmGitReference::class, 'AppleService_AppStore_ScmGitReference');

