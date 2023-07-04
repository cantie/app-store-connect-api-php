<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchasePricePoint_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePricePoint_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePricePoint_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchasePricePoint_Relationships_Territory_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchasePricePoint_Relationships_Territory_Links::class;
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

class InAppPurchasePricePoint_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $territoryType = InAppPurchasePricePoint_Relationships_Territory::class;
    protected $territoryDataType = '';

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

class InAppPurchasePricePoint_Attributes extends \Cantie\AppStoreConnect\Model
{

    public $customerPrice;
    public $priceTier; // deprecated
    public $proceeds;
    
    /**
     * Get the value of customerPrice
     */ 
    public function getCustomerPrice()
    {
        return $this->customerPrice;
    }

    /**
     * Set the value of customerPrice
     *
     * @return  self
     */ 
    public function setCustomerPrice($customerPrice)
    {
        $this->customerPrice = $customerPrice;

        return $this;
    }

    /**
     * Get the value of priceTier
     */ 
    public function getPriceTier()
    {
        return $this->priceTier;
    }

    /**
     * Set the value of priceTier
     *
     * @return  self
     */ 
    public function setPriceTier($priceTier)
    {
        $this->priceTier = $priceTier;

        return $this;
    }

    /**
     * Get the value of proceeds
     */ 
    public function getProceeds()
    {
        return $this->proceeds;
    }

    /**
     * Set the value of proceeds
     *
     * @return  self
     */ 
    public function setProceeds($proceeds)
    {
        $this->proceeds = $proceeds;

        return $this;
    }
}

class InAppPurchasePricePoint extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchasePricePoint_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchasePricePoint_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchasePricePoints'

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

class_alias(InAppPurchasePricePoint::class, 'AppleService_AppStore_InAppPurchasePricePoint');
class_alias(InAppPurchasePricePoint_Attributes::class, 'AppleService_AppStore_InAppPurchasePricePoint_Attributes');
class_alias(InAppPurchasePricePoint_Relationships::class, 'AppleService_AppStore_InAppPurchasePricePoint_Relationships');
