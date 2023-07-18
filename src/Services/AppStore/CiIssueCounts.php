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

class CiIssueCounts extends \Cantie\AppStoreConnect\Model
{
	public $analyzerWarnings;
	public $errors;
	public $testFailures;
	public $warnings;

	public function getAnalyzerWarnings()
	{
		return $this->analyzerWarnings;
	}
	public function setAnalyzerWarnings($analyzerWarnings)
	{
		$this->analyzerWarnings = $analyzerWarnings;
		return $this;
	}
	public function getErrors()
	{
		return $this->errors;
	}
	public function setErrors($errors)
	{
		$this->errors = $errors;
		return $this;
	}
	public function getTestFailures()
	{
		return $this->testFailures;
	}
	public function setTestFailures($testFailures)
	{
		$this->testFailures = $testFailures;
		return $this;
	}
	public function getWarnings()
	{
		return $this->warnings;
	}
	public function setWarnings($warnings)
	{
		$this->warnings = $warnings;
		return $this;
	}

}
class_alias(CiIssueCounts::class, 'AppleService_AppStore_CiIssueCounts');

