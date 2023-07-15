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

class SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'sandboxTesters';
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
class_alias(SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters_Data::class, 'AppleService_AppStore_SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters_Data');

class SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters::class, 'AppleService_AppStore_SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters');

class SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $sandboxTestersType = SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters::class;
	protected $sandboxTestersDataType = 'object';

	/**
	* @return  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters
	*/
	public function getSandboxTesters()
	{
		return $this->sandboxTesters;
	}
	/**
	* @param  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships_SandboxTesters
	*/
	public function setSandboxTesters($sandboxTesters)
	{
		$this->sandboxTesters = $sandboxTesters;
		return $sandboxTesters;
	}

}
class_alias(SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships::class, 'AppleService_AppStore_SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships');

class SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'sandboxTestersClearPurchaseHistoryRequest';
	protected $relationshipsType = SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships::class;
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
	/**
	* @return  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data::class, 'AppleService_AppStore_SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data');

class SandboxTestersClearPurchaseHistoryRequestV2CreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SandboxTestersClearPurchaseHistoryRequestV2CreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SandboxTestersClearPurchaseHistoryRequestV2CreateRequest::class, 'AppleService_AppStore_SandboxTestersClearPurchaseHistoryRequestV2CreateRequest');

