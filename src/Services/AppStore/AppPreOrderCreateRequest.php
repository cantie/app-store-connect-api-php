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

class AppPreOrderCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $appReleaseDate;

	public function getAppReleaseDate()
	{
		return $this->appReleaseDate;
	}
	public function setAppReleaseDate($appReleaseDate)
	{
		$this->appReleaseDate = $appReleaseDate;
		return $appReleaseDate;
	}

}
class_alias(AppPreOrderCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppPreOrderCreateRequest_Data_Attributes');

class AppPreOrderCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}

}
class_alias(AppPreOrderCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_AppPreOrderCreateRequest_Data_Relationships_App_Data');

class AppPreOrderCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPreOrderCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreOrderCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreOrderCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPreOrderCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_AppPreOrderCreateRequest_Data_Relationships_App');

class AppPreOrderCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppPreOrderCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  AppPreOrderCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppPreOrderCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}

}
class_alias(AppPreOrderCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppPreOrderCreateRequest_Data_Relationships');

class AppPreOrderCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreOrders';
	protected $attributesType = AppPreOrderCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPreOrderCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	/**
	* @return  AppPreOrderCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPreOrderCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppPreOrderCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPreOrderCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppPreOrderCreateRequest_Data::class, 'AppleService_AppStore_AppPreOrderCreateRequest_Data');

class AppPreOrderCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppPreOrderCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreOrderCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreOrderCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPreOrderCreateRequest::class, 'AppleService_AppStore_AppPreOrderCreateRequest');

