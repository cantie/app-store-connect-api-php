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

class ReviewSubmission_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $platformType = Platform::class;
	protected $platformDataType = '';
	public $submittedDate;
	public $state; // READY_FOR_REVIEW, WAITING_FOR_REVIEW, IN_REVIEW, UNRESOLVED_ISSUES, CANCELING, COMPLETING, COMPLETE

	/**
	* @return  Platform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  Platform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
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
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $state;
	}

}
class_alias(ReviewSubmission_Attributes::class, 'AppleService_AppStore_ReviewSubmission_Attributes');

class ReviewSubmission_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmission_Relationships_App_Links::class, 'AppleService_AppStore_ReviewSubmission_Relationships_App_Links');

class ReviewSubmission_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmission_Relationships_App_Data::class, 'AppleService_AppStore_ReviewSubmission_Relationships_App_Data');

class ReviewSubmission_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmission_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmission_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmission_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmission_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmission_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmission_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmission_Relationships_App::class, 'AppleService_AppStore_ReviewSubmission_Relationships_App');

class ReviewSubmission_Relationships_Items_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmission_Relationships_Items_Links::class, 'AppleService_AppStore_ReviewSubmission_Relationships_Items_Links');

class ReviewSubmission_Relationships_Items_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissionItems';
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
class_alias(ReviewSubmission_Relationships_Items_Data::class, 'AppleService_AppStore_ReviewSubmission_Relationships_Items_Data');

class ReviewSubmission_Relationships_Items extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmission_Relationships_Items_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = ReviewSubmission_Relationships_Items_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  ReviewSubmission_Relationships_Items_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmission_Relationships_Items_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $meta;
	}
	/**
	* @return  ReviewSubmission_Relationships_Items_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmission_Relationships_Items_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmission_Relationships_Items::class, 'AppleService_AppStore_ReviewSubmission_Relationships_Items');

class ReviewSubmission_Relationships_AppStoreVersionForReview_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmission_Relationships_AppStoreVersionForReview_Links::class, 'AppleService_AppStore_ReviewSubmission_Relationships_AppStoreVersionForReview_Links');

class ReviewSubmission_Relationships_AppStoreVersionForReview_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(ReviewSubmission_Relationships_AppStoreVersionForReview_Data::class, 'AppleService_AppStore_ReviewSubmission_Relationships_AppStoreVersionForReview_Data');

class ReviewSubmission_Relationships_AppStoreVersionForReview extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmission_Relationships_AppStoreVersionForReview_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmission_Relationships_AppStoreVersionForReview_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmission_Relationships_AppStoreVersionForReview_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmission_Relationships_AppStoreVersionForReview_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmission_Relationships_AppStoreVersionForReview_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmission_Relationships_AppStoreVersionForReview_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmission_Relationships_AppStoreVersionForReview::class, 'AppleService_AppStore_ReviewSubmission_Relationships_AppStoreVersionForReview');

class ReviewSubmission_Relationships_SubmittedByActor_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmission_Relationships_SubmittedByActor_Links::class, 'AppleService_AppStore_ReviewSubmission_Relationships_SubmittedByActor_Links');

class ReviewSubmission_Relationships_SubmittedByActor_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'actors';
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
class_alias(ReviewSubmission_Relationships_SubmittedByActor_Data::class, 'AppleService_AppStore_ReviewSubmission_Relationships_SubmittedByActor_Data');

class ReviewSubmission_Relationships_SubmittedByActor extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmission_Relationships_SubmittedByActor_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmission_Relationships_SubmittedByActor_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmission_Relationships_SubmittedByActor_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmission_Relationships_SubmittedByActor_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmission_Relationships_SubmittedByActor_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmission_Relationships_SubmittedByActor_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmission_Relationships_SubmittedByActor::class, 'AppleService_AppStore_ReviewSubmission_Relationships_SubmittedByActor');

class ReviewSubmission_Relationships_LastUpdatedByActor_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmission_Relationships_LastUpdatedByActor_Links::class, 'AppleService_AppStore_ReviewSubmission_Relationships_LastUpdatedByActor_Links');

class ReviewSubmission_Relationships_LastUpdatedByActor_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'actors';
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
class_alias(ReviewSubmission_Relationships_LastUpdatedByActor_Data::class, 'AppleService_AppStore_ReviewSubmission_Relationships_LastUpdatedByActor_Data');

class ReviewSubmission_Relationships_LastUpdatedByActor extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmission_Relationships_LastUpdatedByActor_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmission_Relationships_LastUpdatedByActor_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmission_Relationships_LastUpdatedByActor_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmission_Relationships_LastUpdatedByActor_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmission_Relationships_LastUpdatedByActor_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmission_Relationships_LastUpdatedByActor_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmission_Relationships_LastUpdatedByActor::class, 'AppleService_AppStore_ReviewSubmission_Relationships_LastUpdatedByActor');

class ReviewSubmission_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = ReviewSubmission_Relationships_App::class;
	protected $appDataType = 'object';
	protected $itemsType = ReviewSubmission_Relationships_Items::class;
	protected $itemsDataType = 'object';
	protected $appStoreVersionForReviewType = ReviewSubmission_Relationships_AppStoreVersionForReview::class;
	protected $appStoreVersionForReviewDataType = 'object';
	protected $submittedByActorType = ReviewSubmission_Relationships_SubmittedByActor::class;
	protected $submittedByActorDataType = 'object';
	protected $lastUpdatedByActorType = ReviewSubmission_Relationships_LastUpdatedByActor::class;
	protected $lastUpdatedByActorDataType = 'object';

	/**
	* @return  ReviewSubmission_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  ReviewSubmission_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  ReviewSubmission_Relationships_Items
	*/
	public function getItems()
	{
		return $this->items;
	}
	/**
	* @param  ReviewSubmission_Relationships_Items
	*/
	public function setItems($items)
	{
		$this->items = $items;
		return $items;
	}
	/**
	* @return  ReviewSubmission_Relationships_AppStoreVersionForReview
	*/
	public function getAppStoreVersionForReview()
	{
		return $this->appStoreVersionForReview;
	}
	/**
	* @param  ReviewSubmission_Relationships_AppStoreVersionForReview
	*/
	public function setAppStoreVersionForReview($appStoreVersionForReview)
	{
		$this->appStoreVersionForReview = $appStoreVersionForReview;
		return $appStoreVersionForReview;
	}
	/**
	* @return  ReviewSubmission_Relationships_SubmittedByActor
	*/
	public function getSubmittedByActor()
	{
		return $this->submittedByActor;
	}
	/**
	* @param  ReviewSubmission_Relationships_SubmittedByActor
	*/
	public function setSubmittedByActor($submittedByActor)
	{
		$this->submittedByActor = $submittedByActor;
		return $submittedByActor;
	}
	/**
	* @return  ReviewSubmission_Relationships_LastUpdatedByActor
	*/
	public function getLastUpdatedByActor()
	{
		return $this->lastUpdatedByActor;
	}
	/**
	* @param  ReviewSubmission_Relationships_LastUpdatedByActor
	*/
	public function setLastUpdatedByActor($lastUpdatedByActor)
	{
		$this->lastUpdatedByActor = $lastUpdatedByActor;
		return $lastUpdatedByActor;
	}

}
class_alias(ReviewSubmission_Relationships::class, 'AppleService_AppStore_ReviewSubmission_Relationships');

class ReviewSubmission extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissions';
	public $id;
	protected $attributesType = ReviewSubmission_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = ReviewSubmission_Relationships::class;
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
	* @return  ReviewSubmission_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ReviewSubmission_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  ReviewSubmission_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ReviewSubmission_Relationships
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
class_alias(ReviewSubmission::class, 'AppleService_AppStore_ReviewSubmission');

