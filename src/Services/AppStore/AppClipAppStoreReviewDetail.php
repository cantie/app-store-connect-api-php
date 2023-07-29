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

class AppClipAppStoreReviewDetail_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $invocationUrlsType = '';
	protected $invocationUrlsDataType = 'array';

	/**
	* @return  []
	*/
	public function getInvocationUrls()
	{
		return $this->invocationUrls;
	}
	/**
	* @param  []
	*/
	public function setInvocationUrls($invocationUrls)
	{
		$this->invocationUrls = $invocationUrls;
		return $this;
	}

}

class AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Links extends \Cantie\AppStoreConnect\Model
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

class AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
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

class AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppClipAppStoreReviewDetail_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipDefaultExperienceType = AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience::class;
	protected $appClipDefaultExperienceDataType = 'object';

	/**
	* @return  AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience
	*/
	public function getAppClipDefaultExperience()
	{
		return $this->appClipDefaultExperience;
	}
	/**
	* @param  AppClipAppStoreReviewDetail_Relationships_AppClipDefaultExperience
	*/
	public function setAppClipDefaultExperience($appClipDefaultExperience)
	{
		$this->appClipDefaultExperience = $appClipDefaultExperience;
		return $this;
	}

}

class AppClipAppStoreReviewDetail extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipAppStoreReviewDetails';
	public $id;
	protected $attributesType = AppClipAppStoreReviewDetail_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipAppStoreReviewDetail_Relationships::class;
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
	* @return  AppClipAppStoreReviewDetail_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipAppStoreReviewDetail_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppClipAppStoreReviewDetail_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipAppStoreReviewDetail_Relationships
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

