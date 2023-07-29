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

class CapabilityOption extends \Cantie\AppStoreConnect\Model
{
	public $key; // XCODE_5, XCODE_6, COMPLETE_PROTECTION, PROTECTED_UNLESS_OPEN, PROTECTED_UNTIL_FIRST_USER_AUTH, PRIMARY_APP_CONSENT
	public $name;
	public $description;
	public $enabledByDefault;
	public $enabled;
	public $supportsWildcard;

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
	public function getEnabled()
	{
		return $this->enabled;
	}
	public function setEnabled($enabled)
	{
		$this->enabled = $enabled;
		return $this;
	}
	public function getSupportsWildcard()
	{
		return $this->supportsWildcard;
	}
	public function setSupportsWildcard($supportsWildcard)
	{
		$this->supportsWildcard = $supportsWildcard;
		return $this;
	}

}

