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

class CiBuildRun_Attributes_SourceCommit extends \Cantie\AppStoreConnect\Model
{
	public $commitSha;
	public $message;
	protected $authorType = CiGitUser::class;
	protected $authorDataType = '';
	protected $committerType = CiGitUser::class;
	protected $committerDataType = '';
	public $webUrl;

	public function getCommitSha()
	{
		return $this->commitSha;
	}
	public function setCommitSha($commitSha)
	{
		$this->commitSha = $commitSha;
		return $this;
	}
	public function getMessage()
	{
		return $this->message;
	}
	public function setMessage($message)
	{
		$this->message = $message;
		return $this;
	}
	/**
	* @return  CiGitUser
	*/
	public function getAuthor()
	{
		return $this->author;
	}
	/**
	* @param  CiGitUser
	*/
	public function setAuthor($author)
	{
		$this->author = $author;
		return $this;
	}
	/**
	* @return  CiGitUser
	*/
	public function getCommitter()
	{
		return $this->committer;
	}
	/**
	* @param  CiGitUser
	*/
	public function setCommitter($committer)
	{
		$this->committer = $committer;
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

}

class CiBuildRun_Attributes_DestinationCommit extends \Cantie\AppStoreConnect\Model
{
	public $commitSha;
	public $message;
	protected $authorType = CiGitUser::class;
	protected $authorDataType = '';
	protected $committerType = CiGitUser::class;
	protected $committerDataType = '';
	public $webUrl;

	public function getCommitSha()
	{
		return $this->commitSha;
	}
	public function setCommitSha($commitSha)
	{
		$this->commitSha = $commitSha;
		return $this;
	}
	public function getMessage()
	{
		return $this->message;
	}
	public function setMessage($message)
	{
		$this->message = $message;
		return $this;
	}
	/**
	* @return  CiGitUser
	*/
	public function getAuthor()
	{
		return $this->author;
	}
	/**
	* @param  CiGitUser
	*/
	public function setAuthor($author)
	{
		$this->author = $author;
		return $this;
	}
	/**
	* @return  CiGitUser
	*/
	public function getCommitter()
	{
		return $this->committer;
	}
	/**
	* @param  CiGitUser
	*/
	public function setCommitter($committer)
	{
		$this->committer = $committer;
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

}

class CiBuildRun_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $number;
	public $createdDate;
	public $startedDate;
	public $finishedDate;
	protected $sourceCommitType = CiBuildRun_Attributes_SourceCommit::class;
	protected $sourceCommitDataType = 'object';
	protected $destinationCommitType = CiBuildRun_Attributes_DestinationCommit::class;
	protected $destinationCommitDataType = 'object';
	public $isPullRequestBuild;
	protected $issueCountsType = CiIssueCounts::class;
	protected $issueCountsDataType = '';
	public $executionProgress; // 
	public $completionStatus; // 
	public $startReason; // GIT_REF_CHANGE, MANUAL, MANUAL_REBUILD, PULL_REQUEST_OPEN, PULL_REQUEST_UPDATE, SCHEDULE
	public $cancelReason; // AUTOMATICALLY_BY_NEWER_BUILD, MANUALLY_BY_USER

	public function getNumber()
	{
		return $this->number;
	}
	public function setNumber($number)
	{
		$this->number = $number;
		return $this;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $this;
	}
	public function getStartedDate()
	{
		return $this->startedDate;
	}
	public function setStartedDate($startedDate)
	{
		$this->startedDate = $startedDate;
		return $this;
	}
	public function getFinishedDate()
	{
		return $this->finishedDate;
	}
	public function setFinishedDate($finishedDate)
	{
		$this->finishedDate = $finishedDate;
		return $this;
	}
	/**
	* @return  CiBuildRun_Attributes_SourceCommit
	*/
	public function getSourceCommit()
	{
		return $this->sourceCommit;
	}
	/**
	* @param  CiBuildRun_Attributes_SourceCommit
	*/
	public function setSourceCommit($sourceCommit)
	{
		$this->sourceCommit = $sourceCommit;
		return $this;
	}
	/**
	* @return  CiBuildRun_Attributes_DestinationCommit
	*/
	public function getDestinationCommit()
	{
		return $this->destinationCommit;
	}
	/**
	* @param  CiBuildRun_Attributes_DestinationCommit
	*/
	public function setDestinationCommit($destinationCommit)
	{
		$this->destinationCommit = $destinationCommit;
		return $this;
	}
	public function getIsPullRequestBuild()
	{
		return $this->isPullRequestBuild;
	}
	public function setIsPullRequestBuild($isPullRequestBuild)
	{
		$this->isPullRequestBuild = $isPullRequestBuild;
		return $this;
	}
	/**
	* @return  CiIssueCounts
	*/
	public function getIssueCounts()
	{
		return $this->issueCounts;
	}
	/**
	* @param  CiIssueCounts
	*/
	public function setIssueCounts($issueCounts)
	{
		$this->issueCounts = $issueCounts;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getExecutionProgress()
	{
		return $this->executionProgress;
	}
	/**
	* @param  string
	*/
	public function setExecutionProgress($executionProgress)
	{
		$this->executionProgress = $executionProgress;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getCompletionStatus()
	{
		return $this->completionStatus;
	}
	/**
	* @param  string
	*/
	public function setCompletionStatus($completionStatus)
	{
		$this->completionStatus = $completionStatus;
		return $this;
	}
	public function getStartReason()
	{
		return $this->startReason;
	}
	public function setStartReason($startReason)
	{
		$this->startReason = $startReason;
		return $this;
	}
	public function getCancelReason()
	{
		return $this->cancelReason;
	}
	public function setCancelReason($cancelReason)
	{
		$this->cancelReason = $cancelReason;
		return $this;
	}

}

class CiBuildRun_Relationships_Builds_Links extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildRun_Relationships_Builds_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = CiBuildRun_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  CiBuildRun_Relationships_Builds_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildRun_Relationships_Builds_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRun_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CiBuildRun_Relationships_Workflow_Links extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_Workflow_Data extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_Workflow extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildRun_Relationships_Workflow_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiBuildRun_Relationships_Workflow_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRun_Relationships_Workflow_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildRun_Relationships_Workflow_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_Workflow_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRun_Relationships_Workflow_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CiBuildRun_Relationships_Product_Links extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_Product_Data extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_Product extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildRun_Relationships_Product_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiBuildRun_Relationships_Product_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRun_Relationships_Product_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildRun_Relationships_Product_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_Product_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRun_Relationships_Product_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CiBuildRun_Relationships_SourceBranchOrTag_Links extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_SourceBranchOrTag_Data extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_SourceBranchOrTag extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildRun_Relationships_SourceBranchOrTag_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiBuildRun_Relationships_SourceBranchOrTag_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRun_Relationships_SourceBranchOrTag_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildRun_Relationships_SourceBranchOrTag_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_SourceBranchOrTag_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRun_Relationships_SourceBranchOrTag_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CiBuildRun_Relationships_DestinationBranch_Links extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_DestinationBranch_Data extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_DestinationBranch extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildRun_Relationships_DestinationBranch_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiBuildRun_Relationships_DestinationBranch_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRun_Relationships_DestinationBranch_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildRun_Relationships_DestinationBranch_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_DestinationBranch_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRun_Relationships_DestinationBranch_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CiBuildRun_Relationships_PullRequest_Links extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_PullRequest_Data extends \Cantie\AppStoreConnect\Model
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

class CiBuildRun_Relationships_PullRequest extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildRun_Relationships_PullRequest_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiBuildRun_Relationships_PullRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildRun_Relationships_PullRequest_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildRun_Relationships_PullRequest_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_PullRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildRun_Relationships_PullRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CiBuildRun_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildsType = CiBuildRun_Relationships_Builds::class;
	protected $buildsDataType = 'object';
	protected $workflowType = CiBuildRun_Relationships_Workflow::class;
	protected $workflowDataType = 'object';
	protected $productType = CiBuildRun_Relationships_Product::class;
	protected $productDataType = 'object';
	protected $sourceBranchOrTagType = CiBuildRun_Relationships_SourceBranchOrTag::class;
	protected $sourceBranchOrTagDataType = 'object';
	protected $destinationBranchType = CiBuildRun_Relationships_DestinationBranch::class;
	protected $destinationBranchDataType = 'object';
	protected $pullRequestType = CiBuildRun_Relationships_PullRequest::class;
	protected $pullRequestDataType = 'object';

	/**
	* @return  CiBuildRun_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  CiBuildRun_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_Workflow
	*/
	public function getWorkflow()
	{
		return $this->workflow;
	}
	/**
	* @param  CiBuildRun_Relationships_Workflow
	*/
	public function setWorkflow($workflow)
	{
		$this->workflow = $workflow;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_Product
	*/
	public function getProduct()
	{
		return $this->product;
	}
	/**
	* @param  CiBuildRun_Relationships_Product
	*/
	public function setProduct($product)
	{
		$this->product = $product;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_SourceBranchOrTag
	*/
	public function getSourceBranchOrTag()
	{
		return $this->sourceBranchOrTag;
	}
	/**
	* @param  CiBuildRun_Relationships_SourceBranchOrTag
	*/
	public function setSourceBranchOrTag($sourceBranchOrTag)
	{
		$this->sourceBranchOrTag = $sourceBranchOrTag;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_DestinationBranch
	*/
	public function getDestinationBranch()
	{
		return $this->destinationBranch;
	}
	/**
	* @param  CiBuildRun_Relationships_DestinationBranch
	*/
	public function setDestinationBranch($destinationBranch)
	{
		$this->destinationBranch = $destinationBranch;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships_PullRequest
	*/
	public function getPullRequest()
	{
		return $this->pullRequest;
	}
	/**
	* @param  CiBuildRun_Relationships_PullRequest
	*/
	public function setPullRequest($pullRequest)
	{
		$this->pullRequest = $pullRequest;
		return $this;
	}

}

class CiBuildRun extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciBuildRuns';
	public $id;
	protected $attributesType = CiBuildRun_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiBuildRun_Relationships::class;
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
	* @return  CiBuildRun_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiBuildRun_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CiBuildRun_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiBuildRun_Relationships
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

