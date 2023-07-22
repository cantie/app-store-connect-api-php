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

class BuildBetaDetail_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $autoNotifyEnabled;
	public $internalBuildState; // 
	public $externalBuildState; // 

	public function getAutoNotifyEnabled()
	{
		return $this->autoNotifyEnabled;
	}
	public function setAutoNotifyEnabled($autoNotifyEnabled)
	{
		$this->autoNotifyEnabled = $autoNotifyEnabled;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getInternalBuildState()
	{
		return $this->internalBuildState;
	}
	/**
	* @param  string
	*/
	public function setInternalBuildState($internalBuildState)
	{
		$this->internalBuildState = $internalBuildState;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getExternalBuildState()
	{
		return $this->externalBuildState;
	}
	/**
	* @param  string
	*/
	public function setExternalBuildState($externalBuildState)
	{
		$this->externalBuildState = $externalBuildState;
		return $this;
	}

}
class_alias(BuildBetaDetail_Attributes::class, 'AppleService_AppStore_BuildBetaDetail_Attributes');

class BuildBetaDetail_Relationships_Build_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBetaDetail_Relationships_Build_Links::class, 'AppleService_AppStore_BuildBetaDetail_Relationships_Build_Links');

class BuildBetaDetail_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBetaDetail_Relationships_Build_Data::class, 'AppleService_AppStore_BuildBetaDetail_Relationships_Build_Data');

class BuildBetaDetail_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BuildBetaDetail_Relationships_Build_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BuildBetaDetail_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildBetaDetail_Relationships_Build_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BuildBetaDetail_Relationships_Build_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BuildBetaDetail_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBetaDetail_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBetaDetail_Relationships_Build::class, 'AppleService_AppStore_BuildBetaDetail_Relationships_Build');

class BuildBetaDetail_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = BuildBetaDetail_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  BuildBetaDetail_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  BuildBetaDetail_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $this;
	}

}
class_alias(BuildBetaDetail_Relationships::class, 'AppleService_AppStore_BuildBetaDetail_Relationships');

class BuildBetaDetail extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBetaDetails';
	public $id;
	protected $attributesType = BuildBetaDetail_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BuildBetaDetail_Relationships::class;
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
	* @return  BuildBetaDetail_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BuildBetaDetail_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BuildBetaDetail_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BuildBetaDetail_Relationships
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
class_alias(BuildBetaDetail::class, 'AppleService_AppStore_BuildBetaDetail');

