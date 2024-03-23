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

class GameCenterMatchmakingRuleCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $description;
	public $type; // COMPATIBLE, DISTANCE, MATCH, TEAM
	public $expression;
	public $weight;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
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
	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getExpression()
	{
		return $this->expression;
	}
	public function setExpression($expression)
	{
		$this->expression = $expression;
		return $this;
	}
	public function getWeight()
	{
		return $this->weight;
	}
	public function setWeight($weight)
	{
		$this->weight = $weight;
		return $this;
	}

}

class GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingRuleCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $ruleSetType = GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet::class;
	protected $ruleSetDataType = 'object';

	/**
	* @return  GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet
	*/
	public function getRuleSet()
	{
		return $this->ruleSet;
	}
	/**
	* @param  GameCenterMatchmakingRuleCreateRequest_Data_Relationships_RuleSet
	*/
	public function setRuleSet($ruleSet)
	{
		$this->ruleSet = $ruleSet;
		return $this;
	}

}

class GameCenterMatchmakingRuleCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingRules';
	protected $attributesType = GameCenterMatchmakingRuleCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterMatchmakingRuleCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterMatchmakingRuleCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterMatchmakingRuleCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingRuleCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterMatchmakingRuleCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterMatchmakingRuleCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingRuleCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingRuleCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingRuleCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

