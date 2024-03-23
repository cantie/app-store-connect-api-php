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

class AlternativeDistributionPackage_Relationships_Versions_Links extends \Cantie\AppStoreConnect\Model
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

class AlternativeDistributionPackage_Relationships_Versions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackageVersions';
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

class AlternativeDistributionPackage_Relationships_Versions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AlternativeDistributionPackage_Relationships_Versions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AlternativeDistributionPackage_Relationships_Versions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AlternativeDistributionPackage_Relationships_Versions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AlternativeDistributionPackage_Relationships_Versions_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}
	/**
	* @return  AlternativeDistributionPackage_Relationships_Versions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AlternativeDistributionPackage_Relationships_Versions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AlternativeDistributionPackage_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $versionsType = AlternativeDistributionPackage_Relationships_Versions::class;
	protected $versionsDataType = 'object';

	/**
	* @return  AlternativeDistributionPackage_Relationships_Versions
	*/
	public function getVersions()
	{
		return $this->versions;
	}
	/**
	* @param  AlternativeDistributionPackage_Relationships_Versions
	*/
	public function setVersions($versions)
	{
		$this->versions = $versions;
		return $this;
	}

}

class AlternativeDistributionPackage extends \Cantie\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackages';
	public $id;
	protected $relationshipsType = AlternativeDistributionPackage_Relationships::class;
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
	* @return  AlternativeDistributionPackage_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AlternativeDistributionPackage_Relationships
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

