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

class AnalyticsReportRequest_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $accessType; // ONE_TIME_SNAPSHOT, ONGOING
	public $stoppedDueToInactivity;

	public function getAccessType()
	{
		return $this->accessType;
	}
	public function setAccessType($accessType)
	{
		$this->accessType = $accessType;
		return $this;
	}
	public function getStoppedDueToInactivity()
	{
		return $this->stoppedDueToInactivity;
	}
	public function setStoppedDueToInactivity($stoppedDueToInactivity)
	{
		$this->stoppedDueToInactivity = $stoppedDueToInactivity;
		return $this;
	}

}

class AnalyticsReportRequest_Relationships_Reports_Links extends \Cantie\AppStoreConnect\Model
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

class AnalyticsReportRequest_Relationships_Reports_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'analyticsReports';
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

class AnalyticsReportRequest_Relationships_Reports extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AnalyticsReportRequest_Relationships_Reports_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AnalyticsReportRequest_Relationships_Reports_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AnalyticsReportRequest_Relationships_Reports_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AnalyticsReportRequest_Relationships_Reports_Links
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
	* @return  AnalyticsReportRequest_Relationships_Reports_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AnalyticsReportRequest_Relationships_Reports_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AnalyticsReportRequest_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $reportsType = AnalyticsReportRequest_Relationships_Reports::class;
	protected $reportsDataType = 'object';

	/**
	* @return  AnalyticsReportRequest_Relationships_Reports
	*/
	public function getReports()
	{
		return $this->reports;
	}
	/**
	* @param  AnalyticsReportRequest_Relationships_Reports
	*/
	public function setReports($reports)
	{
		$this->reports = $reports;
		return $this;
	}

}

class AnalyticsReportRequest extends \Cantie\AppStoreConnect\Model
{
	public $type = 'analyticsReportRequests';
	public $id;
	protected $attributesType = AnalyticsReportRequest_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AnalyticsReportRequest_Relationships::class;
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
	* @return  AnalyticsReportRequest_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AnalyticsReportRequest_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AnalyticsReportRequest_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AnalyticsReportRequest_Relationships
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

