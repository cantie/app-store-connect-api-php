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

class BetaBuildLocalization_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $whatsNew;
	public $locale;

	public function getWhatsNew()
	{
		return $this->whatsNew;
	}
	public function setWhatsNew($whatsNew)
	{
		$this->whatsNew = $whatsNew;
		return $whatsNew;
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

}
class_alias(BetaBuildLocalization_Attributes::class, 'AppleService_AppStore_BetaBuildLocalization_Attributes');

class BetaBuildLocalization_Relationships_Build_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaBuildLocalization_Relationships_Build_Links::class, 'AppleService_AppStore_BetaBuildLocalization_Relationships_Build_Links');

class BetaBuildLocalization_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaBuildLocalization_Relationships_Build_Data::class, 'AppleService_AppStore_BetaBuildLocalization_Relationships_Build_Data');

class BetaBuildLocalization_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaBuildLocalization_Relationships_Build_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BetaBuildLocalization_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaBuildLocalization_Relationships_Build_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaBuildLocalization_Relationships_Build_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  BetaBuildLocalization_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaBuildLocalization_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaBuildLocalization_Relationships_Build::class, 'AppleService_AppStore_BetaBuildLocalization_Relationships_Build');

class BetaBuildLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = BetaBuildLocalization_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  BetaBuildLocalization_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  BetaBuildLocalization_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $build;
	}

}
class_alias(BetaBuildLocalization_Relationships::class, 'AppleService_AppStore_BetaBuildLocalization_Relationships');

class BetaBuildLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaBuildLocalizations';
	public $id;
	protected $attributesType = BetaBuildLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaBuildLocalization_Relationships::class;
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
	* @return  BetaBuildLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaBuildLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaBuildLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaBuildLocalization_Relationships
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
class_alias(BetaBuildLocalization::class, 'AppleService_AppStore_BetaBuildLocalization');

