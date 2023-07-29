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

class AppCategory_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $platforms; // 

	/**
	* @return  string[]
	*/
	public function getPlatforms()
	{
		return $this->platforms;
	}
	/**
	* @param  string[]
	*/
	public function setPlatforms($platforms)
	{
		$this->platforms = $platforms;
		return $this;
	}

}

class AppCategory_Relationships_Subcategories_Links extends \Cantie\AppStoreConnect\Model
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

class AppCategory_Relationships_Subcategories_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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

class AppCategory_Relationships_Subcategories extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCategory_Relationships_Subcategories_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppCategory_Relationships_Subcategories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppCategory_Relationships_Subcategories_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCategory_Relationships_Subcategories_Links
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
	* @return  AppCategory_Relationships_Subcategories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCategory_Relationships_Subcategories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCategory_Relationships_Parent_Links extends \Cantie\AppStoreConnect\Model
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

class AppCategory_Relationships_Parent_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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

class AppCategory_Relationships_Parent extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppCategory_Relationships_Parent_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppCategory_Relationships_Parent_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppCategory_Relationships_Parent_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppCategory_Relationships_Parent_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppCategory_Relationships_Parent_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppCategory_Relationships_Parent_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppCategory_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subcategoriesType = AppCategory_Relationships_Subcategories::class;
	protected $subcategoriesDataType = 'object';
	protected $parentType = AppCategory_Relationships_Parent::class;
	protected $parentDataType = 'object';

	/**
	* @return  AppCategory_Relationships_Subcategories
	*/
	public function getSubcategories()
	{
		return $this->subcategories;
	}
	/**
	* @param  AppCategory_Relationships_Subcategories
	*/
	public function setSubcategories($subcategories)
	{
		$this->subcategories = $subcategories;
		return $this;
	}
	/**
	* @return  AppCategory_Relationships_Parent
	*/
	public function getParent()
	{
		return $this->parent;
	}
	/**
	* @param  AppCategory_Relationships_Parent
	*/
	public function setParent($parent)
	{
		$this->parent = $parent;
		return $this;
	}

}

class AppCategory extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
	public $id;
	protected $attributesType = AppCategory_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppCategory_Relationships::class;
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
	* @return  AppCategory_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppCategory_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppCategory_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppCategory_Relationships
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

