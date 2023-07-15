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

class CiAction_TestConfiguration extends \Cantie\AppStoreConnect\Model
{
	public $kind; // USE_SCHEME_SETTINGS, SPECIFIC_TEST_PLANS
	public $testPlanName;
	protected $testDestinationsType = CiTestDestination::class;
	protected $testDestinationsDataType = 'array';

	public function getKind()
	{
		return $this->kind;
	}
	public function setKind($kind)
	{
		$this->kind = $kind;
		return $kind;
	}
	public function getTestPlanName()
	{
		return $this->testPlanName;
	}
	public function setTestPlanName($testPlanName)
	{
		$this->testPlanName = $testPlanName;
		return $testPlanName;
	}
	/**
	* @return  CiTestDestination[]
	*/
	public function getTestDestinations()
	{
		return $this->testDestinations;
	}
	/**
	* @param  CiTestDestination[]
	*/
	public function setTestDestinations($testDestinations)
	{
		$this->testDestinations = $testDestinations;
		return $testDestinations;
	}

}
class_alias(CiAction_TestConfiguration::class, 'AppleService_AppStore_CiAction_TestConfiguration');

class CiAction extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $actionTypeType = CiActionType::class;
	protected $actionTypeDataType = '';
	public $destination; // ANY_IOS_DEVICE, ANY_IOS_SIMULATOR, ANY_TVOS_DEVICE, ANY_TVOS_SIMULATOR, ANY_WATCHOS_DEVICE, ANY_WATCHOS_SIMULATOR, ANY_MAC, ANY_MAC_CATALYST
	protected $buildDistributionAudienceType = BuildAudienceType::class;
	protected $buildDistributionAudienceDataType = '';
	protected $testConfigurationType = CiAction_TestConfiguration::class;
	protected $testConfigurationDataType = 'object';
	public $scheme;
	public $platform; // MACOS, IOS, TVOS, WATCHOS
	public $isRequiredToPass;

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
	* @return  CiActionType
	*/
	public function getActionType()
	{
		return $this->actionType;
	}
	/**
	* @param  CiActionType
	*/
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		return $actionType;
	}
	public function getDestination()
	{
		return $this->destination;
	}
	public function setDestination($destination)
	{
		$this->destination = $destination;
		return $destination;
	}
	/**
	* @return  BuildAudienceType
	*/
	public function getBuildDistributionAudience()
	{
		return $this->buildDistributionAudience;
	}
	/**
	* @param  BuildAudienceType
	*/
	public function setBuildDistributionAudience($buildDistributionAudience)
	{
		$this->buildDistributionAudience = $buildDistributionAudience;
		return $buildDistributionAudience;
	}
	/**
	* @return  CiAction_TestConfiguration
	*/
	public function getTestConfiguration()
	{
		return $this->testConfiguration;
	}
	/**
	* @param  CiAction_TestConfiguration
	*/
	public function setTestConfiguration($testConfiguration)
	{
		$this->testConfiguration = $testConfiguration;
		return $testConfiguration;
	}
	public function getScheme()
	{
		return $this->scheme;
	}
	public function setScheme($scheme)
	{
		$this->scheme = $scheme;
		return $scheme;
	}
	public function getPlatform()
	{
		return $this->platform;
	}
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
	}
	public function getIsRequiredToPass()
	{
		return $this->isRequiredToPass;
	}
	public function setIsRequiredToPass($isRequiredToPass)
	{
		$this->isRequiredToPass = $isRequiredToPass;
		return $isRequiredToPass;
	}

}
class_alias(CiAction::class, 'AppleService_AppStore_CiAction');
