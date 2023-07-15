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

class CiTestResult_Attributes_DestinationTestResults extends \Cantie\AppStoreConnect\Model
{
	public $uuid;
	public $deviceName;
	public $osVersion;
	protected $statusType = CiTestStatus::class;
	protected $statusDataType = '';
	public $duration;

	public function getUuid()
	{
		return $this->uuid;
	}
	public function setUuid($uuid)
	{
		$this->uuid = $uuid;
		return $uuid;
	}
	public function getDeviceName()
	{
		return $this->deviceName;
	}
	public function setDeviceName($deviceName)
	{
		$this->deviceName = $deviceName;
		return $deviceName;
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
	/**
	* @return  CiTestStatus
	*/
	public function getStatus()
	{
		return $this->status;
	}
	/**
	* @param  CiTestStatus
	*/
	public function setStatus($status)
	{
		$this->status = $status;
		return $status;
	}
	public function getDuration()
	{
		return $this->duration;
	}
	public function setDuration($duration)
	{
		$this->duration = $duration;
		return $duration;
	}

}
class_alias(CiTestResult_Attributes_DestinationTestResults::class, 'AppleService_AppStore_CiTestResult_Attributes_DestinationTestResults');

class CiTestResult_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $className;
	public $name;
	protected $statusType = CiTestStatus::class;
	protected $statusDataType = '';
	protected $fileSourceType = FileLocation::class;
	protected $fileSourceDataType = '';
	public $message;
	protected $destinationTestResultsType = CiTestResult_Attributes_DestinationTestResults::class;
	protected $destinationTestResultsDataType = 'array';

	public function getClassName()
	{
		return $this->className;
	}
	public function setClassName($className)
	{
		$this->className = $className;
		return $className;
	}
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
	* @return  CiTestStatus
	*/
	public function getStatus()
	{
		return $this->status;
	}
	/**
	* @param  CiTestStatus
	*/
	public function setStatus($status)
	{
		$this->status = $status;
		return $status;
	}
	/**
	* @return  FileLocation
	*/
	public function getFileSource()
	{
		return $this->fileSource;
	}
	/**
	* @param  FileLocation
	*/
	public function setFileSource($fileSource)
	{
		$this->fileSource = $fileSource;
		return $fileSource;
	}
	public function getMessage()
	{
		return $this->message;
	}
	public function setMessage($message)
	{
		$this->message = $message;
		return $message;
	}
	/**
	* @return  CiTestResult_Attributes_DestinationTestResults[]
	*/
	public function getDestinationTestResults()
	{
		return $this->destinationTestResults;
	}
	/**
	* @param  CiTestResult_Attributes_DestinationTestResults[]
	*/
	public function setDestinationTestResults($destinationTestResults)
	{
		$this->destinationTestResults = $destinationTestResults;
		return $destinationTestResults;
	}

}
class_alias(CiTestResult_Attributes::class, 'AppleService_AppStore_CiTestResult_Attributes');

class CiTestResult extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciTestResults';
	public $id;
	protected $attributesType = CiTestResult_Attributes::class;
	protected $attributesDataType = 'object';
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
	* @return  CiTestResult_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiTestResult_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
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
class_alias(CiTestResult::class, 'AppleService_AppStore_CiTestResult');

