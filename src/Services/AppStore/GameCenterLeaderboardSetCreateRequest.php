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

class GameCenterLeaderboardSetCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;
	public $vendorIdentifier;

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

}

class GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSetCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterGroupType = GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup::class;
	protected $gameCenterGroupDataType = 'object';
	protected $gameCenterLeaderboardsType = GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards::class;
	protected $gameCenterLeaderboardsDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup
	*/
	public function getGameCenterGroup()
	{
		return $this->gameCenterGroup;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterGroup
	*/
	public function setGameCenterGroup($gameCenterGroup)
	{
		$this->gameCenterGroup = $gameCenterGroup;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards
	*/
	public function getGameCenterLeaderboards()
	{
		return $this->gameCenterLeaderboards;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships_GameCenterLeaderboards
	*/
	public function setGameCenterLeaderboards($gameCenterLeaderboards)
	{
		$this->gameCenterLeaderboards = $gameCenterLeaderboards;
		return $this;
	}

}

class GameCenterLeaderboardSetCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSets';
	protected $attributesType = GameCenterLeaderboardSetCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardSetCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterLeaderboardSetCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardSetCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

