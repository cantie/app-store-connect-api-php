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

class GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints_Values extends \Cantie\AppStoreConnect\Model
{
	public $count;
	public $averageNumberOfRequests;
	public $p50NumberOfRequests;
	public $p95NumberOfRequests;

	public function getCount()
	{
		return $this->count;
	}
	public function setCount($count)
	{
		$this->count = $count;
		return $this;
	}
	public function getAverageNumberOfRequests()
	{
		return $this->averageNumberOfRequests;
	}
	public function setAverageNumberOfRequests($averageNumberOfRequests)
	{
		$this->averageNumberOfRequests = $averageNumberOfRequests;
		return $this;
	}
	public function getP50NumberOfRequests()
	{
		return $this->p50NumberOfRequests;
	}
	public function setP50NumberOfRequests($p50NumberOfRequests)
	{
		$this->p50NumberOfRequests = $p50NumberOfRequests;
		return $this;
	}
	public function getP95NumberOfRequests()
	{
		return $this->p95NumberOfRequests;
	}
	public function setP95NumberOfRequests($p95NumberOfRequests)
	{
		$this->p95NumberOfRequests = $p95NumberOfRequests;
		return $this;
	}

}

class GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints extends \Cantie\AppStoreConnect\Model
{
	public $start;
	public $end;
	protected $valuesType = GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints_Values::class;
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
	* @return  GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints_Values
	*/
	public function getValues()
	{
		return $this->values;
	}
	/**
	* @param  GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints_Values
	*/
	public function setValues($values)
	{
		$this->values = $values;
		return $this;
	}

}

class GameCenterMatchmakingQueueSizesV1MetricResponse_Data extends \Cantie\AppStoreConnect\Model
{
	protected $dataPointsType = GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints::class;
	protected $dataPointsDataType = 'object';
	public $granularity; // P1D, PT1H, PT15M

	/**
	* @return  GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints
	*/
	public function getDataPoints()
	{
		return $this->dataPoints;
	}
	/**
	* @param  GameCenterMatchmakingQueueSizesV1MetricResponse_Data_DataPoints
	*/
	public function setDataPoints($dataPoints)
	{
		$this->dataPoints = $dataPoints;
		return $this;
	}
	public function getGranularity()
	{
		return $this->granularity;
	}
	public function setGranularity($granularity)
	{
		$this->granularity = $granularity;
		return $this;
	}

}

class GameCenterMatchmakingQueueSizesV1MetricResponse extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingQueueSizesV1MetricResponse_Data::class;
	protected $dataDataType = 'array';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  GameCenterMatchmakingQueueSizesV1MetricResponse_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingQueueSizesV1MetricResponse_Data[]
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

