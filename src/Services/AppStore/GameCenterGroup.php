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

class GameCenterGroup_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $this;
	}

}

class GameCenterGroup_Relationships_GameCenterDetails_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterDetails_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterDetails extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterGroup_Relationships_GameCenterDetails_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterGroup_Relationships_GameCenterDetails_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterGroup_Relationships_GameCenterDetails_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterDetails_Links
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
	* @return  GameCenterGroup_Relationships_GameCenterDetails_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterDetails_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterGroup_Relationships_GameCenterLeaderboards_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterLeaderboards_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterLeaderboards extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterGroup_Relationships_GameCenterLeaderboards_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterGroup_Relationships_GameCenterLeaderboards_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterGroup_Relationships_GameCenterLeaderboards_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterLeaderboards_Links
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
	* @return  GameCenterGroup_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterGroup_Relationships_GameCenterLeaderboardSets_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterLeaderboardSets_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterLeaderboardSets extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterGroup_Relationships_GameCenterLeaderboardSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterGroup_Relationships_GameCenterLeaderboardSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterGroup_Relationships_GameCenterLeaderboardSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterLeaderboardSets_Links
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
	* @return  GameCenterGroup_Relationships_GameCenterLeaderboardSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterLeaderboardSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterGroup_Relationships_GameCenterAchievements_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterAchievements_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterGroup_Relationships_GameCenterAchievements extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterGroup_Relationships_GameCenterAchievements_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterGroup_Relationships_GameCenterAchievements_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterGroup_Relationships_GameCenterAchievements_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterAchievements_Links
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
	* @return  GameCenterGroup_Relationships_GameCenterAchievements_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterAchievements_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterGroup_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailsType = GameCenterGroup_Relationships_GameCenterDetails::class;
	protected $gameCenterDetailsDataType = 'object';
	protected $gameCenterLeaderboardsType = GameCenterGroup_Relationships_GameCenterLeaderboards::class;
	protected $gameCenterLeaderboardsDataType = 'object';
	protected $gameCenterLeaderboardSetsType = GameCenterGroup_Relationships_GameCenterLeaderboardSets::class;
	protected $gameCenterLeaderboardSetsDataType = 'object';
	protected $gameCenterAchievementsType = GameCenterGroup_Relationships_GameCenterAchievements::class;
	protected $gameCenterAchievementsDataType = 'object';

	/**
	* @return  GameCenterGroup_Relationships_GameCenterDetails
	*/
	public function getGameCenterDetails()
	{
		return $this->gameCenterDetails;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterDetails
	*/
	public function setGameCenterDetails($gameCenterDetails)
	{
		$this->gameCenterDetails = $gameCenterDetails;
		return $this;
	}
	/**
	* @return  GameCenterGroup_Relationships_GameCenterLeaderboards
	*/
	public function getGameCenterLeaderboards()
	{
		return $this->gameCenterLeaderboards;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterLeaderboards
	*/
	public function setGameCenterLeaderboards($gameCenterLeaderboards)
	{
		$this->gameCenterLeaderboards = $gameCenterLeaderboards;
		return $this;
	}
	/**
	* @return  GameCenterGroup_Relationships_GameCenterLeaderboardSets
	*/
	public function getGameCenterLeaderboardSets()
	{
		return $this->gameCenterLeaderboardSets;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterLeaderboardSets
	*/
	public function setGameCenterLeaderboardSets($gameCenterLeaderboardSets)
	{
		$this->gameCenterLeaderboardSets = $gameCenterLeaderboardSets;
		return $this;
	}
	/**
	* @return  GameCenterGroup_Relationships_GameCenterAchievements
	*/
	public function getGameCenterAchievements()
	{
		return $this->gameCenterAchievements;
	}
	/**
	* @param  GameCenterGroup_Relationships_GameCenterAchievements
	*/
	public function setGameCenterAchievements($gameCenterAchievements)
	{
		$this->gameCenterAchievements = $gameCenterAchievements;
		return $this;
	}

}

class GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterGroups';
	public $id;
	protected $attributesType = GameCenterGroup_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterGroup_Relationships::class;
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
	* @return  GameCenterGroup_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterGroup_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterGroup_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterGroup_Relationships
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

