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

class AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage_Data extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations_Data extends \Cantie\AppStoreConnect\Model
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

class AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCustomProductPageVersionCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appCustomProductPageType = AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage::class;
	protected $appCustomProductPageDataType = 'object';
	protected $appCustomProductPageLocalizationsType = AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations::class;
	protected $appCustomProductPageLocalizationsDataType = 'object';

	/**
	* @return  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage
	*/
	public function getAppCustomProductPage()
	{
		return $this->appCustomProductPage;
	}
	/**
	* @param  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPage
	*/
	public function setAppCustomProductPage($appCustomProductPage)
	{
		$this->appCustomProductPage = $appCustomProductPage;
		return $this;
	}
	/**
	* @return  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations
	*/
	public function getAppCustomProductPageLocalizations()
	{
		return $this->appCustomProductPageLocalizations;
	}
	/**
	* @param  AppCustomProductPageVersionCreateRequest_Data_Relationships_AppCustomProductPageLocalizations
	*/
	public function setAppCustomProductPageLocalizations($appCustomProductPageLocalizations)
	{
		$this->appCustomProductPageLocalizations = $appCustomProductPageLocalizations;
		return $this;
	}

}

class AppCustomProductPageVersionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageVersions';
	protected $relationshipsType = AppCustomProductPageVersionCreateRequest_Data_Relationships::class;
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
	* @return  AppCustomProductPageVersionCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCustomProductPageVersionCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class AppCustomProductPageVersionCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppCustomProductPageVersionCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCustomProductPageVersionCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCustomProductPageVersionCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

