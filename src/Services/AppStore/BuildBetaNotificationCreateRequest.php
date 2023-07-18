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

class BuildBetaNotificationCreateRequest_Data_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBetaNotificationCreateRequest_Data_Relationships_Build_Data::class, 'AppleService_AppStore_BuildBetaNotificationCreateRequest_Data_Relationships_Build_Data');

class BuildBetaNotificationCreateRequest_Data_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BuildBetaNotificationCreateRequest_Data_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildBetaNotificationCreateRequest_Data_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBetaNotificationCreateRequest_Data_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBetaNotificationCreateRequest_Data_Relationships_Build::class, 'AppleService_AppStore_BuildBetaNotificationCreateRequest_Data_Relationships_Build');

class BuildBetaNotificationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = BuildBetaNotificationCreateRequest_Data_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  BuildBetaNotificationCreateRequest_Data_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  BuildBetaNotificationCreateRequest_Data_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $this;
	}

}
class_alias(BuildBetaNotificationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BuildBetaNotificationCreateRequest_Data_Relationships');

class BuildBetaNotificationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBetaNotifications';
	protected $relationshipsType = BuildBetaNotificationCreateRequest_Data_Relationships::class;
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
	* @return  BuildBetaNotificationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BuildBetaNotificationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(BuildBetaNotificationCreateRequest_Data::class, 'AppleService_AppStore_BuildBetaNotificationCreateRequest_Data');

class BuildBetaNotificationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BuildBetaNotificationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildBetaNotificationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBetaNotificationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBetaNotificationCreateRequest::class, 'AppleService_AppStore_BuildBetaNotificationCreateRequest');

