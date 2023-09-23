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

class GameCenterAchievementCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $vendorIdentifier;
	public $points;
	public $showBeforeEarned;
	public $repeatable;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $this;
	}
	public function getVendorIdentifier()
	{
		return $this->vendorIdentifier;
	}
	public function setVendorIdentifier($vendorIdentifier)
	{
		$this->vendorIdentifier = $vendorIdentifier;
		return $this;
	}
	public function getPoints()
	{
		return $this->points;
	}
	public function setPoints($points)
	{
		$this->points = $points;
		return $this;
	}
	public function getShowBeforeEarned()
	{
		return $this->showBeforeEarned;
	}
	public function setShowBeforeEarned($showBeforeEarned)
	{
		$this->showBeforeEarned = $showBeforeEarned;
		return $this;
	}
	public function getRepeatable()
	{
		return $this->repeatable;
	}
	public function setRepeatable($repeatable)
	{
		$this->repeatable = $repeatable;
		return $this;
	}

}

class GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterDetails';
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

class GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterGroupType = GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup::class;
	protected $gameCenterGroupDataType = 'object';

	/**
	* @return  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup
	*/
	public function getGameCenterGroup()
	{
		return $this->gameCenterGroup;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data_Relationships_GameCenterGroup
	*/
	public function setGameCenterGroup($gameCenterGroup)
	{
		$this->gameCenterGroup = $gameCenterGroup;
		return $this;
	}

}

class GameCenterAchievementCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievements';
	protected $attributesType = GameCenterAchievementCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterAchievementCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterAchievementCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterAchievementCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterAchievementCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

