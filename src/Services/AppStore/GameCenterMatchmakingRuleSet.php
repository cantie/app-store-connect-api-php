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

class GameCenterMatchmakingRuleSet_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $ruleLanguageVersion;
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
	public function getRuleLanguageVersion()
	{
		return $this->ruleLanguageVersion;
	}
	public function setRuleLanguageVersion($ruleLanguageVersion)
	{
		$this->ruleLanguageVersion = $ruleLanguageVersion;
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

class GameCenterMatchmakingRuleSet_Relationships_Teams_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterMatchmakingRuleSet_Relationships_Teams_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingTeams';
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

class GameCenterMatchmakingRuleSet_Relationships_Teams extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterMatchmakingRuleSet_Relationships_Teams_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterMatchmakingRuleSet_Relationships_Teams_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships_Teams_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_Teams_Links
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
	* @return  GameCenterMatchmakingRuleSet_Relationships_Teams_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_Teams_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingRuleSet_Relationships_Rules_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterMatchmakingRuleSet_Relationships_Rules_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingRules';
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

class GameCenterMatchmakingRuleSet_Relationships_Rules extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterMatchmakingRuleSet_Relationships_Rules_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterMatchmakingRuleSet_Relationships_Rules_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships_Rules_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_Rules_Links
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
	* @return  GameCenterMatchmakingRuleSet_Relationships_Rules_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_Rules_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingQueues';
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

class GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Links
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
	* @return  GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingRuleSet_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $teamsType = GameCenterMatchmakingRuleSet_Relationships_Teams::class;
	protected $teamsDataType = 'object';
	protected $rulesType = GameCenterMatchmakingRuleSet_Relationships_Rules::class;
	protected $rulesDataType = 'object';
	protected $matchmakingQueuesType = GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues::class;
	protected $matchmakingQueuesDataType = 'object';

	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships_Teams
	*/
	public function getTeams()
	{
		return $this->teams;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_Teams
	*/
	public function setTeams($teams)
	{
		$this->teams = $teams;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships_Rules
	*/
	public function getRules()
	{
		return $this->rules;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_Rules
	*/
	public function setRules($rules)
	{
		$this->rules = $rules;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues
	*/
	public function getMatchmakingQueues()
	{
		return $this->matchmakingQueues;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships_MatchmakingQueues
	*/
	public function setMatchmakingQueues($matchmakingQueues)
	{
		$this->matchmakingQueues = $matchmakingQueues;
		return $this;
	}

}

class GameCenterMatchmakingRuleSet extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingRuleSets';
	public $id;
	protected $attributesType = GameCenterMatchmakingRuleSet_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterMatchmakingRuleSet_Relationships::class;
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
	* @return  GameCenterMatchmakingRuleSet_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingRuleSet_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterMatchmakingRuleSet_Relationships
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

