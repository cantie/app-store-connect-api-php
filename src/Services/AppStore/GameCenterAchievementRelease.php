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

class GameCenterAchievementRelease_Attributes extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementRelease_Relationships_GameCenterDetail_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementRelease_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementRelease_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterAchievementRelease_Relationships_GameCenterDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterAchievementRelease_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementRelease_Relationships_GameCenterDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships_GameCenterDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterAchievementRelease_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementRelease_Relationships_GameCenterAchievement_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementRelease_Relationships_GameCenterAchievement_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterAchievementRelease_Relationships_GameCenterAchievement extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterAchievementRelease_Relationships_GameCenterAchievement_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterAchievementRelease_Relationships_GameCenterAchievement_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementRelease_Relationships_GameCenterAchievement_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships_GameCenterAchievement_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterAchievementRelease_Relationships_GameCenterAchievement_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships_GameCenterAchievement_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterAchievementRelease_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterAchievementRelease_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterAchievementType = GameCenterAchievementRelease_Relationships_GameCenterAchievement::class;
	protected $gameCenterAchievementDataType = 'object';

	/**
	* @return  GameCenterAchievementRelease_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterAchievementRelease_Relationships_GameCenterAchievement
	*/
	public function getGameCenterAchievement()
	{
		return $this->gameCenterAchievement;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships_GameCenterAchievement
	*/
	public function setGameCenterAchievement($gameCenterAchievement)
	{
		$this->gameCenterAchievement = $gameCenterAchievement;
		return $this;
	}

}

class GameCenterAchievementRelease extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievementReleases';
	public $id;
	protected $attributesType = GameCenterAchievementRelease_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterAchievementRelease_Relationships::class;
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
	* @return  GameCenterAchievementRelease_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterAchievementRelease_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterAchievementRelease_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterAchievementRelease_Relationships
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

