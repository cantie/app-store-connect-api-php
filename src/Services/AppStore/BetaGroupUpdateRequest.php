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

class BetaGroupUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $publicLinkEnabled;
	public $publicLinkLimitEnabled;
	public $publicLinkLimit;
	public $feedbackEnabled;
	public $iosBuildsAvailableForAppleSiliconMac;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getPublicLinkEnabled()
	{
		return $this->publicLinkEnabled;
	}
	public function setPublicLinkEnabled($publicLinkEnabled)
	{
		$this->publicLinkEnabled = $publicLinkEnabled;
		return $this;
	}
	public function getPublicLinkLimitEnabled()
	{
		return $this->publicLinkLimitEnabled;
	}
	public function setPublicLinkLimitEnabled($publicLinkLimitEnabled)
	{
		$this->publicLinkLimitEnabled = $publicLinkLimitEnabled;
		return $this;
	}
	public function getPublicLinkLimit()
	{
		return $this->publicLinkLimit;
	}
	public function setPublicLinkLimit($publicLinkLimit)
	{
		$this->publicLinkLimit = $publicLinkLimit;
		return $this;
	}
	public function getFeedbackEnabled()
	{
		return $this->feedbackEnabled;
	}
	public function setFeedbackEnabled($feedbackEnabled)
	{
		$this->feedbackEnabled = $feedbackEnabled;
		return $this;
	}
	public function getIosBuildsAvailableForAppleSiliconMac()
	{
		return $this->iosBuildsAvailableForAppleSiliconMac;
	}
	public function setIosBuildsAvailableForAppleSiliconMac($iosBuildsAvailableForAppleSiliconMac)
	{
		$this->iosBuildsAvailableForAppleSiliconMac = $iosBuildsAvailableForAppleSiliconMac;
		return $this;
	}

}
class_alias(BetaGroupUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_BetaGroupUpdateRequest_Data_Attributes');

class BetaGroupUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
	public $id;
	protected $attributesType = BetaGroupUpdateRequest_Data_Attributes::class;
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
	* @return  BetaGroupUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaGroupUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}
class_alias(BetaGroupUpdateRequest_Data::class, 'AppleService_AppStore_BetaGroupUpdateRequest_Data');

class BetaGroupUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaGroupUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaGroupUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaGroupUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaGroupUpdateRequest::class, 'AppleService_AppStore_BetaGroupUpdateRequest');

