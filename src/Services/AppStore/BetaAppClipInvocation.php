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

class BetaAppClipInvocation_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $url;

	public function getUrl()
	{
		return $this->url;
	}
	public function setUrl($url)
	{
		$this->url = $url;
		return $url;
	}

}
class_alias(BetaAppClipInvocation_Attributes::class, 'AppleService_AppStore_BetaAppClipInvocation_Attributes');

class BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Links::class, 'AppleService_AppStore_BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Links');

class BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocationLocalizations';
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
class_alias(BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Data::class, 'AppleService_AppStore_BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Data');

class BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $meta;
	}
	/**
	* @return  BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations::class, 'AppleService_AppStore_BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations');

class BetaAppClipInvocation_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $betaAppClipInvocationLocalizationsType = BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations::class;
	protected $betaAppClipInvocationLocalizationsDataType = 'object';

	/**
	* @return  BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations
	*/
	public function getBetaAppClipInvocationLocalizations()
	{
		return $this->betaAppClipInvocationLocalizations;
	}
	/**
	* @param  BetaAppClipInvocation_Relationships_BetaAppClipInvocationLocalizations
	*/
	public function setBetaAppClipInvocationLocalizations($betaAppClipInvocationLocalizations)
	{
		$this->betaAppClipInvocationLocalizations = $betaAppClipInvocationLocalizations;
		return $betaAppClipInvocationLocalizations;
	}

}
class_alias(BetaAppClipInvocation_Relationships::class, 'AppleService_AppStore_BetaAppClipInvocation_Relationships');

class BetaAppClipInvocation extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocations';
	public $id;
	protected $attributesType = BetaAppClipInvocation_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppClipInvocation_Relationships::class;
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
	* @return  BetaAppClipInvocation_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppClipInvocation_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaAppClipInvocation_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppClipInvocation_Relationships
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
class_alias(BetaAppClipInvocation::class, 'AppleService_AppStore_BetaAppClipInvocation');

