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

class GameCenterLeaderboardEntrySubmission_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $bundleId;
	protected $challengeIdsType = '';
	protected $challengeIdsDataType = 'array';
	public $context;
	public $scopedPlayerId;
	public $score;
	public $submittedDate;
	public $vendorIdentifier;

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
	* @return  []
	*/
	public function getChallengeIds()
	{
		return $this->challengeIds;
	}
	/**
	* @param  []
	*/
	public function setChallengeIds($challengeIds)
	{
		$this->challengeIds = $challengeIds;
		return $this;
	}
	public function getContext()
	{
		return $this->context;
	}
	public function setContext($context)
	{
		$this->context = $context;
		return $this;
	}
	public function getScopedPlayerId()
	{
		return $this->scopedPlayerId;
	}
	public function setScopedPlayerId($scopedPlayerId)
	{
		$this->scopedPlayerId = $scopedPlayerId;
		return $this;
	}
	public function getScore()
	{
		return $this->score;
	}
	public function setScore($score)
	{
		$this->score = $score;
		return $this;
	}
	public function getSubmittedDate()
	{
		return $this->submittedDate;
	}
	public function setSubmittedDate($submittedDate)
	{
		$this->submittedDate = $submittedDate;
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

class GameCenterLeaderboardEntrySubmission extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterLeaderboardEntrySubmissions';
	public $id;
	protected $attributesType = GameCenterLeaderboardEntrySubmission_Attributes::class;
	protected $attributesDataType = 'object';
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
	* @return  GameCenterLeaderboardEntrySubmission_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterLeaderboardEntrySubmission_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
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

