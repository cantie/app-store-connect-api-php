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

class CiTestDestination extends \Cantie\AppStoreConnect\Model
{
	public $deviceTypeName;
	public $deviceTypeIdentifier;
	public $runtimeName;
	public $runtimeIdentifier;
	protected $kindType = CiTestDestinationKind::class;
	protected $kindDataType = '';

	public function getDeviceTypeName()
	{
		return $this->deviceTypeName;
	}
	public function setDeviceTypeName($deviceTypeName)
	{
		$this->deviceTypeName = $deviceTypeName;
		return $deviceTypeName;
	}
	public function getDeviceTypeIdentifier()
	{
		return $this->deviceTypeIdentifier;
	}
	public function setDeviceTypeIdentifier($deviceTypeIdentifier)
	{
		$this->deviceTypeIdentifier = $deviceTypeIdentifier;
		return $deviceTypeIdentifier;
	}
	public function getRuntimeName()
	{
		return $this->runtimeName;
	}
	public function setRuntimeName($runtimeName)
	{
		$this->runtimeName = $runtimeName;
		return $runtimeName;
	}
	public function getRuntimeIdentifier()
	{
		return $this->runtimeIdentifier;
	}
	public function setRuntimeIdentifier($runtimeIdentifier)
	{
		$this->runtimeIdentifier = $runtimeIdentifier;
		return $runtimeIdentifier;
	}
	/**
	* @return  CiTestDestinationKind
	*/
	public function getKind()
	{
		return $this->kind;
	}
	/**
	* @param  CiTestDestinationKind
	*/
	public function setKind($kind)
	{
		$this->kind = $kind;
		return $kind;
	}

}
class_alias(CiTestDestination::class, 'AppleService_AppStore_CiTestDestination');

