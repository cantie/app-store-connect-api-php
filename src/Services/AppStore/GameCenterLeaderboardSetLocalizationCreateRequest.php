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

class GameCenterLeaderboardSetLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $name;

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

}

class GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSets';
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

class GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterLeaderboardSetType = GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet::class;
	protected $gameCenterLeaderboardSetDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet
	*/
	public function getGameCenterLeaderboardSet()
	{
		return $this->gameCenterLeaderboardSet;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships_GameCenterLeaderboardSet
	*/
	public function setGameCenterLeaderboardSet($gameCenterLeaderboardSet)
	{
		$this->gameCenterLeaderboardSet = $gameCenterLeaderboardSet;
		return $this;
	}

}

class GameCenterLeaderboardSetLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSetLocalizations';
	protected $attributesType = GameCenterLeaderboardSetLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterLeaderboardSetLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardSetLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

