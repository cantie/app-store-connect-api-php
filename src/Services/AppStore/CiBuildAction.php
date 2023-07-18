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

class CiBuildAction_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $actionTypeType = CiActionType::class;
	protected $actionTypeDataType = '';
	public $startedDate;
	public $finishedDate;
	protected $issueCountsType = CiIssueCounts::class;
	protected $issueCountsDataType = '';
	protected $executionProgressType = CiExecutionProgress::class;
	protected $executionProgressDataType = '';
	protected $completionStatusType = CiCompletionStatus::class;
	protected $completionStatusDataType = '';
	public $isRequiredToPass;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	/**
	* @return  CiActionType
	*/
	public function getActionType()
	{
		return $this->actionType;
	}
	/**
	* @param  CiActionType
	*/
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
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
	* @return  CiExecutionProgress
	*/
	public function getExecutionProgress()
	{
		return $this->executionProgress;
	}
	/**
	* @param  CiExecutionProgress
	*/
	public function setExecutionProgress($executionProgress)
	{
		$this->executionProgress = $executionProgress;
		return $this;
	}
	/**
	* @return  CiCompletionStatus
	*/
	public function getCompletionStatus()
	{
		return $this->completionStatus;
	}
	/**
	* @param  CiCompletionStatus
	*/
	public function setCompletionStatus($completionStatus)
	{
		$this->completionStatus = $completionStatus;
		return $this;
	}
	public function getIsRequiredToPass()
	{
		return $this->isRequiredToPass;
	}
	public function setIsRequiredToPass($isRequiredToPass)
	{
		$this->isRequiredToPass = $isRequiredToPass;
		return $this;
	}

}
class_alias(CiBuildAction_Attributes::class, 'AppleService_AppStore_CiBuildAction_Attributes');

class CiBuildAction_Relationships_BuildRun_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiBuildAction_Relationships_BuildRun_Links::class, 'AppleService_AppStore_CiBuildAction_Relationships_BuildRun_Links');

class CiBuildAction_Relationships_BuildRun_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(CiBuildAction_Relationships_BuildRun_Data::class, 'AppleService_AppStore_CiBuildAction_Relationships_BuildRun_Data');

class CiBuildAction_Relationships_BuildRun extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiBuildAction_Relationships_BuildRun_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiBuildAction_Relationships_BuildRun_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiBuildAction_Relationships_BuildRun_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiBuildAction_Relationships_BuildRun_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiBuildAction_Relationships_BuildRun_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiBuildAction_Relationships_BuildRun_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiBuildAction_Relationships_BuildRun::class, 'AppleService_AppStore_CiBuildAction_Relationships_BuildRun');

class CiBuildAction_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildRunType = CiBuildAction_Relationships_BuildRun::class;
	protected $buildRunDataType = 'object';

	/**
	* @return  CiBuildAction_Relationships_BuildRun
	*/
	public function getBuildRun()
	{
		return $this->buildRun;
	}
	/**
	* @param  CiBuildAction_Relationships_BuildRun
	*/
	public function setBuildRun($buildRun)
	{
		$this->buildRun = $buildRun;
		return $this;
	}

}
class_alias(CiBuildAction_Relationships::class, 'AppleService_AppStore_CiBuildAction_Relationships');

class CiBuildAction extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciBuildActions';
	public $id;
	protected $attributesType = CiBuildAction_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiBuildAction_Relationships::class;
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
	* @return  CiBuildAction_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiBuildAction_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CiBuildAction_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiBuildAction_Relationships
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
class_alias(CiBuildAction::class, 'AppleService_AppStore_CiBuildAction');

