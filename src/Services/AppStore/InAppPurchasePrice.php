<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchasePrice_Relationships_InAppPurchasePricePoint_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePrice_Relationships_InAppPurchasePricePoint_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePrice_Relationships_InAppPurchasePricePoint extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchasePrice_Relationships_InAppPurchasePricePoint_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchasePrice_Relationships_InAppPurchasePricePoint_Links::class;
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

class InAppPurchasePrice_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePrice_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePrice_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchasePrice_Relationships_Territory_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchasePrice_Relationships_Territory_Links::class;
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

class InAppPurchasePrice_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $inAppPurchasePricePointType = InAppPurchasePrice_Relationships_InAppPurchasePricePoint::class;
    protected $inAppPurchasePricePointDataType = '';

    protected $territoryType = InAppPurchasePrice_Relationships_Territory::class;
    protected $territoryDataType = '';

    /**
     * Get the value of inAppPurchasePricePoint
     */ 
    public function getInAppPurchasePricePoint()
    {
        return $this->inAppPurchasePricePoint;
    }

    /**
     * Set the value of inAppPurchasePricePoint
     *
     * @return  self
     */ 
    public function setInAppPurchasePricePoint($inAppPurchasePricePoint)
    {
        $this->inAppPurchasePricePoint = $inAppPurchasePricePoint;

        return $this;
    }

    /**
     * Get the value of territory
     */ 
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set the value of territory
     *
     * @return  self
     */ 
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }
}

class InAppPurchasePrice_Attributes extends \Cantie\AppStoreConnect\Model
{

    public $endDate;
    public $manual;
    public $startDate;

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of manual
     */ 
    public function getManual()
    {
        return $this->manual;
    }

    /**
     * Set the value of manual
     *
     * @return  self
     */ 
    public function setManual($manual)
    {
        $this->manual = $manual;

        return $this;
    }

    /**
     * Get the value of startDate
     */ 
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */ 
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }
}

class InAppPurchasePrice extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchasePrice_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchasePrice_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchasePrices'

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

class_alias(InAppPurchasePrice::class, 'AppleService_AppStore_InAppPurchasePrice');
class_alias(InAppPurchasePrice_Attributes::class, 'AppleService_AppStore_InAppPurchasePrice_Attributes');
class_alias(InAppPurchasePrice_Relationships::class, 'AppleService_AppStore_InAppPurchasePrice_Relationships');
