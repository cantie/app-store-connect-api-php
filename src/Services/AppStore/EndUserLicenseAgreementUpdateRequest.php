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

class EndUserLicenseAgreementUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $agreementText;

	public function getAgreementText()
	{
		return $this->agreementText;
	}
	public function setAgreementText($agreementText)
	{
		$this->agreementText = $agreementText;
		return $agreementText;
	}

}
class_alias(EndUserLicenseAgreementUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_EndUserLicenseAgreementUpdateRequest_Data_Attributes');

class EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories_Data::class, 'AppleService_AppStore_EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories_Data');

class EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories::class, 'AppleService_AppStore_EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories');

class EndUserLicenseAgreementUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $territoriesType = EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories::class;
	protected $territoriesDataType = 'object';

	/**
	* @return  EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories
	*/
	public function getTerritories()
	{
		return $this->territories;
	}
	/**
	* @param  EndUserLicenseAgreementUpdateRequest_Data_Relationships_Territories
	*/
	public function setTerritories($territories)
	{
		$this->territories = $territories;
		return $territories;
	}

}
class_alias(EndUserLicenseAgreementUpdateRequest_Data_Relationships::class, 'AppleService_AppStore_EndUserLicenseAgreementUpdateRequest_Data_Relationships');

class EndUserLicenseAgreementUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'endUserLicenseAgreements';
	public $id;
	protected $attributesType = EndUserLicenseAgreementUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = EndUserLicenseAgreementUpdateRequest_Data_Relationships::class;
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
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  EndUserLicenseAgreementUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  EndUserLicenseAgreementUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  EndUserLicenseAgreementUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  EndUserLicenseAgreementUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(EndUserLicenseAgreementUpdateRequest_Data::class, 'AppleService_AppStore_EndUserLicenseAgreementUpdateRequest_Data');

class EndUserLicenseAgreementUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = EndUserLicenseAgreementUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  EndUserLicenseAgreementUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreementUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(EndUserLicenseAgreementUpdateRequest::class, 'AppleService_AppStore_EndUserLicenseAgreementUpdateRequest');

