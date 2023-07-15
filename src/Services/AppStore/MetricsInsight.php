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

class MetricsInsight_Populations extends \Cantie\AppStoreConnect\Model
{
	public $deltaPercentage;
	public $percentile;
	public $summaryString;
	public $referenceAverageValue;
	public $latestVersionValue;
	public $device;

	public function getDeltaPercentage()
	{
		return $this->deltaPercentage;
	}
	public function setDeltaPercentage($deltaPercentage)
	{
		$this->deltaPercentage = $deltaPercentage;
		return $deltaPercentage;
	}
	public function getPercentile()
	{
		return $this->percentile;
	}
	public function setPercentile($percentile)
	{
		$this->percentile = $percentile;
		return $percentile;
	}
	public function getSummaryString()
	{
		return $this->summaryString;
	}
	public function setSummaryString($summaryString)
	{
		$this->summaryString = $summaryString;
		return $summaryString;
	}
	public function getReferenceAverageValue()
	{
		return $this->referenceAverageValue;
	}
	public function setReferenceAverageValue($referenceAverageValue)
	{
		$this->referenceAverageValue = $referenceAverageValue;
		return $referenceAverageValue;
	}
	public function getLatestVersionValue()
	{
		return $this->latestVersionValue;
	}
	public function setLatestVersionValue($latestVersionValue)
	{
		$this->latestVersionValue = $latestVersionValue;
		return $latestVersionValue;
	}
	public function getDevice()
	{
		return $this->device;
	}
	public function setDevice($device)
	{
		$this->device = $device;
		return $device;
	}

}
class_alias(MetricsInsight_Populations::class, 'AppleService_AppStore_MetricsInsight_Populations');

class MetricsInsight extends \Cantie\AppStoreConnect\Model
{
	protected $metricCategoryType = MetricCategory::class;
	protected $metricCategoryDataType = '';
	public $latestVersion;
	public $metric;
	public $summaryString;
	public $referenceVersions;
	public $maxLatestVersionValue;
	public $subSystemLabel;
	public $highImpact;
	protected $populationsType = MetricsInsight_Populations::class;
	protected $populationsDataType = 'array';

	/**
	* @return  MetricCategory
	*/
	public function getMetricCategory()
	{
		return $this->metricCategory;
	}
	/**
	* @param  MetricCategory
	*/
	public function setMetricCategory($metricCategory)
	{
		$this->metricCategory = $metricCategory;
		return $metricCategory;
	}
	public function getLatestVersion()
	{
		return $this->latestVersion;
	}
	public function setLatestVersion($latestVersion)
	{
		$this->latestVersion = $latestVersion;
		return $latestVersion;
	}
	public function getMetric()
	{
		return $this->metric;
	}
	public function setMetric($metric)
	{
		$this->metric = $metric;
		return $metric;
	}
	public function getSummaryString()
	{
		return $this->summaryString;
	}
	public function setSummaryString($summaryString)
	{
		$this->summaryString = $summaryString;
		return $summaryString;
	}
	public function getReferenceVersions()
	{
		return $this->referenceVersions;
	}
	public function setReferenceVersions($referenceVersions)
	{
		$this->referenceVersions = $referenceVersions;
		return $referenceVersions;
	}
	public function getMaxLatestVersionValue()
	{
		return $this->maxLatestVersionValue;
	}
	public function setMaxLatestVersionValue($maxLatestVersionValue)
	{
		$this->maxLatestVersionValue = $maxLatestVersionValue;
		return $maxLatestVersionValue;
	}
	public function getSubSystemLabel()
	{
		return $this->subSystemLabel;
	}
	public function setSubSystemLabel($subSystemLabel)
	{
		$this->subSystemLabel = $subSystemLabel;
		return $subSystemLabel;
	}
	public function getHighImpact()
	{
		return $this->highImpact;
	}
	public function setHighImpact($highImpact)
	{
		$this->highImpact = $highImpact;
		return $highImpact;
	}
	/**
	* @return  MetricsInsight_Populations[]
	*/
	public function getPopulations()
	{
		return $this->populations;
	}
	/**
	* @param  MetricsInsight_Populations[]
	*/
	public function setPopulations($populations)
	{
		$this->populations = $populations;
		return $populations;
	}

}
class_alias(MetricsInsight::class, 'AppleService_AppStore_MetricsInsight');

