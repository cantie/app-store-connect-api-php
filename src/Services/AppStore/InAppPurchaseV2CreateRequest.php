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

class InAppPurchaseV2CreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $productId;
	protected $inAppPurchaseTypeType = InAppPurchaseType::class;
	protected $inAppPurchaseTypeDataType = '';
	public $reviewNote;
	public $familySharable;
	public $availableInAllTerritories;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($productId)
	{
		$this->productId = $productId;
		return $this;
	}
	/**
	* @return  InAppPurchaseType
	*/
	public function getInAppPurchaseType()
	{
		return $this->inAppPurchaseType;
	}
	/**
	* @param  InAppPurchaseType
	*/
	public function setInAppPurchaseType($inAppPurchaseType)
	{
		$this->inAppPurchaseType = $inAppPurchaseType;
		return $this;
	}
	public function getReviewNote()
	{
		return $this->reviewNote;
	}
	public function setReviewNote($reviewNote)
	{
		$this->reviewNote = $reviewNote;
		return $this;
	}
	public function getFamilySharable()
	{
		return $this->familySharable;
	}
	public function setFamilySharable($familySharable)
	{
		$this->familySharable = $familySharable;
		return $this;
	}
	public function getAvailableInAllTerritories()
	{
		return $this->availableInAllTerritories;
	}
	public function setAvailableInAllTerritories($availableInAllTerritories)
	{
		$this->availableInAllTerritories = $availableInAllTerritories;
		return $this;
	}

}
class_alias(InAppPurchaseV2CreateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Attributes');

class InAppPurchaseV2CreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(InAppPurchaseV2CreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Relationships_App_Data');

class InAppPurchaseV2CreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = InAppPurchaseV2CreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2CreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2CreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(InAppPurchaseV2CreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Relationships_App');

class InAppPurchaseV2CreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = InAppPurchaseV2CreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  InAppPurchaseV2CreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  InAppPurchaseV2CreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}

}
class_alias(InAppPurchaseV2CreateRequest_Data_Relationships::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Relationships');

class InAppPurchaseV2CreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
	protected $attributesType = InAppPurchaseV2CreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchaseV2CreateRequest_Data_Relationships::class;
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
	* @return  InAppPurchaseV2CreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchaseV2CreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2CreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchaseV2CreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(InAppPurchaseV2CreateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data');

class InAppPurchaseV2CreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = InAppPurchaseV2CreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2CreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2CreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(InAppPurchaseV2CreateRequest::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest');

