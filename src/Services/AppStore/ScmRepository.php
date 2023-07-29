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

class ScmRepository_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $lastAccessedDate;
	public $httpCloneUrl;
	public $sshCloneUrl;
	public $ownerName;
	public $repositoryName;

	public function getLastAccessedDate()
	{
		return $this->lastAccessedDate;
	}
	public function setLastAccessedDate($lastAccessedDate)
	{
		$this->lastAccessedDate = $lastAccessedDate;
		return $this;
	}
	public function getHttpCloneUrl()
	{
		return $this->httpCloneUrl;
	}
	public function setHttpCloneUrl($httpCloneUrl)
	{
		$this->httpCloneUrl = $httpCloneUrl;
		return $this;
	}
	public function getSshCloneUrl()
	{
		return $this->sshCloneUrl;
	}
	public function setSshCloneUrl($sshCloneUrl)
	{
		$this->sshCloneUrl = $sshCloneUrl;
		return $this;
	}
	public function getOwnerName()
	{
		return $this->ownerName;
	}
	public function setOwnerName($ownerName)
	{
		$this->ownerName = $ownerName;
		return $this;
	}
	public function getRepositoryName()
	{
		return $this->repositoryName;
	}
	public function setRepositoryName($repositoryName)
	{
		$this->repositoryName = $repositoryName;
		return $this;
	}

}

class ScmRepository_Relationships_ScmProvider_Links extends \Cantie\AppStoreConnect\Model
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

class ScmRepository_Relationships_ScmProvider_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmProviders';
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

class ScmRepository_Relationships_ScmProvider extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ScmRepository_Relationships_ScmProvider_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ScmRepository_Relationships_ScmProvider_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ScmRepository_Relationships_ScmProvider_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ScmRepository_Relationships_ScmProvider_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  ScmRepository_Relationships_ScmProvider_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ScmRepository_Relationships_ScmProvider_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class ScmRepository_Relationships_DefaultBranch_Links extends \Cantie\AppStoreConnect\Model
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

class ScmRepository_Relationships_DefaultBranch_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmGitReferences';
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

class ScmRepository_Relationships_DefaultBranch extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ScmRepository_Relationships_DefaultBranch_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ScmRepository_Relationships_DefaultBranch_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ScmRepository_Relationships_DefaultBranch_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ScmRepository_Relationships_DefaultBranch_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  ScmRepository_Relationships_DefaultBranch_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ScmRepository_Relationships_DefaultBranch_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class ScmRepository_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $scmProviderType = ScmRepository_Relationships_ScmProvider::class;
	protected $scmProviderDataType = 'object';
	protected $defaultBranchType = ScmRepository_Relationships_DefaultBranch::class;
	protected $defaultBranchDataType = 'object';

	/**
	* @return  ScmRepository_Relationships_ScmProvider
	*/
	public function getScmProvider()
	{
		return $this->scmProvider;
	}
	/**
	* @param  ScmRepository_Relationships_ScmProvider
	*/
	public function setScmProvider($scmProvider)
	{
		$this->scmProvider = $scmProvider;
		return $this;
	}
	/**
	* @return  ScmRepository_Relationships_DefaultBranch
	*/
	public function getDefaultBranch()
	{
		return $this->defaultBranch;
	}
	/**
	* @param  ScmRepository_Relationships_DefaultBranch
	*/
	public function setDefaultBranch($defaultBranch)
	{
		$this->defaultBranch = $defaultBranch;
		return $this;
	}

}

class ScmRepository extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmRepositories';
	public $id;
	protected $attributesType = ScmRepository_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = ScmRepository_Relationships::class;
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
	* @return  ScmRepository_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ScmRepository_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  ScmRepository_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ScmRepository_Relationships
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

