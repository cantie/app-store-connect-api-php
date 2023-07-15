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

class AppClipAdvancedExperience_Attributes_Place_MainAddress_StructuredAddress extends \Cantie\AppStoreConnect\Model
{
	protected $streetAddressType = '';
	protected $streetAddressDataType = 'array';
	public $floor;
	public $neighborhood;
	public $locality;
	public $stateProvince;
	public $postalCode;
	public $countryCode;

	/**
	* @return  []
	*/
	public function getStreetAddress()
	{
		return $this->streetAddress;
	}
	/**
	* @param  []
	*/
	public function setStreetAddress($streetAddress)
	{
		$this->streetAddress = $streetAddress;
		return $streetAddress;
	}
	public function getFloor()
	{
		return $this->floor;
	}
	public function setFloor($floor)
	{
		$this->floor = $floor;
		return $floor;
	}
	public function getNeighborhood()
	{
		return $this->neighborhood;
	}
	public function setNeighborhood($neighborhood)
	{
		$this->neighborhood = $neighborhood;
		return $neighborhood;
	}
	public function getLocality()
	{
		return $this->locality;
	}
	public function setLocality($locality)
	{
		$this->locality = $locality;
		return $locality;
	}
	public function getStateProvince()
	{
		return $this->stateProvince;
	}
	public function setStateProvince($stateProvince)
	{
		$this->stateProvince = $stateProvince;
		return $stateProvince;
	}
	public function getPostalCode()
	{
		return $this->postalCode;
	}
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
		return $postalCode;
	}
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	public function setCountryCode($countryCode)
	{
		$this->countryCode = $countryCode;
		return $countryCode;
	}

}
class_alias(AppClipAdvancedExperience_Attributes_Place_MainAddress_StructuredAddress::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes_Place_MainAddress_StructuredAddress');

class AppClipAdvancedExperience_Attributes_Place_MainAddress extends \Cantie\AppStoreConnect\Model
{
	public $fullAddress;
	protected $structuredAddressType = AppClipAdvancedExperience_Attributes_Place_MainAddress_StructuredAddress::class;
	protected $structuredAddressDataType = 'object';

	public function getFullAddress()
	{
		return $this->fullAddress;
	}
	public function setFullAddress($fullAddress)
	{
		$this->fullAddress = $fullAddress;
		return $fullAddress;
	}
	/**
	* @return  AppClipAdvancedExperience_Attributes_Place_MainAddress_StructuredAddress
	*/
	public function getStructuredAddress()
	{
		return $this->structuredAddress;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes_Place_MainAddress_StructuredAddress
	*/
	public function setStructuredAddress($structuredAddress)
	{
		$this->structuredAddress = $structuredAddress;
		return $structuredAddress;
	}

}
class_alias(AppClipAdvancedExperience_Attributes_Place_MainAddress::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes_Place_MainAddress');

class AppClipAdvancedExperience_Attributes_Place_DisplayPoint_Coordinates extends \Cantie\AppStoreConnect\Model
{
	public $latitude;
	public $longitude;

	public function getLatitude()
	{
		return $this->latitude;
	}
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		return $latitude;
	}
	public function getLongitude()
	{
		return $this->longitude;
	}
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		return $longitude;
	}

}
class_alias(AppClipAdvancedExperience_Attributes_Place_DisplayPoint_Coordinates::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes_Place_DisplayPoint_Coordinates');

class AppClipAdvancedExperience_Attributes_Place_DisplayPoint extends \Cantie\AppStoreConnect\Model
{
	protected $coordinatesType = AppClipAdvancedExperience_Attributes_Place_DisplayPoint_Coordinates::class;
	protected $coordinatesDataType = 'object';
	public $source; // CALCULATED, MANUALLY_PLACED

	/**
	* @return  AppClipAdvancedExperience_Attributes_Place_DisplayPoint_Coordinates
	*/
	public function getCoordinates()
	{
		return $this->coordinates;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes_Place_DisplayPoint_Coordinates
	*/
	public function setCoordinates($coordinates)
	{
		$this->coordinates = $coordinates;
		return $coordinates;
	}
	public function getSource()
	{
		return $this->source;
	}
	public function setSource($source)
	{
		$this->source = $source;
		return $source;
	}

}
class_alias(AppClipAdvancedExperience_Attributes_Place_DisplayPoint::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes_Place_DisplayPoint');

class AppClipAdvancedExperience_Attributes_Place_PhoneNumber extends \Cantie\AppStoreConnect\Model
{
	public $number;
	public $type; // FAX, LANDLINE, MOBILE, TOLLFREE
	public $intent;

	public function getNumber()
	{
		return $this->number;
	}
	public function setNumber($number)
	{
		$this->number = $number;
		return $number;
	}
	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getIntent()
	{
		return $this->intent;
	}
	public function setIntent($intent)
	{
		$this->intent = $intent;
		return $intent;
	}

}
class_alias(AppClipAdvancedExperience_Attributes_Place_PhoneNumber::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes_Place_PhoneNumber');

class AppClipAdvancedExperience_Attributes_Place extends \Cantie\AppStoreConnect\Model
{
	public $placeId;
	protected $namesType = '';
	protected $namesDataType = 'array';
	protected $mainAddressType = AppClipAdvancedExperience_Attributes_Place_MainAddress::class;
	protected $mainAddressDataType = 'object';
	protected $displayPointType = AppClipAdvancedExperience_Attributes_Place_DisplayPoint::class;
	protected $displayPointDataType = 'object';
	public $mapAction; // BUY_TICKETS, VIEW_AVAILABILITY, VIEW_PRICING, HOTEL_BOOK_ROOM, PARKING_RESERVE_PARKING, RESTAURANT_JOIN_WAITLIST, RESTAURANT_ORDER_DELIVERY, RESTAURANT_ORDER_FOOD, RESTAURANT_ORDER_TAKEOUT, RESTAURANT_RESERVATION, SCHEDULE_APPOINTMENT, RESTAURANT_VIEW_MENU, THEATER_NOW_PLAYING
	public $relationship; // OWNER, AUTHORIZED, OTHER
	protected $phoneNumberType = AppClipAdvancedExperience_Attributes_Place_PhoneNumber::class;
	protected $phoneNumberDataType = 'object';
	public $homePage;
	protected $categoriesType = '';
	protected $categoriesDataType = 'array';

	public function getPlaceId()
	{
		return $this->placeId;
	}
	public function setPlaceId($placeId)
	{
		$this->placeId = $placeId;
		return $placeId;
	}
	/**
	* @return  []
	*/
	public function getNames()
	{
		return $this->names;
	}
	/**
	* @param  []
	*/
	public function setNames($names)
	{
		$this->names = $names;
		return $names;
	}
	/**
	* @return  AppClipAdvancedExperience_Attributes_Place_MainAddress
	*/
	public function getMainAddress()
	{
		return $this->mainAddress;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes_Place_MainAddress
	*/
	public function setMainAddress($mainAddress)
	{
		$this->mainAddress = $mainAddress;
		return $mainAddress;
	}
	/**
	* @return  AppClipAdvancedExperience_Attributes_Place_DisplayPoint
	*/
	public function getDisplayPoint()
	{
		return $this->displayPoint;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes_Place_DisplayPoint
	*/
	public function setDisplayPoint($displayPoint)
	{
		$this->displayPoint = $displayPoint;
		return $displayPoint;
	}
	public function getMapAction()
	{
		return $this->mapAction;
	}
	public function setMapAction($mapAction)
	{
		$this->mapAction = $mapAction;
		return $mapAction;
	}
	public function getRelationship()
	{
		return $this->relationship;
	}
	public function setRelationship($relationship)
	{
		$this->relationship = $relationship;
		return $relationship;
	}
	/**
	* @return  AppClipAdvancedExperience_Attributes_Place_PhoneNumber
	*/
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes_Place_PhoneNumber
	*/
	public function setPhoneNumber($phoneNumber)
	{
		$this->phoneNumber = $phoneNumber;
		return $phoneNumber;
	}
	public function getHomePage()
	{
		return $this->homePage;
	}
	public function setHomePage($homePage)
	{
		$this->homePage = $homePage;
		return $homePage;
	}
	/**
	* @return  []
	*/
	public function getCategories()
	{
		return $this->categories;
	}
	/**
	* @param  []
	*/
	public function setCategories($categories)
	{
		$this->categories = $categories;
		return $categories;
	}

}
class_alias(AppClipAdvancedExperience_Attributes_Place::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes_Place');

class AppClipAdvancedExperience_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $link;
	public $version;
	public $status; // RECEIVED, DEACTIVATED, APP_TRANSFER_IN_PROGRESS
	protected $actionType = AppClipAction::class;
	protected $actionDataType = '';
	public $isPoweredBy;
	protected $placeType = AppClipAdvancedExperience_Attributes_Place::class;
	protected $placeDataType = 'object';
	public $placeStatus; // PENDING, MATCHED, NO_MATCH
	public $businessCategory; // AUTOMOTIVE, BEAUTY, BIKES, BOOKS, CASINO, EDUCATION, EDUCATION_JAPAN, ENTERTAINMENT, EV_CHARGER, FINANCIAL_USD, FINANCIAL_CNY, FINANCIAL_GBP, FINANCIAL_JPY, FINANCIAL_EUR, FITNESS, FOOD_AND_DRINK, GAS, GROCERY, HEALTH_AND_MEDICAL, HOTEL_AND_TRAVEL, MUSIC, PARKING, PET_SERVICES, PROFESSIONAL_SERVICES, SHOPPING, TICKETING, TRANSIT
	protected $defaultLanguageType = AppClipAdvancedExperienceLanguage::class;
	protected $defaultLanguageDataType = '';

	public function getLink()
	{
		return $this->link;
	}
	public function setLink($link)
	{
		$this->link = $link;
		return $link;
	}
	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $version;
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function setStatus($status)
	{
		$this->status = $status;
		return $status;
	}
	/**
	* @return  AppClipAction
	*/
	public function getAction()
	{
		return $this->action;
	}
	/**
	* @param  AppClipAction
	*/
	public function setAction($action)
	{
		$this->action = $action;
		return $action;
	}
	public function getIsPoweredBy()
	{
		return $this->isPoweredBy;
	}
	public function setIsPoweredBy($isPoweredBy)
	{
		$this->isPoweredBy = $isPoweredBy;
		return $isPoweredBy;
	}
	/**
	* @return  AppClipAdvancedExperience_Attributes_Place
	*/
	public function getPlace()
	{
		return $this->place;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes_Place
	*/
	public function setPlace($place)
	{
		$this->place = $place;
		return $place;
	}
	public function getPlaceStatus()
	{
		return $this->placeStatus;
	}
	public function setPlaceStatus($placeStatus)
	{
		$this->placeStatus = $placeStatus;
		return $placeStatus;
	}
	public function getBusinessCategory()
	{
		return $this->businessCategory;
	}
	public function setBusinessCategory($businessCategory)
	{
		$this->businessCategory = $businessCategory;
		return $businessCategory;
	}
	/**
	* @return  AppClipAdvancedExperienceLanguage
	*/
	public function getDefaultLanguage()
	{
		return $this->defaultLanguage;
	}
	/**
	* @param  AppClipAdvancedExperienceLanguage
	*/
	public function setDefaultLanguage($defaultLanguage)
	{
		$this->defaultLanguage = $defaultLanguage;
		return $defaultLanguage;
	}

}
class_alias(AppClipAdvancedExperience_Attributes::class, 'AppleService_AppStore_AppClipAdvancedExperience_Attributes');

class AppClipAdvancedExperience_Relationships_AppClip_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_AppClip_Links::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_AppClip_Links');

class AppClipAdvancedExperience_Relationships_AppClip_Data extends \Cantie\AppStoreConnect\Model
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
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_AppClip_Data::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_AppClip_Data');

class AppClipAdvancedExperience_Relationships_AppClip extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipAdvancedExperience_Relationships_AppClip_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipAdvancedExperience_Relationships_AppClip_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipAdvancedExperience_Relationships_AppClip_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_AppClip_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppClipAdvancedExperience_Relationships_AppClip_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_AppClip_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_AppClip::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_AppClip');

class AppClipAdvancedExperience_Relationships_HeaderImage_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_HeaderImage_Links::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_HeaderImage_Links');

class AppClipAdvancedExperience_Relationships_HeaderImage_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipAdvancedExperienceImages';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_HeaderImage_Data::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_HeaderImage_Data');

class AppClipAdvancedExperience_Relationships_HeaderImage extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipAdvancedExperience_Relationships_HeaderImage_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppClipAdvancedExperience_Relationships_HeaderImage_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipAdvancedExperience_Relationships_HeaderImage_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_HeaderImage_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppClipAdvancedExperience_Relationships_HeaderImage_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_HeaderImage_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_HeaderImage::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_HeaderImage');

class AppClipAdvancedExperience_Relationships_Localizations_Links extends \Cantie\AppStoreConnect\Model
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
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_Localizations_Links::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_Localizations_Links');

class AppClipAdvancedExperience_Relationships_Localizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipAdvancedExperienceLocalizations';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_Localizations_Data::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_Localizations_Data');

class AppClipAdvancedExperience_Relationships_Localizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppClipAdvancedExperience_Relationships_Localizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppClipAdvancedExperience_Relationships_Localizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppClipAdvancedExperience_Relationships_Localizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_Localizations_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
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
		return $meta;
	}
	/**
	* @return  AppClipAdvancedExperience_Relationships_Localizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_Localizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppClipAdvancedExperience_Relationships_Localizations::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships_Localizations');

class AppClipAdvancedExperience_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipType = AppClipAdvancedExperience_Relationships_AppClip::class;
	protected $appClipDataType = 'object';
	protected $headerImageType = AppClipAdvancedExperience_Relationships_HeaderImage::class;
	protected $headerImageDataType = 'object';
	protected $localizationsType = AppClipAdvancedExperience_Relationships_Localizations::class;
	protected $localizationsDataType = 'object';

	/**
	* @return  AppClipAdvancedExperience_Relationships_AppClip
	*/
	public function getAppClip()
	{
		return $this->appClip;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_AppClip
	*/
	public function setAppClip($appClip)
	{
		$this->appClip = $appClip;
		return $appClip;
	}
	/**
	* @return  AppClipAdvancedExperience_Relationships_HeaderImage
	*/
	public function getHeaderImage()
	{
		return $this->headerImage;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_HeaderImage
	*/
	public function setHeaderImage($headerImage)
	{
		$this->headerImage = $headerImage;
		return $headerImage;
	}
	/**
	* @return  AppClipAdvancedExperience_Relationships_Localizations
	*/
	public function getLocalizations()
	{
		return $this->localizations;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships_Localizations
	*/
	public function setLocalizations($localizations)
	{
		$this->localizations = $localizations;
		return $localizations;
	}

}
class_alias(AppClipAdvancedExperience_Relationships::class, 'AppleService_AppStore_AppClipAdvancedExperience_Relationships');

class AppClipAdvancedExperience extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipAdvancedExperiences';
	public $id;
	protected $attributesType = AppClipAdvancedExperience_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipAdvancedExperience_Relationships::class;
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
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  AppClipAdvancedExperience_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipAdvancedExperience_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppClipAdvancedExperience_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipAdvancedExperience_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
		return $links;
	}

}
class_alias(AppClipAdvancedExperience::class, 'AppleService_AppStore_AppClipAdvancedExperience');
