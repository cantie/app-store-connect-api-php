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

class SubscriptionGroupUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $referenceName;
	}

}
class_alias(SubscriptionGroupUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_SubscriptionGroupUpdateRequest_Data_Attributes');

class SubscriptionGroupUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroups';
	public $id;
	protected $attributesType = SubscriptionGroupUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

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
	* @return  SubscriptionGroupUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionGroupUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}

}
class_alias(SubscriptionGroupUpdateRequest_Data::class, 'AppleService_AppStore_SubscriptionGroupUpdateRequest_Data');

class SubscriptionGroupUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionGroupUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionGroupUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionGroupUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionGroupUpdateRequest::class, 'AppleService_AppStore_SubscriptionGroupUpdateRequest');

