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

class GameCenterAchievementLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $name;
	public $beforeEarnedDescription;
	public $afterEarnedDescription;

	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getBeforeEarnedDescription()
	{
		return $this->beforeEarnedDescription;
	}
	public function setBeforeEarnedDescription($beforeEarnedDescription)
	{
		$this->beforeEarnedDescription = $beforeEarnedDescription;
		return $this;
	}
	public function getAfterEarnedDescription()
	{
		return $this->afterEarnedDescription;
	}
	public function setAfterEarnedDescription($afterEarnedDescription)
	{
		$this->afterEarnedDescription = $afterEarnedDescription;
		return $this;
	}

}

class GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterAchievementType = GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement::class;
	protected $gameCenterAchievementDataType = 'object';

	/**
	* @return  GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement
	*/
	public function getGameCenterAchievement()
	{
		return $this->gameCenterAchievement;
	}
	/**
	* @param  GameCenterAchievementLocalizationCreateRequest_Data_Relationships_GameCenterAchievement
	*/
	public function setGameCenterAchievement($gameCenterAchievement)
	{
		$this->gameCenterAchievement = $gameCenterAchievement;
		return $this;
	}

}

class GameCenterAchievementLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievementLocalizations';
	protected $attributesType = GameCenterAchievementLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterAchievementLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterAchievementLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterAchievementLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterAchievementLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterAchievementLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterAchievementLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

