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

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints_Values extends \Cantie\AppStoreConnect\Model
{
	public $count;
	public $averageResult;
	public $p50Result;
	public $p95Result;

	public function getCount()
	{
		return $this->count;
	}
	public function setCount($count)
	{
		$this->count = $count;
		return $this;
	}
	public function getAverageResult()
	{
		return $this->averageResult;
	}
	public function setAverageResult($averageResult)
	{
		$this->averageResult = $averageResult;
		return $this;
	}
	public function getP50Result()
	{
		return $this->p50Result;
	}
	public function setP50Result($p50Result)
	{
		$this->p50Result = $p50Result;
		return $this;
	}
	public function getP95Result()
	{
		return $this->p95Result;
	}
	public function setP95Result($p95Result)
	{
		$this->p95Result = $p95Result;
		return $this;
	}

}

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints extends \Cantie\AppStoreConnect\Model
{
	public $start;
	public $end;
	protected $valuesType = GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints_Values::class;
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
	* @return  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints_Values
	*/
	public function getValues()
	{
		return $this->values;
	}
	/**
	* @param  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints_Values
	*/
	public function setValues($values)
	{
		$this->values = $values;
		return $this;
	}

}

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue_Links extends \Cantie\AppStoreConnect\Model
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

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue_Links::class;
	protected $linksDataType = 'object';

	/**
	* @return  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions extends \Cantie\AppStoreConnect\Model
{
	protected $gameCenterMatchmakingQueueType = GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue::class;
	protected $gameCenterMatchmakingQueueDataType = 'object';

	/**
	* @return  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue
	*/
	public function getGameCenterMatchmakingQueue()
	{
		return $this->gameCenterMatchmakingQueue;
	}
	/**
	* @param  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions_GameCenterMatchmakingQueue
	*/
	public function setGameCenterMatchmakingQueue($gameCenterMatchmakingQueue)
	{
		$this->gameCenterMatchmakingQueue = $gameCenterMatchmakingQueue;
		return $this;
	}

}

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data extends \Cantie\AppStoreConnect\Model
{
	protected $dataPointsType = GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints::class;
	protected $dataPointsDataType = 'object';
	protected $dimensionsType = GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions::class;
	protected $dimensionsDataType = 'object';
	public $granularity; // P1D, PT1H, PT15M

	/**
	* @return  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints
	*/
	public function getDataPoints()
	{
		return $this->dataPoints;
	}
	/**
	* @param  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_DataPoints
	*/
	public function setDataPoints($dataPoints)
	{
		$this->dataPoints = $dataPoints;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions
	*/
	public function getDimensions()
	{
		return $this->dimensions;
	}
	/**
	* @param  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data_Dimensions
	*/
	public function setDimensions($dimensions)
	{
		$this->dimensions = $dimensions;
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

class GameCenterMatchmakingNumberRuleResultsV1MetricResponse extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data::class;
	protected $dataDataType = 'array';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingNumberRuleResultsV1MetricResponse_Data[]
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

