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

class EndUserLicenseAgreementCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $agreementText;

	public function getAgreementText()
	{
		return $this->agreementText;
	}
	public function setAgreementText($agreementText)
	{
		$this->agreementText = $agreementText;
		return $this;
	}

}
class_alias(EndUserLicenseAgreementCreateRequest_Data_Attributes::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data_Attributes');

class EndUserLicenseAgreementCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(EndUserLicenseAgreementCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data_Relationships_App_Data');

class EndUserLicenseAgreementCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndUserLicenseAgreementCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  EndUserLicenseAgreementCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(EndUserLicenseAgreementCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data_Relationships_App');

class EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territories';
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
class_alias(EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories_Data::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories_Data');

class EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories');

class EndUserLicenseAgreementCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = EndUserLicenseAgreementCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';
	protected $territoriesType = EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories::class;
	protected $territoriesDataType = 'object';

	/**
	* @return  EndUserLicenseAgreementCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories
	*/
	public function getTerritories()
	{
		return $this->territories;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data_Relationships_Territories
	*/
	public function setTerritories($territories)
	{
		$this->territories = $territories;
		return $this;
	}

}
class_alias(EndUserLicenseAgreementCreateRequest_Data_Relationships::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data_Relationships');

class EndUserLicenseAgreementCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'endUserLicenseAgreements';
	protected $attributesType = EndUserLicenseAgreementCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = EndUserLicenseAgreementCreateRequest_Data_Relationships::class;
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
	* @return  EndUserLicenseAgreementCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  EndUserLicenseAgreementCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(EndUserLicenseAgreementCreateRequest_Data::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest_Data');

class EndUserLicenseAgreementCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndUserLicenseAgreementCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  EndUserLicenseAgreementCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreementCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(EndUserLicenseAgreementCreateRequest::class, 'AppleService_AppStore_EndUserLicenseAgreementCreateRequest');

