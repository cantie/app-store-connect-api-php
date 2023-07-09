<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchasePriceSchedule_Relationships_ManualPrices_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_ManualPrices_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_ManualPrices extends \Cantie\AppStoreConnect\Collection
{
    
    protected $collection_key = 'data';
    protected $dataType = InAppPurchasePriceSchedule_Relationships_ManualPrices_Data::class;
    protected $dataDataType = 'array';

    protected $linksType = InAppPurchasePriceSchedule_Relationships_ManualPrices_Links::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';

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
    public function getMeta()
    {
        return $this->meta;
    }
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }
}

class InAppPurchasePriceSchedule_Relationships_InAppPurchase_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_InAppPurchase_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_InAppPurchase extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchasePriceSchedule_Relationships_InAppPurchase_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchasePriceSchedule_Relationships_InAppPurchase_Links::class;
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

class InAppPurchasePriceSchedule_Relationships_BaseTerritory_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_BaseTerritory_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_BaseTerritory extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchasePriceSchedule_Relationships_BaseTerritory_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchasePriceSchedule_Relationships_BaseTerritory_Links::class;
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

class InAppPurchasePriceSchedule_Relationships_AutomaticPrices_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_AutomaticPrices_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceSchedule_Relationships_AutomaticPrices extends \Cantie\AppStoreConnect\Collection
{
    protected $collection_key = 'data';
    protected $dataType = InAppPurchasePriceSchedule_Relationships_AutomaticPrices_Data::class;
    protected $dataDataType = 'array';

    protected $linksType = InAppPurchasePriceSchedule_Relationships_AutomaticPrices_Links::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';

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
    public function getMeta()
    {
        return $this->meta;
    }
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }
}

class InAppPurchasePriceSchedule_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $automaticPricesType = InAppPurchasePriceSchedule_Relationships_AutomaticPrices::class;
    protected $automaticPricesDataType = '';
    protected $baseTerritoryType = InAppPurchasePriceSchedule_Relationships_BaseTerritory::class;
    protected $baseTerritoryDataType = '';
    protected $inAppPurchaseType = InAppPurchasePriceSchedule_Relationships_InAppPurchase::class;
    protected $inAppPurchaseDataType = '';
    protected $manualPricesType = InAppPurchasePriceSchedule_Relationships_ManualPrices::class;
    protected $manualPricesDataType = '';
    
    /**
     * Get the value of automaticPrices
     */ 
    public function getAutomaticPrices()
    {
        return $this->automaticPrices;
    }

    /**
     * Set the value of automaticPrices
     *
     * @return  self
     */ 
    public function setAutomaticPrices($automaticPrices)
    {
        $this->automaticPrices = $automaticPrices;

        return $this;
    }

    /**
     * Get the value of baseTerritory
     */ 
    public function getBaseTerritory()
    {
        return $this->baseTerritory;
    }

    /**
     * Set the value of baseTerritory
     *
     * @return  self
     */ 
    public function setBaseTerritory($baseTerritory)
    {
        $this->baseTerritory = $baseTerritory;

        return $this;
    }

    /**
     * Get the value of inAppPurchase
     */ 
    public function getInAppPurchase()
    {
        return $this->inAppPurchase;
    }

    /**
     * Set the value of inAppPurchase
     *
     * @return  self
     */ 
    public function setInAppPurchase($inAppPurchase)
    {
        $this->inAppPurchase = $inAppPurchase;

        return $this;
    }

    /**
     * Get the value of manualPrices
     */ 
    public function getManualPrices()
    {
        return $this->manualPrices;
    }

    /**
     * Set the value of manualPrices
     *
     * @return  self
     */ 
    public function setManualPrices($manualPrices)
    {
        $this->manualPrices = $manualPrices;

        return $this;
    }
}

class InAppPurchasePriceSchedule extends \Cantie\AppStoreConnect\Model
{
    protected $relationshipsType = InAppPurchasePriceSchedule_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchasePriceSchedules'

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

class_alias(InAppPurchasePriceSchedule::class, 'AppleService_AppStore_InAppPurchasePriceSchedule');
class_alias(InAppPurchasePriceSchedule_Relationships::class, 'AppleService_AppStore_InAppPurchasePriceSchedule_Relationships');
