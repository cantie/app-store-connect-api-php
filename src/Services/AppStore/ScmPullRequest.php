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

class ScmPullRequest_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $title;
	public $number;
	public $webUrl;
	public $sourceRepositoryOwner;
	public $sourceRepositoryName;
	public $sourceBranchName;
	public $destinationRepositoryOwner;
	public $destinationRepositoryName;
	public $destinationBranchName;
	public $isClosed;
	public $isCrossRepository;

	public function getTitle()
	{
		return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	public function getNumber()
	{
		return $this->number;
	}
	public function setNumber($number)
	{
		$this->number = $number;
		return $this;
	}
	public function getWebUrl()
	{
		return $this->webUrl;
	}
	public function setWebUrl($webUrl)
	{
		$this->webUrl = $webUrl;
		return $this;
	}
	public function getSourceRepositoryOwner()
	{
		return $this->sourceRepositoryOwner;
	}
	public function setSourceRepositoryOwner($sourceRepositoryOwner)
	{
		$this->sourceRepositoryOwner = $sourceRepositoryOwner;
		return $this;
	}
	public function getSourceRepositoryName()
	{
		return $this->sourceRepositoryName;
	}
	public function setSourceRepositoryName($sourceRepositoryName)
	{
		$this->sourceRepositoryName = $sourceRepositoryName;
		return $this;
	}
	public function getSourceBranchName()
	{
		return $this->sourceBranchName;
	}
	public function setSourceBranchName($sourceBranchName)
	{
		$this->sourceBranchName = $sourceBranchName;
		return $this;
	}
	public function getDestinationRepositoryOwner()
	{
		return $this->destinationRepositoryOwner;
	}
	public function setDestinationRepositoryOwner($destinationRepositoryOwner)
	{
		$this->destinationRepositoryOwner = $destinationRepositoryOwner;
		return $this;
	}
	public function getDestinationRepositoryName()
	{
		return $this->destinationRepositoryName;
	}
	public function setDestinationRepositoryName($destinationRepositoryName)
	{
		$this->destinationRepositoryName = $destinationRepositoryName;
		return $this;
	}
	public function getDestinationBranchName()
	{
		return $this->destinationBranchName;
	}
	public function setDestinationBranchName($destinationBranchName)
	{
		$this->destinationBranchName = $destinationBranchName;
		return $this;
	}
	public function getIsClosed()
	{
		return $this->isClosed;
	}
	public function setIsClosed($isClosed)
	{
		$this->isClosed = $isClosed;
		return $this;
	}
	public function getIsCrossRepository()
	{
		return $this->isCrossRepository;
	}
	public function setIsCrossRepository($isCrossRepository)
	{
		$this->isCrossRepository = $isCrossRepository;
		return $this;
	}

}
class_alias(ScmPullRequest_Attributes::class, 'AppleService_AppStore_ScmPullRequest_Attributes');

class ScmPullRequest_Relationships_Repository_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ScmPullRequest_Relationships_Repository_Links::class, 'AppleService_AppStore_ScmPullRequest_Relationships_Repository_Links');

class ScmPullRequest_Relationships_Repository_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ScmPullRequest_Relationships_Repository_Data::class, 'AppleService_AppStore_ScmPullRequest_Relationships_Repository_Data');

class ScmPullRequest_Relationships_Repository extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ScmPullRequest_Relationships_Repository_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ScmPullRequest_Relationships_Repository_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ScmPullRequest_Relationships_Repository_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ScmPullRequest_Relationships_Repository_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  ScmPullRequest_Relationships_Repository_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ScmPullRequest_Relationships_Repository_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ScmPullRequest_Relationships_Repository::class, 'AppleService_AppStore_ScmPullRequest_Relationships_Repository');

class ScmPullRequest_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $repositoryType = ScmPullRequest_Relationships_Repository::class;
	protected $repositoryDataType = 'object';

	/**
	* @return  ScmPullRequest_Relationships_Repository
	*/
	public function getRepository()
	{
		return $this->repository;
	}
	/**
	* @param  ScmPullRequest_Relationships_Repository
	*/
	public function setRepository($repository)
	{
		$this->repository = $repository;
		return $this;
	}

}
class_alias(ScmPullRequest_Relationships::class, 'AppleService_AppStore_ScmPullRequest_Relationships');

class ScmPullRequest extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmPullRequests';
	public $id;
	protected $attributesType = ScmPullRequest_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = ScmPullRequest_Relationships::class;
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
	* @return  ScmPullRequest_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ScmPullRequest_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  ScmPullRequest_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ScmPullRequest_Relationships
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
class_alias(ScmPullRequest::class, 'AppleService_AppStore_ScmPullRequest');

