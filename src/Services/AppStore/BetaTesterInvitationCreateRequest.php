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

class BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesters';
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
class_alias(BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester_Data::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester_Data');

class BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester');

class BetaTesterInvitationCreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaTesterInvitationCreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest_Data_Relationships_App_Data');

class BetaTesterInvitationCreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterInvitationCreateRequest_Data_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaTesterInvitationCreateRequest_Data_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterInvitationCreateRequest_Data_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaTesterInvitationCreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest_Data_Relationships_App');

class BetaTesterInvitationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $betaTesterType = BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester::class;
	protected $betaTesterDataType = 'object';
	protected $appType = BetaTesterInvitationCreateRequest_Data_Relationships_App::class;
	protected $appDataType = 'object';

	/**
	* @return  BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester
	*/
	public function getBetaTester()
	{
		return $this->betaTester;
	}
	/**
	* @param  BetaTesterInvitationCreateRequest_Data_Relationships_BetaTester
	*/
	public function setBetaTester($betaTester)
	{
		$this->betaTester = $betaTester;
		return $betaTester;
	}
	/**
	* @return  BetaTesterInvitationCreateRequest_Data_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  BetaTesterInvitationCreateRequest_Data_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $app;
	}

}
class_alias(BetaTesterInvitationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest_Data_Relationships');

class BetaTesterInvitationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesterInvitations';
	protected $relationshipsType = BetaTesterInvitationCreateRequest_Data_Relationships::class;
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
	* @return  BetaTesterInvitationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaTesterInvitationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(BetaTesterInvitationCreateRequest_Data::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest_Data');

class BetaTesterInvitationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaTesterInvitationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaTesterInvitationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTesterInvitationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaTesterInvitationCreateRequest::class, 'AppleService_AppStore_BetaTesterInvitationCreateRequest');

