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

class GameCenterLeaderboardLocalization_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $name;
	public $formatterOverride; // 
	public $formatterSuffix;
	public $formatterSuffixSingular;

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
	/**
	* @return  string
	*/
	public function getFormatterOverride()
	{
		return $this->formatterOverride;
	}
	/**
	* @param  string
	*/
	public function setFormatterOverride($formatterOverride)
	{
		$this->formatterOverride = $formatterOverride;
		return $this;
	}
	public function getFormatterSuffix()
	{
		return $this->formatterSuffix;
	}
	public function setFormatterSuffix($formatterSuffix)
	{
		$this->formatterSuffix = $formatterSuffix;
		return $this;
	}
	public function getFormatterSuffixSingular()
	{
		return $this->formatterSuffixSingular;
	}
	public function setFormatterSuffixSingular($formatterSuffixSingular)
	{
		$this->formatterSuffixSingular = $formatterSuffixSingular;
		return $this;
	}

}

class GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardImages';
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

class GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterLeaderboardType = GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard::class;
	protected $gameCenterLeaderboardDataType = 'object';
	protected $gameCenterLeaderboardImageType = GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage::class;
	protected $gameCenterLeaderboardImageDataType = 'object';

	/**
	* @return  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard
	*/
	public function getGameCenterLeaderboard()
	{
		return $this->gameCenterLeaderboard;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboard
	*/
	public function setGameCenterLeaderboard($gameCenterLeaderboard)
	{
		$this->gameCenterLeaderboard = $gameCenterLeaderboard;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage
	*/
	public function getGameCenterLeaderboardImage()
	{
		return $this->gameCenterLeaderboardImage;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships_GameCenterLeaderboardImage
	*/
	public function setGameCenterLeaderboardImage($gameCenterLeaderboardImage)
	{
		$this->gameCenterLeaderboardImage = $gameCenterLeaderboardImage;
		return $this;
	}

}

class GameCenterLeaderboardLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardLocalizations';
	public $id;
	protected $attributesType = GameCenterLeaderboardLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardLocalization_Relationships::class;
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
	* @return  GameCenterLeaderboardLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardLocalization_Relationships
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

