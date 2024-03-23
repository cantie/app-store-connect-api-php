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

class BetaTesterUsagesV1MetricResponse_Data_DataPoints_Values extends \Cantie\AppStoreConnect\Model
{
	public $crashCount;
	public $sessionCount;
	public $feedbackCount;

	public function getCrashCount()
	{
		return $this->crashCount;
	}
	public function setCrashCount($crashCount)
	{
		$this->crashCount = $crashCount;
		return $this;
	}
	public function getSessionCount()
	{
		return $this->sessionCount;
	}
	public function setSessionCount($sessionCount)
	{
		$this->sessionCount = $sessionCount;
		return $this;
	}
	public function getFeedbackCount()
	{
		return $this->feedbackCount;
	}
	public function setFeedbackCount($feedbackCount)
	{
		$this->feedbackCount = $feedbackCount;
		return $this;
	}

}

class BetaTesterUsagesV1MetricResponse_Data_DataPoints extends \Cantie\AppStoreConnect\Model
{
	public $start;
	public $end;
	protected $valuesType = BetaTesterUsagesV1MetricResponse_Data_DataPoints_Values::class;
	protected $valuesDataType = 'object';

	public function getStart()
	{
		return $this->start;
	}
	public function setStart($start)
	{
		$this->start = $start;
		return $this;
	}
	public function getEnd()
	{
		return $this->end;
	}
	public function setEnd($end)
	{
		$this->end = $end;
		return $this;
	}
	/**
	* @return  BetaTesterUsagesV1MetricResponse_Data_DataPoints_Values
	*/
	public function getValues()
	{
		return $this->values;
	}
	/**
	* @param  BetaTesterUsagesV1MetricResponse_Data_DataPoints_Values
	*/
	public function setValues($values)
	{
		$this->values = $values;
		return $this;
	}

}

class BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps_Links extends \Cantie\AppStoreConnect\Model
{
	public $groupBy;
	public $related;

	public function getGroupBy()
	{
		return $this->groupBy;
	}
	public function setGroupBy($groupBy)
	{
		$this->groupBy = $groupBy;
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

class BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps_Links::class;
	protected $linksDataType = 'object';

	/**
	* @return  BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

class BetaTesterUsagesV1MetricResponse_Data_Dimensions extends \Cantie\AppStoreConnect\Model
{
	protected $appsType = BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps::class;
	protected $appsDataType = 'object';

	/**
	* @return  BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps
	*/
	public function getApps()
	{
		return $this->apps;
	}
	/**
	* @param  BetaTesterUsagesV1MetricResponse_Data_Dimensions_Apps
	*/
	public function setApps($apps)
	{
		$this->apps = $apps;
		return $this;
	}

}

class BetaTesterUsagesV1MetricResponse_Data extends \Cantie\AppStoreConnect\Model
{
	protected $dataPointsType = BetaTesterUsagesV1MetricResponse_Data_DataPoints::class;
	protected $dataPointsDataType = 'object';
	protected $dimensionsType = BetaTesterUsagesV1MetricResponse_Data_Dimensions::class;
	protected $dimensionsDataType = 'object';

	/**
	* @return  BetaTesterUsagesV1MetricResponse_Data_DataPoints
	*/
	public function getDataPoints()
	{
		return $this->dataPoints;
	}
	/**
	* @param  BetaTesterUsagesV1MetricResponse_Data_DataPoints
	*/
	public function setDataPoints($dataPoints)
	{
		$this->dataPoints = $dataPoints;
		return $this;
	}
	/**
	* @return  BetaTesterUsagesV1MetricResponse_Data_Dimensions
	*/
	public function getDimensions()
	{
		return $this->dimensions;
	}
	/**
	* @param  BetaTesterUsagesV1MetricResponse_Data_Dimensions
	*/
	public function setDimensions($dimensions)
	{
		$this->dimensions = $dimensions;
		return $this;
	}

}

class BetaTesterUsagesV1MetricResponse extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterUsagesV1MetricResponse_Data::class;
	protected $dataDataType = 'array';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  BetaTesterUsagesV1MetricResponse_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterUsagesV1MetricResponse_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  PagedDocumentLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PagedDocumentLinks
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

}

