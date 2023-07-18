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

class AppStoreVersionExperiment_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $trafficProportion;
	public $state; // PREPARE_FOR_SUBMISSION, READY_FOR_REVIEW, WAITING_FOR_REVIEW, IN_REVIEW, ACCEPTED, APPROVED, REJECTED, COMPLETED, STOPPED
	public $reviewRequired;
	public $startDate;
	public $endDate;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getTrafficProportion()
	{
		return $this->trafficProportion;
	}
	public function setTrafficProportion($trafficProportion)
	{
		$this->trafficProportion = $trafficProportion;
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
	public function getReviewRequired()
	{
		return $this->reviewRequired;
	}
	public function setReviewRequired($reviewRequired)
	{
		$this->reviewRequired = $reviewRequired;
		return $this;
	}
	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $this;
	}
	public function getEndDate()
	{
		return $this->endDate;
	}
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $this;
	}

}
class_alias(AppStoreVersionExperiment_Attributes::class, 'AppleService_AppStore_AppStoreVersionExperiment_Attributes');

class AppStoreVersionExperiment_Relationships_AppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperiment_Relationships_AppStoreVersion_Links::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships_AppStoreVersion_Links');

class AppStoreVersionExperiment_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperiment_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships_AppStoreVersion_Data');

class AppStoreVersionExperiment_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperiment_Relationships_AppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionExperiment_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperiment_Relationships_AppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships_AppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperiment_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperiment_Relationships_AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships_AppStoreVersion');

class AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Links::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Links');

class AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatments';
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
class_alias(AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Data::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Data');

class AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}
	/**
	* @return  AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments');

class AppStoreVersionExperiment_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = AppStoreVersionExperiment_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';
	protected $appStoreVersionExperimentTreatmentsType = AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments::class;
	protected $appStoreVersionExperimentTreatmentsDataType = 'object';

	/**
	* @return  AppStoreVersionExperiment_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments
	*/
	public function getAppStoreVersionExperimentTreatments()
	{
		return $this->appStoreVersionExperimentTreatments;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships_AppStoreVersionExperimentTreatments
	*/
	public function setAppStoreVersionExperimentTreatments($appStoreVersionExperimentTreatments)
	{
		$this->appStoreVersionExperimentTreatments = $appStoreVersionExperimentTreatments;
		return $this;
	}

}
class_alias(AppStoreVersionExperiment_Relationships::class, 'AppleService_AppStore_AppStoreVersionExperiment_Relationships');

class AppStoreVersionExperiment extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
	public $id;
	protected $attributesType = AppStoreVersionExperiment_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionExperiment_Relationships::class;
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
	* @return  AppStoreVersionExperiment_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionExperiment_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperiment_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionExperiment_Relationships
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
class_alias(AppStoreVersionExperiment::class, 'AppleService_AppStore_AppStoreVersionExperiment');

