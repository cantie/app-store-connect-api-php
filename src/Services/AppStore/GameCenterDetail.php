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

class GameCenterDetail_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $arcadeEnabled;
	public $challengeEnabled;

	public function getArcadeEnabled()
	{
		return $this->arcadeEnabled;
	}
	public function setArcadeEnabled($arcadeEnabled)
	{
		$this->arcadeEnabled = $arcadeEnabled;
		return $this;
	}
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

class GameCenterDetail_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
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

class GameCenterDetail_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterDetail_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetail_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_GameCenterAppVersions_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterAppVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAppVersions';
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

class GameCenterDetail_Relationships_GameCenterAppVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_GameCenterAppVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_GameCenterAppVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_GameCenterAppVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterAppVersions_Links
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
	* @return  GameCenterDetail_Relationships_GameCenterAppVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterAppVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_GameCenterGroup_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterGroup_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_GameCenterGroup_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterDetail_Relationships_GameCenterGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetail_Relationships_GameCenterGroup_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterGroup_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_GameCenterGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_GameCenterLeaderboards_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterLeaderboards_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterLeaderboards extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_GameCenterLeaderboards_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_GameCenterLeaderboards_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_GameCenterLeaderboards_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterLeaderboards_Links
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
	* @return  GameCenterDetail_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_GameCenterLeaderboardSets_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterLeaderboardSets_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterLeaderboardSets extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_GameCenterLeaderboardSets_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_GameCenterLeaderboardSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_GameCenterLeaderboardSets_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterLeaderboardSets_Links
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
	* @return  GameCenterDetail_Relationships_GameCenterLeaderboardSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterLeaderboardSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_GameCenterAchievements_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterAchievements_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_GameCenterAchievements extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_GameCenterAchievements_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_GameCenterAchievements_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_GameCenterAchievements_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterAchievements_Links
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
	* @return  GameCenterDetail_Relationships_GameCenterAchievements_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterAchievements_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_DefaultLeaderboard_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_DefaultLeaderboard_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_DefaultLeaderboard extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_DefaultLeaderboard_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterDetail_Relationships_DefaultLeaderboard_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetail_Relationships_DefaultLeaderboard_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_DefaultLeaderboard_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_DefaultLeaderboard_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_DefaultLeaderboard_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_DefaultGroupLeaderboard_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_DefaultGroupLeaderboard_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_DefaultGroupLeaderboard extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_DefaultGroupLeaderboard_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterDetail_Relationships_DefaultGroupLeaderboard_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterDetail_Relationships_DefaultGroupLeaderboard_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_DefaultGroupLeaderboard_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_DefaultGroupLeaderboard_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_DefaultGroupLeaderboard_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_AchievementReleases_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_AchievementReleases_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievementReleases';
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

class GameCenterDetail_Relationships_AchievementReleases extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_AchievementReleases_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_AchievementReleases_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_AchievementReleases_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_AchievementReleases_Links
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
	* @return  GameCenterDetail_Relationships_AchievementReleases_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_AchievementReleases_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_LeaderboardReleases_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_LeaderboardReleases_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardReleases';
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

class GameCenterDetail_Relationships_LeaderboardReleases extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_LeaderboardReleases_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_LeaderboardReleases_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_LeaderboardReleases_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_LeaderboardReleases_Links
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
	* @return  GameCenterDetail_Relationships_LeaderboardReleases_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_LeaderboardReleases_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships_LeaderboardSetReleases_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterDetail_Relationships_LeaderboardSetReleases_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSetReleases';
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

class GameCenterDetail_Relationships_LeaderboardSetReleases extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterDetail_Relationships_LeaderboardSetReleases_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterDetail_Relationships_LeaderboardSetReleases_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterDetail_Relationships_LeaderboardSetReleases_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterDetail_Relationships_LeaderboardSetReleases_Links
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
	* @return  GameCenterDetail_Relationships_LeaderboardSetReleases_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterDetail_Relationships_LeaderboardSetReleases_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterDetail_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = GameCenterDetail_Relationships_App::class;
	protected $appDataType = 'object';
	protected $gameCenterAppVersionsType = GameCenterDetail_Relationships_GameCenterAppVersions::class;
	protected $gameCenterAppVersionsDataType = 'object';
	protected $gameCenterGroupType = GameCenterDetail_Relationships_GameCenterGroup::class;
	protected $gameCenterGroupDataType = 'object';
	protected $gameCenterLeaderboardsType = GameCenterDetail_Relationships_GameCenterLeaderboards::class;
	protected $gameCenterLeaderboardsDataType = 'object';
	protected $gameCenterLeaderboardSetsType = GameCenterDetail_Relationships_GameCenterLeaderboardSets::class;
	protected $gameCenterLeaderboardSetsDataType = 'object';
	protected $gameCenterAchievementsType = GameCenterDetail_Relationships_GameCenterAchievements::class;
	protected $gameCenterAchievementsDataType = 'object';
	protected $defaultLeaderboardType = GameCenterDetail_Relationships_DefaultLeaderboard::class;
	protected $defaultLeaderboardDataType = 'object';
	protected $defaultGroupLeaderboardType = GameCenterDetail_Relationships_DefaultGroupLeaderboard::class;
	protected $defaultGroupLeaderboardDataType = 'object';
	protected $achievementReleasesType = GameCenterDetail_Relationships_AchievementReleases::class;
	protected $achievementReleasesDataType = 'object';
	protected $leaderboardReleasesType = GameCenterDetail_Relationships_LeaderboardReleases::class;
	protected $leaderboardReleasesDataType = 'object';
	protected $leaderboardSetReleasesType = GameCenterDetail_Relationships_LeaderboardSetReleases::class;
	protected $leaderboardSetReleasesDataType = 'object';

	/**
	* @return  GameCenterDetail_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  GameCenterDetail_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_GameCenterAppVersions
	*/
	public function getGameCenterAppVersions()
	{
		return $this->gameCenterAppVersions;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterAppVersions
	*/
	public function setGameCenterAppVersions($gameCenterAppVersions)
	{
		$this->gameCenterAppVersions = $gameCenterAppVersions;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_GameCenterGroup
	*/
	public function getGameCenterGroup()
	{
		return $this->gameCenterGroup;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterGroup
	*/
	public function setGameCenterGroup($gameCenterGroup)
	{
		$this->gameCenterGroup = $gameCenterGroup;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_GameCenterLeaderboards
	*/
	public function getGameCenterLeaderboards()
	{
		return $this->gameCenterLeaderboards;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterLeaderboards
	*/
	public function setGameCenterLeaderboards($gameCenterLeaderboards)
	{
		$this->gameCenterLeaderboards = $gameCenterLeaderboards;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_GameCenterLeaderboardSets
	*/
	public function getGameCenterLeaderboardSets()
	{
		return $this->gameCenterLeaderboardSets;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterLeaderboardSets
	*/
	public function setGameCenterLeaderboardSets($gameCenterLeaderboardSets)
	{
		$this->gameCenterLeaderboardSets = $gameCenterLeaderboardSets;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_GameCenterAchievements
	*/
	public function getGameCenterAchievements()
	{
		return $this->gameCenterAchievements;
	}
	/**
	* @param  GameCenterDetail_Relationships_GameCenterAchievements
	*/
	public function setGameCenterAchievements($gameCenterAchievements)
	{
		$this->gameCenterAchievements = $gameCenterAchievements;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_DefaultLeaderboard
	*/
	public function getDefaultLeaderboard()
	{
		return $this->defaultLeaderboard;
	}
	/**
	* @param  GameCenterDetail_Relationships_DefaultLeaderboard
	*/
	public function setDefaultLeaderboard($defaultLeaderboard)
	{
		$this->defaultLeaderboard = $defaultLeaderboard;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_DefaultGroupLeaderboard
	*/
	public function getDefaultGroupLeaderboard()
	{
		return $this->defaultGroupLeaderboard;
	}
	/**
	* @param  GameCenterDetail_Relationships_DefaultGroupLeaderboard
	*/
	public function setDefaultGroupLeaderboard($defaultGroupLeaderboard)
	{
		$this->defaultGroupLeaderboard = $defaultGroupLeaderboard;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_AchievementReleases
	*/
	public function getAchievementReleases()
	{
		return $this->achievementReleases;
	}
	/**
	* @param  GameCenterDetail_Relationships_AchievementReleases
	*/
	public function setAchievementReleases($achievementReleases)
	{
		$this->achievementReleases = $achievementReleases;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_LeaderboardReleases
	*/
	public function getLeaderboardReleases()
	{
		return $this->leaderboardReleases;
	}
	/**
	* @param  GameCenterDetail_Relationships_LeaderboardReleases
	*/
	public function setLeaderboardReleases($leaderboardReleases)
	{
		$this->leaderboardReleases = $leaderboardReleases;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships_LeaderboardSetReleases
	*/
	public function getLeaderboardSetReleases()
	{
		return $this->leaderboardSetReleases;
	}
	/**
	* @param  GameCenterDetail_Relationships_LeaderboardSetReleases
	*/
	public function setLeaderboardSetReleases($leaderboardSetReleases)
	{
		$this->leaderboardSetReleases = $leaderboardSetReleases;
		return $this;
	}

}

class GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterDetails';
	public $id;
	protected $attributesType = GameCenterDetail_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterDetail_Relationships::class;
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
	* @return  GameCenterDetail_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterDetail_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterDetail_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterDetail_Relationships
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

