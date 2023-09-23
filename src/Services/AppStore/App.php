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

class App_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $bundleId;
	public $sku;
	public $primaryLocale;
	public $isOrEverWasMadeForKids;
	public $subscriptionStatusUrl;
	public $subscriptionStatusUrlVersion; // 
	public $subscriptionStatusUrlForSandbox;
	public $subscriptionStatusUrlVersionForSandbox; // 
	public $availableInNewTerritories;
	public $contentRightsDeclaration; // DOES_NOT_USE_THIRD_PARTY_CONTENT, USES_THIRD_PARTY_CONTENT

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	public function getSku()
	{
		return $this->sku;
	}
	public function setSku($sku)
	{
		$this->sku = $sku;
		return $this;
	}
	public function getPrimaryLocale()
	{
		return $this->primaryLocale;
	}
	public function setPrimaryLocale($primaryLocale)
	{
		$this->primaryLocale = $primaryLocale;
		return $this;
	}
	public function getIsOrEverWasMadeForKids()
	{
		return $this->isOrEverWasMadeForKids;
	}
	public function setIsOrEverWasMadeForKids($isOrEverWasMadeForKids)
	{
		$this->isOrEverWasMadeForKids = $isOrEverWasMadeForKids;
		return $this;
	}
	public function getSubscriptionStatusUrl()
	{
		return $this->subscriptionStatusUrl;
	}
	public function setSubscriptionStatusUrl($subscriptionStatusUrl)
	{
		$this->subscriptionStatusUrl = $subscriptionStatusUrl;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getSubscriptionStatusUrlVersion()
	{
		return $this->subscriptionStatusUrlVersion;
	}
	/**
	* @param  string
	*/
	public function setSubscriptionStatusUrlVersion($subscriptionStatusUrlVersion)
	{
		$this->subscriptionStatusUrlVersion = $subscriptionStatusUrlVersion;
		return $this;
	}
	public function getSubscriptionStatusUrlForSandbox()
	{
		return $this->subscriptionStatusUrlForSandbox;
	}
	public function setSubscriptionStatusUrlForSandbox($subscriptionStatusUrlForSandbox)
	{
		$this->subscriptionStatusUrlForSandbox = $subscriptionStatusUrlForSandbox;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getSubscriptionStatusUrlVersionForSandbox()
	{
		return $this->subscriptionStatusUrlVersionForSandbox;
	}
	/**
	* @param  string
	*/
	public function setSubscriptionStatusUrlVersionForSandbox($subscriptionStatusUrlVersionForSandbox)
	{
		$this->subscriptionStatusUrlVersionForSandbox = $subscriptionStatusUrlVersionForSandbox;
		return $this;
	}
	public function getAvailableInNewTerritories()
	{
		return $this->availableInNewTerritories;
	}
	public function setAvailableInNewTerritories($availableInNewTerritories)
	{
		$this->availableInNewTerritories = $availableInNewTerritories;
		return $this;
	}
	public function getContentRightsDeclaration()
	{
		return $this->contentRightsDeclaration;
	}
	public function setContentRightsDeclaration($contentRightsDeclaration)
	{
		$this->contentRightsDeclaration = $contentRightsDeclaration;
		return $this;
	}

}

class App_Relationships_AppEncryptionDeclarations_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppEncryptionDeclarations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEncryptionDeclarations';
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

class App_Relationships_AppEncryptionDeclarations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppEncryptionDeclarations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppEncryptionDeclarations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppEncryptionDeclarations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppEncryptionDeclarations_Links
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
	* @return  App_Relationships_AppEncryptionDeclarations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppEncryptionDeclarations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_CiProduct_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_CiProduct_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciProducts';
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

class App_Relationships_CiProduct extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_CiProduct_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_CiProduct_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_CiProduct_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_CiProduct_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_CiProduct_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_CiProduct_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_BetaGroups_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_BetaGroups_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
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

class App_Relationships_BetaGroups extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_BetaGroups_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_BetaGroups_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_BetaGroups_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_BetaGroups_Links
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
	* @return  App_Relationships_BetaGroups_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_BetaGroups_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AppStoreVersions_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppStoreVersions_Data extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppStoreVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppStoreVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppStoreVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppStoreVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppStoreVersions_Links
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
	* @return  App_Relationships_AppStoreVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppStoreVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_PreReleaseVersions_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_PreReleaseVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'preReleaseVersions';
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

class App_Relationships_PreReleaseVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_PreReleaseVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_PreReleaseVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_PreReleaseVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_PreReleaseVersions_Links
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
	* @return  App_Relationships_PreReleaseVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_PreReleaseVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_BetaAppLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_BetaAppLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppLocalizations';
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

class App_Relationships_BetaAppLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_BetaAppLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_BetaAppLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_BetaAppLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_BetaAppLocalizations_Links
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
	* @return  App_Relationships_BetaAppLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_BetaAppLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_Builds_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_Builds_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_Builds_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_Builds_Links
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
	* @return  App_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_BetaLicenseAgreement_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_BetaLicenseAgreement_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaLicenseAgreements';
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

class App_Relationships_BetaLicenseAgreement extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_BetaLicenseAgreement_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_BetaLicenseAgreement_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_BetaLicenseAgreement_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_BetaLicenseAgreement_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_BetaLicenseAgreement_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_BetaLicenseAgreement_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_BetaAppReviewDetail_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_BetaAppReviewDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppReviewDetails';
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

class App_Relationships_BetaAppReviewDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_BetaAppReviewDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_BetaAppReviewDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_BetaAppReviewDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_BetaAppReviewDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_BetaAppReviewDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_BetaAppReviewDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AppInfos_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppInfos_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfos';
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

class App_Relationships_AppInfos extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppInfos_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppInfos_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppInfos_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppInfos_Links
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
	* @return  App_Relationships_AppInfos_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppInfos_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AppClips_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppClips_Data extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppClips extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppClips_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppClips_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppClips_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppClips_Links
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
	* @return  App_Relationships_AppClips_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppClips_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_EndUserLicenseAgreement_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_EndUserLicenseAgreement_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'endUserLicenseAgreements';
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

class App_Relationships_EndUserLicenseAgreement extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_EndUserLicenseAgreement_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_EndUserLicenseAgreement_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_EndUserLicenseAgreement_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_EndUserLicenseAgreement_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_EndUserLicenseAgreement_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_EndUserLicenseAgreement_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_PreOrder_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_PreOrder_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPreOrders';
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

class App_Relationships_PreOrder extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_PreOrder_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_PreOrder_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_PreOrder_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_PreOrder_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_PreOrder_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_PreOrder_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_Prices_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_Prices_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPrices';
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

class App_Relationships_Prices extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_Prices_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_Prices_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_Prices_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_Prices_Links
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
	* @return  App_Relationships_Prices_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_Prices_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AvailableTerritories_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AvailableTerritories_Data extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AvailableTerritories extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AvailableTerritories_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AvailableTerritories_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AvailableTerritories_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AvailableTerritories_Links
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
	* @return  App_Relationships_AvailableTerritories_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AvailableTerritories_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_InAppPurchases_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_InAppPurchases_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
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

class App_Relationships_InAppPurchases extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_InAppPurchases_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_InAppPurchases_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_InAppPurchases_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_InAppPurchases_Links
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
	* @return  App_Relationships_InAppPurchases_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_InAppPurchases_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_SubscriptionGroups_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_SubscriptionGroups_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroups';
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

class App_Relationships_SubscriptionGroups extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_SubscriptionGroups_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_SubscriptionGroups_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_SubscriptionGroups_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_SubscriptionGroups_Links
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
	* @return  App_Relationships_SubscriptionGroups_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_SubscriptionGroups_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_GameCenterEnabledVersions_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_GameCenterEnabledVersions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterEnabledVersions';
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

class App_Relationships_GameCenterEnabledVersions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_GameCenterEnabledVersions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_GameCenterEnabledVersions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_GameCenterEnabledVersions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_GameCenterEnabledVersions_Links
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
	* @return  App_Relationships_GameCenterEnabledVersions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_GameCenterEnabledVersions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AppCustomProductPages_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppCustomProductPages_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCustomProductPages';
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

class App_Relationships_AppCustomProductPages extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppCustomProductPages_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppCustomProductPages_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppCustomProductPages_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppCustomProductPages_Links
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
	* @return  App_Relationships_AppCustomProductPages_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppCustomProductPages_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_InAppPurchasesV2_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_InAppPurchasesV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
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

class App_Relationships_InAppPurchasesV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_InAppPurchasesV2_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_InAppPurchasesV2_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_InAppPurchasesV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_InAppPurchasesV2_Links
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
	* @return  App_Relationships_InAppPurchasesV2_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_InAppPurchasesV2_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_PromotedPurchases_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_PromotedPurchases_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchases';
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

class App_Relationships_PromotedPurchases extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_PromotedPurchases_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_PromotedPurchases_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_PromotedPurchases_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_PromotedPurchases_Links
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
	* @return  App_Relationships_PromotedPurchases_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_PromotedPurchases_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AppEvents_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppEvents_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEvents';
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

class App_Relationships_AppEvents extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppEvents_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppEvents_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppEvents_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppEvents_Links
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
	* @return  App_Relationships_AppEvents_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppEvents_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_ReviewSubmissions_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_ReviewSubmissions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissions';
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

class App_Relationships_ReviewSubmissions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_ReviewSubmissions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_ReviewSubmissions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_ReviewSubmissions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_ReviewSubmissions_Links
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
	* @return  App_Relationships_ReviewSubmissions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_ReviewSubmissions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_SubscriptionGracePeriod_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_SubscriptionGracePeriod_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGracePeriods';
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

class App_Relationships_SubscriptionGracePeriod extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_SubscriptionGracePeriod_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_SubscriptionGracePeriod_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_SubscriptionGracePeriod_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_SubscriptionGracePeriod_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_SubscriptionGracePeriod_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_SubscriptionGracePeriod_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_GameCenterDetail_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_GameCenterDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'gameCenterDetails';
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

class App_Relationships_GameCenterDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_GameCenterDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = App_Relationships_GameCenterDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  App_Relationships_GameCenterDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_GameCenterDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  App_Relationships_GameCenterDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_GameCenterDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships_AppStoreVersionExperimentsV2_Links extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppStoreVersionExperimentsV2_Data extends \Cantie\AppStoreConnect\Model
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

class App_Relationships_AppStoreVersionExperimentsV2 extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = App_Relationships_AppStoreVersionExperimentsV2_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = App_Relationships_AppStoreVersionExperimentsV2_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  App_Relationships_AppStoreVersionExperimentsV2_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  App_Relationships_AppStoreVersionExperimentsV2_Links
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
	* @return  App_Relationships_AppStoreVersionExperimentsV2_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App_Relationships_AppStoreVersionExperimentsV2_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class App_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEncryptionDeclarationsType = App_Relationships_AppEncryptionDeclarations::class;
	protected $appEncryptionDeclarationsDataType = 'object';
	protected $ciProductType = App_Relationships_CiProduct::class;
	protected $ciProductDataType = 'object';
	protected $betaGroupsType = App_Relationships_BetaGroups::class;
	protected $betaGroupsDataType = 'object';
	protected $appStoreVersionsType = App_Relationships_AppStoreVersions::class;
	protected $appStoreVersionsDataType = 'object';
	protected $preReleaseVersionsType = App_Relationships_PreReleaseVersions::class;
	protected $preReleaseVersionsDataType = 'object';
	protected $betaAppLocalizationsType = App_Relationships_BetaAppLocalizations::class;
	protected $betaAppLocalizationsDataType = 'object';
	protected $buildsType = App_Relationships_Builds::class;
	protected $buildsDataType = 'object';
	protected $betaLicenseAgreementType = App_Relationships_BetaLicenseAgreement::class;
	protected $betaLicenseAgreementDataType = 'object';
	protected $betaAppReviewDetailType = App_Relationships_BetaAppReviewDetail::class;
	protected $betaAppReviewDetailDataType = 'object';
	protected $appInfosType = App_Relationships_AppInfos::class;
	protected $appInfosDataType = 'object';
	protected $appClipsType = App_Relationships_AppClips::class;
	protected $appClipsDataType = 'object';
	protected $endUserLicenseAgreementType = App_Relationships_EndUserLicenseAgreement::class;
	protected $endUserLicenseAgreementDataType = 'object';
	protected $preOrderType = App_Relationships_PreOrder::class;
	protected $preOrderDataType = 'object';
	protected $pricesType = App_Relationships_Prices::class;
	protected $pricesDataType = 'object';
	protected $availableTerritoriesType = App_Relationships_AvailableTerritories::class;
	protected $availableTerritoriesDataType = 'object';
	protected $inAppPurchasesType = App_Relationships_InAppPurchases::class;
	protected $inAppPurchasesDataType = 'object';
	protected $subscriptionGroupsType = App_Relationships_SubscriptionGroups::class;
	protected $subscriptionGroupsDataType = 'object';
	protected $gameCenterEnabledVersionsType = App_Relationships_GameCenterEnabledVersions::class;
	protected $gameCenterEnabledVersionsDataType = 'object';
	protected $appCustomProductPagesType = App_Relationships_AppCustomProductPages::class;
	protected $appCustomProductPagesDataType = 'object';
	protected $inAppPurchasesV2Type = App_Relationships_InAppPurchasesV2::class;
	protected $inAppPurchasesV2DataType = 'object';
	protected $promotedPurchasesType = App_Relationships_PromotedPurchases::class;
	protected $promotedPurchasesDataType = 'object';
	protected $appEventsType = App_Relationships_AppEvents::class;
	protected $appEventsDataType = 'object';
	protected $reviewSubmissionsType = App_Relationships_ReviewSubmissions::class;
	protected $reviewSubmissionsDataType = 'object';
	protected $subscriptionGracePeriodType = App_Relationships_SubscriptionGracePeriod::class;
	protected $subscriptionGracePeriodDataType = 'object';
	protected $gameCenterDetailType = App_Relationships_GameCenterDetail::class;
	protected $gameCenterDetailDataType = 'object';
	protected $appStoreVersionExperimentsV2Type = App_Relationships_AppStoreVersionExperimentsV2::class;
	protected $appStoreVersionExperimentsV2DataType = 'object';

	/**
	* @return  App_Relationships_AppEncryptionDeclarations
	*/
	public function getAppEncryptionDeclarations()
	{
		return $this->appEncryptionDeclarations;
	}
	/**
	* @param  App_Relationships_AppEncryptionDeclarations
	*/
	public function setAppEncryptionDeclarations($appEncryptionDeclarations)
	{
		$this->appEncryptionDeclarations = $appEncryptionDeclarations;
		return $this;
	}
	/**
	* @return  App_Relationships_CiProduct
	*/
	public function getCiProduct()
	{
		return $this->ciProduct;
	}
	/**
	* @param  App_Relationships_CiProduct
	*/
	public function setCiProduct($ciProduct)
	{
		$this->ciProduct = $ciProduct;
		return $this;
	}
	/**
	* @return  App_Relationships_BetaGroups
	*/
	public function getBetaGroups()
	{
		return $this->betaGroups;
	}
	/**
	* @param  App_Relationships_BetaGroups
	*/
	public function setBetaGroups($betaGroups)
	{
		$this->betaGroups = $betaGroups;
		return $this;
	}
	/**
	* @return  App_Relationships_AppStoreVersions
	*/
	public function getAppStoreVersions()
	{
		return $this->appStoreVersions;
	}
	/**
	* @param  App_Relationships_AppStoreVersions
	*/
	public function setAppStoreVersions($appStoreVersions)
	{
		$this->appStoreVersions = $appStoreVersions;
		return $this;
	}
	/**
	* @return  App_Relationships_PreReleaseVersions
	*/
	public function getPreReleaseVersions()
	{
		return $this->preReleaseVersions;
	}
	/**
	* @param  App_Relationships_PreReleaseVersions
	*/
	public function setPreReleaseVersions($preReleaseVersions)
	{
		$this->preReleaseVersions = $preReleaseVersions;
		return $this;
	}
	/**
	* @return  App_Relationships_BetaAppLocalizations
	*/
	public function getBetaAppLocalizations()
	{
		return $this->betaAppLocalizations;
	}
	/**
	* @param  App_Relationships_BetaAppLocalizations
	*/
	public function setBetaAppLocalizations($betaAppLocalizations)
	{
		$this->betaAppLocalizations = $betaAppLocalizations;
		return $this;
	}
	/**
	* @return  App_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  App_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $this;
	}
	/**
	* @return  App_Relationships_BetaLicenseAgreement
	*/
	public function getBetaLicenseAgreement()
	{
		return $this->betaLicenseAgreement;
	}
	/**
	* @param  App_Relationships_BetaLicenseAgreement
	*/
	public function setBetaLicenseAgreement($betaLicenseAgreement)
	{
		$this->betaLicenseAgreement = $betaLicenseAgreement;
		return $this;
	}
	/**
	* @return  App_Relationships_BetaAppReviewDetail
	*/
	public function getBetaAppReviewDetail()
	{
		return $this->betaAppReviewDetail;
	}
	/**
	* @param  App_Relationships_BetaAppReviewDetail
	*/
	public function setBetaAppReviewDetail($betaAppReviewDetail)
	{
		$this->betaAppReviewDetail = $betaAppReviewDetail;
		return $this;
	}
	/**
	* @return  App_Relationships_AppInfos
	*/
	public function getAppInfos()
	{
		return $this->appInfos;
	}
	/**
	* @param  App_Relationships_AppInfos
	*/
	public function setAppInfos($appInfos)
	{
		$this->appInfos = $appInfos;
		return $this;
	}
	/**
	* @return  App_Relationships_AppClips
	*/
	public function getAppClips()
	{
		return $this->appClips;
	}
	/**
	* @param  App_Relationships_AppClips
	*/
	public function setAppClips($appClips)
	{
		$this->appClips = $appClips;
		return $this;
	}
	/**
	* @return  App_Relationships_EndUserLicenseAgreement
	*/
	public function getEndUserLicenseAgreement()
	{
		return $this->endUserLicenseAgreement;
	}
	/**
	* @param  App_Relationships_EndUserLicenseAgreement
	*/
	public function setEndUserLicenseAgreement($endUserLicenseAgreement)
	{
		$this->endUserLicenseAgreement = $endUserLicenseAgreement;
		return $this;
	}
	/**
	* @return  App_Relationships_PreOrder
	*/
	public function getPreOrder()
	{
		return $this->preOrder;
	}
	/**
	* @param  App_Relationships_PreOrder
	*/
	public function setPreOrder($preOrder)
	{
		$this->preOrder = $preOrder;
		return $this;
	}
	/**
	* @return  App_Relationships_Prices
	*/
	public function getPrices()
	{
		return $this->prices;
	}
	/**
	* @param  App_Relationships_Prices
	*/
	public function setPrices($prices)
	{
		$this->prices = $prices;
		return $this;
	}
	/**
	* @return  App_Relationships_AvailableTerritories
	*/
	public function getAvailableTerritories()
	{
		return $this->availableTerritories;
	}
	/**
	* @param  App_Relationships_AvailableTerritories
	*/
	public function setAvailableTerritories($availableTerritories)
	{
		$this->availableTerritories = $availableTerritories;
		return $this;
	}
	/**
	* @return  App_Relationships_InAppPurchases
	*/
	public function getInAppPurchases()
	{
		return $this->inAppPurchases;
	}
	/**
	* @param  App_Relationships_InAppPurchases
	*/
	public function setInAppPurchases($inAppPurchases)
	{
		$this->inAppPurchases = $inAppPurchases;
		return $this;
	}
	/**
	* @return  App_Relationships_SubscriptionGroups
	*/
	public function getSubscriptionGroups()
	{
		return $this->subscriptionGroups;
	}
	/**
	* @param  App_Relationships_SubscriptionGroups
	*/
	public function setSubscriptionGroups($subscriptionGroups)
	{
		$this->subscriptionGroups = $subscriptionGroups;
		return $this;
	}
	/**
	* @return  App_Relationships_GameCenterEnabledVersions
	*/
	public function getGameCenterEnabledVersions()
	{
		return $this->gameCenterEnabledVersions;
	}
	/**
	* @param  App_Relationships_GameCenterEnabledVersions
	*/
	public function setGameCenterEnabledVersions($gameCenterEnabledVersions)
	{
		$this->gameCenterEnabledVersions = $gameCenterEnabledVersions;
		return $this;
	}
	/**
	* @return  App_Relationships_AppCustomProductPages
	*/
	public function getAppCustomProductPages()
	{
		return $this->appCustomProductPages;
	}
	/**
	* @param  App_Relationships_AppCustomProductPages
	*/
	public function setAppCustomProductPages($appCustomProductPages)
	{
		$this->appCustomProductPages = $appCustomProductPages;
		return $this;
	}
	/**
	* @return  App_Relationships_InAppPurchasesV2
	*/
	public function getInAppPurchasesV2()
	{
		return $this->inAppPurchasesV2;
	}
	/**
	* @param  App_Relationships_InAppPurchasesV2
	*/
	public function setInAppPurchasesV2($inAppPurchasesV2)
	{
		$this->inAppPurchasesV2 = $inAppPurchasesV2;
		return $this;
	}
	/**
	* @return  App_Relationships_PromotedPurchases
	*/
	public function getPromotedPurchases()
	{
		return $this->promotedPurchases;
	}
	/**
	* @param  App_Relationships_PromotedPurchases
	*/
	public function setPromotedPurchases($promotedPurchases)
	{
		$this->promotedPurchases = $promotedPurchases;
		return $this;
	}
	/**
	* @return  App_Relationships_AppEvents
	*/
	public function getAppEvents()
	{
		return $this->appEvents;
	}
	/**
	* @param  App_Relationships_AppEvents
	*/
	public function setAppEvents($appEvents)
	{
		$this->appEvents = $appEvents;
		return $this;
	}
	/**
	* @return  App_Relationships_ReviewSubmissions
	*/
	public function getReviewSubmissions()
	{
		return $this->reviewSubmissions;
	}
	/**
	* @param  App_Relationships_ReviewSubmissions
	*/
	public function setReviewSubmissions($reviewSubmissions)
	{
		$this->reviewSubmissions = $reviewSubmissions;
		return $this;
	}
	/**
	* @return  App_Relationships_SubscriptionGracePeriod
	*/
	public function getSubscriptionGracePeriod()
	{
		return $this->subscriptionGracePeriod;
	}
	/**
	* @param  App_Relationships_SubscriptionGracePeriod
	*/
	public function setSubscriptionGracePeriod($subscriptionGracePeriod)
	{
		$this->subscriptionGracePeriod = $subscriptionGracePeriod;
		return $this;
	}
	/**
	* @return  App_Relationships_GameCenterDetail
	*/
	public function getGameCenterDetail()
	{
		return $this->gameCenterDetail;
	}
	/**
	* @param  App_Relationships_GameCenterDetail
	*/
	public function setGameCenterDetail($gameCenterDetail)
	{
		$this->gameCenterDetail = $gameCenterDetail;
		return $this;
	}
	/**
	* @return  App_Relationships_AppStoreVersionExperimentsV2
	*/
	public function getAppStoreVersionExperimentsV2()
	{
		return $this->appStoreVersionExperimentsV2;
	}
	/**
	* @param  App_Relationships_AppStoreVersionExperimentsV2
	*/
	public function setAppStoreVersionExperimentsV2($appStoreVersionExperimentsV2)
	{
		$this->appStoreVersionExperimentsV2 = $appStoreVersionExperimentsV2;
		return $this;
	}

}

class App extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
	public $id;
	protected $attributesType = App_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = App_Relationships::class;
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
	* @return  App_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  App_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  App_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  App_Relationships
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

