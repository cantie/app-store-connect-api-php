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

class BuildBundle_Attributes_Entitlements extends \Cantie\AppStoreConnect\Model
{
	// enum class


}
class_alias(BuildBundle_Attributes_Entitlements::class, 'AppleService_AppStore_BuildBundle_Attributes_Entitlements');

class BuildBundle_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $bundleId;
	public $bundleType; // APP, APP_CLIP
	public $sdkBuild;
	public $platformBuild;
	public $fileName;
	public $hasSirikit;
	public $hasOnDemandResources;
	public $hasPrerenderedIcon;
	public $usesLocationServices;
	public $isIosBuildMacAppStoreCompatible;
	public $includesSymbols;
	public $dSYMUrl;
	protected $supportedArchitecturesType = '';
	protected $supportedArchitecturesDataType = 'array';
	protected $requiredCapabilitiesType = '';
	protected $requiredCapabilitiesDataType = 'array';
	protected $deviceProtocolsType = '';
	protected $deviceProtocolsDataType = 'array';
	protected $localesType = '';
	protected $localesDataType = 'array';
	protected $entitlementsType = BuildBundle_Attributes_Entitlements::class;
	protected $entitlementsDataType = 'object';

	public function getBundleId()
	{
		return $this->bundleId;
	}
	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}
	public function getBundleType()
	{
		return $this->bundleType;
	}
	public function setBundleType($bundleType)
	{
		$this->bundleType = $bundleType;
		return $this;
	}
	public function getSdkBuild()
	{
		return $this->sdkBuild;
	}
	public function setSdkBuild($sdkBuild)
	{
		$this->sdkBuild = $sdkBuild;
		return $this;
	}
	public function getPlatformBuild()
	{
		return $this->platformBuild;
	}
	public function setPlatformBuild($platformBuild)
	{
		$this->platformBuild = $platformBuild;
		return $this;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $this;
	}
	public function getHasSirikit()
	{
		return $this->hasSirikit;
	}
	public function setHasSirikit($hasSirikit)
	{
		$this->hasSirikit = $hasSirikit;
		return $this;
	}
	public function getHasOnDemandResources()
	{
		return $this->hasOnDemandResources;
	}
	public function setHasOnDemandResources($hasOnDemandResources)
	{
		$this->hasOnDemandResources = $hasOnDemandResources;
		return $this;
	}
	public function getHasPrerenderedIcon()
	{
		return $this->hasPrerenderedIcon;
	}
	public function setHasPrerenderedIcon($hasPrerenderedIcon)
	{
		$this->hasPrerenderedIcon = $hasPrerenderedIcon;
		return $this;
	}
	public function getUsesLocationServices()
	{
		return $this->usesLocationServices;
	}
	public function setUsesLocationServices($usesLocationServices)
	{
		$this->usesLocationServices = $usesLocationServices;
		return $this;
	}
	public function getIsIosBuildMacAppStoreCompatible()
	{
		return $this->isIosBuildMacAppStoreCompatible;
	}
	public function setIsIosBuildMacAppStoreCompatible($isIosBuildMacAppStoreCompatible)
	{
		$this->isIosBuildMacAppStoreCompatible = $isIosBuildMacAppStoreCompatible;
		return $this;
	}
	public function getIncludesSymbols()
	{
		return $this->includesSymbols;
	}
	public function setIncludesSymbols($includesSymbols)
	{
		$this->includesSymbols = $includesSymbols;
		return $this;
	}
	public function getDSYMUrl()
	{
		return $this->dSYMUrl;
	}
	public function setDSYMUrl($dSYMUrl)
	{
		$this->dSYMUrl = $dSYMUrl;
		return $this;
	}
	/**
	* @return  []
	*/
	public function getSupportedArchitectures()
	{
		return $this->supportedArchitectures;
	}
	/**
	* @param  []
	*/
	public function setSupportedArchitectures($supportedArchitectures)
	{
		$this->supportedArchitectures = $supportedArchitectures;
		return $this;
	}
	/**
	* @return  []
	*/
	public function getRequiredCapabilities()
	{
		return $this->requiredCapabilities;
	}
	/**
	* @param  []
	*/
	public function setRequiredCapabilities($requiredCapabilities)
	{
		$this->requiredCapabilities = $requiredCapabilities;
		return $this;
	}
	/**
	* @return  []
	*/
	public function getDeviceProtocols()
	{
		return $this->deviceProtocols;
	}
	/**
	* @param  []
	*/
	public function setDeviceProtocols($deviceProtocols)
	{
		$this->deviceProtocols = $deviceProtocols;
		return $this;
	}
	/**
	* @return  []
	*/
	public function getLocales()
	{
		return $this->locales;
	}
	/**
	* @param  []
	*/
	public function setLocales($locales)
	{
		$this->locales = $locales;
		return $this;
	}
	/**
	* @return  BuildBundle_Attributes_Entitlements
	*/
	public function getEntitlements()
	{
		return $this->entitlements;
	}
	/**
	* @param  BuildBundle_Attributes_Entitlements
	*/
	public function setEntitlements($entitlements)
	{
		$this->entitlements = $entitlements;
		return $this;
	}

}
class_alias(BuildBundle_Attributes::class, 'AppleService_AppStore_BuildBundle_Attributes');

class BuildBundle_Relationships_AppClipDomainCacheStatus_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBundle_Relationships_AppClipDomainCacheStatus_Links::class, 'AppleService_AppStore_BuildBundle_Relationships_AppClipDomainCacheStatus_Links');

class BuildBundle_Relationships_AppClipDomainCacheStatus_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDomainStatuses';
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
class_alias(BuildBundle_Relationships_AppClipDomainCacheStatus_Data::class, 'AppleService_AppStore_BuildBundle_Relationships_AppClipDomainCacheStatus_Data');

class BuildBundle_Relationships_AppClipDomainCacheStatus extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BuildBundle_Relationships_AppClipDomainCacheStatus_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BuildBundle_Relationships_AppClipDomainCacheStatus_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildBundle_Relationships_AppClipDomainCacheStatus_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BuildBundle_Relationships_AppClipDomainCacheStatus_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BuildBundle_Relationships_AppClipDomainCacheStatus_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBundle_Relationships_AppClipDomainCacheStatus_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBundle_Relationships_AppClipDomainCacheStatus::class, 'AppleService_AppStore_BuildBundle_Relationships_AppClipDomainCacheStatus');

class BuildBundle_Relationships_AppClipDomainDebugStatus_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBundle_Relationships_AppClipDomainDebugStatus_Links::class, 'AppleService_AppStore_BuildBundle_Relationships_AppClipDomainDebugStatus_Links');

class BuildBundle_Relationships_AppClipDomainDebugStatus_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDomainStatuses';
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
class_alias(BuildBundle_Relationships_AppClipDomainDebugStatus_Data::class, 'AppleService_AppStore_BuildBundle_Relationships_AppClipDomainDebugStatus_Data');

class BuildBundle_Relationships_AppClipDomainDebugStatus extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BuildBundle_Relationships_AppClipDomainDebugStatus_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = BuildBundle_Relationships_AppClipDomainDebugStatus_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BuildBundle_Relationships_AppClipDomainDebugStatus_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BuildBundle_Relationships_AppClipDomainDebugStatus_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  BuildBundle_Relationships_AppClipDomainDebugStatus_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBundle_Relationships_AppClipDomainDebugStatus_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBundle_Relationships_AppClipDomainDebugStatus::class, 'AppleService_AppStore_BuildBundle_Relationships_AppClipDomainDebugStatus');

class BuildBundle_Relationships_BetaAppClipInvocations_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBundle_Relationships_BetaAppClipInvocations_Links::class, 'AppleService_AppStore_BuildBundle_Relationships_BetaAppClipInvocations_Links');

class BuildBundle_Relationships_BetaAppClipInvocations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocations';
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
class_alias(BuildBundle_Relationships_BetaAppClipInvocations_Data::class, 'AppleService_AppStore_BuildBundle_Relationships_BetaAppClipInvocations_Data');

class BuildBundle_Relationships_BetaAppClipInvocations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BuildBundle_Relationships_BetaAppClipInvocations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BuildBundle_Relationships_BetaAppClipInvocations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BuildBundle_Relationships_BetaAppClipInvocations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BuildBundle_Relationships_BetaAppClipInvocations_Links
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
	* @return  BuildBundle_Relationships_BetaAppClipInvocations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBundle_Relationships_BetaAppClipInvocations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBundle_Relationships_BetaAppClipInvocations::class, 'AppleService_AppStore_BuildBundle_Relationships_BetaAppClipInvocations');

class BuildBundle_Relationships_BuildBundleFileSizes_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BuildBundle_Relationships_BuildBundleFileSizes_Links::class, 'AppleService_AppStore_BuildBundle_Relationships_BuildBundleFileSizes_Links');

class BuildBundle_Relationships_BuildBundleFileSizes_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBundleFileSizes';
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
class_alias(BuildBundle_Relationships_BuildBundleFileSizes_Data::class, 'AppleService_AppStore_BuildBundle_Relationships_BuildBundleFileSizes_Data');

class BuildBundle_Relationships_BuildBundleFileSizes extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BuildBundle_Relationships_BuildBundleFileSizes_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BuildBundle_Relationships_BuildBundleFileSizes_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BuildBundle_Relationships_BuildBundleFileSizes_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BuildBundle_Relationships_BuildBundleFileSizes_Links
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
	* @return  BuildBundle_Relationships_BuildBundleFileSizes_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildBundle_Relationships_BuildBundleFileSizes_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BuildBundle_Relationships_BuildBundleFileSizes::class, 'AppleService_AppStore_BuildBundle_Relationships_BuildBundleFileSizes');

class BuildBundle_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipDomainCacheStatusType = BuildBundle_Relationships_AppClipDomainCacheStatus::class;
	protected $appClipDomainCacheStatusDataType = 'object';
	protected $appClipDomainDebugStatusType = BuildBundle_Relationships_AppClipDomainDebugStatus::class;
	protected $appClipDomainDebugStatusDataType = 'object';
	protected $betaAppClipInvocationsType = BuildBundle_Relationships_BetaAppClipInvocations::class;
	protected $betaAppClipInvocationsDataType = 'object';
	protected $buildBundleFileSizesType = BuildBundle_Relationships_BuildBundleFileSizes::class;
	protected $buildBundleFileSizesDataType = 'object';

	/**
	* @return  BuildBundle_Relationships_AppClipDomainCacheStatus
	*/
	public function getAppClipDomainCacheStatus()
	{
		return $this->appClipDomainCacheStatus;
	}
	/**
	* @param  BuildBundle_Relationships_AppClipDomainCacheStatus
	*/
	public function setAppClipDomainCacheStatus($appClipDomainCacheStatus)
	{
		$this->appClipDomainCacheStatus = $appClipDomainCacheStatus;
		return $this;
	}
	/**
	* @return  BuildBundle_Relationships_AppClipDomainDebugStatus
	*/
	public function getAppClipDomainDebugStatus()
	{
		return $this->appClipDomainDebugStatus;
	}
	/**
	* @param  BuildBundle_Relationships_AppClipDomainDebugStatus
	*/
	public function setAppClipDomainDebugStatus($appClipDomainDebugStatus)
	{
		$this->appClipDomainDebugStatus = $appClipDomainDebugStatus;
		return $this;
	}
	/**
	* @return  BuildBundle_Relationships_BetaAppClipInvocations
	*/
	public function getBetaAppClipInvocations()
	{
		return $this->betaAppClipInvocations;
	}
	/**
	* @param  BuildBundle_Relationships_BetaAppClipInvocations
	*/
	public function setBetaAppClipInvocations($betaAppClipInvocations)
	{
		$this->betaAppClipInvocations = $betaAppClipInvocations;
		return $this;
	}
	/**
	* @return  BuildBundle_Relationships_BuildBundleFileSizes
	*/
	public function getBuildBundleFileSizes()
	{
		return $this->buildBundleFileSizes;
	}
	/**
	* @param  BuildBundle_Relationships_BuildBundleFileSizes
	*/
	public function setBuildBundleFileSizes($buildBundleFileSizes)
	{
		$this->buildBundleFileSizes = $buildBundleFileSizes;
		return $this;
	}

}
class_alias(BuildBundle_Relationships::class, 'AppleService_AppStore_BuildBundle_Relationships');

class BuildBundle extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBundles';
	public $id;
	protected $attributesType = BuildBundle_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BuildBundle_Relationships::class;
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
	* @return  BuildBundle_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BuildBundle_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BuildBundle_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BuildBundle_Relationships
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
class_alias(BuildBundle::class, 'AppleService_AppStore_BuildBundle');

