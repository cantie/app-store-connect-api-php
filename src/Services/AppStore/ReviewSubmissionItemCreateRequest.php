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

class ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissions';
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
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission_Data');

class ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion_Data');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2 extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent_Data');

class ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent');

class ReviewSubmissionItemCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $reviewSubmissionType = ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission::class;
	protected $reviewSubmissionDataType = 'object';
	protected $appStoreVersionType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';
	protected $appCustomProductPageVersionType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion::class;
	protected $appCustomProductPageVersionDataType = 'object';
	protected $appStoreVersionExperimentType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment::class;
	protected $appStoreVersionExperimentDataType = 'object';
	protected $appStoreVersionExperimentV2Type = ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2::class;
	protected $appStoreVersionExperimentV2DataType = 'object';
	protected $appEventType = ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent::class;
	protected $appEventDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission
	*/
	public function getReviewSubmission()
	{
		return $this->reviewSubmission;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_ReviewSubmission
	*/
	public function setReviewSubmission($reviewSubmission)
	{
		$this->reviewSubmission = $reviewSubmission;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion
	*/
	public function getAppCustomProductPageVersion()
	{
		return $this->appCustomProductPageVersion;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppCustomProductPageVersion
	*/
	public function setAppCustomProductPageVersion($appCustomProductPageVersion)
	{
		$this->appCustomProductPageVersion = $appCustomProductPageVersion;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment
	*/
	public function getAppStoreVersionExperiment()
	{
		return $this->appStoreVersionExperiment;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperiment
	*/
	public function setAppStoreVersionExperiment($appStoreVersionExperiment)
	{
		$this->appStoreVersionExperiment = $appStoreVersionExperiment;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2
	*/
	public function getAppStoreVersionExperimentV2()
	{
		return $this->appStoreVersionExperimentV2;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppStoreVersionExperimentV2
	*/
	public function setAppStoreVersionExperimentV2($appStoreVersionExperimentV2)
	{
		$this->appStoreVersionExperimentV2 = $appStoreVersionExperimentV2;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent
	*/
	public function getAppEvent()
	{
		return $this->appEvent;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships_AppEvent
	*/
	public function setAppEvent($appEvent)
	{
		$this->appEvent = $appEvent;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data_Relationships::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data_Relationships');

class ReviewSubmissionItemCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissionItems';
	protected $relationshipsType = ReviewSubmissionItemCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest_Data::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest_Data');

class ReviewSubmissionItemCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemCreateRequest::class, 'AppleService_AppStore_ReviewSubmissionItemCreateRequest');

