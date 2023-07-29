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

class CiFilesAndFoldersRule extends \Cantie\AppStoreConnect\Model
{
	public $mode; // START_IF_ANY_FILE_MATCHES, DO_NOT_START_IF_ALL_FILES_MATCH
	protected $matchersType = CiStartConditionFileMatcher::class;
	protected $matchersDataType = 'array';

	public function getMode()
	{
		return $this->mode;
	}
	public function setMode($mode)
	{
		$this->mode = $mode;
		return $this;
	}
	/**
	* @return  CiStartConditionFileMatcher[]
	*/
	public function getMatchers()
	{
		return $this->matchers;
	}
	/**
	* @param  CiStartConditionFileMatcher[]
	*/
	public function setMatchers($matchers)
	{
		$this->matchers = $matchers;
		return $this;
	}

}

