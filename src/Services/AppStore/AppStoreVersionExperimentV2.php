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

class AppStoreVersionExperimentV2_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $platformType = Platform::class;
	protected $platformDataType = '';
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
		return $name;
	}
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
	public function getTrafficProportion()
	{
		return $this->trafficProportion;
	}
	public function setTrafficProportion($trafficProportion)
	{
		$this->trafficProportion = $trafficProportion;
		return $trafficProportion;
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
	public function getReviewRequired()
	{
		return $this->reviewRequired;
	}
	public function setReviewRequired($reviewRequired)
	{
		$this->reviewRequired = $reviewRequired;
		return $reviewRequired;
	}
	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $startDate;
	}
	public function getEndDate()
	{
		return $this->endDate;
	}
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $endDate;
	}

}
class_alias(AppStoreVersionExperimentV2_Attributes::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Attributes');

class AppStoreVersionExperimentV2_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_App_Links::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_App_Links');

class AppStoreVersionExperimentV2_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_App_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_App_Data');

class AppStoreVersionExperimentV2_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentV2_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionExperimentV2_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentV2_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppStoreVersionExperimentV2_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionExperimentV2_Relationships_App::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_App');

class AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Links::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Links');

class AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Data');

class AppStoreVersionExperimentV2_Relationships_LatestControlVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_LatestControlVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionExperimentV2_Relationships_LatestControlVersion::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_LatestControlVersion');

class AppStoreVersionExperimentV2_Relationships_ControlVersions_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_ControlVersions_Links::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_ControlVersions_Links');

class AppStoreVersionExperimentV2_Relationships_ControlVersions_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_ControlVersions_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_ControlVersions_Data');

class AppStoreVersionExperimentV2_Relationships_ControlVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentV2_Relationships_ControlVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionExperimentV2_Relationships_ControlVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionExperimentV2_Relationships_ControlVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_ControlVersions_Links
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
	* @return  AppStoreVersionExperimentV2_Relationships_ControlVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_ControlVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionExperimentV2_Relationships_ControlVersions::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_ControlVersions');

class AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Links::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Links');

class AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Data');

class AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Links
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
	* @return  AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments');

class AppStoreVersionExperimentV2_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppStoreVersionExperimentV2_Relationships_App::class;
	protected $appDataType = 'object';
	protected $latestControlVersionType = AppStoreVersionExperimentV2_Relationships_LatestControlVersion::class;
	protected $latestControlVersionDataType = 'object';
	protected $controlVersionsType = AppStoreVersionExperimentV2_Relationships_ControlVersions::class;
	protected $controlVersionsDataType = 'object';
	protected $appStoreVersionExperimentTreatmentsType = AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments::class;
	protected $appStoreVersionExperimentTreatmentsDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentV2_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}
	/**
	* @return  AppStoreVersionExperimentV2_Relationships_LatestControlVersion
	*/
	public function getLatestControlVersion()
	{
		return $this->latestControlVersion;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_LatestControlVersion
	*/
	public function setLatestControlVersion($latestControlVersion)
	{
		$this->latestControlVersion = $latestControlVersion;
		return $latestControlVersion;
	}
	/**
	* @return  AppStoreVersionExperimentV2_Relationships_ControlVersions
	*/
	public function getControlVersions()
	{
		return $this->controlVersions;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_ControlVersions
	*/
	public function setControlVersions($controlVersions)
	{
		$this->controlVersions = $controlVersions;
		return $controlVersions;
	}
	/**
	* @return  AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments
	*/
	public function getAppStoreVersionExperimentTreatments()
	{
		return $this->appStoreVersionExperimentTreatments;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships_AppStoreVersionExperimentTreatments
	*/
	public function setAppStoreVersionExperimentTreatments($appStoreVersionExperimentTreatments)
	{
		$this->appStoreVersionExperimentTreatments = $appStoreVersionExperimentTreatments;
		return $appStoreVersionExperimentTreatments;
	}

}
class_alias(AppStoreVersionExperimentV2_Relationships::class, 'AppleService_AppStore_AppStoreVersionExperimentV2_Relationships');

class AppStoreVersionExperimentV2 extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
	public $id;
	protected $attributesType = AppStoreVersionExperimentV2_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionExperimentV2_Relationships::class;
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
	* @return  AppStoreVersionExperimentV2_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppStoreVersionExperimentV2_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionExperimentV2_Relationships
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
class_alias(AppStoreVersionExperimentV2::class, 'AppleService_AppStore_AppStoreVersionExperimentV2');

