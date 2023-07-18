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

class CiProduct_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $createdDate;
	public $productType; // APP, FRAMEWORK

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
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
	public function getProductType()
	{
		return $this->productType;
	}
	public function setProductType($productType)
	{
		$this->productType = $productType;
		return $this;
	}

}
class_alias(CiProduct_Attributes::class, 'AppleService_AppStore_CiProduct_Attributes');

class CiProduct_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiProduct_Relationships_App_Links::class, 'AppleService_AppStore_CiProduct_Relationships_App_Links');

class CiProduct_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(CiProduct_Relationships_App_Data::class, 'AppleService_AppStore_CiProduct_Relationships_App_Data');

class CiProduct_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiProduct_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiProduct_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiProduct_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiProduct_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiProduct_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiProduct_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiProduct_Relationships_App::class, 'AppleService_AppStore_CiProduct_Relationships_App');

class CiProduct_Relationships_BundleId_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiProduct_Relationships_BundleId_Links::class, 'AppleService_AppStore_CiProduct_Relationships_BundleId_Links');

class CiProduct_Relationships_BundleId_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIds';
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
class_alias(CiProduct_Relationships_BundleId_Data::class, 'AppleService_AppStore_CiProduct_Relationships_BundleId_Data');

class CiProduct_Relationships_BundleId extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiProduct_Relationships_BundleId_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CiProduct_Relationships_BundleId_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CiProduct_Relationships_BundleId_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiProduct_Relationships_BundleId_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CiProduct_Relationships_BundleId_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiProduct_Relationships_BundleId_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiProduct_Relationships_BundleId::class, 'AppleService_AppStore_CiProduct_Relationships_BundleId');

class CiProduct_Relationships_PrimaryRepositories_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(CiProduct_Relationships_PrimaryRepositories_Links::class, 'AppleService_AppStore_CiProduct_Relationships_PrimaryRepositories_Links');

class CiProduct_Relationships_PrimaryRepositories_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'scmRepositories';
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
class_alias(CiProduct_Relationships_PrimaryRepositories_Data::class, 'AppleService_AppStore_CiProduct_Relationships_PrimaryRepositories_Data');

class CiProduct_Relationships_PrimaryRepositories extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CiProduct_Relationships_PrimaryRepositories_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = CiProduct_Relationships_PrimaryRepositories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  CiProduct_Relationships_PrimaryRepositories_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CiProduct_Relationships_PrimaryRepositories_Links
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
	* @return  CiProduct_Relationships_PrimaryRepositories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CiProduct_Relationships_PrimaryRepositories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CiProduct_Relationships_PrimaryRepositories::class, 'AppleService_AppStore_CiProduct_Relationships_PrimaryRepositories');

class CiProduct_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = CiProduct_Relationships_App::class;
	protected $appDataType = 'object';
	protected $bundleIdType = CiProduct_Relationships_BundleId::class;
	protected $bundleIdDataType = 'object';
	protected $primaryRepositoriesType = CiProduct_Relationships_PrimaryRepositories::class;
	protected $primaryRepositoriesDataType = 'object';

	/**
	* @return  CiProduct_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  CiProduct_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  CiProduct_Relationships_BundleId
	*/
	public function getBundleId()
	{
		return $this->bundleId;
	}
	/**
	* @param  CiProduct_Relationships_BundleId
	*/
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	/**
	* @return  CiProduct_Relationships_PrimaryRepositories
	*/
	public function getPrimaryRepositories()
	{
		return $this->primaryRepositories;
	}
	/**
	* @param  CiProduct_Relationships_PrimaryRepositories
	*/
	public function setPrimaryRepositories($primaryRepositories)
	{
		$this->primaryRepositories = $primaryRepositories;
		return $this;
	}

}
class_alias(CiProduct_Relationships::class, 'AppleService_AppStore_CiProduct_Relationships');

class CiProduct extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciProducts';
	public $id;
	protected $attributesType = CiProduct_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CiProduct_Relationships::class;
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
	* @return  CiProduct_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiProduct_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CiProduct_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CiProduct_Relationships
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
class_alias(CiProduct::class, 'AppleService_AppStore_CiProduct');

