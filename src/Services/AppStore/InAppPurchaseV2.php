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

class InAppPurchaseV2_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $productId;
	public $inAppPurchaseType; // 
	public $state; // 
	public $reviewNote;
	public $familySharable;
	public $contentHosting;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($productId)
	{
		$this->productId = $productId;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getInAppPurchaseType()
	{
		return $this->inAppPurchaseType;
	}
	/**
	* @param  string
	*/
	public function setInAppPurchaseType($inAppPurchaseType)
	{
		$this->inAppPurchaseType = $inAppPurchaseType;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getState()
	{
		return $this->state;
	}
	/**
	* @param  string
	*/
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}
	public function getReviewNote()
	{
		return $this->reviewNote;
	}
	public function setReviewNote($reviewNote)
	{
		$this->reviewNote = $reviewNote;
		return $this;
	}
	public function getFamilySharable()
	{
		return $this->familySharable;
	}
	public function setFamilySharable($familySharable)
	{
		$this->familySharable = $familySharable;
		return $this;
	}
	public function getContentHosting()
	{
		return $this->contentHosting;
	}
	public function setContentHosting($contentHosting)
	{
		$this->contentHosting = $contentHosting;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseLocalizations';
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

class InAppPurchaseV2_Relationships_InAppPurchaseLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Links
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
	* @return  InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_PricePoints_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_PricePoints_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchasePricePoints';
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

class InAppPurchaseV2_Relationships_PricePoints extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_PricePoints_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = InAppPurchaseV2_Relationships_PricePoints_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  InAppPurchaseV2_Relationships_PricePoints_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_PricePoints_Links
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
	* @return  InAppPurchaseV2_Relationships_PricePoints_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_PricePoints_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_Content_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_Content_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseContents';
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

class InAppPurchaseV2_Relationships_Content extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_Content_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseV2_Relationships_Content_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2_Relationships_Content_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_Content_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_Content_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_Content_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseAppStoreReviewScreenshots';
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

class InAppPurchaseV2_Relationships_AppStoreReviewScreenshot extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_PromotedPurchase_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_PromotedPurchase_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_PromotedPurchase_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseV2_Relationships_PromotedPurchase_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2_Relationships_PromotedPurchase_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_PromotedPurchase_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_PromotedPurchase_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_PromotedPurchase_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_IapPriceSchedule_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_IapPriceSchedule_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchasePriceSchedules';
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

class InAppPurchaseV2_Relationships_IapPriceSchedule extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_IapPriceSchedule_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseV2_Relationships_IapPriceSchedule_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2_Relationships_IapPriceSchedule_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_IapPriceSchedule_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_IapPriceSchedule_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_IapPriceSchedule_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchaseAvailabilities';
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

class InAppPurchaseV2_Relationships_InAppPurchaseAvailability extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class InAppPurchaseV2_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $inAppPurchaseLocalizationsType = InAppPurchaseV2_Relationships_InAppPurchaseLocalizations::class;
	protected $inAppPurchaseLocalizationsDataType = 'object';
	protected $pricePointsType = InAppPurchaseV2_Relationships_PricePoints::class;
	protected $pricePointsDataType = 'object';
	protected $contentType = InAppPurchaseV2_Relationships_Content::class;
	protected $contentDataType = 'object';
	protected $appStoreReviewScreenshotType = InAppPurchaseV2_Relationships_AppStoreReviewScreenshot::class;
	protected $appStoreReviewScreenshotDataType = 'object';
	protected $promotedPurchaseType = InAppPurchaseV2_Relationships_PromotedPurchase::class;
	protected $promotedPurchaseDataType = 'object';
	protected $iapPriceScheduleType = InAppPurchaseV2_Relationships_IapPriceSchedule::class;
	protected $iapPriceScheduleDataType = 'object';
	protected $inAppPurchaseAvailabilityType = InAppPurchaseV2_Relationships_InAppPurchaseAvailability::class;
	protected $inAppPurchaseAvailabilityDataType = 'object';

	/**
	* @return  InAppPurchaseV2_Relationships_InAppPurchaseLocalizations
	*/
	public function getInAppPurchaseLocalizations()
	{
		return $this->inAppPurchaseLocalizations;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_InAppPurchaseLocalizations
	*/
	public function setInAppPurchaseLocalizations($inAppPurchaseLocalizations)
	{
		$this->inAppPurchaseLocalizations = $inAppPurchaseLocalizations;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_PricePoints
	*/
	public function getPricePoints()
	{
		return $this->pricePoints;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_PricePoints
	*/
	public function setPricePoints($pricePoints)
	{
		$this->pricePoints = $pricePoints;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_Content
	*/
	public function getContent()
	{
		return $this->content;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_Content
	*/
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_AppStoreReviewScreenshot
	*/
	public function getAppStoreReviewScreenshot()
	{
		return $this->appStoreReviewScreenshot;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_AppStoreReviewScreenshot
	*/
	public function setAppStoreReviewScreenshot($appStoreReviewScreenshot)
	{
		$this->appStoreReviewScreenshot = $appStoreReviewScreenshot;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_PromotedPurchase
	*/
	public function getPromotedPurchase()
	{
		return $this->promotedPurchase;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_PromotedPurchase
	*/
	public function setPromotedPurchase($promotedPurchase)
	{
		$this->promotedPurchase = $promotedPurchase;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_IapPriceSchedule
	*/
	public function getIapPriceSchedule()
	{
		return $this->iapPriceSchedule;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_IapPriceSchedule
	*/
	public function setIapPriceSchedule($iapPriceSchedule)
	{
		$this->iapPriceSchedule = $iapPriceSchedule;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships_InAppPurchaseAvailability
	*/
	public function getInAppPurchaseAvailability()
	{
		return $this->inAppPurchaseAvailability;
	}
	/**
	* @param  InAppPurchaseV2_Relationships_InAppPurchaseAvailability
	*/
	public function setInAppPurchaseAvailability($inAppPurchaseAvailability)
	{
		$this->inAppPurchaseAvailability = $inAppPurchaseAvailability;
		return $this;
	}

}

class InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
	public $type = 'inAppPurchases';
	public $id;
	protected $attributesType = InAppPurchaseV2_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = InAppPurchaseV2_Relationships::class;
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
	* @return  InAppPurchaseV2_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  InAppPurchaseV2_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  InAppPurchaseV2_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  InAppPurchaseV2_Relationships
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

