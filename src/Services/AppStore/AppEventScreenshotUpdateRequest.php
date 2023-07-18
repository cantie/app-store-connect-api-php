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

class AppEventScreenshotUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $uploaded;

	public function getUploaded()
	{
		return $this->uploaded;
	}
	public function setUploaded($uploaded)
	{
		$this->uploaded = $uploaded;
		return $this;
	}

}
class_alias(AppEventScreenshotUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_AppEventScreenshotUpdateRequest_Data_Attributes');

class AppEventScreenshotUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventScreenshots';
	public $id;
	protected $attributesType = AppEventScreenshotUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/**
	* @return  AppEventScreenshotUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventScreenshotUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}
class_alias(AppEventScreenshotUpdateRequest_Data::class, 'AppleService_AppStore_AppEventScreenshotUpdateRequest_Data');

class AppEventScreenshotUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEventScreenshotUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventScreenshotUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventScreenshotUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEventScreenshotUpdateRequest::class, 'AppleService_AppStore_AppEventScreenshotUpdateRequest');

