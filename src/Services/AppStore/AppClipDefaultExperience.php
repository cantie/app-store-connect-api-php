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

class AppClipDefaultExperience_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $action; // 

	/**
	* @return  string
	*/
	public function getAction()
	{
		return $this->action;
	}
	/**
	* @param  string
	*/
	public function setAction($action)
	{
		$this->action = $action;
		return $this;
	}

}
class_alias(AppClipDefaultExperience_Attributes::class, 'AppleService_AppStore_AppClipDefaultExperience_Attributes');

class AppClipDefaultExperience_Relationships_AppClip_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperience_Relationships_AppClip_Links::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClip_Links');

class AppClipDefaultExperience_Relationships_AppClip_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClips';
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
class_alias(AppClipDefaultExperience_Relationships_AppClip_Data::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClip_Data');

class AppClipDefaultExperience_Relationships_AppClip extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipDefaultExperience_Relationships_AppClip_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipDefaultExperience_Relationships_AppClip_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperience_Relationships_AppClip_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClip_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships_AppClip_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClip_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperience_Relationships_AppClip::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClip');

class AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Links::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Links');

class AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Data::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Data');

class AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion');

class AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Links::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Links');

class AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperienceLocalizations';
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
class_alias(AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Data::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Data');

class AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Links
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
	* @return  AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations');

class AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Links::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Links');

class AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipAppStoreReviewDetails';
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
class_alias(AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Data::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Data');

class AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail');

class AppClipDefaultExperience_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipType = AppClipDefaultExperience_Relationships_AppClip::class;
	protected $appClipDataType = 'object';
	protected $releaseWithAppStoreVersionType = AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion::class;
	protected $releaseWithAppStoreVersionDataType = 'object';
	protected $appClipDefaultExperienceLocalizationsType = AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations::class;
	protected $appClipDefaultExperienceLocalizationsDataType = 'object';
	protected $appClipAppStoreReviewDetailType = AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail::class;
	protected $appClipAppStoreReviewDetailDataType = 'object';

	/**
	* @return  AppClipDefaultExperience_Relationships_AppClip
	*/
	public function getAppClip()
	{
		return $this->appClip;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClip
	*/
	public function setAppClip($appClip)
	{
		$this->appClip = $appClip;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion
	*/
	public function getReleaseWithAppStoreVersion()
	{
		return $this->releaseWithAppStoreVersion;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_ReleaseWithAppStoreVersion
	*/
	public function setReleaseWithAppStoreVersion($releaseWithAppStoreVersion)
	{
		$this->releaseWithAppStoreVersion = $releaseWithAppStoreVersion;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations
	*/
	public function getAppClipDefaultExperienceLocalizations()
	{
		return $this->appClipDefaultExperienceLocalizations;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClipDefaultExperienceLocalizations
	*/
	public function setAppClipDefaultExperienceLocalizations($appClipDefaultExperienceLocalizations)
	{
		$this->appClipDefaultExperienceLocalizations = $appClipDefaultExperienceLocalizations;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail
	*/
	public function getAppClipAppStoreReviewDetail()
	{
		return $this->appClipAppStoreReviewDetail;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships_AppClipAppStoreReviewDetail
	*/
	public function setAppClipAppStoreReviewDetail($appClipAppStoreReviewDetail)
	{
		$this->appClipAppStoreReviewDetail = $appClipAppStoreReviewDetail;
		return $this;
	}

}
class_alias(AppClipDefaultExperience_Relationships::class, 'AppleService_AppStore_AppClipDefaultExperience_Relationships');

class AppClipDefaultExperience extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
	public $id;
	protected $attributesType = AppClipDefaultExperience_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipDefaultExperience_Relationships::class;
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
	* @return  AppClipDefaultExperience_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipDefaultExperience_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperience_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipDefaultExperience_Relationships
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
class_alias(AppClipDefaultExperience::class, 'AppleService_AppStore_AppClipDefaultExperience');

