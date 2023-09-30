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

class GameCenterLeaderboardUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $defaultFormatter; // 
	public $referenceName;
	public $submissionType; // BEST_SCORE, MOST_RECENT_SCORE
	public $scoreSortType; // ASC, DESC
	public $scoreRangeStart;
	public $scoreRangeEnd;
	public $recurrenceStartDate;
	public $recurrenceDuration;
	public $recurrenceRule;
	public $archived;

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
	public function getArchived()
	{
		return $this->archived;
	}
	public function setArchived($archived)
	{
		$this->archived = $archived;
		return $this;
	}

}

class GameCenterLeaderboardUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboards';
	public $id;
	protected $attributesType = GameCenterLeaderboardUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

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
	* @return  GameCenterLeaderboardUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}

class GameCenterLeaderboardUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterLeaderboardUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterLeaderboardUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterLeaderboardUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

