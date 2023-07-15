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

class ReviewSubmissionItem_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $state; // READY_FOR_REVIEW, ACCEPTED, APPROVED, REJECTED, REMOVED

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
class_alias(ReviewSubmissionItem_Attributes::class, 'AppleService_AppStore_ReviewSubmissionItem_Attributes');

class ReviewSubmissionItem_Relationships_AppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersion_Links::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersion_Links');

class ReviewSubmissionItem_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersion_Data');

class ReviewSubmissionItem_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmissionItem_Relationships_AppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmissionItem_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersion::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersion');

class ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Links::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Links');

class ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageVersions';
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
class_alias(ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Data::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Data');

class ReviewSubmissionItem_Relationships_AppCustomProductPageVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppCustomProductPageVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmissionItem_Relationships_AppCustomProductPageVersion::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppCustomProductPageVersion');

class ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Links::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Links');

class ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
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
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Data::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Data');

class ReviewSubmissionItem_Relationships_AppStoreVersionExperiment extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersionExperiment_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersionExperiment::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersionExperiment');

class ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Links::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Links');

class ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
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
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Data::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Data');

class ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2');

class ReviewSubmissionItem_Relationships_AppEvent_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItem_Relationships_AppEvent_Links::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppEvent_Links');

class ReviewSubmissionItem_Relationships_AppEvent_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEvents';
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
class_alias(ReviewSubmissionItem_Relationships_AppEvent_Data::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppEvent_Data');

class ReviewSubmissionItem_Relationships_AppEvent extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = ReviewSubmissionItem_Relationships_AppEvent_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = ReviewSubmissionItem_Relationships_AppEvent_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItem_Relationships_AppEvent_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppEvent_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppEvent_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppEvent_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(ReviewSubmissionItem_Relationships_AppEvent::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships_AppEvent');

class ReviewSubmissionItem_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = ReviewSubmissionItem_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';
	protected $appCustomProductPageVersionType = ReviewSubmissionItem_Relationships_AppCustomProductPageVersion::class;
	protected $appCustomProductPageVersionDataType = 'object';
	protected $appStoreVersionExperimentType = ReviewSubmissionItem_Relationships_AppStoreVersionExperiment::class;
	protected $appStoreVersionExperimentDataType = 'object';
	protected $appStoreVersionExperimentV2Type = ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2::class;
	protected $appStoreVersionExperimentV2DataType = 'object';
	protected $appEventType = ReviewSubmissionItem_Relationships_AppEvent::class;
	protected $appEventDataType = 'object';

	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $appStoreVersion;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppCustomProductPageVersion
	*/
	public function getAppCustomProductPageVersion()
	{
		return $this->appCustomProductPageVersion;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppCustomProductPageVersion
	*/
	public function setAppCustomProductPageVersion($appCustomProductPageVersion)
	{
		$this->appCustomProductPageVersion = $appCustomProductPageVersion;
		return $appCustomProductPageVersion;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersionExperiment
	*/
	public function getAppStoreVersionExperiment()
	{
		return $this->appStoreVersionExperiment;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersionExperiment
	*/
	public function setAppStoreVersionExperiment($appStoreVersionExperiment)
	{
		$this->appStoreVersionExperiment = $appStoreVersionExperiment;
		return $appStoreVersionExperiment;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2
	*/
	public function getAppStoreVersionExperimentV2()
	{
		return $this->appStoreVersionExperimentV2;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppStoreVersionExperimentV2
	*/
	public function setAppStoreVersionExperimentV2($appStoreVersionExperimentV2)
	{
		$this->appStoreVersionExperimentV2 = $appStoreVersionExperimentV2;
		return $appStoreVersionExperimentV2;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships_AppEvent
	*/
	public function getAppEvent()
	{
		return $this->appEvent;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships_AppEvent
	*/
	public function setAppEvent($appEvent)
	{
		$this->appEvent = $appEvent;
		return $appEvent;
	}

}
class_alias(ReviewSubmissionItem_Relationships::class, 'AppleService_AppStore_ReviewSubmissionItem_Relationships');

class ReviewSubmissionItem extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissionItems';
	public $id;
	protected $attributesType = ReviewSubmissionItem_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = ReviewSubmissionItem_Relationships::class;
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
	* @return  ReviewSubmissionItem_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ReviewSubmissionItem_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  ReviewSubmissionItem_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ReviewSubmissionItem_Relationships
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
class_alias(ReviewSubmissionItem::class, 'AppleService_AppStore_ReviewSubmissionItem');

