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

class CiWorkflow_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $description;
	protected $branchStartConditionType = CiBranchStartCondition::class;
	protected $branchStartConditionDataType = '';
	protected $tagStartConditionType = CiTagStartCondition::class;
	protected $tagStartConditionDataType = '';
	protected $pullRequestStartConditionType = CiPullRequestStartCondition::class;
	protected $pullRequestStartConditionDataType = '';
	protected $scheduledStartConditionType = CiScheduledStartCondition::class;
	protected $scheduledStartConditionDataType = '';
	protected $actionsType = CiAction::class;
	protected $actionsDataType = 'array';
	public $isEnabled;
	public $isLockedForEditing;
	public $clean;
	public $containerFilePath;
	public $lastModifiedDate;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}
	/**
	* @return  CiBranchStartCondition
	*/
	public function getBranchStartCondition()
	{
		return $this->branchStartCondition;
	}
	/**
	* @param  CiBranchStartCondition
	*/
	public function setBranchStartCondition($branchStartCondition)
	{
		$this->branchStartCondition = $branchStartCondition;
		return $this;
	}
	/**
	* @return  CiTagStartCondition
	*/
	public function getTagStartCondition()
	{
		return $this->tagStartCondition;
	}
	/**
	* @param  CiTagStartCondition
	*/
	public function setTagStartCondition($tagStartCondition)
	{
		$this->tagStartCondition = $tagStartCondition;
		return $this;
	}
	/**
	* @return  CiPullRequestStartCondition
	*/
	public function getPullRequestStartCondition()
	{
		return $this->pullRequestStartCondition;
	}
	/**
	* @param  CiPullRequestStartCondition
	*/
	public function setPullRequestStartCondition($pullRequestStartCondition)
	{
		$this->pullRequestStartCondition = $pullRequestStartCondition;
		return $this;
	}
	/**
	* @return  CiScheduledStartCondition
	*/
	public function getScheduledStartCondition()
	{
		return $this->scheduledStartCondition;
	}
	/**
	* @param  CiScheduledStartCondition
	*/
	public function setScheduledStartCondition($scheduledStartCondition)
	{
		$this->scheduledStartCondition = $scheduledStartCondition;
		return $this;
	}
	/**
	* @return  CiAction[]
	*/
	public function getActions()
	{
		return $this->actions;
	}
	/**
	* @param  CiAction[]
	*/
	public function setActions($actions)
	{
		$this->actions = $actions;
		return $this;
	}
	public function getIsEnabled()
	{
		return $this->isEnabled;
	}
	public function setIsEnabled($isEnabled)
	{
		$this->isEnabled = $isEnabled;
		return $this;
	}
	public function getIsLockedForEditing()
	{
		return $this->isLockedForEditing;
	}
	public function setIsLockedForEditing($isLockedForEditing)
	{
		$this->isLockedForEditing = $isLockedForEditing;
		return $this;
	}
	public function getClean()
	{
		return $this->clean;
	}
	public function setClean($clean)
	{
		$this->clean = $clean;
		return $this;
	}
	public function getContainerFilePath()
	{
		return $this->containerFilePath;
	}
	public function setContainerFilePath($containerFilePath)
	{
		$this->containerFilePath = $containerFilePath;
		return $this;
	}
	public function getLastModifiedDate()
	{
		return $this->lastModifiedDate;
	}
	public function setLastModifiedDate($lastModifiedDate)
	{
		$this->lastModifiedDate = $lastModifiedDate;
		return $this;
	}

}
class_alias(CiWorkflow_Attributes::class, 'AppleService_AppStore_CiWorkflow_Attributes');

class CiWorkflow_Relationships_Product_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiWorkflow_Relationships_Product_Links::class, 'AppleService_AppStore_CiWorkflow_Relationships_Product_Links');

class CiWorkflow_Relationships_Product_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciProducts';
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
class_alias(CiWorkflow_Relationships_Product_Data::class, 'AppleService_AppStore_CiWorkflow_Relationships_Product_Data');

class CiWorkflow_Relationships_Product extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiWorkflow_Relationships_Product_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiWorkflow_Relationships_Product_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiWorkflow_Relationships_Product_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiWorkflow_Relationships_Product_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_Product_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiWorkflow_Relationships_Product_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiWorkflow_Relationships_Product::class, 'AppleService_AppStore_CiWorkflow_Relationships_Product');

class CiWorkflow_Relationships_Repository_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiWorkflow_Relationships_Repository_Links::class, 'AppleService_AppStore_CiWorkflow_Relationships_Repository_Links');

class CiWorkflow_Relationships_Repository_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(CiWorkflow_Relationships_Repository_Data::class, 'AppleService_AppStore_CiWorkflow_Relationships_Repository_Data');

class CiWorkflow_Relationships_Repository extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiWorkflow_Relationships_Repository_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiWorkflow_Relationships_Repository_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiWorkflow_Relationships_Repository_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiWorkflow_Relationships_Repository_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_Repository_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiWorkflow_Relationships_Repository_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiWorkflow_Relationships_Repository::class, 'AppleService_AppStore_CiWorkflow_Relationships_Repository');

class CiWorkflow_Relationships_XcodeVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiWorkflow_Relationships_XcodeVersion_Links::class, 'AppleService_AppStore_CiWorkflow_Relationships_XcodeVersion_Links');

class CiWorkflow_Relationships_XcodeVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciXcodeVersions';
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
class_alias(CiWorkflow_Relationships_XcodeVersion_Data::class, 'AppleService_AppStore_CiWorkflow_Relationships_XcodeVersion_Data');

class CiWorkflow_Relationships_XcodeVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiWorkflow_Relationships_XcodeVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiWorkflow_Relationships_XcodeVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiWorkflow_Relationships_XcodeVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiWorkflow_Relationships_XcodeVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_XcodeVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiWorkflow_Relationships_XcodeVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiWorkflow_Relationships_XcodeVersion::class, 'AppleService_AppStore_CiWorkflow_Relationships_XcodeVersion');

class CiWorkflow_Relationships_MacOsVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiWorkflow_Relationships_MacOsVersion_Links::class, 'AppleService_AppStore_CiWorkflow_Relationships_MacOsVersion_Links');

class CiWorkflow_Relationships_MacOsVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(CiWorkflow_Relationships_MacOsVersion_Data::class, 'AppleService_AppStore_CiWorkflow_Relationships_MacOsVersion_Data');

class CiWorkflow_Relationships_MacOsVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiWorkflow_Relationships_MacOsVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiWorkflow_Relationships_MacOsVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiWorkflow_Relationships_MacOsVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiWorkflow_Relationships_MacOsVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_MacOsVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiWorkflow_Relationships_MacOsVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiWorkflow_Relationships_MacOsVersion::class, 'AppleService_AppStore_CiWorkflow_Relationships_MacOsVersion');

class CiWorkflow_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $productType = CiWorkflow_Relationships_Product::class;
	protected $productDataType = 'object';
	protected $repositoryType = CiWorkflow_Relationships_Repository::class;
	protected $repositoryDataType = 'object';
	protected $xcodeVersionType = CiWorkflow_Relationships_XcodeVersion::class;
	protected $xcodeVersionDataType = 'object';
	protected $macOsVersionType = CiWorkflow_Relationships_MacOsVersion::class;
	protected $macOsVersionDataType = 'object';

	/**
	* @return  CiWorkflow_Relationships_Product
	*/
	public function getProduct()
	{
		return $this->product;
	}
	/**
	* @param  CiWorkflow_Relationships_Product
	*/
	public function setProduct($product)
	{
		$this->product = $product;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_Repository
	*/
	public function getRepository()
	{
		return $this->repository;
	}
	/**
	* @param  CiWorkflow_Relationships_Repository
	*/
	public function setRepository($repository)
	{
		$this->repository = $repository;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_XcodeVersion
	*/
	public function getXcodeVersion()
	{
		return $this->xcodeVersion;
	}
	/**
	* @param  CiWorkflow_Relationships_XcodeVersion
	*/
	public function setXcodeVersion($xcodeVersion)
	{
		$this->xcodeVersion = $xcodeVersion;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships_MacOsVersion
	*/
	public function getMacOsVersion()
	{
		return $this->macOsVersion;
	}
	/**
	* @param  CiWorkflow_Relationships_MacOsVersion
	*/
	public function setMacOsVersion($macOsVersion)
	{
		$this->macOsVersion = $macOsVersion;
		return $this;
	}

}
class_alias(CiWorkflow_Relationships::class, 'AppleService_AppStore_CiWorkflow_Relationships');

class CiWorkflow extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciWorkflows';
	public $id;
	protected $attributesType = CiWorkflow_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiWorkflow_Relationships::class;
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
	* @return  CiWorkflow_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiWorkflow_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CiWorkflow_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiWorkflow_Relationships
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
class_alias(CiWorkflow::class, 'AppleService_AppStore_CiWorkflow');

