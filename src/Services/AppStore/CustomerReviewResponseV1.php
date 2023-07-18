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

class CustomerReviewResponseV1_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $responseBody;
	public $lastModifiedDate;
	public $state; // PUBLISHED, PENDING_PUBLISH

	public function getResponseBody()
	{
		return $this->responseBody;
	}
	public function setResponseBody($responseBody)
	{
		$this->responseBody = $responseBody;
		return $this;
	}
	public function getLastModifiedDate()
	{
		return $this->lastModifiedDate;
	}
	public function setLastModifiedDate($lastModifiedDate)
	{
		$this->lastModifiedDate = $lastModifiedDate;
		return $this;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

}
class_alias(CustomerReviewResponseV1_Attributes::class, 'AppleService_AppStore_CustomerReviewResponseV1_Attributes');

class CustomerReviewResponseV1_Relationships_Review_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CustomerReviewResponseV1_Relationships_Review_Links::class, 'AppleService_AppStore_CustomerReviewResponseV1_Relationships_Review_Links');

class CustomerReviewResponseV1_Relationships_Review_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'customerReviews';
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
class_alias(CustomerReviewResponseV1_Relationships_Review_Data::class, 'AppleService_AppStore_CustomerReviewResponseV1_Relationships_Review_Data');

class CustomerReviewResponseV1_Relationships_Review extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CustomerReviewResponseV1_Relationships_Review_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CustomerReviewResponseV1_Relationships_Review_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CustomerReviewResponseV1_Relationships_Review_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CustomerReviewResponseV1_Relationships_Review_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CustomerReviewResponseV1_Relationships_Review_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CustomerReviewResponseV1_Relationships_Review_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CustomerReviewResponseV1_Relationships_Review::class, 'AppleService_AppStore_CustomerReviewResponseV1_Relationships_Review');

class CustomerReviewResponseV1_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $reviewType = CustomerReviewResponseV1_Relationships_Review::class;
	protected $reviewDataType = 'object';

	/**
	* @return  CustomerReviewResponseV1_Relationships_Review
	*/
	public function getReview()
	{
		return $this->review;
	}
	/**
	* @param  CustomerReviewResponseV1_Relationships_Review
	*/
	public function setReview($review)
	{
		$this->review = $review;
		return $this;
	}

}
class_alias(CustomerReviewResponseV1_Relationships::class, 'AppleService_AppStore_CustomerReviewResponseV1_Relationships');

class CustomerReviewResponseV1 extends \Cantie\AppStoreConnect\Model
{
	public $type = 'customerReviewResponses';
	public $id;
	protected $attributesType = CustomerReviewResponseV1_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CustomerReviewResponseV1_Relationships::class;
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
	* @return  CustomerReviewResponseV1_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CustomerReviewResponseV1_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CustomerReviewResponseV1_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CustomerReviewResponseV1_Relationships
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
class_alias(CustomerReviewResponseV1::class, 'AppleService_AppStore_CustomerReviewResponseV1');

