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

class CiBuildRunCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $clean;

	public function getClean()
	{
		return $this->clean;
	}
	public function setClean($clean)
	{
		$this->clean = $clean;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data_Attributes::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Attributes');

class CiBuildRunCreateRequest_Data_Relationships_BuildRun_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciBuildRuns';
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
class_alias(CiBuildRunCreateRequest_Data_Relationships_BuildRun_Data::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_BuildRun_Data');

class CiBuildRunCreateRequest_Data_Relationships_BuildRun extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = CiBuildRunCreateRequest_Data_Relationships_BuildRun_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_BuildRun_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_BuildRun_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data_Relationships_BuildRun::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_BuildRun');

class CiBuildRunCreateRequest_Data_Relationships_Workflow_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciWorkflows';
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
class_alias(CiBuildRunCreateRequest_Data_Relationships_Workflow_Data::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_Workflow_Data');

class CiBuildRunCreateRequest_Data_Relationships_Workflow extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = CiBuildRunCreateRequest_Data_Relationships_Workflow_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_Workflow_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_Workflow_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data_Relationships_Workflow::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_Workflow');

class CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag_Data::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag_Data');

class CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag');

class CiBuildRunCreateRequest_Data_Relationships_PullRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmPullRequests';
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
class_alias(CiBuildRunCreateRequest_Data_Relationships_PullRequest_Data::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_PullRequest_Data');

class CiBuildRunCreateRequest_Data_Relationships_PullRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = CiBuildRunCreateRequest_Data_Relationships_PullRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_PullRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_PullRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data_Relationships_PullRequest::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships_PullRequest');

class CiBuildRunCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildRunType = CiBuildRunCreateRequest_Data_Relationships_BuildRun::class;
	protected $buildRunDataType = 'object';
	protected $workflowType = CiBuildRunCreateRequest_Data_Relationships_Workflow::class;
	protected $workflowDataType = 'object';
	protected $sourceBranchOrTagType = CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag::class;
	protected $sourceBranchOrTagDataType = 'object';
	protected $pullRequestType = CiBuildRunCreateRequest_Data_Relationships_PullRequest::class;
	protected $pullRequestDataType = 'object';

	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_BuildRun
	*/
	public function getBuildRun()
	{
		return $this->buildRun;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_BuildRun
	*/
	public function setBuildRun($buildRun)
	{
		$this->buildRun = $buildRun;
		return $this;
	}
	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_Workflow
	*/
	public function getWorkflow()
	{
		return $this->workflow;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_Workflow
	*/
	public function setWorkflow($workflow)
	{
		$this->workflow = $workflow;
		return $this;
	}
	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag
	*/
	public function getSourceBranchOrTag()
	{
		return $this->sourceBranchOrTag;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_SourceBranchOrTag
	*/
	public function setSourceBranchOrTag($sourceBranchOrTag)
	{
		$this->sourceBranchOrTag = $sourceBranchOrTag;
		return $this;
	}
	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships_PullRequest
	*/
	public function getPullRequest()
	{
		return $this->pullRequest;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships_PullRequest
	*/
	public function setPullRequest($pullRequest)
	{
		$this->pullRequest = $pullRequest;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data_Relationships::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data_Relationships');

class CiBuildRunCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciBuildRuns';
	protected $attributesType = CiBuildRunCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiBuildRunCreateRequest_Data_Relationships::class;
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
	* @return  CiBuildRunCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CiBuildRunCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest_Data::class, 'AppleService_AppStore_CiBuildRunCreateRequest_Data');

class CiBuildRunCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = CiBuildRunCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRunCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRunCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiBuildRunCreateRequest::class, 'AppleService_AppStore_CiBuildRunCreateRequest');

