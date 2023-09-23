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

class GameCenterLeaderboardSetLocalization_Attributes extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSetImages';
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

class GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardSetLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterLeaderboardSetType = GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet::class;
	protected $gameCenterLeaderboardSetDataType = 'object';
	protected $gameCenterLeaderboardSetImageType = GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage::class;
	protected $gameCenterLeaderboardSetImageDataType = 'object';

	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet
	*/
	public function getGameCenterLeaderboardSet()
	{
		return $this->gameCenterLeaderboardSet;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSet
	*/
	public function setGameCenterLeaderboardSet($gameCenterLeaderboardSet)
	{
		$this->gameCenterLeaderboardSet = $gameCenterLeaderboardSet;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage
	*/
	public function getGameCenterLeaderboardSetImage()
	{
		return $this->gameCenterLeaderboardSetImage;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships_GameCenterLeaderboardSetImage
	*/
	public function setGameCenterLeaderboardSetImage($gameCenterLeaderboardSetImage)
	{
		$this->gameCenterLeaderboardSetImage = $gameCenterLeaderboardSetImage;
		return $this;
	}

}

class GameCenterLeaderboardSetLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardSetLocalizations';
	public $id;
	protected $attributesType = GameCenterLeaderboardSetLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardSetLocalization_Relationships::class;
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
	* @return  GameCenterLeaderboardSetLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardSetLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardSetLocalization_Relationships
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

