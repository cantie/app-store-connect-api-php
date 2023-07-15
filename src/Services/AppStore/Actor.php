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

class Actor_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $actorType; // USER, API_KEY, XCODE_CLOUD, APPLE
	public $userFirstName;
	public $userLastName;
	public $userEmail;
	public $apiKeyId;

	public function getActorType()
	{
		return $this->actorType;
	}
	public function setActorType($actorType)
	{
		$this->actorType = $actorType;
		return $actorType;
	}
	public function getUserFirstName()
	{
		return $this->userFirstName;
	}
	public function setUserFirstName($userFirstName)
	{
		$this->userFirstName = $userFirstName;
		return $userFirstName;
	}
	public function getUserLastName()
	{
		return $this->userLastName;
	}
	public function setUserLastName($userLastName)
	{
		$this->userLastName = $userLastName;
		return $userLastName;
	}
	public function getUserEmail()
	{
		return $this->userEmail;
	}
	public function setUserEmail($userEmail)
	{
		$this->userEmail = $userEmail;
		return $userEmail;
	}
	public function getApiKeyId()
	{
		return $this->apiKeyId;
	}
	public function setApiKeyId($apiKeyId)
	{
		$this->apiKeyId = $apiKeyId;
		return $apiKeyId;
	}

}
class_alias(Actor_Attributes::class, 'AppleService_AppStore_Actor_Attributes');

class Actor extends \Cantie\AppStoreConnect\Model
{
	public $type = 'actors';
	public $id;
	protected $attributesType = Actor_Attributes::class;
	protected $attributesDataType = 'object';
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
	* @return  Actor_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  Actor_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
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
class_alias(Actor::class, 'AppleService_AppStore_Actor');

