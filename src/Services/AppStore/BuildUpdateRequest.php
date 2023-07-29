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

class BuildUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $expired;
	public $usesNonExemptEncryption;

	public function getExpired()
	{
		return $this->expired;
	}
	public function setExpired($expired)
	{
		$this->expired = $expired;
		return $this;
	}
	public function getUsesNonExemptEncryption()
	{
		return $this->usesNonExemptEncryption;
	}
	public function setUsesNonExemptEncryption($usesNonExemptEncryption)
	{
		$this->usesNonExemptEncryption = $usesNonExemptEncryption;
		return $this;
	}

}

class BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEncryptionDeclarations';
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

class BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class BuildUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEncryptionDeclarationType = BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration::class;
	protected $appEncryptionDeclarationDataType = 'object';

	/**
	* @return  BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration
	*/
	public function getAppEncryptionDeclaration()
	{
		return $this->appEncryptionDeclaration;
	}
	/**
	* @param  BuildUpdateRequest_Data_Relationships_AppEncryptionDeclaration
	*/
	public function setAppEncryptionDeclaration($appEncryptionDeclaration)
	{
		$this->appEncryptionDeclaration = $appEncryptionDeclaration;
		return $this;
	}

}

class BuildUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
	public $id;
	protected $attributesType = BuildUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BuildUpdateRequest_Data_Relationships::class;
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
	* @return  BuildUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BuildUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BuildUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BuildUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class BuildUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BuildUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

