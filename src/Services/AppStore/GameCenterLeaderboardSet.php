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

class GameCenterLeaderboardSet_Attributes extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterDetail_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSet_Relationships_GameCenterDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardSet_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSet_Relationships_GameCenterGroup_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterGroup_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSet_Relationships_GameCenterGroup_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardSet_Relationships_GameCenterGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterGroup_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterGroup_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSet_Relationships_Localizations_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_Localizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSetLocalizations';
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

class GameCenterLeaderboardSet_Relationships_Localizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSet_Relationships_Localizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterLeaderboardSet_Relationships_Localizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_Localizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_Localizations_Links
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
	* @return  GameCenterLeaderboardSet_Relationships_Localizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_Localizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Links
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
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSet_Relationships_Releases_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_Releases_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSet_Relationships_Releases extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSet_Relationships_Releases_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = GameCenterLeaderboardSet_Relationships_Releases_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_Releases_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_Releases_Links
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
	* @return  GameCenterLeaderboardSet_Relationships_Releases_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_Releases_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSet_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterLeaderboardSet_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterGroupType = GameCenterLeaderboardSet_Relationships_GameCenterGroup::class;
	protected $gameCenterGroupDataType = 'object';
	protected $groupLeaderboardSetType = GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet::class;
	protected $groupLeaderboardSetDataType = 'object';
	protected $localizationsType = GameCenterLeaderboardSet_Relationships_Localizations::class;
	protected $localizationsDataType = 'object';
	protected $gameCenterLeaderboardsType = GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards::class;
	protected $gameCenterLeaderboardsDataType = 'object';
	protected $releasesType = GameCenterLeaderboardSet_Relationships_Releases::class;
	protected $releasesDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterGroup
	*/
	public function getGameCenterGroup()
	{
		return $this->gameCenterGroup;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterGroup
	*/
	public function setGameCenterGroup($gameCenterGroup)
	{
		$this->gameCenterGroup = $gameCenterGroup;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet
	*/
	public function getGroupLeaderboardSet()
	{
		return $this->groupLeaderboardSet;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GroupLeaderboardSet
	*/
	public function setGroupLeaderboardSet($groupLeaderboardSet)
	{
		$this->groupLeaderboardSet = $groupLeaderboardSet;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_Localizations
	*/
	public function getLocalizations()
	{
		return $this->localizations;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_Localizations
	*/
	public function setLocalizations($localizations)
	{
		$this->localizations = $localizations;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards
	*/
	public function getGameCenterLeaderboards()
	{
		return $this->gameCenterLeaderboards;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_GameCenterLeaderboards
	*/
	public function setGameCenterLeaderboards($gameCenterLeaderboards)
	{
		$this->gameCenterLeaderboards = $gameCenterLeaderboards;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships_Releases
	*/
	public function getReleases()
	{
		return $this->releases;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships_Releases
	*/
	public function setReleases($releases)
	{
		$this->releases = $releases;
		return $this;
	}

}

class GameCenterLeaderboardSet extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSets';
	public $id;
	protected $attributesType = GameCenterLeaderboardSet_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardSet_Relationships::class;
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
	* @return  GameCenterLeaderboardSet_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardSet_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSet_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardSet_Relationships
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

