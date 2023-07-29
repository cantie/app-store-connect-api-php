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

class diagnosticLogs_ProductData_DiagnosticInsights extends \Cantie\AppStoreConnect\Model
{
	public $insightsURL;
	public $insightsCategory;
	public $insightsString;

	public function getInsightsURL()
	{
		return $this->insightsURL;
	}
	public function setInsightsURL($insightsURL)
	{
		$this->insightsURL = $insightsURL;
		return $this;
	}
	public function getInsightsCategory()
	{
		return $this->insightsCategory;
	}
	public function setInsightsCategory($insightsCategory)
	{
		$this->insightsCategory = $insightsCategory;
		return $this;
	}
	public function getInsightsString()
	{
		return $this->insightsString;
	}
	public function setInsightsString($insightsString)
	{
		$this->insightsString = $insightsString;
		return $this;
	}

}

class diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree_CallStacks extends \Cantie\AppStoreConnect\Model
{
	protected $callStackRootFramesType = DiagnosticLogCallStackNode::class;
	protected $callStackRootFramesDataType = 'array';

	/**
	* @return  DiagnosticLogCallStackNode[]
	*/
	public function getCallStackRootFrames()
	{
		return $this->callStackRootFrames;
	}
	/**
	* @param  DiagnosticLogCallStackNode[]
	*/
	public function setCallStackRootFrames($callStackRootFrames)
	{
		$this->callStackRootFrames = $callStackRootFrames;
		return $this;
	}

}

class diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree extends \Cantie\AppStoreConnect\Model
{
	public $callStackPerThread;
	protected $callStacksType = diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree_CallStacks::class;
	protected $callStacksDataType = 'array';

	public function getCallStackPerThread()
	{
		return $this->callStackPerThread;
	}
	public function setCallStackPerThread($callStackPerThread)
	{
		$this->callStackPerThread = $callStackPerThread;
		return $this;
	}
	/**
	* @return  diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree_CallStacks[]
	*/
	public function getCallStacks()
	{
		return $this->callStacks;
	}
	/**
	* @param  diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree_CallStacks[]
	*/
	public function setCallStacks($callStacks)
	{
		$this->callStacks = $callStacks;
		return $this;
	}

}

class diagnosticLogs_ProductData_DiagnosticLogs_DiagnosticMetaData extends \Cantie\AppStoreConnect\Model
{
	public $bundleId;
	public $event;
	public $osVersion;
	public $appVersion;
	public $writesCaused;
	public $deviceType;
	public $platformArchitecture;
	public $eventDetail;
	public $buildVersion;

	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	public function getEvent()
	{
		return $this->event;
	}
	public function setEvent($event)
	{
		$this->event = $event;
		return $this;
	}
	public function getOsVersion()
	{
		return $this->osVersion;
	}
	public function setOsVersion($osVersion)
	{
		$this->osVersion = $osVersion;
		return $this;
	}
	public function getAppVersion()
	{
		return $this->appVersion;
	}
	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		return $this;
	}
	public function getWritesCaused()
	{
		return $this->writesCaused;
	}
	public function setWritesCaused($writesCaused)
	{
		$this->writesCaused = $writesCaused;
		return $this;
	}
	public function getDeviceType()
	{
		return $this->deviceType;
	}
	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		return $this;
	}
	public function getPlatformArchitecture()
	{
		return $this->platformArchitecture;
	}
	public function setPlatformArchitecture($platformArchitecture)
	{
		$this->platformArchitecture = $platformArchitecture;
		return $this;
	}
	public function getEventDetail()
	{
		return $this->eventDetail;
	}
	public function setEventDetail($eventDetail)
	{
		$this->eventDetail = $eventDetail;
		return $this;
	}
	public function getBuildVersion()
	{
		return $this->buildVersion;
	}
	public function setBuildVersion($buildVersion)
	{
		$this->buildVersion = $buildVersion;
		return $this;
	}

}

class diagnosticLogs_ProductData_DiagnosticLogs extends \Cantie\AppStoreConnect\Model
{
	protected $callStackTreeType = diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree::class;
	protected $callStackTreeDataType = 'array';
	protected $diagnosticMetaDataType = diagnosticLogs_ProductData_DiagnosticLogs_DiagnosticMetaData::class;
	protected $diagnosticMetaDataDataType = 'object';

	/**
	* @return  diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree[]
	*/
	public function getCallStackTree()
	{
		return $this->callStackTree;
	}
	/**
	* @param  diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree[]
	*/
	public function setCallStackTree($callStackTree)
	{
		$this->callStackTree = $callStackTree;
		return $this;
	}
	/**
	* @return  diagnosticLogs_ProductData_DiagnosticLogs_DiagnosticMetaData
	*/
	public function getDiagnosticMetaData()
	{
		return $this->diagnosticMetaData;
	}
	/**
	* @param  diagnosticLogs_ProductData_DiagnosticLogs_DiagnosticMetaData
	*/
	public function setDiagnosticMetaData($diagnosticMetaData)
	{
		$this->diagnosticMetaData = $diagnosticMetaData;
		return $this;
	}

}

class diagnosticLogs_ProductData extends \Cantie\AppStoreConnect\Model
{
	public $signatureId;
	protected $diagnosticInsightsType = diagnosticLogs_ProductData_DiagnosticInsights::class;
	protected $diagnosticInsightsDataType = 'array';
	protected $diagnosticLogsType = diagnosticLogs_ProductData_DiagnosticLogs::class;
	protected $diagnosticLogsDataType = 'array';

	public function getSignatureId()
	{
		return $this->signatureId;
	}
	public function setSignatureId($signatureId)
	{
		$this->signatureId = $signatureId;
		return $this;
	}
	/**
	* @return  diagnosticLogs_ProductData_DiagnosticInsights[]
	*/
	public function getDiagnosticInsights()
	{
		return $this->diagnosticInsights;
	}
	/**
	* @param  diagnosticLogs_ProductData_DiagnosticInsights[]
	*/
	public function setDiagnosticInsights($diagnosticInsights)
	{
		$this->diagnosticInsights = $diagnosticInsights;
		return $this;
	}
	/**
	* @return  diagnosticLogs_ProductData_DiagnosticLogs[]
	*/
	public function getDiagnosticLogs()
	{
		return $this->diagnosticLogs;
	}
	/**
	* @param  diagnosticLogs_ProductData_DiagnosticLogs[]
	*/
	public function setDiagnosticLogs($diagnosticLogs)
	{
		$this->diagnosticLogs = $diagnosticLogs;
		return $this;
	}

}

class diagnosticLogs extends \Cantie\AppStoreConnect\Model
{
	protected $productDataType = diagnosticLogs_ProductData::class;
	protected $productDataDataType = 'array';
	public $version;

	/**
	* @return  diagnosticLogs_ProductData[]
	*/
	public function getProductData()
	{
		return $this->productData;
	}
	/**
	* @param  diagnosticLogs_ProductData[]
	*/
	public function setProductData($productData)
	{
		$this->productData = $productData;
		return $this;
	}
	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}

}

