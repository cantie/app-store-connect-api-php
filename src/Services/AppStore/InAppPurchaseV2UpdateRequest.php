<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseV2UpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $availableInAllTerritories; // boolean
    public $familySharable; // boolean
    public $name;
    public $reviewNote;
    
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
}

class InAppPurchaseV2UpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = InAppPurchaseV2UpdateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    
    public $id;
    public $type = 'inAppPurchases';

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
}

class InAppPurchaseV2UpdateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseV2UpdateRequest_Data::class;
    protected $dataDataType = '';

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function makeData($inAppPurchaseType, $name, $productId, $appId,
        $availableInAllTerritories = true, $familySharable = true, $reviewNote = "")
    {
        $attributes = new InAppPurchaseV2UpdateRequest_Data_Attributes();
        $attributes->setName($name);
        $attributes->setAvailableInAllTerritories($availableInAllTerritories);
        $attributes->setFamilySharable($familySharable);
        $attributes->setReviewNote($reviewNote);
        $data = new InAppPurchaseV2UpdateRequest_Data();
        $data->setAttributes($attributes);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseV2UpdateRequest::class, 'AppleService_AppStore_InAppPurchaseV2UpdateRequest');
class_alias(InAppPurchaseV2UpdateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseV2UpdateRequest_Data');
class_alias(InAppPurchaseV2UpdateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseV2UpdateRequest_Data_Attributes');
