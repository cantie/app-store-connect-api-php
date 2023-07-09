<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseSubmission_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseSubmission_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseSubmission_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseSubmission_Relationships_InAppPurchaseV2_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseSubmission_Relationships_InAppPurchaseV2_Links::class;
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

class InAppPurchaseSubmission_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $inAppPurchaseV2Type = InAppPurchaseSubmission_Relationships_InAppPurchaseV2::class;
    protected $inAppPurchaseV2DataType = '';

    /**
     * Get the value of territory
     */ 
    public function getInAppPurchaseV2()
    {
        return $this->inAppPurchaseV2;
    }

    /**
     * Set the value of territory
     *
     * @return  self
     */ 
    public function setInAppPurchaseV2($inAppPurchaseV2)
    {
        $this->inAppPurchaseV2 = $inAppPurchaseV2;

        return $this;
    }
}

class InAppPurchaseSubmission extends \Cantie\AppStoreConnect\Model
{
    protected $relationshipsType = InAppPurchaseSubmission_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchaseSubmissions'

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

class_alias(InAppPurchaseSubmission::class, 'AppleService_AppStore_InAppPurchaseSubmission');
class_alias(InAppPurchaseSubmission_Relationships::class, 'AppleService_AppStore_InAppPurchaseSubmission_Relationships');
