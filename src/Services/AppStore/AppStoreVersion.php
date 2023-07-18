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

class AppStoreVersion_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $platformType = Platform::class;
	protected $platformDataType = '';
	public $versionString;
	protected $appStoreStateType = AppStoreVersionState::class;
	protected $appStoreStateDataType = '';
	public $copyright;
	public $releaseType; // MANUAL, AFTER_APPROVAL, SCHEDULED
	public $earliestReleaseDate;
	public $downloadable;
	public $createdDate;

	/**
	* @return  Platform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  Platform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $this;
	}
	public function getVersionString()
	{
		return $this->versionString;
	}
	public function setVersionString($versionString)
	{
		$this->versionString = $versionString;
		return $this;
	}
	/**
	* @return  AppStoreVersionState
	*/
	public function getAppStoreState()
	{
		return $this->appStoreState;
	}
	/**
	* @param  AppStoreVersionState
	*/
	public function setAppStoreState($appStoreState)
	{
		$this->appStoreState = $appStoreState;
		return $this;
	}
	public function getCopyright()
	{
		return $this->copyright;
	}
	public function setCopyright($copyright)
	{
		$this->copyright = $copyright;
		return $this;
	}
	public function getReleaseType()
	{
		return $this->releaseType;
	}
	public function setReleaseType($releaseType)
	{
		$this->releaseType = $releaseType;
		return $this;
	}
	public function getEarliestReleaseDate()
	{
		return $this->earliestReleaseDate;
	}
	public function setEarliestReleaseDate($earliestReleaseDate)
	{
		$this->earliestReleaseDate = $earliestReleaseDate;
		return $this;
	}
	public function getDownloadable()
	{
		return $this->downloadable;
	}
	public function setDownloadable($downloadable)
	{
		$this->downloadable = $downloadable;
		return $this;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $this;
	}

}
class_alias(AppStoreVersion_Attributes::class, 'AppleService_AppStore_AppStoreVersion_Attributes');

class AppStoreVersion_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_App_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_App_Links');

class AppStoreVersion_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_App_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_App_Data');

class AppStoreVersion_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_App::class, 'AppleService_AppStore_AppStoreVersion_Relationships_App');

class AppStoreVersion_Relationships_AgeRatingDeclaration_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AgeRatingDeclaration_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AgeRatingDeclaration_Links');

class AppStoreVersion_Relationships_AgeRatingDeclaration_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ageRatingDeclarations';
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
class_alias(AppStoreVersion_Relationships_AgeRatingDeclaration_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AgeRatingDeclaration_Data');

class AppStoreVersion_Relationships_AgeRatingDeclaration extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AgeRatingDeclaration_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_AgeRatingDeclaration_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_AgeRatingDeclaration_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AgeRatingDeclaration_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AgeRatingDeclaration_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AgeRatingDeclaration_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AgeRatingDeclaration::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AgeRatingDeclaration');

class AppStoreVersion_Relationships_AppStoreVersionLocalizations_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionLocalizations_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionLocalizations_Links');

class AppStoreVersion_Relationships_AppStoreVersionLocalizations_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionLocalizations_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionLocalizations_Data');

class AppStoreVersion_Relationships_AppStoreVersionLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppStoreVersionLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersion_Relationships_AppStoreVersionLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionLocalizations_Links
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
	* @return  AppStoreVersion_Relationships_AppStoreVersionLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppStoreVersionLocalizations::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionLocalizations');

class AppStoreVersion_Relationships_Build_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_Build_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_Build_Links');

class AppStoreVersion_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_Build_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_Build_Data');

class AppStoreVersion_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_Build_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_Build_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_Build_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_Build::class, 'AppleService_AppStore_AppStoreVersion_Relationships_Build');

class AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Links');

class AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionPhasedReleases';
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Data');

class AppStoreVersion_Relationships_AppStoreVersionPhasedRelease extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionPhasedRelease_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppStoreVersionPhasedRelease::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionPhasedRelease');

class AppStoreVersion_Relationships_RoutingAppCoverage_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_RoutingAppCoverage_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_RoutingAppCoverage_Links');

class AppStoreVersion_Relationships_RoutingAppCoverage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'routingAppCoverages';
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
class_alias(AppStoreVersion_Relationships_RoutingAppCoverage_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_RoutingAppCoverage_Data');

class AppStoreVersion_Relationships_RoutingAppCoverage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_RoutingAppCoverage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_RoutingAppCoverage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_RoutingAppCoverage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_RoutingAppCoverage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_RoutingAppCoverage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_RoutingAppCoverage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_RoutingAppCoverage::class, 'AppleService_AppStore_AppStoreVersion_Relationships_RoutingAppCoverage');

class AppStoreVersion_Relationships_AppStoreReviewDetail_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreReviewDetail_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreReviewDetail_Links');

class AppStoreVersion_Relationships_AppStoreReviewDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreReviewDetails';
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
class_alias(AppStoreVersion_Relationships_AppStoreReviewDetail_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreReviewDetail_Data');

class AppStoreVersion_Relationships_AppStoreReviewDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppStoreReviewDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_AppStoreReviewDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_AppStoreReviewDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreReviewDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreReviewDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreReviewDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppStoreReviewDetail::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreReviewDetail');

class AppStoreVersion_Relationships_AppStoreVersionSubmission_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionSubmission_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionSubmission_Links');

class AppStoreVersion_Relationships_AppStoreVersionSubmission_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionSubmissions';
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionSubmission_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionSubmission_Data');

class AppStoreVersion_Relationships_AppStoreVersionSubmission extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppStoreVersionSubmission_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_AppStoreVersionSubmission_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionSubmission_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionSubmission_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionSubmission_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionSubmission_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppStoreVersionSubmission::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionSubmission');

class AppStoreVersion_Relationships_AppClipDefaultExperience_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppClipDefaultExperience_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppClipDefaultExperience_Links');

class AppStoreVersion_Relationships_AppClipDefaultExperience_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
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
class_alias(AppStoreVersion_Relationships_AppClipDefaultExperience_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppClipDefaultExperience_Data');

class AppStoreVersion_Relationships_AppClipDefaultExperience extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppClipDefaultExperience_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppStoreVersion_Relationships_AppClipDefaultExperience_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_AppClipDefaultExperience_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppClipDefaultExperience_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppClipDefaultExperience_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppClipDefaultExperience_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppClipDefaultExperience::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppClipDefaultExperience');

class AppStoreVersion_Relationships_AppStoreVersionExperiments_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionExperiments_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionExperiments_Links');

class AppStoreVersion_Relationships_AppStoreVersionExperiments_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionExperiments_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionExperiments_Data');

class AppStoreVersion_Relationships_AppStoreVersionExperiments extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppStoreVersionExperiments_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersion_Relationships_AppStoreVersionExperiments_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionExperiments_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionExperiments_Links
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
	* @return  AppStoreVersion_Relationships_AppStoreVersionExperiments_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionExperiments_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppStoreVersionExperiments::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionExperiments');

class AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Links::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Links');

class AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Data::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Data');

class AppStoreVersion_Relationships_AppStoreVersionExperimentsV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Links
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
	* @return  AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionExperimentsV2_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships_AppStoreVersionExperimentsV2::class, 'AppleService_AppStore_AppStoreVersion_Relationships_AppStoreVersionExperimentsV2');

class AppStoreVersion_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppStoreVersion_Relationships_App::class;
	protected $appDataType = 'object';
	protected $ageRatingDeclarationType = AppStoreVersion_Relationships_AgeRatingDeclaration::class;
	protected $ageRatingDeclarationDataType = 'object';
	protected $appStoreVersionLocalizationsType = AppStoreVersion_Relationships_AppStoreVersionLocalizations::class;
	protected $appStoreVersionLocalizationsDataType = 'object';
	protected $buildType = AppStoreVersion_Relationships_Build::class;
	protected $buildDataType = 'object';
	protected $appStoreVersionPhasedReleaseType = AppStoreVersion_Relationships_AppStoreVersionPhasedRelease::class;
	protected $appStoreVersionPhasedReleaseDataType = 'object';
	protected $routingAppCoverageType = AppStoreVersion_Relationships_RoutingAppCoverage::class;
	protected $routingAppCoverageDataType = 'object';
	protected $appStoreReviewDetailType = AppStoreVersion_Relationships_AppStoreReviewDetail::class;
	protected $appStoreReviewDetailDataType = 'object';
	protected $appStoreVersionSubmissionType = AppStoreVersion_Relationships_AppStoreVersionSubmission::class;
	protected $appStoreVersionSubmissionDataType = 'object';
	protected $appClipDefaultExperienceType = AppStoreVersion_Relationships_AppClipDefaultExperience::class;
	protected $appClipDefaultExperienceDataType = 'object';
	protected $appStoreVersionExperimentsType = AppStoreVersion_Relationships_AppStoreVersionExperiments::class;
	protected $appStoreVersionExperimentsDataType = 'object';
	protected $appStoreVersionExperimentsV2Type = AppStoreVersion_Relationships_AppStoreVersionExperimentsV2::class;
	protected $appStoreVersionExperimentsV2DataType = 'object';

	/**
	* @return  AppStoreVersion_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppStoreVersion_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AgeRatingDeclaration
	*/
	public function getAgeRatingDeclaration()
	{
		return $this->ageRatingDeclaration;
	}
	/**
	* @param  AppStoreVersion_Relationships_AgeRatingDeclaration
	*/
	public function setAgeRatingDeclaration($ageRatingDeclaration)
	{
		$this->ageRatingDeclaration = $ageRatingDeclaration;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionLocalizations
	*/
	public function getAppStoreVersionLocalizations()
	{
		return $this->appStoreVersionLocalizations;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionLocalizations
	*/
	public function setAppStoreVersionLocalizations($appStoreVersionLocalizations)
	{
		$this->appStoreVersionLocalizations = $appStoreVersionLocalizations;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  AppStoreVersion_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionPhasedRelease
	*/
	public function getAppStoreVersionPhasedRelease()
	{
		return $this->appStoreVersionPhasedRelease;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionPhasedRelease
	*/
	public function setAppStoreVersionPhasedRelease($appStoreVersionPhasedRelease)
	{
		$this->appStoreVersionPhasedRelease = $appStoreVersionPhasedRelease;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_RoutingAppCoverage
	*/
	public function getRoutingAppCoverage()
	{
		return $this->routingAppCoverage;
	}
	/**
	* @param  AppStoreVersion_Relationships_RoutingAppCoverage
	*/
	public function setRoutingAppCoverage($routingAppCoverage)
	{
		$this->routingAppCoverage = $routingAppCoverage;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreReviewDetail
	*/
	public function getAppStoreReviewDetail()
	{
		return $this->appStoreReviewDetail;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreReviewDetail
	*/
	public function setAppStoreReviewDetail($appStoreReviewDetail)
	{
		$this->appStoreReviewDetail = $appStoreReviewDetail;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionSubmission
	*/
	public function getAppStoreVersionSubmission()
	{
		return $this->appStoreVersionSubmission;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionSubmission
	*/
	public function setAppStoreVersionSubmission($appStoreVersionSubmission)
	{
		$this->appStoreVersionSubmission = $appStoreVersionSubmission;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppClipDefaultExperience
	*/
	public function getAppClipDefaultExperience()
	{
		return $this->appClipDefaultExperience;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppClipDefaultExperience
	*/
	public function setAppClipDefaultExperience($appClipDefaultExperience)
	{
		$this->appClipDefaultExperience = $appClipDefaultExperience;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionExperiments
	*/
	public function getAppStoreVersionExperiments()
	{
		return $this->appStoreVersionExperiments;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionExperiments
	*/
	public function setAppStoreVersionExperiments($appStoreVersionExperiments)
	{
		$this->appStoreVersionExperiments = $appStoreVersionExperiments;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships_AppStoreVersionExperimentsV2
	*/
	public function getAppStoreVersionExperimentsV2()
	{
		return $this->appStoreVersionExperimentsV2;
	}
	/**
	* @param  AppStoreVersion_Relationships_AppStoreVersionExperimentsV2
	*/
	public function setAppStoreVersionExperimentsV2($appStoreVersionExperimentsV2)
	{
		$this->appStoreVersionExperimentsV2 = $appStoreVersionExperimentsV2;
		return $this;
	}

}
class_alias(AppStoreVersion_Relationships::class, 'AppleService_AppStore_AppStoreVersion_Relationships');

class AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
	public $id;
	protected $attributesType = AppStoreVersion_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersion_Relationships::class;
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
	* @return  AppStoreVersion_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersion_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersion_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersion_Relationships
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
class_alias(AppStoreVersion::class, 'AppleService_AppStore_AppStoreVersion');

