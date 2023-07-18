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

class AppCustomProductPageCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Attributes');

class AppCustomProductPageCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_App_Data');

class AppCustomProductPageCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_App');

class AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageVersions';
	public $id;

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

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions_Data::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions_Data');

class AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions');

class AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
	public $id;

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

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate_Data::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate_Data');

class AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate');

class AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPages';
	public $id;

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

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate_Data::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate_Data');

class AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate');

class AppCustomProductPageCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppCustomProductPageCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $appCustomProductPageVersionsType = AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions::class;
	protected $appCustomProductPageVersionsDataType = 'object';
	protected $appStoreVersionTemplateType = AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate::class;
	protected $appStoreVersionTemplateDataType = 'object';
	protected $customProductPageTemplateType = AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate::class;
	protected $customProductPageTemplateDataType = 'object';

	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions
	*/
	public function getAppCustomProductPageVersions()
	{
		return $this->appCustomProductPageVersions;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_AppCustomProductPageVersions
	*/
	public function setAppCustomProductPageVersions($appCustomProductPageVersions)
	{
		$this->appCustomProductPageVersions = $appCustomProductPageVersions;
		return $this;
	}
	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate
	*/
	public function getAppStoreVersionTemplate()
	{
		return $this->appStoreVersionTemplate;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_AppStoreVersionTemplate
	*/
	public function setAppStoreVersionTemplate($appStoreVersionTemplate)
	{
		$this->appStoreVersionTemplate = $appStoreVersionTemplate;
		return $this;
	}
	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate
	*/
	public function getCustomProductPageTemplate()
	{
		return $this->customProductPageTemplate;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships_CustomProductPageTemplate
	*/
	public function setCustomProductPageTemplate($customProductPageTemplate)
	{
		$this->customProductPageTemplate = $customProductPageTemplate;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data_Relationships');

class AppCustomProductPageCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPages';
	protected $attributesType = AppCustomProductPageCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppCustomProductPageCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  AppCustomProductPageCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppCustomProductPageCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest_Data::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest_Data');

class AppCustomProductPageCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageCreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = [AppCustomProductPageLocalizationInlineCreate::class, AppCustomProductPageVersionInlineCreate::class];
	protected $includedDataType = 'array[*]';

	/**
	* @return  AppCustomProductPageCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	public function getIncluded()
	{
		return $this->included;
	}
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}

}
class_alias(AppCustomProductPageCreateRequest::class, 'AppleService_AppStore_AppCustomProductPageCreateRequest');

