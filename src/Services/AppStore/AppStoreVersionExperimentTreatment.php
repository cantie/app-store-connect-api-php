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

class AppStoreVersionExperimentTreatment_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $appIconType = ImageAsset::class;
	protected $appIconDataType = '';
	public $appIconName;
	public $promotedDate;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	/**
	* @return  ImageAsset
	*/
	public function getAppIcon()
	{
		return $this->appIcon;
	}
	/**
	* @param  ImageAsset
	*/
	public function setAppIcon($appIcon)
	{
		$this->appIcon = $appIcon;
		return $this;
	}
	public function getAppIconName()
	{
		return $this->appIconName;
	}
	public function setAppIconName($appIconName)
	{
		$this->appIconName = $appIconName;
		return $this;
	}
	public function getPromotedDate()
	{
		return $this->promotedDate;
	}
	public function setPromotedDate($promotedDate)
	{
		$this->promotedDate = $promotedDate;
		return $this;
	}

}

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Links extends \Cantie\AppStoreConnect\Model
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

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
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

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Links extends \Cantie\AppStoreConnect\Model
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

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
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

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatmentLocalizations';
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

class AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Links
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
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppStoreVersionExperimentTreatment_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionExperimentType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment::class;
	protected $appStoreVersionExperimentDataType = 'object';
	protected $appStoreVersionExperimentV2Type = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2::class;
	protected $appStoreVersionExperimentV2DataType = 'object';
	protected $appStoreVersionExperimentTreatmentLocalizationsType = AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations::class;
	protected $appStoreVersionExperimentTreatmentLocalizationsDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment
	*/
	public function getAppStoreVersionExperiment()
	{
		return $this->appStoreVersionExperiment;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperiment
	*/
	public function setAppStoreVersionExperiment($appStoreVersionExperiment)
	{
		$this->appStoreVersionExperiment = $appStoreVersionExperiment;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2
	*/
	public function getAppStoreVersionExperimentV2()
	{
		return $this->appStoreVersionExperimentV2;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentV2
	*/
	public function setAppStoreVersionExperimentV2($appStoreVersionExperimentV2)
	{
		$this->appStoreVersionExperimentV2 = $appStoreVersionExperimentV2;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations
	*/
	public function getAppStoreVersionExperimentTreatmentLocalizations()
	{
		return $this->appStoreVersionExperimentTreatmentLocalizations;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships_AppStoreVersionExperimentTreatmentLocalizations
	*/
	public function setAppStoreVersionExperimentTreatmentLocalizations($appStoreVersionExperimentTreatmentLocalizations)
	{
		$this->appStoreVersionExperimentTreatmentLocalizations = $appStoreVersionExperimentTreatmentLocalizations;
		return $this;
	}

}

class AppStoreVersionExperimentTreatment extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatments';
	public $id;
	protected $attributesType = AppStoreVersionExperimentTreatment_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionExperimentTreatment_Relationships::class;
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
	* @return  AppStoreVersionExperimentTreatment_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatment_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionExperimentTreatment_Relationships
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

