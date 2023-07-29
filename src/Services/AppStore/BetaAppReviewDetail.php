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

class BetaAppReviewDetail_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $contactFirstName;
	public $contactLastName;
	public $contactPhone;
	public $contactEmail;
	public $demoAccountName;
	public $demoAccountPassword;
	public $demoAccountRequired;
	public $notes;

	public function getContactFirstName()
	{
		return $this->contactFirstName;
	}
	public function setContactFirstName($contactFirstName)
	{
		$this->contactFirstName = $contactFirstName;
		return $this;
	}
	public function getContactLastName()
	{
		return $this->contactLastName;
	}
	public function setContactLastName($contactLastName)
	{
		$this->contactLastName = $contactLastName;
		return $this;
	}
	public function getContactPhone()
	{
		return $this->contactPhone;
	}
	public function setContactPhone($contactPhone)
	{
		$this->contactPhone = $contactPhone;
		return $this;
	}
	public function getContactEmail()
	{
		return $this->contactEmail;
	}
	public function setContactEmail($contactEmail)
	{
		$this->contactEmail = $contactEmail;
		return $this;
	}
	public function getDemoAccountName()
	{
		return $this->demoAccountName;
	}
	public function setDemoAccountName($demoAccountName)
	{
		$this->demoAccountName = $demoAccountName;
		return $this;
	}
	public function getDemoAccountPassword()
	{
		return $this->demoAccountPassword;
	}
	public function setDemoAccountPassword($demoAccountPassword)
	{
		$this->demoAccountPassword = $demoAccountPassword;
		return $this;
	}
	public function getDemoAccountRequired()
	{
		return $this->demoAccountRequired;
	}
	public function setDemoAccountRequired($demoAccountRequired)
	{
		$this->demoAccountRequired = $demoAccountRequired;
		return $this;
	}
	public function getNotes()
	{
		return $this->notes;
	}
	public function setNotes($notes)
	{
		$this->notes = $notes;
		return $this;
	}

}

class BetaAppReviewDetail_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class BetaAppReviewDetail_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class BetaAppReviewDetail_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaAppReviewDetail_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BetaAppReviewDetail_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppReviewDetail_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaAppReviewDetail_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BetaAppReviewDetail_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppReviewDetail_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class BetaAppReviewDetail_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = BetaAppReviewDetail_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  BetaAppReviewDetail_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  BetaAppReviewDetail_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}

}

class BetaAppReviewDetail extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppReviewDetails';
	public $id;
	protected $attributesType = BetaAppReviewDetail_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppReviewDetail_Relationships::class;
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
	* @return  BetaAppReviewDetail_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppReviewDetail_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BetaAppReviewDetail_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppReviewDetail_Relationships
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

