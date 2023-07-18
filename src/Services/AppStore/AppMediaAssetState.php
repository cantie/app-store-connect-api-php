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

class AppMediaAssetState extends \Cantie\AppStoreConnect\Model
{
	protected $errorsType = AppMediaStateError::class;
	protected $errorsDataType = 'array';
	protected $warningsType = AppMediaStateError::class;
	protected $warningsDataType = 'array';
	public $state; // AWAITING_UPLOAD, UPLOAD_COMPLETE, COMPLETE, FAILED

	/**
	* @return  AppMediaStateError[]
	*/
	public function getErrors()
	{
		return $this->errors;
	}
	/**
	* @param  AppMediaStateError[]
	*/
	public function setErrors($errors)
	{
		$this->errors = $errors;
		return $this;
	}
	/**
	* @return  AppMediaStateError[]
	*/
	public function getWarnings()
	{
		return $this->warnings;
	}
	/**
	* @param  AppMediaStateError[]
	*/
	public function setWarnings($warnings)
	{
		$this->warnings = $warnings;
		return $this;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

}
class_alias(AppMediaAssetState::class, 'AppleService_AppStore_AppMediaAssetState');

