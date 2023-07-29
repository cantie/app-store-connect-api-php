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

class AppPrice_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class AppPrice_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppPrice_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPrice_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPrice_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPrice_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPrice_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPrice_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPrice_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPrice_Relationships_PriceTier_Links extends \Cantie\AppStoreConnect\Model
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

class AppPrice_Relationships_PriceTier_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPriceTiers';
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

class AppPrice_Relationships_PriceTier extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPrice_Relationships_PriceTier_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPrice_Relationships_PriceTier_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPrice_Relationships_PriceTier_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPrice_Relationships_PriceTier_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPrice_Relationships_PriceTier_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPrice_Relationships_PriceTier_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPrice_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppPrice_Relationships_App::class;
	protected $appDataType = 'object';
	protected $priceTierType = AppPrice_Relationships_PriceTier::class;
	protected $priceTierDataType = 'object';

	/**
	* @return  AppPrice_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppPrice_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppPrice_Relationships_PriceTier
	*/
	public function getPriceTier()
	{
		return $this->priceTier;
	}
	/**
	* @param  AppPrice_Relationships_PriceTier
	*/
	public function setPriceTier($priceTier)
	{
		$this->priceTier = $priceTier;
		return $this;
	}

}

class AppPrice extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPrices';
	public $id;
	protected $relationshipsType = AppPrice_Relationships::class;
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
	* @return  AppPrice_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPrice_Relationships
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

