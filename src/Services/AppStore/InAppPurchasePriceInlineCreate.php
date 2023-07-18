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

class InAppPurchasePriceInlineCreate_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $startDate;
	public $endDate;

	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $this;
	}
	public function getEndDate()
	{
		return $this->endDate;
	}
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $this;
	}

}
class_alias(InAppPurchasePriceInlineCreate_Attributes::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate_Attributes');

class InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
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
class_alias(InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2_Data');

class InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2');

class InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchasePricePoints';
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
class_alias(InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint_Data::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint_Data');

class InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint');

class InAppPurchasePriceInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $inAppPurchaseV2Type = InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2::class;
	protected $inAppPurchaseV2DataType = 'object';
	protected $inAppPurchasePricePointType = InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint::class;
	protected $inAppPurchasePricePointDataType = 'object';

	/**
	* @return  InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2
	*/
	public function getInAppPurchaseV2()
	{
		return $this->inAppPurchaseV2;
	}
	/**
	* @param  InAppPurchasePriceInlineCreate_Relationships_InAppPurchaseV2
	*/
	public function setInAppPurchaseV2($inAppPurchaseV2)
	{
		$this->inAppPurchaseV2 = $inAppPurchaseV2;
		return $this;
	}
	/**
	* @return  InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint
	*/
	public function getInAppPurchasePricePoint()
	{
		return $this->inAppPurchasePricePoint;
	}
	/**
	* @param  InAppPurchasePriceInlineCreate_Relationships_InAppPurchasePricePoint
	*/
	public function setInAppPurchasePricePoint($inAppPurchasePricePoint)
	{
		$this->inAppPurchasePricePoint = $inAppPurchasePricePoint;
		return $this;
	}

}
class_alias(InAppPurchasePriceInlineCreate_Relationships::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate_Relationships');

class InAppPurchasePriceInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchasePrices';
	public $id;
	protected $attributesType = InAppPurchasePriceInlineCreate_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchasePriceInlineCreate_Relationships::class;
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
	* @return  InAppPurchasePriceInlineCreate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchasePriceInlineCreate_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  InAppPurchasePriceInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchasePriceInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(InAppPurchasePriceInlineCreate::class, 'AppleService_AppStore_InAppPurchasePriceInlineCreate');

