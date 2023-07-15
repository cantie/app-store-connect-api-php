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
		return $insightsURL;
	}
	public function getInsightsCategory()
	{
		return $this->insightsCategory;
	}
	public function setInsightsCategory($insightsCategory)
	{
		$this->insightsCategory = $insightsCategory;
		return $insightsCategory;
	}
	public function getInsightsString()
	{
		return $this->insightsString;
	}
	public function setInsightsString($insightsString)
	{
		$this->insightsString = $insightsString;
		return $insightsString;
	}

}
class_alias(diagnosticLogs_ProductData_DiagnosticInsights::class, 'AppleService_AppStore_diagnosticLogs_ProductData_DiagnosticInsights');

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
		return $callStackRootFrames;
	}

}
class_alias(diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree_CallStacks::class, 'AppleService_AppStore_diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree_CallStacks');

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
		return $callStackPerThread;
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
		return $callStacks;
	}

}
class_alias(diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree::class, 'AppleService_AppStore_diagnosticLogs_ProductData_DiagnosticLogs_CallStackTree');

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
		return $bundleId;
	}
	public function getEvent()
	{
		return $this->event;
	}
	public function setEvent($event)
	{
		$this->event = $event;
		return $event;
	}
	public function getOsVersion()
	{
		return $this->osVersion;
	}
	public function setOsVersion($osVersion)
	{
		$this->osVersion = $osVersion;
		return $osVersion;
	}
	public function getAppVersion()
	{
		return $this->appVersion;
	}
	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		return $appVersion;
	}
	public function getWritesCaused()
	{
		return $this->writesCaused;
	}
	public function setWritesCaused($writesCaused)
	{
		$this->writesCaused = $writesCaused;
		return $writesCaused;
	}
	public function getDeviceType()
	{
		return $this->deviceType;
	}
	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		return $deviceType;
	}
	public function getPlatformArchitecture()
	{
		return $this->platformArchitecture;
	}
	public function setPlatformArchitecture($platformArchitecture)
	{
		$this->platformArchitecture = $platformArchitecture;
		return $platformArchitecture;
	}
	public function getEventDetail()
	{
		return $this->eventDetail;
	}
	public function setEventDetail($eventDetail)
	{
		$this->eventDetail = $eventDetail;
		return $eventDetail;
	}
	public function getBuildVersion()
	{
		return $this->buildVersion;
	}
	public function setBuildVersion($buildVersion)
	{
		$this->buildVersion = $buildVersion;
		return $buildVersion;
	}

}
class_alias(diagnosticLogs_ProductData_DiagnosticLogs_DiagnosticMetaData::class, 'AppleService_AppStore_diagnosticLogs_ProductData_DiagnosticLogs_DiagnosticMetaData');

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
		return $callStackTree;
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
		return $diagnosticMetaData;
	}

}
class_alias(diagnosticLogs_ProductData_DiagnosticLogs::class, 'AppleService_AppStore_diagnosticLogs_ProductData_DiagnosticLogs');

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
		return $signatureId;
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
		return $diagnosticInsights;
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
		return $diagnosticLogs;
	}

}
class_alias(diagnosticLogs_ProductData::class, 'AppleService_AppStore_diagnosticLogs_ProductData');

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
		return $productData;
	}
	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $version;
	}

}
class_alias(diagnosticLogs::class, 'AppleService_AppStore_diagnosticLogs');

