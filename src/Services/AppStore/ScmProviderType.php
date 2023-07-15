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

class ScmProviderType extends \Cantie\AppStoreConnect\Model
{
	public $kind; // BITBUCKET_CLOUD, BITBUCKET_SERVER, GITHUB_CLOUD, GITHUB_ENTERPRISE, GITLAB_CLOUD, GITLAB_SELF_MANAGED
	public $displayName;
	public $isOnPremise;

	public function getKind()
	{
		return $this->kind;
	}
	public function setKind($kind)
	{
		$this->kind = $kind;
		return $kind;
	}
	public function getDisplayName()
	{
		return $this->displayName;
	}
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
		return $displayName;
	}
	public function getIsOnPremise()
	{
		return $this->isOnPremise;
	}
	public function setIsOnPremise($isOnPremise)
	{
		$this->isOnPremise = $isOnPremise;
		return $isOnPremise;
	}

}
class_alias(ScmProviderType::class, 'AppleService_AppStore_ScmProviderType');

