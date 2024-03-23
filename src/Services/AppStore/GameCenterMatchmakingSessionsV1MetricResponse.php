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

class GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints_Values extends \Cantie\AppStoreConnect\Model
{
	public $count;
	public $averagePlayerCount;
	public $p50PlayerCount;
	public $p95PlayerCount;

	public function getCount()
	{
		return $this->count;
	}
	public function setCount($count)
	{
		$this->count = $count;
		return $this;
	}
	public function getAveragePlayerCount()
	{
		return $this->averagePlayerCount;
	}
	public function setAveragePlayerCount($averagePlayerCount)
	{
		$this->averagePlayerCount = $averagePlayerCount;
		return $this;
	}
	public function getP50PlayerCount()
	{
		return $this->p50PlayerCount;
	}
	public function setP50PlayerCount($p50PlayerCount)
	{
		$this->p50PlayerCount = $p50PlayerCount;
		return $this;
	}
	public function getP95PlayerCount()
	{
		return $this->p95PlayerCount;
	}
	public function setP95PlayerCount($p95PlayerCount)
	{
		$this->p95PlayerCount = $p95PlayerCount;
		return $this;
	}

}

class GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints extends \Cantie\AppStoreConnect\Model
{
	public $start;
	public $end;
	protected $valuesType = GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints_Values::class;
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
	* @return  GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints_Values
	*/
	public function getValues()
	{
		return $this->values;
	}
	/**
	* @param  GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints_Values
	*/
	public function setValues($values)
	{
		$this->values = $values;
		return $this;
	}

}

class GameCenterMatchmakingSessionsV1MetricResponse_Data extends \Cantie\AppStoreConnect\Model
{
	protected $dataPointsType = GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints::class;
	protected $dataPointsDataType = 'object';
	public $granularity; // P1D, PT1H, PT15M

	/**
	* @return  GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints
	*/
	public function getDataPoints()
	{
		return $this->dataPoints;
	}
	/**
	* @param  GameCenterMatchmakingSessionsV1MetricResponse_Data_DataPoints
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

class GameCenterMatchmakingSessionsV1MetricResponse extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingSessionsV1MetricResponse_Data::class;
	protected $dataDataType = 'array';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  GameCenterMatchmakingSessionsV1MetricResponse_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingSessionsV1MetricResponse_Data[]
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

