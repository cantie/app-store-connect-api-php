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

class GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievements';
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

class GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementReleaseCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterAchievementType = GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement::class;
	protected $gameCenterAchievementDataType = 'object';

	/**
	* @return  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement
	*/
	public function getGameCenterAchievement()
	{
		return $this->gameCenterAchievement;
	}
	/**
	* @param  GameCenterAchievementReleaseCreateRequest_Data_Relationships_GameCenterAchievement
	*/
	public function setGameCenterAchievement($gameCenterAchievement)
	{
		$this->gameCenterAchievement = $gameCenterAchievement;
		return $this;
	}

}

class GameCenterAchievementReleaseCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievementReleases';
	protected $relationshipsType = GameCenterAchievementReleaseCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterAchievementReleaseCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterAchievementReleaseCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterAchievementReleaseCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementReleaseCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementReleaseCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementReleaseCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

