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

class BetaAppReviewSubmission_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $betaReviewStateType = BetaReviewState::class;
	protected $betaReviewStateDataType = '';
	public $submittedDate;

	/**
	* @return  BetaReviewState
	*/
	public function getBetaReviewState()
	{
		return $this->betaReviewState;
	}
	/**
	* @param  BetaReviewState
	*/
	public function setBetaReviewState($betaReviewState)
	{
		$this->betaReviewState = $betaReviewState;
		return $betaReviewState;
	}
	public function getSubmittedDate()
	{
		return $this->submittedDate;
	}
	public function setSubmittedDate($submittedDate)
	{
		$this->submittedDate = $submittedDate;
		return $submittedDate;
	}

}
class_alias(BetaAppReviewSubmission_Attributes::class, 'AppleService_AppStore_BetaAppReviewSubmission_Attributes');

class BetaAppReviewSubmission_Relationships_Build_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaAppReviewSubmission_Relationships_Build_Links::class, 'AppleService_AppStore_BetaAppReviewSubmission_Relationships_Build_Links');

class BetaAppReviewSubmission_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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
class_alias(BetaAppReviewSubmission_Relationships_Build_Data::class, 'AppleService_AppStore_BetaAppReviewSubmission_Relationships_Build_Data');

class BetaAppReviewSubmission_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaAppReviewSubmission_Relationships_Build_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BetaAppReviewSubmission_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppReviewSubmission_Relationships_Build_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaAppReviewSubmission_Relationships_Build_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  BetaAppReviewSubmission_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppReviewSubmission_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaAppReviewSubmission_Relationships_Build::class, 'AppleService_AppStore_BetaAppReviewSubmission_Relationships_Build');

class BetaAppReviewSubmission_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = BetaAppReviewSubmission_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  BetaAppReviewSubmission_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  BetaAppReviewSubmission_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $build;
	}

}
class_alias(BetaAppReviewSubmission_Relationships::class, 'AppleService_AppStore_BetaAppReviewSubmission_Relationships');

class BetaAppReviewSubmission extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppReviewSubmissions';
	public $id;
	protected $attributesType = BetaAppReviewSubmission_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppReviewSubmission_Relationships::class;
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
	* @return  BetaAppReviewSubmission_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppReviewSubmission_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaAppReviewSubmission_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppReviewSubmission_Relationships
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
class_alias(BetaAppReviewSubmission::class, 'AppleService_AppStore_BetaAppReviewSubmission');

