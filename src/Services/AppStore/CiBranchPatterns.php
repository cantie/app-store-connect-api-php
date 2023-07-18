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

class CiBranchPatterns_Patterns extends \Cantie\AppStoreConnect\Model
{
	public $pattern;
	public $isPrefix;

	public function getPattern()
	{
		return $this->pattern;
	}
	public function setPattern($pattern)
	{
		$this->pattern = $pattern;
		return $this;
	}
	public function getIsPrefix()
	{
		return $this->isPrefix;
	}
	public function setIsPrefix($isPrefix)
	{
		$this->isPrefix = $isPrefix;
		return $this;
	}

}
class_alias(CiBranchPatterns_Patterns::class, 'AppleService_AppStore_CiBranchPatterns_Patterns');

class CiBranchPatterns extends \Cantie\AppStoreConnect\Model
{
	public $isAllMatch;
	protected $patternsType = CiBranchPatterns_Patterns::class;
	protected $patternsDataType = 'array';

	public function getIsAllMatch()
	{
		return $this->isAllMatch;
	}
	public function setIsAllMatch($isAllMatch)
	{
		$this->isAllMatch = $isAllMatch;
		return $this;
	}
	/**
	* @return  CiBranchPatterns_Patterns[]
	*/
	public function getPatterns()
	{
		return $this->patterns;
	}
	/**
	* @param  CiBranchPatterns_Patterns[]
	*/
	public function setPatterns($patterns)
	{
		$this->patterns = $patterns;
		return $this;
	}

}
class_alias(CiBranchPatterns::class, 'AppleService_AppStore_CiBranchPatterns');

