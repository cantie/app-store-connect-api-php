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

class AlternativeDistributionPackageVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $url;
	public $urlExpirationDate;
	public $version;
	public $fileChecksum;
	public $state; // COMPLETED, REPLACED

	public function getUrl()
	{
		return $this->url;
	}
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}
	public function getUrlExpirationDate()
	{
		return $this->urlExpirationDate;
	}
	public function setUrlExpirationDate($urlExpirationDate)
	{
		$this->urlExpirationDate = $urlExpirationDate;
		return $this;
	}
	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}
	public function getFileChecksum()
	{
		return $this->fileChecksum;
	}
	public function setFileChecksum($fileChecksum)
	{
		$this->fileChecksum = $fileChecksum;
		return $this;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

}

class AlternativeDistributionPackageVersion_Relationships_Variants_Links extends \Cantie\AppStoreConnect\Model
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

class AlternativeDistributionPackageVersion_Relationships_Variants_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackageVariants';
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

class AlternativeDistributionPackageVersion_Relationships_Variants extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AlternativeDistributionPackageVersion_Relationships_Variants_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AlternativeDistributionPackageVersion_Relationships_Variants_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_Variants_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_Variants_Links
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
	* @return  AlternativeDistributionPackageVersion_Relationships_Variants_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_Variants_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AlternativeDistributionPackageVersion_Relationships_Deltas_Links extends \Cantie\AppStoreConnect\Model
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

class AlternativeDistributionPackageVersion_Relationships_Deltas_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackageDeltas';
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

class AlternativeDistributionPackageVersion_Relationships_Deltas extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AlternativeDistributionPackageVersion_Relationships_Deltas_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AlternativeDistributionPackageVersion_Relationships_Deltas_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_Deltas_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_Deltas_Links
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
	* @return  AlternativeDistributionPackageVersion_Relationships_Deltas_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_Deltas_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Links extends \Cantie\AppStoreConnect\Model
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

class AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackages';
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

class AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AlternativeDistributionPackageVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $variantsType = AlternativeDistributionPackageVersion_Relationships_Variants::class;
	protected $variantsDataType = 'object';
	protected $deltasType = AlternativeDistributionPackageVersion_Relationships_Deltas::class;
	protected $deltasDataType = 'object';
	protected $alternativeDistributionPackageType = AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage::class;
	protected $alternativeDistributionPackageDataType = 'object';

	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_Variants
	*/
	public function getVariants()
	{
		return $this->variants;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_Variants
	*/
	public function setVariants($variants)
	{
		$this->variants = $variants;
		return $this;
	}
	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_Deltas
	*/
	public function getDeltas()
	{
		return $this->deltas;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_Deltas
	*/
	public function setDeltas($deltas)
	{
		$this->deltas = $deltas;
		return $this;
	}
	/**
	* @return  AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage
	*/
	public function getAlternativeDistributionPackage()
	{
		return $this->alternativeDistributionPackage;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships_AlternativeDistributionPackage
	*/
	public function setAlternativeDistributionPackage($alternativeDistributionPackage)
	{
		$this->alternativeDistributionPackage = $alternativeDistributionPackage;
		return $this;
	}

}

class AlternativeDistributionPackageVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'alternativeDistributionPackageVersions';
	public $id;
	protected $attributesType = AlternativeDistributionPackageVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AlternativeDistributionPackageVersion_Relationships::class;
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
	* @return  AlternativeDistributionPackageVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AlternativeDistributionPackageVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AlternativeDistributionPackageVersion_Relationships
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

