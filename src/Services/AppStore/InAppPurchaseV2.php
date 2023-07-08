<?php

namespace Cantie\AppStoreConnect\Services\AppStore;


class InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_InAppPurchaseAvailability extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseV2_Relationships_InAppPurchaseAvailability_Links::class;
    protected $linksDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getLinks()
    {
        return $this->links;
    }
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_IapPriceSchedule_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_IapPriceSchedule_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_IapPriceSchedule extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseV2_Relationships_IapPriceSchedule_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseV2_Relationships_IapPriceSchedule_Links::class;
    protected $linksDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getLinks()
    {
        return $this->links;
    }
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_AppStoreReviewScreenshot extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseV2_Relationships_AppStoreReviewScreenshot_Links::class;
    protected $linksDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getLinks()
    {
        return $this->links;
    }
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_PromotedPurchase_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_PromotedPurchase_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseV2_Relationships_PromotedPurchase_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseV2_Relationships_PromotedPurchase_Links::class;
    protected $linksDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getLinks()
    {
        return $this->links;
    }
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_PricePoints_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_PricePoints_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}
class InAppPurchaseV2_Relationships_PricePoints extends \Cantie\AppStoreConnect\Collection
{
    protected $collection_key = 'data';
    protected $dataType = InAppPurchaseV2_Relationships_PricePoints_Data::class;
    protected $dataDataType = 'array';

    protected $linksType = InAppPurchaseV2_Relationships_PricePoints_Links::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';
}

class InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_InAppPurchaseLocalizations extends \Cantie\AppStoreConnect\Collection
{
    protected $collection_key = 'data';
    protected $dataType = InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Data::class;
    protected $dataDataType = 'array';

    protected $linksType = InAppPurchaseV2_Relationships_InAppPurchaseLocalizations_Links::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';
}

class InAppPurchaseV2_Relationships_Content_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_Content_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseV2_Relationships_Content extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseV2_Relationships_Content_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseV2_Relationships_Content_Links::class;
    protected $linksDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getLinks()
    {
        return $this->links;
    }
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
}

class InAppPurchaseV2_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $contentType = InAppPurchaseV2_Relationships_Content::class;
    protected $contentDataType = '';
    protected $inAppPurchaseLocalizationsType = InAppPurchaseV2_Relationships_InAppPurchaseLocalizations::class;
    protected $inAppPurchaseLocalizationsDataType = '';
    protected $pricePointsType = InAppPurchaseV2_Relationships_PricePoints::class;
    protected $pricePointsDataType = '';
    protected $promotedPurchaseType = InAppPurchaseV2_Relationships_PromotedPurchase::class;
    protected $promotedPurchaseDataType = '';
    protected $appStoreReviewScreenshotType = InAppPurchaseV2_Relationships_AppStoreReviewScreenshot::class;
    protected $appStoreReviewScreenshotDataType = '';
    protected $iapPriceScheduleType = InAppPurchaseV2_Relationships_IapPriceSchedule::class;
    protected $iapPriceScheduleDataType = '';
    protected $inAppPurchaseAvailabilityType = InAppPurchaseV2_Relationships_InAppPurchaseAvailability::class;
    protected $inAppPurchaseAvailabilityDataType = '';

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of inAppPurchaseLocalizations
     */ 
    public function getInAppPurchaseLocalizations()
    {
        return $this->inAppPurchaseLocalizations;
    }

    /**
     * Set the value of inAppPurchaseLocalizations
     *
     * @return  self
     */ 
    public function setInAppPurchaseLocalizations($inAppPurchaseLocalizations)
    {
        $this->inAppPurchaseLocalizations = $inAppPurchaseLocalizations;

        return $this;
    }

    /**
     * Get the value of pricePoints
     */ 
    public function getPricePoints()
    {
        return $this->pricePoints;
    }

    /**
     * Set the value of pricePoints
     *
     * @return  self
     */ 
    public function setPricePoints($pricePoints)
    {
        $this->pricePoints = $pricePoints;

        return $this;
    }

    /**
     * Get the value of promotedPurchase
     */ 
    public function getPromotedPurchase()
    {
        return $this->promotedPurchase;
    }

    /**
     * Set the value of promotedPurchase
     *
     * @return  self
     */ 
    public function setPromotedPurchase($promotedPurchase)
    {
        $this->promotedPurchase = $promotedPurchase;

        return $this;
    }

    /**
     * Get the value of appStoreReviewScreenshot
     */ 
    public function getAppStoreReviewScreenshot()
    {
        return $this->appStoreReviewScreenshot;
    }

    /**
     * Set the value of appStoreReviewScreenshot
     *
     * @return  self
     */ 
    public function setAppStoreReviewScreenshot($appStoreReviewScreenshot)
    {
        $this->appStoreReviewScreenshot = $appStoreReviewScreenshot;

        return $this;
    }

    /**
     * Get the value of iapPriceSchedule
     */ 
    public function getIapPriceSchedule()
    {
        return $this->iapPriceSchedule;
    }

    /**
     * Set the value of iapPriceSchedule
     *
     * @return  self
     */ 
    public function setIapPriceSchedule($iapPriceSchedule)
    {
        $this->iapPriceSchedule = $iapPriceSchedule;

        return $this;
    }

    /**
     * Get the value of inAppPurchaseAvailability
     */ 
    public function getInAppPurchaseAvailability()
    {
        return $this->inAppPurchaseAvailability;
    }

    /**
     * Set the value of inAppPurchaseAvailability
     *
     * @return  self
     */ 
    public function setInAppPurchaseAvailability($inAppPurchaseAvailability)
    {
        $this->inAppPurchaseAvailability = $inAppPurchaseAvailability;

        return $this;
    }
}

class InAppPurchaseV2_Attributes extends \Cantie\AppStoreConnect\Model
{

    public $availableInAllTerritories;
    public $contentHosting;
    public $familySharable;
    public $inAppPurchaseType;
    public $name;
    public $productId;
    public $reviewNote;
    public $state;

    /**
     * Get the value of availableInAllTerritories
     */ 
    public function getAvailableInAllTerritories()
    {
        return $this->availableInAllTerritories;
    }

    /**
     * Set the value of availableInAllTerritories
     *
     * @return  self
     */ 
    public function setAvailableInAllTerritories($availableInAllTerritories)
    {
        $this->availableInAllTerritories = $availableInAllTerritories;

        return $this;
    }

    /**
     * Get the value of contentHosting
     */ 
    public function getContentHosting()
    {
        return $this->contentHosting;
    }

    /**
     * Set the value of contentHosting
     *
     * @return  self
     */ 
    public function setContentHosting($contentHosting)
    {
        $this->contentHosting = $contentHosting;

        return $this;
    }

    /**
     * Get the value of familySharable
     */ 
    public function getFamilySharable()
    {
        return $this->familySharable;
    }

    /**
     * Set the value of familySharable
     *
     * @return  self
     */ 
    public function setFamilySharable($familySharable)
    {
        $this->familySharable = $familySharable;

        return $this;
    }

    /**
     * Get the value of inAppPurchaseType
     */ 
    public function getInAppPurchaseType()
    {
        return $this->inAppPurchaseType;
    }

    /**
     * Set the value of inAppPurchaseType
     *
     * @return  self
     */ 
    public function setInAppPurchaseType($inAppPurchaseType)
    {
        $this->inAppPurchaseType = $inAppPurchaseType;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of productId
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the value of reviewNote
     */ 
    public function getReviewNote()
    {
        return $this->reviewNote;
    }

    /**
     * Set the value of reviewNote
     *
     * @return  self
     */ 
    public function setReviewNote($reviewNote)
    {
        $this->reviewNote = $reviewNote;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
}

class InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchaseV2_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseV2_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchases'

    /**
     * Get the value of attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set the value of attributes
     *
     * @return  self
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of relationships
     */
    public function getRelationships()
    {
        return $this->relationships;
    }

    /**
     * Set the value of relationships
     *
     * @return  self
     */
    public function setRelationships($relationships)
    {
        $this->relationships = $relationships;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of links
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set the value of links
     *
     * @return  self
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

}

class_alias(InAppPurchaseV2::class, 'AppleService_AppStore_InAppPurchaseV2');
class_alias(InAppPurchaseV2_Attributes::class, 'AppleService_AppStore_InAppPurchaseV2_Attributes');
class_alias(InAppPurchaseV2_Relationships::class, 'AppleService_AppStore_InAppPurchaseV2_Relationships');
