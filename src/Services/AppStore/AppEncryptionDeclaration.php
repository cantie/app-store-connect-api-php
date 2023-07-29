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

class AppEncryptionDeclaration_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $appDescription;
	public $createdDate;
	public $usesEncryption;
	public $exempt;
	public $containsProprietaryCryptography;
	public $containsThirdPartyCryptography;
	public $availableOnFrenchStore;
	public $platform; // 
	public $uploadedDate;
	public $documentUrl;
	public $documentName;
	public $documentType;
	public $appEncryptionDeclarationState; // 
	public $codeValue;

	public function getAppDescription()
	{
		return $this->appDescription;
	}
	public function setAppDescription($appDescription)
	{
		$this->appDescription = $appDescription;
		return $this;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $this;
	}
	public function getUsesEncryption()
	{
		return $this->usesEncryption;
	}
	public function setUsesEncryption($usesEncryption)
	{
		$this->usesEncryption = $usesEncryption;
		return $this;
	}
	public function getExempt()
	{
		return $this->exempt;
	}
	public function setExempt($exempt)
	{
		$this->exempt = $exempt;
		return $this;
	}
	public function getContainsProprietaryCryptography()
	{
		return $this->containsProprietaryCryptography;
	}
	public function setContainsProprietaryCryptography($containsProprietaryCryptography)
	{
		$this->containsProprietaryCryptography = $containsProprietaryCryptography;
		return $this;
	}
	public function getContainsThirdPartyCryptography()
	{
		return $this->containsThirdPartyCryptography;
	}
	public function setContainsThirdPartyCryptography($containsThirdPartyCryptography)
	{
		$this->containsThirdPartyCryptography = $containsThirdPartyCryptography;
		return $this;
	}
	public function getAvailableOnFrenchStore()
	{
		return $this->availableOnFrenchStore;
	}
	public function setAvailableOnFrenchStore($availableOnFrenchStore)
	{
		$this->availableOnFrenchStore = $availableOnFrenchStore;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  string
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $this;
	}
	public function getUploadedDate()
	{
		return $this->uploadedDate;
	}
	public function setUploadedDate($uploadedDate)
	{
		$this->uploadedDate = $uploadedDate;
		return $this;
	}
	public function getDocumentUrl()
	{
		return $this->documentUrl;
	}
	public function setDocumentUrl($documentUrl)
	{
		$this->documentUrl = $documentUrl;
		return $this;
	}
	public function getDocumentName()
	{
		return $this->documentName;
	}
	public function setDocumentName($documentName)
	{
		$this->documentName = $documentName;
		return $this;
	}
	public function getDocumentType()
	{
		return $this->documentType;
	}
	public function setDocumentType($documentType)
	{
		$this->documentType = $documentType;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getAppEncryptionDeclarationState()
	{
		return $this->appEncryptionDeclarationState;
	}
	/**
	* @param  string
	*/
	public function setAppEncryptionDeclarationState($appEncryptionDeclarationState)
	{
		$this->appEncryptionDeclarationState = $appEncryptionDeclarationState;
		return $this;
	}
	public function getCodeValue()
	{
		return $this->codeValue;
	}
	public function setCodeValue($codeValue)
	{
		$this->codeValue = $codeValue;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppEncryptionDeclaration_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEncryptionDeclaration_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppEncryptionDeclaration_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEncryptionDeclaration_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclaration_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships_Builds_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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

class AppEncryptionDeclaration_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEncryptionDeclaration_Relationships_Builds_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppEncryptionDeclaration_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppEncryptionDeclaration_Relationships_Builds_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_Builds_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclaration_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEncryptionDeclarationDocuments';
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

class AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEncryptionDeclaration_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppEncryptionDeclaration_Relationships_App::class;
	protected $appDataType = 'object';
	protected $buildsType = AppEncryptionDeclaration_Relationships_Builds::class;
	protected $buildsDataType = 'object';
	protected $appEncryptionDeclarationDocumentType = AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument::class;
	protected $appEncryptionDeclarationDocumentDataType = 'object';

	/**
	* @return  AppEncryptionDeclaration_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclaration_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument
	*/
	public function getAppEncryptionDeclarationDocument()
	{
		return $this->appEncryptionDeclarationDocument;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships_AppEncryptionDeclarationDocument
	*/
	public function setAppEncryptionDeclarationDocument($appEncryptionDeclarationDocument)
	{
		$this->appEncryptionDeclarationDocument = $appEncryptionDeclarationDocument;
		return $this;
	}

}

class AppEncryptionDeclaration extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEncryptionDeclarations';
	public $id;
	protected $attributesType = AppEncryptionDeclaration_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEncryptionDeclaration_Relationships::class;
	protected $relationshipsDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

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
	* @return  AppEncryptionDeclaration_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEncryptionDeclaration_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEncryptionDeclaration_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEncryptionDeclaration_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

