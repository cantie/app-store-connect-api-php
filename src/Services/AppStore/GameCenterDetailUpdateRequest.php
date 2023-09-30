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

class GameCenterDetailUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $challengeEnabled;

	public function getChallengeEnabled()
	{
		return $this->challengeEnabled;
	}
	public function setChallengeEnabled($challengeEnabled)
	{
		$this->challengeEnabled = $challengeEnabled;
		return $this;
	}

}

class GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterGroups';
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

class GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboards';
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

class GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboards';
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

class GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetailUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterGroupType = GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup::class;
	protected $gameCenterGroupDataType = 'object';
	protected $defaultLeaderboardType = GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard::class;
	protected $defaultLeaderboardDataType = 'object';
	protected $defaultGroupLeaderboardType = GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard::class;
	protected $defaultGroupLeaderboardDataType = 'object';

	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup
	*/
	public function getGameCenterGroup()
	{
		return $this->gameCenterGroup;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships_GameCenterGroup
	*/
	public function setGameCenterGroup($gameCenterGroup)
	{
		$this->gameCenterGroup = $gameCenterGroup;
		return $this;
	}
	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard
	*/
	public function getDefaultLeaderboard()
	{
		return $this->defaultLeaderboard;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships_DefaultLeaderboard
	*/
	public function setDefaultLeaderboard($defaultLeaderboard)
	{
		$this->defaultLeaderboard = $defaultLeaderboard;
		return $this;
	}
	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard
	*/
	public function getDefaultGroupLeaderboard()
	{
		return $this->defaultGroupLeaderboard;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships_DefaultGroupLeaderboard
	*/
	public function setDefaultGroupLeaderboard($defaultGroupLeaderboard)
	{
		$this->defaultGroupLeaderboard = $defaultGroupLeaderboard;
		return $this;
	}

}

class GameCenterDetailUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterDetails';
	public $id;
	protected $attributesType = GameCenterDetailUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterDetailUpdateRequest_Data_Relationships::class;
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
	* @return  GameCenterDetailUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterDetailUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterDetailUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterDetailUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetailUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetailUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

