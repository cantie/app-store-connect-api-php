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

class AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage_Data::class, 'AppleService_AppStore_AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage_Data');

class AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage::class, 'AppleService_AppStore_AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage');

class AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageLocalizations';
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
class_alias(AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations_Data::class, 'AppleService_AppStore_AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations_Data');

class AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations::class, 'AppleService_AppStore_AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations');

class AppCustomProductPageVersionInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appCustomProductPageType = AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage::class;
	protected $appCustomProductPageDataType = 'object';
	protected $appCustomProductPageLocalizationsType = AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations::class;
	protected $appCustomProductPageLocalizationsDataType = 'object';

	/**
	* @return  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage
	*/
	public function getAppCustomProductPage()
	{
		return $this->appCustomProductPage;
	}
	/**
	* @param  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPage
	*/
	public function setAppCustomProductPage($appCustomProductPage)
	{
		$this->appCustomProductPage = $appCustomProductPage;
		return $this;
	}
	/**
	* @return  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations
	*/
	public function getAppCustomProductPageLocalizations()
	{
		return $this->appCustomProductPageLocalizations;
	}
	/**
	* @param  AppCustomProductPageVersionInlineCreate_Relationships_AppCustomProductPageLocalizations
	*/
	public function setAppCustomProductPageLocalizations($appCustomProductPageLocalizations)
	{
		$this->appCustomProductPageLocalizations = $appCustomProductPageLocalizations;
		return $this;
	}

}
class_alias(AppCustomProductPageVersionInlineCreate_Relationships::class, 'AppleService_AppStore_AppCustomProductPageVersionInlineCreate_Relationships');

class AppCustomProductPageVersionInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageVersions';
	public $id;
	protected $relationshipsType = AppCustomProductPageVersionInlineCreate_Relationships::class;
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
	* @return  AppCustomProductPageVersionInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPageVersionInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppCustomProductPageVersionInlineCreate::class, 'AppleService_AppStore_AppCustomProductPageVersionInlineCreate');

