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

class AppPreviewSet_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $previewType; // 

	/**
	* @return  string
	*/
	public function getPreviewType()
	{
		return $this->previewType;
	}
	/**
	* @param  string
	*/
	public function setPreviewType($previewType)
	{
		$this->previewType = $previewType;
		return $this;
	}

}

class AppPreviewSet_Relationships_AppStoreVersionLocalization_Links extends \Cantie\AppStoreConnect\Model
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

class AppPreviewSet_Relationships_AppStoreVersionLocalization_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionLocalizations';
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

class AppPreviewSet_Relationships_AppStoreVersionLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPreviewSet_Relationships_AppStoreVersionLocalization_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPreviewSet_Relationships_AppStoreVersionLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreviewSet_Relationships_AppStoreVersionLocalization_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppStoreVersionLocalization_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships_AppStoreVersionLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppStoreVersionLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPreviewSet_Relationships_AppCustomProductPageLocalization_Links extends \Cantie\AppStoreConnect\Model
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

class AppPreviewSet_Relationships_AppCustomProductPageLocalization_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPageLocalizations';
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

class AppPreviewSet_Relationships_AppCustomProductPageLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPreviewSet_Relationships_AppCustomProductPageLocalization_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPreviewSet_Relationships_AppCustomProductPageLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreviewSet_Relationships_AppCustomProductPageLocalization_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppCustomProductPageLocalization_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships_AppCustomProductPageLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppCustomProductPageLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Links extends \Cantie\AppStoreConnect\Model
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

class AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data extends \Cantie\AppStoreConnect\Model
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

class AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPreviewSet_Relationships_AppPreviews_Links extends \Cantie\AppStoreConnect\Model
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

class AppPreviewSet_Relationships_AppPreviews_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreviews';
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

class AppPreviewSet_Relationships_AppPreviews extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPreviewSet_Relationships_AppPreviews_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppPreviewSet_Relationships_AppPreviews_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppPreviewSet_Relationships_AppPreviews_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppPreviews_Links
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
	* @return  AppPreviewSet_Relationships_AppPreviews_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppPreviews_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppPreviewSet_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionLocalizationType = AppPreviewSet_Relationships_AppStoreVersionLocalization::class;
	protected $appStoreVersionLocalizationDataType = 'object';
	protected $appCustomProductPageLocalizationType = AppPreviewSet_Relationships_AppCustomProductPageLocalization::class;
	protected $appCustomProductPageLocalizationDataType = 'object';
	protected $appStoreVersionExperimentTreatmentLocalizationType = AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization::class;
	protected $appStoreVersionExperimentTreatmentLocalizationDataType = 'object';
	protected $appPreviewsType = AppPreviewSet_Relationships_AppPreviews::class;
	protected $appPreviewsDataType = 'object';

	/**
	* @return  AppPreviewSet_Relationships_AppStoreVersionLocalization
	*/
	public function getAppStoreVersionLocalization()
	{
		return $this->appStoreVersionLocalization;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppStoreVersionLocalization
	*/
	public function setAppStoreVersionLocalization($appStoreVersionLocalization)
	{
		$this->appStoreVersionLocalization = $appStoreVersionLocalization;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships_AppCustomProductPageLocalization
	*/
	public function getAppCustomProductPageLocalization()
	{
		return $this->appCustomProductPageLocalization;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppCustomProductPageLocalization
	*/
	public function setAppCustomProductPageLocalization($appCustomProductPageLocalization)
	{
		$this->appCustomProductPageLocalization = $appCustomProductPageLocalization;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization
	*/
	public function getAppStoreVersionExperimentTreatmentLocalization()
	{
		return $this->appStoreVersionExperimentTreatmentLocalization;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppStoreVersionExperimentTreatmentLocalization
	*/
	public function setAppStoreVersionExperimentTreatmentLocalization($appStoreVersionExperimentTreatmentLocalization)
	{
		$this->appStoreVersionExperimentTreatmentLocalization = $appStoreVersionExperimentTreatmentLocalization;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships_AppPreviews
	*/
	public function getAppPreviews()
	{
		return $this->appPreviews;
	}
	/**
	* @param  AppPreviewSet_Relationships_AppPreviews
	*/
	public function setAppPreviews($appPreviews)
	{
		$this->appPreviews = $appPreviews;
		return $this;
	}

}

class AppPreviewSet extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreviewSets';
	public $id;
	protected $attributesType = AppPreviewSet_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPreviewSet_Relationships::class;
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
	* @return  AppPreviewSet_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPreviewSet_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppPreviewSet_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPreviewSet_Relationships
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

