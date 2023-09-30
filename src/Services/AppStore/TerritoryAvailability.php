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

class TerritoryAvailability_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $available;
	public $releaseDate;
	public $preOrderEnabled;
	public $preOrderPublishDate;
	protected $contentStatusesType = '';
	protected $contentStatusesDataType = 'array';

	public function getAvailable()
	{
		return $this->available;
	}
	public function setAvailable($available)
	{
		$this->available = $available;
		return $this;
	}
	public function getReleaseDate()
	{
		return $this->releaseDate;
	}
	public function setReleaseDate($releaseDate)
	{
		$this->releaseDate = $releaseDate;
		return $this;
	}
	public function getPreOrderEnabled()
	{
		return $this->preOrderEnabled;
	}
	public function setPreOrderEnabled($preOrderEnabled)
	{
		$this->preOrderEnabled = $preOrderEnabled;
		return $this;
	}
	public function getPreOrderPublishDate()
	{
		return $this->preOrderPublishDate;
	}
	public function setPreOrderPublishDate($preOrderPublishDate)
	{
		$this->preOrderPublishDate = $preOrderPublishDate;
		return $this;
	}
	/**
	* @return  []
	*/
	public function getContentStatuses()
	{
		return $this->contentStatuses;
	}
	/**
	* @param  []
	*/
	public function setContentStatuses($contentStatuses)
	{
		$this->contentStatuses = $contentStatuses;
		return $this;
	}

}

class TerritoryAvailability_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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

class TerritoryAvailability_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territories';
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

class TerritoryAvailability_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = TerritoryAvailability_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = TerritoryAvailability_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  TerritoryAvailability_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  TerritoryAvailability_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  TerritoryAvailability_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  TerritoryAvailability_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class TerritoryAvailability_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $territoryType = TerritoryAvailability_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  TerritoryAvailability_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  TerritoryAvailability_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}

}

class TerritoryAvailability extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territoryAvailabilities';
	public $id;
	protected $attributesType = TerritoryAvailability_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = TerritoryAvailability_Relationships::class;
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
	* @return  TerritoryAvailability_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  TerritoryAvailability_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  TerritoryAvailability_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  TerritoryAvailability_Relationships
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

