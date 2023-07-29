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

class BetaAppLocalization_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $feedbackEmail;
	public $marketingUrl;
	public $privacyPolicyUrl;
	public $tvOsPrivacyPolicy;
	public $description;
	public $locale;

	public function getFeedbackEmail()
	{
		return $this->feedbackEmail;
	}
	public function setFeedbackEmail($feedbackEmail)
	{
		$this->feedbackEmail = $feedbackEmail;
		return $this;
	}
	public function getMarketingUrl()
	{
		return $this->marketingUrl;
	}
	public function setMarketingUrl($marketingUrl)
	{
		$this->marketingUrl = $marketingUrl;
		return $this;
	}
	public function getPrivacyPolicyUrl()
	{
		return $this->privacyPolicyUrl;
	}
	public function setPrivacyPolicyUrl($privacyPolicyUrl)
	{
		$this->privacyPolicyUrl = $privacyPolicyUrl;
		return $this;
	}
	public function getTvOsPrivacyPolicy()
	{
		return $this->tvOsPrivacyPolicy;
	}
	public function setTvOsPrivacyPolicy($tvOsPrivacyPolicy)
	{
		$this->tvOsPrivacyPolicy = $tvOsPrivacyPolicy;
		return $this;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
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

}

class BetaAppLocalization_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class BetaAppLocalization_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class BetaAppLocalization_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaAppLocalization_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BetaAppLocalization_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppLocalization_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaAppLocalization_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BetaAppLocalization_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppLocalization_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class BetaAppLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = BetaAppLocalization_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  BetaAppLocalization_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  BetaAppLocalization_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}

}

class BetaAppLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppLocalizations';
	public $id;
	protected $attributesType = BetaAppLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppLocalization_Relationships::class;
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
	* @return  BetaAppLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BetaAppLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppLocalization_Relationships
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

