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

class CapabilitySetting extends \Cantie\AppStoreConnect\Model
{
	public $key; // ICLOUD_VERSION, DATA_PROTECTION_PERMISSION_LEVEL, APPLE_ID_AUTH_APP_CONSENT
	public $name;
	public $description;
	public $enabledByDefault;
	public $visible;
	public $allowedInstances; // ENTRY, SINGLE, MULTIPLE
	public $minInstances;
	protected $optionsType = CapabilityOption::class;
	protected $optionsDataType = 'array';

	public function getKey()
	{
		return $this->key;
	}
	public function setKey($key)
	{
		$this->key = $key;
		return $this;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}
	public function getEnabledByDefault()
	{
		return $this->enabledByDefault;
	}
	public function setEnabledByDefault($enabledByDefault)
	{
		$this->enabledByDefault = $enabledByDefault;
		return $this;
	}
	public function getVisible()
	{
		return $this->visible;
	}
	public function setVisible($visible)
	{
		$this->visible = $visible;
		return $this;
	}
	public function getAllowedInstances()
	{
		return $this->allowedInstances;
	}
	public function setAllowedInstances($allowedInstances)
	{
		$this->allowedInstances = $allowedInstances;
		return $this;
	}
	public function getMinInstances()
	{
		return $this->minInstances;
	}
	public function setMinInstances($minInstances)
	{
		$this->minInstances = $minInstances;
		return $this;
	}
	/**
	* @return  CapabilityOption[]
	*/
	public function getOptions()
	{
		return $this->options;
	}
	/**
	* @param  CapabilityOption[]
	*/
	public function setOptions($options)
	{
		$this->options = $options;
		return $this;
	}

}

