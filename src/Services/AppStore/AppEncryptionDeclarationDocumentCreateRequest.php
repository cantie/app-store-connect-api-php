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

class AppEncryptionDeclarationDocumentCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;

	public function getFileSize()
	{
		return $this->fileSize;
	}
	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		return $this;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $this;
	}

}
class_alias(AppEncryptionDeclarationDocumentCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppEncryptionDeclarationDocumentCreateRequest_Data_Attributes');

class AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration_Data::class, 'AppleService_AppStore_AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration_Data');

class AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration::class, 'AppleService_AppStore_AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration');

class AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEncryptionDeclarationType = AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration::class;
	protected $appEncryptionDeclarationDataType = 'object';

	/**
	* @return  AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration
	*/
	public function getAppEncryptionDeclaration()
	{
		return $this->appEncryptionDeclaration;
	}
	/**
	* @param  AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships_AppEncryptionDeclaration
	*/
	public function setAppEncryptionDeclaration($appEncryptionDeclaration)
	{
		$this->appEncryptionDeclaration = $appEncryptionDeclaration;
		return $this;
	}

}
class_alias(AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships');

class AppEncryptionDeclarationDocumentCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEncryptionDeclarationDocuments';
	protected $attributesType = AppEncryptionDeclarationDocumentCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships::class;
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
	* @return  AppEncryptionDeclarationDocumentCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEncryptionDeclarationDocumentCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEncryptionDeclarationDocumentCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppEncryptionDeclarationDocumentCreateRequest_Data::class, 'AppleService_AppStore_AppEncryptionDeclarationDocumentCreateRequest_Data');

class AppEncryptionDeclarationDocumentCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppEncryptionDeclarationDocumentCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEncryptionDeclarationDocumentCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEncryptionDeclarationDocumentCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppEncryptionDeclarationDocumentCreateRequest::class, 'AppleService_AppStore_AppEncryptionDeclarationDocumentCreateRequest');

