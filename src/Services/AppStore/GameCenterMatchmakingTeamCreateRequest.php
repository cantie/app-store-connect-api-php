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

class GameCenterMatchmakingTeamCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $minPlayers;
	public $maxPlayers;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $this;
	}
	public function getMinPlayers()
	{
		return $this->minPlayers;
	}
	public function setMinPlayers($minPlayers)
	{
		$this->minPlayers = $minPlayers;
		return $this;
	}
	public function getMaxPlayers()
	{
		return $this->maxPlayers;
	}
	public function setMaxPlayers($maxPlayers)
	{
		$this->maxPlayers = $maxPlayers;
		return $this;
	}

}

class GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingTeamCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $ruleSetType = GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet::class;
	protected $ruleSetDataType = 'object';

	/**
	* @return  GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet
	*/
	public function getRuleSet()
	{
		return $this->ruleSet;
	}
	/**
	* @param  GameCenterMatchmakingTeamCreateRequest_Data_Relationships_RuleSet
	*/
	public function setRuleSet($ruleSet)
	{
		$this->ruleSet = $ruleSet;
		return $this;
	}

}

class GameCenterMatchmakingTeamCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingTeams';
	protected $attributesType = GameCenterMatchmakingTeamCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterMatchmakingTeamCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterMatchmakingTeamCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterMatchmakingTeamCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingTeamCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterMatchmakingTeamCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterMatchmakingTeamCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingTeamCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterMatchmakingTeamCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingTeamCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

