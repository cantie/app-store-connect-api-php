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

class EndUserLicenseAgreement_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $agreementText;

	public function getAgreementText()
	{
		return $this->agreementText;
	}
	public function setAgreementText($agreementText)
	{
		$this->agreementText = $agreementText;
		return $this;
	}

}
class_alias(EndUserLicenseAgreement_Attributes::class, 'AppleService_AppStore_EndUserLicenseAgreement_Attributes');

class EndUserLicenseAgreement_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(EndUserLicenseAgreement_Relationships_App_Links::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships_App_Links');

class EndUserLicenseAgreement_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(EndUserLicenseAgreement_Relationships_App_Data::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships_App_Data');

class EndUserLicenseAgreement_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = EndUserLicenseAgreement_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = EndUserLicenseAgreement_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  EndUserLicenseAgreement_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  EndUserLicenseAgreement_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(EndUserLicenseAgreement_Relationships_App::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships_App');

class EndUserLicenseAgreement_Relationships_Territories_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(EndUserLicenseAgreement_Relationships_Territories_Links::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships_Territories_Links');

class EndUserLicenseAgreement_Relationships_Territories_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(EndUserLicenseAgreement_Relationships_Territories_Data::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships_Territories_Data');

class EndUserLicenseAgreement_Relationships_Territories extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = EndUserLicenseAgreement_Relationships_Territories_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = EndUserLicenseAgreement_Relationships_Territories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  EndUserLicenseAgreement_Relationships_Territories_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships_Territories_Links
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
	* @return  EndUserLicenseAgreement_Relationships_Territories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships_Territories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(EndUserLicenseAgreement_Relationships_Territories::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships_Territories');

class EndUserLicenseAgreement_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = EndUserLicenseAgreement_Relationships_App::class;
	protected $appDataType = 'object';
	protected $territoriesType = EndUserLicenseAgreement_Relationships_Territories::class;
	protected $territoriesDataType = 'object';

	/**
	* @return  EndUserLicenseAgreement_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  EndUserLicenseAgreement_Relationships_Territories
	*/
	public function getTerritories()
	{
		return $this->territories;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships_Territories
	*/
	public function setTerritories($territories)
	{
		$this->territories = $territories;
		return $this;
	}

}
class_alias(EndUserLicenseAgreement_Relationships::class, 'AppleService_AppStore_EndUserLicenseAgreement_Relationships');

class EndUserLicenseAgreement extends \Cantie\AppStoreConnect\Model
{
	public $type = 'endUserLicenseAgreements';
	public $id;
	protected $attributesType = EndUserLicenseAgreement_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = EndUserLicenseAgreement_Relationships::class;
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
	* @return  EndUserLicenseAgreement_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  EndUserLicenseAgreement_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  EndUserLicenseAgreement_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  EndUserLicenseAgreement_Relationships
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
class_alias(EndUserLicenseAgreement::class, 'AppleService_AppStore_EndUserLicenseAgreement');

