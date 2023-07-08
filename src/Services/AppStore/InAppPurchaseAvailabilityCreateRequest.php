<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type = "territories";

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}

class InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'data';
    protected $dataType = InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories_Data::class;
    protected $dataDataType = 'array';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
}

class InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type = "inAppPurchases";

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}

class InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase_Data::class;
    protected $dataDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
}

class InAppPurchaseAvailabilityCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
    
    protected $inAppPurchaseType = InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase::class;
    protected $inAppPurchaseDataType = '';

    protected $availableTerritoriesType = InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories::class;
    protected $availableTerritoriesDataType = '';

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
}

class InAppPurchaseAvailabilityCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $availableInNewTerritories;
    public function getAvailableInNewTerritories()
    {
        return $this->availableInNewTerritories;
    }
    public function setAvailableInNewTerritories($availableInNewTerritories)
    {
        $this->availableInNewTerritories = $availableInNewTerritories;

        return $this;
    }
}

class InAppPurchaseAvailabilityCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = InAppPurchaseAvailabilityCreateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseAvailabilityCreateRequest_Data_Relationships::class;
    protected $relationshipsDataType = '';
    public $type = 'inAppPurchaseAvailabilities';

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
}

class InAppPurchaseAvailabilityCreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseAvailabilityCreateRequest_Data::class;
    protected $dataDataType = '';

    // TODO: included

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

    public function makeData($iapId, $availableTerritoriesIds, $availableInNewTerritories)
    {
        $relationshipsIAPData = new InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase_Data();
        $relationshipsIAPData->setId($iapId);
        $relationshipsIAP = new InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase();
        $relationshipsIAP->setData($relationshipsIAPData);

        $relationshipsAvailableTerritoriesDatas = [];
        foreach ($availableTerritoriesIds as $availableTerritoriesId) {
            $relationshipsAvailableTerritoriesData = new InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories_Data();
            $relationshipsAvailableTerritoriesData->setId($availableTerritoriesId);
            $relationshipsAvailableTerritoriesDatas[] = $relationshipsAvailableTerritoriesData;
        }
        $relationshipsAvailableTerritories = new InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories();
        $relationshipsAvailableTerritories->setData($relationshipsAvailableTerritoriesDatas);

        $relationships = new InAppPurchaseAvailabilityCreateRequest_Data_Relationships();
        $relationships->setInAppPurchase($relationshipsIAP);
        $relationships->setAvailableTerritories($relationshipsAvailableTerritories);

        $attributes = new InAppPurchaseAvailabilityCreateRequest_Data_Attributes();
        $attributes->setAvailableInNewTerritories($availableInNewTerritories);
        
        $data = new InAppPurchaseAvailabilityCreateRequest_Data();
        $data->setAttributes($attributes);
        $data->setRelationships($relationships);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseAvailabilityCreateRequest::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data_Attributes');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data_Relationships::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data_Relationships');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase_Data::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data_Relationships_InAppPurchase_Data');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories');
class_alias(InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories_Data::class, 'AppleService_AppStore_InAppPurchaseAvailabilityCreateRequest_Data_Relationships_AvailableTerritories_Data');
