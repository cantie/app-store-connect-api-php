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

class AppStoreVersionSubmission_Relationships_AppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersionSubmission_Relationships_AppStoreVersion_Links::class, 'AppleService_AppStore_AppStoreVersionSubmission_Relationships_AppStoreVersion_Links');

class AppStoreVersionSubmission_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(AppStoreVersionSubmission_Relationships_AppStoreVersion_Data::class, 'AppleService_AppStore_AppStoreVersionSubmission_Relationships_AppStoreVersion_Data');

class AppStoreVersionSubmission_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionSubmission_Relationships_AppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionSubmission_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionSubmission_Relationships_AppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionSubmission_Relationships_AppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersionSubmission_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionSubmission_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionSubmission_Relationships_AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersionSubmission_Relationships_AppStoreVersion');

class AppStoreVersionSubmission_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionType = AppStoreVersionSubmission_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';

	/**
	* @return  AppStoreVersionSubmission_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  AppStoreVersionSubmission_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $this;
	}

}
class_alias(AppStoreVersionSubmission_Relationships::class, 'AppleService_AppStore_AppStoreVersionSubmission_Relationships');

class AppStoreVersionSubmission extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionSubmissions';
	public $id;
	protected $relationshipsType = AppStoreVersionSubmission_Relationships::class;
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
	* @return  AppStoreVersionSubmission_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionSubmission_Relationships
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
class_alias(AppStoreVersionSubmission::class, 'AppleService_AppStore_AppStoreVersionSubmission');

