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

class CustomerReview_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $rating;
	public $title;
	public $body;
	public $reviewerNickname;
	public $createdDate;
	protected $territoryType = TerritoryCode::class;
	protected $territoryDataType = '';

	public function getRating()
	{
		return $this->rating;
	}
	public function setRating($rating)
	{
		$this->rating = $rating;
		return $rating;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
		return $title;
	}
	public function getBody()
	{
		return $this->body;
	}
	public function setBody($body)
	{
		$this->body = $body;
		return $body;
	}
	public function getReviewerNickname()
	{
		return $this->reviewerNickname;
	}
	public function setReviewerNickname($reviewerNickname)
	{
		$this->reviewerNickname = $reviewerNickname;
		return $reviewerNickname;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $createdDate;
	}
	/**
	* @return  TerritoryCode
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  TerritoryCode
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}

}
class_alias(CustomerReview_Attributes::class, 'AppleService_AppStore_CustomerReview_Attributes');

class CustomerReview_Relationships_Response_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(CustomerReview_Relationships_Response_Links::class, 'AppleService_AppStore_CustomerReview_Relationships_Response_Links');

class CustomerReview_Relationships_Response_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'customerReviewResponses';
	public $id;

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

}
class_alias(CustomerReview_Relationships_Response_Data::class, 'AppleService_AppStore_CustomerReview_Relationships_Response_Data');

class CustomerReview_Relationships_Response extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CustomerReview_Relationships_Response_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CustomerReview_Relationships_Response_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CustomerReview_Relationships_Response_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CustomerReview_Relationships_Response_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  CustomerReview_Relationships_Response_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CustomerReview_Relationships_Response_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(CustomerReview_Relationships_Response::class, 'AppleService_AppStore_CustomerReview_Relationships_Response');

class CustomerReview_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $responseType = CustomerReview_Relationships_Response::class;
	protected $responseDataType = 'object';

	/**
	* @return  CustomerReview_Relationships_Response
	*/
	public function getResponse()
	{
		return $this->response;
	}
	/**
	* @param  CustomerReview_Relationships_Response
	*/
	public function setResponse($response)
	{
		$this->response = $response;
		return $response;
	}

}
class_alias(CustomerReview_Relationships::class, 'AppleService_AppStore_CustomerReview_Relationships');

class CustomerReview extends \Cantie\AppStoreConnect\Model
{
	public $type = 'customerReviews';
	public $id;
	protected $attributesType = CustomerReview_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CustomerReview_Relationships::class;
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
	* @return  CustomerReview_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CustomerReview_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  CustomerReview_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CustomerReview_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
		return $links;
	}

}
class_alias(CustomerReview::class, 'AppleService_AppStore_CustomerReview');

