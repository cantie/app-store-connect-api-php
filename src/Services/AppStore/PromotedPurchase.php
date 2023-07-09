<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class PromotedPurchase_Relationships_PromotionImages_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type; // = 'promotedPurchaseImages';

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

class PromotedPurchase_Relationships_PromotionImages_Links extends \Cantie\AppStoreConnect\Model
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

class PromotedPurchase_Relationships_PromotionImages extends \Cantie\AppStoreConnect\Collection
{
    
    protected $collection_key = 'data';
    protected $dataType = PromotedPurchase_Relationships_PromotionImages_Data::class;
    protected $dataDataType = 'array';

    protected $linksType = PromotedPurchase_Relationships_PromotionImages_Links::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';

    /**
     * @return [PromotedPurchase_Relationships_PromotionImages_Data]
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @param [PromotedPurchase_Relationships_PromotionImages_Data]
     */
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
    /**
     * Get the value of meta
     */ 
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set the value of meta
     *
     * @return  self
     */ 
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }
}

class PromotedPurchase_Relationships_Subscription_Data extends \Cantie\AppStoreConnect\Model
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

class PromotedPurchase_Relationships_Subscription_Links extends \Cantie\AppStoreConnect\Model
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

class PromotedPurchase_Relationships_Subscription extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = PromotedPurchase_Relationships_Subscription_Data::class;
    protected $dataDataType = '';

    protected $linksType = PromotedPurchase_Relationships_Subscription_Links::class;
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

class PromotedPurchase_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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

class PromotedPurchase_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
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

class PromotedPurchase_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = PromotedPurchase_Relationships_InAppPurchaseV2_Data::class;
    protected $dataDataType = '';

    protected $linksType = PromotedPurchase_Relationships_InAppPurchaseV2_Links::class;
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

class PromotedPurchase_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $inAppPurchaseV2Type = PromotedPurchase_Relationships_InAppPurchaseV2::class;
    protected $inAppPurchaseV2DataType = '';
    protected $subscriptionType = PromotedPurchase_Relationships_Subscription::class;
    protected $subscriptionDataType = '';
    protected $promotionImagesType = PromotedPurchase_Relationships_PromotionImages::class;
    protected $promotionImagesDataType = '';

    /**
     * Get the value of inAppPurchaseV2
     */ 
    public function getInAppPurchaseV2()
    {
        return $this->inAppPurchaseV2;
    }

    /**
     * Set the value of inAppPurchaseV2
     *
     * @return  self
     */ 
    public function setInAppPurchaseV2($inAppPurchaseV2)
    {
        $this->inAppPurchaseV2 = $inAppPurchaseV2;

        return $this;
    }

    /**
     * Get the value of subscription
     */ 
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set the value of subscription
     *
     * @return  self
     */ 
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get the value of promotionImages
     */ 
    public function getPromotionImages()
    {
        return $this->promotionImages;
    }

    /**
     * Set the value of promotionImages
     *
     * @return  self
     */ 
    public function setPromotionImages($promotionImages)
    {
        $this->promotionImages = $promotionImages;

        return $this;
    }
}

class PromotedPurchase_Attributes extends \Cantie\AppStoreConnect\Model
{

    public $enabled;
    public $state; // Possible Values: APPROVED, IN_REVIEW, PREPARE_FOR_SUBMISSION, REJECTED
    public $visibleForAllUsers;
    
    /**
     * Get the value of enabled
     */ 
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     * @return  self
     */ 
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

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

    /**
     * Get the value of visibleForAllUsers
     */ 
    public function getVisibleForAllUsers()
    {
        return $this->visibleForAllUsers;
    }

    /**
     * Set the value of visibleForAllUsers
     *
     * @return  self
     */ 
    public function setVisibleForAllUsers($visibleForAllUsers)
    {
        $this->visibleForAllUsers = $visibleForAllUsers;

        return $this;
    }
}

class PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = PromotedPurchase_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = PromotedPurchase_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'promotedPurchases'

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

class_alias(PromotedPurchase::class, 'AppleService_AppStore_PromotedPurchase');
class_alias(PromotedPurchase_Attributes::class, 'AppleService_AppStore_PromotedPurchase_Attributes');
class_alias(PromotedPurchase_Relationships::class, 'AppleService_AppStore_PromotedPurchase_Relationships');
