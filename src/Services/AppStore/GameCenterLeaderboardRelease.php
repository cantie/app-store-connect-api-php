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

class GameCenterLeaderboardRelease_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $live;

	public function getLive()
	{
		return $this->live;
	}
	public function setLive($live)
	{
		$this->live = $live;
		return $this;
	}

}

class GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardRelease_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardRelease_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterLeaderboardRelease_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterLeaderboardType = GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard::class;
	protected $gameCenterLeaderboardDataType = 'object';

	/**
	* @return  GameCenterLeaderboardRelease_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard
	*/
	public function getGameCenterLeaderboard()
	{
		return $this->gameCenterLeaderboard;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships_GameCenterLeaderboard
	*/
	public function setGameCenterLeaderboard($gameCenterLeaderboard)
	{
		$this->gameCenterLeaderboard = $gameCenterLeaderboard;
		return $this;
	}

}

class GameCenterLeaderboardRelease extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardReleases';
	public $id;
	protected $attributesType = GameCenterLeaderboardRelease_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardRelease_Relationships::class;
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
	* @return  GameCenterLeaderboardRelease_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardRelease_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardRelease_Relationships
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

