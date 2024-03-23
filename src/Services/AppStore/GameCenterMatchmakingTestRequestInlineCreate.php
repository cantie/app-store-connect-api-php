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

class GameCenterMatchmakingTestRequestInlineCreate_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $requestName;
	public $secondsInQueue;
	public $locale; // AR-SA, CA-ES, CS-CZ, DA-DK, DE-DE, EL-GR, EN-AU, EN-GB, EN-US, EN-KY, ES-ES, ES-MX, FI-FI, FR-CA, FR-FR, HI-IN, HR-HR, HU-HU, ID-ID, IT-IT, IW-IL, JA-JP, KO-KR, MS-MY, NL-NL, NO-NO, PL-PL, PT-BR, PT-PT, RO-RO, RU-RU, SK-SK, SV-SE, TH-TH, TR-TR, UK-UA, ZH-CN, ZH-TW, ZH-HK
	protected $locationType = Location::class;
	protected $locationDataType = '';
	public $minPlayers;
	public $maxPlayers;
	public $playerCount;
	public $bundleId;
	public $platform; // 
	public $appVersion;

	public function getRequestName()
	{
		return $this->requestName;
	}
	public function setRequestName($requestName)
	{
		$this->requestName = $requestName;
		return $this;
	}
	public function getSecondsInQueue()
	{
		return $this->secondsInQueue;
	}
	public function setSecondsInQueue($secondsInQueue)
	{
		$this->secondsInQueue = $secondsInQueue;
		return $this;
	}
	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}
	/**
	* @return  Location
	*/
	public function getLocation()
	{
		return $this->location;
	}
	/**
	* @param  Location
	*/
	public function setLocation($location)
	{
		$this->location = $location;
		return $this;
	}
	public function getMinPlayers()
	{
		return $this->minPlayers;
	}
	public function setMinPlayers($minPlayers)
	{
		$this->minPlayers = $minPlayers;
		return $this;
	}
	public function getMaxPlayers()
	{
		return $this->maxPlayers;
	}
	public function setMaxPlayers($maxPlayers)
	{
		$this->maxPlayers = $maxPlayers;
		return $this;
	}
	public function getPlayerCount()
	{
		return $this->playerCount;
	}
	public function setPlayerCount($playerCount)
	{
		$this->playerCount = $playerCount;
		return $this;
	}
	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  string
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $this;
	}
	public function getAppVersion()
	{
		return $this->appVersion;
	}
	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		return $this;
	}

}

class GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingTestPlayerProperties';
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

class GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterMatchmakingTestRequestInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $matchmakingPlayerPropertiesType = GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties::class;
	protected $matchmakingPlayerPropertiesDataType = 'object';

	/**
	* @return  GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties
	*/
	public function getMatchmakingPlayerProperties()
	{
		return $this->matchmakingPlayerProperties;
	}
	/**
	* @param  GameCenterMatchmakingTestRequestInlineCreate_Relationships_MatchmakingPlayerProperties
	*/
	public function setMatchmakingPlayerProperties($matchmakingPlayerProperties)
	{
		$this->matchmakingPlayerProperties = $matchmakingPlayerProperties;
		return $this;
	}

}

class GameCenterMatchmakingTestRequestInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterMatchmakingTestRequests';
	public $id;
	protected $attributesType = GameCenterMatchmakingTestRequestInlineCreate_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterMatchmakingTestRequestInlineCreate_Relationships::class;
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
	* @return  GameCenterMatchmakingTestRequestInlineCreate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterMatchmakingTestRequestInlineCreate_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingTestRequestInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterMatchmakingTestRequestInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

