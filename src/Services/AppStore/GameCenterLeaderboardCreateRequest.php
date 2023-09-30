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

class GameCenterLeaderboardCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $defaultFormatter; // 
	public $referenceName;
	public $vendorIdentifier;
	public $submissionType; // BEST_SCORE, MOST_RECENT_SCORE
	public $scoreSortType; // ASC, DESC
	public $scoreRangeStart;
	public $scoreRangeEnd;
	public $recurrenceStartDate;
	public $recurrenceDuration;
	public $recurrenceRule;

	/**
	* @return  string
	*/
	public function getDefaultFormatter()
	{
		return $this->defaultFormatter;
	}
	/**
	* @param  string
	*/
	public function setDefaultFormatter($defaultFormatter)
	{
		$this->defaultFormatter = $defaultFormatter;
		return $this;
	}
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
	public function getSubmissionType()
	{
		return $this->submissionType;
	}
	public function setSubmissionType($submissionType)
	{
		$this->submissionType = $submissionType;
		return $this;
	}
	public function getScoreSortType()
	{
		return $this->scoreSortType;
	}
	public function setScoreSortType($scoreSortType)
	{
		$this->scoreSortType = $scoreSortType;
		return $this;
	}
	public function getScoreRangeStart()
	{
		return $this->scoreRangeStart;
	}
	public function setScoreRangeStart($scoreRangeStart)
	{
		$this->scoreRangeStart = $scoreRangeStart;
		return $this;
	}
	public function getScoreRangeEnd()
	{
		return $this->scoreRangeEnd;
	}
	public function setScoreRangeEnd($scoreRangeEnd)
	{
		$this->scoreRangeEnd = $scoreRangeEnd;
		return $this;
	}
	public function getRecurrenceStartDate()
	{
		return $this->recurrenceStartDate;
	}
	public function setRecurrenceStartDate($recurrenceStartDate)
	{
		$this->recurrenceStartDate = $recurrenceStartDate;
		return $this;
	}
	public function getRecurrenceDuration()
	{
		return $this->recurrenceDuration;
	}
	public function setRecurrenceDuration($recurrenceDuration)
	{
		$this->recurrenceDuration = $recurrenceDuration;
		return $this;
	}
	public function getRecurrenceRule()
	{
		return $this->recurrenceRule;
	}
	public function setRecurrenceRule($recurrenceRule)
	{
		$this->recurrenceRule = $recurrenceRule;
		return $this;
	}

}

class GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets_Data extends \Cantie\AppStoreConnect\Model
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

class GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class GameCenterLeaderboardCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterDetailType = GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $gameCenterGroupType = GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup::class;
	protected $gameCenterGroupDataType = 'object';
	protected $gameCenterLeaderboardSetsType = GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets::class;
	protected $gameCenterLeaderboardSetsDataType = 'object';

	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup
	*/
	public function getGameCenterGroup()
	{
		return $this->gameCenterGroup;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterGroup
	*/
	public function setGameCenterGroup($gameCenterGroup)
	{
		$this->gameCenterGroup = $gameCenterGroup;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets
	*/
	public function getGameCenterLeaderboardSets()
	{
		return $this->gameCenterLeaderboardSets;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships_GameCenterLeaderboardSets
	*/
	public function setGameCenterLeaderboardSets($gameCenterLeaderboardSets)
	{
		$this->gameCenterLeaderboardSets = $gameCenterLeaderboardSets;
		return $this;
	}

}

class GameCenterLeaderboardCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboards';
	protected $attributesType = GameCenterLeaderboardCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = GameCenterLeaderboardCreateRequest_Data_Relationships::class;
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
	* @return  GameCenterLeaderboardCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  GameCenterLeaderboardCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class GameCenterLeaderboardCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

