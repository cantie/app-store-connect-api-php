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

class GameCenterMatchmakingQueueUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $classicMatchmakingBundleIdsType = '';
	protected $classicMatchmakingBundleIdsDataType = 'array';

	/**
	* @return  []
	*/
	public function getClassicMatchmakingBundleIds()
	{
		return $this->classicMatchmakingBundleIds;
	}
	/**
	* @param  []
	*/
	public function setClassicMatchmakingBundleIds($classicMatchmakingBundleIds)
	{
		$this->classicMatchmakingBundleIds = $classicMatchmakingBundleIds;
		return $this;
	}

}

class GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingRuleSets';
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

class GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingRuleSets';
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

class GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingQueueUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $ruleSetType = GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet::class;
	protected $ruleSetDataType = 'object';
	protected $experimentRuleSetType = GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet::class;
	protected $experimentRuleSetDataType = 'object';

	/**
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet
	*/
	public function getRuleSet()
	{
		return $this->ruleSet;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_RuleSet
	*/
	public function setRuleSet($ruleSet)
	{
		$this->ruleSet = $ruleSet;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet
	*/
	public function getExperimentRuleSet()
	{
		return $this->experimentRuleSet;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships_ExperimentRuleSet
	*/
	public function setExperimentRuleSet($experimentRuleSet)
	{
		$this->experimentRuleSet = $experimentRuleSet;
		return $this;
	}

}

class GameCenterMatchmakingQueueUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingQueues';
	public $id;
	protected $attributesType = GameCenterMatchmakingQueueUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterMatchmakingQueueUpdateRequest_Data_Relationships::class;
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
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterMatchmakingQueueUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingQueueUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingQueueUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingQueueUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

