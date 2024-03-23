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

class AppInfo_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $appStoreState; // 
	public $state; // ACCEPTED, DEVELOPER_REJECTED, IN_REVIEW, PENDING_RELEASE, PREPARE_FOR_SUBMISSION, READY_FOR_DISTRIBUTION, READY_FOR_REVIEW, REJECTED, REPLACED_WITH_NEW_INFO, WAITING_FOR_REVIEW
	public $appStoreAgeRating; // 
	public $brazilAgeRating; // 
	public $brazilAgeRatingV2; // SELF_RATED_L, SELF_RATED_TEN, SELF_RATED_TWELVE, SELF_RATED_FOURTEEN, SELF_RATED_SIXTEEN, SELF_RATED_EIGHTEEN, OFFICIAL_L, OFFICIAL_TEN, OFFICIAL_TWELVE, OFFICIAL_FOURTEEN, OFFICIAL_SIXTEEN, OFFICIAL_EIGHTEEN
	public $kidsAgeBand; // 

	/**
	* @return  string
	*/
	public function getAppStoreState()
	{
		return $this->appStoreState;
	}
	/**
	* @param  string
	*/
	public function setAppStoreState($appStoreState)
	{
		$this->appStoreState = $appStoreState;
		return $this;
	}
	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getAppStoreAgeRating()
	{
		return $this->appStoreAgeRating;
	}
	/**
	* @param  string
	*/
	public function setAppStoreAgeRating($appStoreAgeRating)
	{
		$this->appStoreAgeRating = $appStoreAgeRating;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getBrazilAgeRating()
	{
		return $this->brazilAgeRating;
	}
	/**
	* @param  string
	*/
	public function setBrazilAgeRating($brazilAgeRating)
	{
		$this->brazilAgeRating = $brazilAgeRating;
		return $this;
	}
	public function getBrazilAgeRatingV2()
	{
		return $this->brazilAgeRatingV2;
	}
	public function setBrazilAgeRatingV2($brazilAgeRatingV2)
	{
		$this->brazilAgeRatingV2 = $brazilAgeRatingV2;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getKidsAgeBand()
	{
		return $this->kidsAgeBand;
	}
	/**
	* @param  string
	*/
	public function setKidsAgeBand($kidsAgeBand)
	{
		$this->kidsAgeBand = $kidsAgeBand;
		return $this;
	}

}

class AppInfo_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_AgeRatingDeclaration_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_AgeRatingDeclaration_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_AgeRatingDeclaration extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_AgeRatingDeclaration_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_AgeRatingDeclaration_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_AgeRatingDeclaration_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_AgeRatingDeclaration_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_AgeRatingDeclaration_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_AgeRatingDeclaration_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_AppInfoLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_AppInfoLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfoLocalizations';
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

class AppInfo_Relationships_AppInfoLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_AppInfoLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppInfo_Relationships_AppInfoLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppInfo_Relationships_AppInfoLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_AppInfoLocalizations_Links
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
	* @return  AppInfo_Relationships_AppInfoLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_AppInfoLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_PrimaryCategory_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_PrimaryCategory_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_PrimaryCategory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_PrimaryCategory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_PrimaryCategory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_PrimaryCategory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_PrimaryCategory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_PrimaryCategory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_PrimaryCategory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_PrimarySubcategoryOne_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_PrimarySubcategoryOne_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_PrimarySubcategoryOne extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_PrimarySubcategoryOne_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_PrimarySubcategoryOne_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_PrimarySubcategoryOne_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_PrimarySubcategoryOne_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_PrimarySubcategoryOne_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_PrimarySubcategoryOne_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_PrimarySubcategoryTwo_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_PrimarySubcategoryTwo_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_PrimarySubcategoryTwo extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_PrimarySubcategoryTwo_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_PrimarySubcategoryTwo_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_PrimarySubcategoryTwo_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_PrimarySubcategoryTwo_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_PrimarySubcategoryTwo_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_PrimarySubcategoryTwo_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_SecondaryCategory_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_SecondaryCategory_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_SecondaryCategory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_SecondaryCategory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_SecondaryCategory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_SecondaryCategory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_SecondaryCategory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_SecondaryCategory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_SecondaryCategory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_SecondarySubcategoryOne_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_SecondarySubcategoryOne_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_SecondarySubcategoryOne extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_SecondarySubcategoryOne_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_SecondarySubcategoryOne_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_SecondarySubcategoryOne_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_SecondarySubcategoryOne_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_SecondarySubcategoryOne_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_SecondarySubcategoryOne_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships_SecondarySubcategoryTwo_Links extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_SecondarySubcategoryTwo_Data extends \Cantie\AppStoreConnect\Model
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

class AppInfo_Relationships_SecondarySubcategoryTwo extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppInfo_Relationships_SecondarySubcategoryTwo_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppInfo_Relationships_SecondarySubcategoryTwo_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfo_Relationships_SecondarySubcategoryTwo_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppInfo_Relationships_SecondarySubcategoryTwo_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_SecondarySubcategoryTwo_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfo_Relationships_SecondarySubcategoryTwo_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppInfo_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appType = AppInfo_Relationships_App::class;
	protected $appDataType = 'object';
	protected $ageRatingDeclarationType = AppInfo_Relationships_AgeRatingDeclaration::class;
	protected $ageRatingDeclarationDataType = 'object';
	protected $appInfoLocalizationsType = AppInfo_Relationships_AppInfoLocalizations::class;
	protected $appInfoLocalizationsDataType = 'object';
	protected $primaryCategoryType = AppInfo_Relationships_PrimaryCategory::class;
	protected $primaryCategoryDataType = 'object';
	protected $primarySubcategoryOneType = AppInfo_Relationships_PrimarySubcategoryOne::class;
	protected $primarySubcategoryOneDataType = 'object';
	protected $primarySubcategoryTwoType = AppInfo_Relationships_PrimarySubcategoryTwo::class;
	protected $primarySubcategoryTwoDataType = 'object';
	protected $secondaryCategoryType = AppInfo_Relationships_SecondaryCategory::class;
	protected $secondaryCategoryDataType = 'object';
	protected $secondarySubcategoryOneType = AppInfo_Relationships_SecondarySubcategoryOne::class;
	protected $secondarySubcategoryOneDataType = 'object';
	protected $secondarySubcategoryTwoType = AppInfo_Relationships_SecondarySubcategoryTwo::class;
	protected $secondarySubcategoryTwoDataType = 'object';

	/**
	* @return  AppInfo_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  AppInfo_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_AgeRatingDeclaration
	*/
	public function getAgeRatingDeclaration()
	{
		return $this->ageRatingDeclaration;
	}
	/**
	* @param  AppInfo_Relationships_AgeRatingDeclaration
	*/
	public function setAgeRatingDeclaration($ageRatingDeclaration)
	{
		$this->ageRatingDeclaration = $ageRatingDeclaration;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_AppInfoLocalizations
	*/
	public function getAppInfoLocalizations()
	{
		return $this->appInfoLocalizations;
	}
	/**
	* @param  AppInfo_Relationships_AppInfoLocalizations
	*/
	public function setAppInfoLocalizations($appInfoLocalizations)
	{
		$this->appInfoLocalizations = $appInfoLocalizations;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_PrimaryCategory
	*/
	public function getPrimaryCategory()
	{
		return $this->primaryCategory;
	}
	/**
	* @param  AppInfo_Relationships_PrimaryCategory
	*/
	public function setPrimaryCategory($primaryCategory)
	{
		$this->primaryCategory = $primaryCategory;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_PrimarySubcategoryOne
	*/
	public function getPrimarySubcategoryOne()
	{
		return $this->primarySubcategoryOne;
	}
	/**
	* @param  AppInfo_Relationships_PrimarySubcategoryOne
	*/
	public function setPrimarySubcategoryOne($primarySubcategoryOne)
	{
		$this->primarySubcategoryOne = $primarySubcategoryOne;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_PrimarySubcategoryTwo
	*/
	public function getPrimarySubcategoryTwo()
	{
		return $this->primarySubcategoryTwo;
	}
	/**
	* @param  AppInfo_Relationships_PrimarySubcategoryTwo
	*/
	public function setPrimarySubcategoryTwo($primarySubcategoryTwo)
	{
		$this->primarySubcategoryTwo = $primarySubcategoryTwo;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_SecondaryCategory
	*/
	public function getSecondaryCategory()
	{
		return $this->secondaryCategory;
	}
	/**
	* @param  AppInfo_Relationships_SecondaryCategory
	*/
	public function setSecondaryCategory($secondaryCategory)
	{
		$this->secondaryCategory = $secondaryCategory;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_SecondarySubcategoryOne
	*/
	public function getSecondarySubcategoryOne()
	{
		return $this->secondarySubcategoryOne;
	}
	/**
	* @param  AppInfo_Relationships_SecondarySubcategoryOne
	*/
	public function setSecondarySubcategoryOne($secondarySubcategoryOne)
	{
		$this->secondarySubcategoryOne = $secondarySubcategoryOne;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships_SecondarySubcategoryTwo
	*/
	public function getSecondarySubcategoryTwo()
	{
		return $this->secondarySubcategoryTwo;
	}
	/**
	* @param  AppInfo_Relationships_SecondarySubcategoryTwo
	*/
	public function setSecondarySubcategoryTwo($secondarySubcategoryTwo)
	{
		$this->secondarySubcategoryTwo = $secondarySubcategoryTwo;
		return $this;
	}

}

class AppInfo extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfos';
	public $id;
	protected $attributesType = AppInfo_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppInfo_Relationships::class;
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
	* @return  AppInfo_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppInfo_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppInfo_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppInfo_Relationships
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

