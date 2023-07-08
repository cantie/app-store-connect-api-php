<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseContent_Relationships_AvailableTerritories_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseContent_Relationships_AvailableTerritories_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseContent_Relationships_AvailableTerritories extends \Cantie\AppStoreConnect\Collection
{
    protected $collection_key = 'data';
    protected $dataType = InAppPurchaseContent_Relationships_AvailableTerritories_Data::class;
    protected $dataDataType = 'array';

    protected $linksType = InAppPurchaseContent_Relationships_AvailableTerritories_Links::class;
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

class InAppPurchaseContent_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $availableTerritoriesType = InAppPurchaseContent_Relationships_AvailableTerritories::class;
    protected $availableTerritoriesDataType = '';

    /**
     * Get the value of availableTerritories
     */ 
    public function getAvailableTerritories()
    {
        return $this->availableTerritories;
    }

    /**
     * Set the value of availableTerritories
     *
     * @return  self
     */ 
    public function setAvailableTerritories($availableTerritories)
    {
        $this->availableTerritories = $availableTerritories;

        return $this;
    }
}

class InAppPurchaseAvailability_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $availableInNewTerritories;

    /**
     * Get the value of availableInNewTerritories
     */ 
    public function getAvailableInNewTerritories()
    {
        return $this->availableInNewTerritories;
    }

    /**
     * Set the value of availableInNewTerritories
     *
     * @return  self
     */ 
    public function setAvailableInNewTerritories($availableInNewTerritories)
    {
        $this->availableInNewTerritories = $availableInNewTerritories;

        return $this;
    }
}

class InAppPurchaseAvailability extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchaseAvailability_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseAvailability_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchaseAvailabilities'

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

class_alias(InAppPurchaseAvailability::class, 'AppleService_AppStore_InAppPurchaseAvailability');
class_alias(InAppPurchaseAvailability_Attributes::class, 'AppleService_AppStore_InAppPurchaseAvailability_Attributes');
class_alias(InAppPurchaseAvailability_Relationships::class, 'AppleService_AppStore_InAppPurchaseAvailability_Relationships');
