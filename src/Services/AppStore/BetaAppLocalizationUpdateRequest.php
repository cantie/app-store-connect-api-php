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

class BetaAppLocalizationUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $feedbackEmail;
	public $marketingUrl;
	public $privacyPolicyUrl;
	public $tvOsPrivacyPolicy;
	public $description;

	public function getFeedbackEmail()
	{
		return $this->feedbackEmail;
	}
	public function setFeedbackEmail($feedbackEmail)
	{
		$this->feedbackEmail = $feedbackEmail;
		return $feedbackEmail;
	}
	public function getMarketingUrl()
	{
		return $this->marketingUrl;
	}
	public function setMarketingUrl($marketingUrl)
	{
		$this->marketingUrl = $marketingUrl;
		return $marketingUrl;
	}
	public function getPrivacyPolicyUrl()
	{
		return $this->privacyPolicyUrl;
	}
	public function setPrivacyPolicyUrl($privacyPolicyUrl)
	{
		$this->privacyPolicyUrl = $privacyPolicyUrl;
		return $privacyPolicyUrl;
	}
	public function getTvOsPrivacyPolicy()
	{
		return $this->tvOsPrivacyPolicy;
	}
	public function setTvOsPrivacyPolicy($tvOsPrivacyPolicy)
	{
		$this->tvOsPrivacyPolicy = $tvOsPrivacyPolicy;
		return $tvOsPrivacyPolicy;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
		return $description;
	}

}
class_alias(BetaAppLocalizationUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_BetaAppLocalizationUpdateRequest_Data_Attributes');

class BetaAppLocalizationUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppLocalizations';
	public $id;
	protected $attributesType = BetaAppLocalizationUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  BetaAppLocalizationUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppLocalizationUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}

}
class_alias(BetaAppLocalizationUpdateRequest_Data::class, 'AppleService_AppStore_BetaAppLocalizationUpdateRequest_Data');

class BetaAppLocalizationUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppLocalizationUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppLocalizationUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppLocalizationUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaAppLocalizationUpdateRequest::class, 'AppleService_AppStore_BetaAppLocalizationUpdateRequest');
