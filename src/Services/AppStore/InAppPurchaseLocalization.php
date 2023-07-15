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

class InAppPurchaseLocalization_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $locale;
	public $description;
	public $state; // PREPARE_FOR_SUBMISSION, WAITING_FOR_REVIEW, APPROVED, REJECTED

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $name;
	}
	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $locale;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
		return $description;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $state;
	}

}
class_alias(InAppPurchaseLocalization_Attributes::class, 'AppleService_AppStore_InAppPurchaseLocalization_Attributes');

class InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Links::class, 'AppleService_AppStore_InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Links');

class InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Data');

class InAppPurchaseLocalization_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseLocalization_Relationships_InAppPurchaseV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(InAppPurchaseLocalization_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_InAppPurchaseLocalization_Relationships_InAppPurchaseV2');

class InAppPurchaseLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $inAppPurchaseV2Type = InAppPurchaseLocalization_Relationships_InAppPurchaseV2::class;
	protected $inAppPurchaseV2DataType = 'object';

	/**
	* @return  InAppPurchaseLocalization_Relationships_InAppPurchaseV2
	*/
	public function getInAppPurchaseV2()
	{
		return $this->inAppPurchaseV2;
	}
	/**
	* @param  InAppPurchaseLocalization_Relationships_InAppPurchaseV2
	*/
	public function setInAppPurchaseV2($inAppPurchaseV2)
	{
		$this->inAppPurchaseV2 = $inAppPurchaseV2;
		return $inAppPurchaseV2;
	}

}
class_alias(InAppPurchaseLocalization_Relationships::class, 'AppleService_AppStore_InAppPurchaseLocalization_Relationships');

class InAppPurchaseLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseLocalizations';
	public $id;
	protected $attributesType = InAppPurchaseLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchaseLocalization_Relationships::class;
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
	* @return  InAppPurchaseLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchaseLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  InAppPurchaseLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchaseLocalization_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
		return $links;
	}

}
class_alias(InAppPurchaseLocalization::class, 'AppleService_AppStore_InAppPurchaseLocalization');

