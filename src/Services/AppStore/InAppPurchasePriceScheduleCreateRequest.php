<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data::class;
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

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type = "inAppPurchasePrices";

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

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'data';
    protected $dataType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data::class;
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

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase_Data::class;
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

class InAppPurchasePriceScheduleCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
    
    protected $inAppPurchaseType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase::class;
    protected $inAppPurchaseDataType = '';

    protected $manualPricesType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices::class;
    protected $manualPricesDataType = '';

    // optional
    protected $baseTerritoryType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory::class;
    protected $baseTerritoryDataType = '';

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

class InAppPurchasePriceScheduleCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $relationshipsType = InAppPurchasePriceScheduleCreateRequest_Data_Relationships::class;
    protected $relationshipsDataType = '';
    public $type = 'inAppPurchasePriceSchedules';

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

class InAppPurchasePriceScheduleCreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchasePriceScheduleCreateRequest_Data::class;
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

    public function makeData($iapId, $manualPriceIds, $baseTerritoryId = null)
    {
        $relationshipsIAPData = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase_Data();
        $relationshipsIAPData->setId($iapId);
        $relationshipsIAP = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase();
        $relationshipsIAP->setData($relationshipsIAPData);

        $relationshipsManualPriceDatas = [];
        foreach ($manualPriceIds as $manualPriceId) {
            $relationshipsManualPriceData = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data();
            $relationshipsManualPriceData->setId($manualPriceId);
            $relationshipsManualPriceDatas[] = $relationshipsManualPriceData;
        }
        $relationshipsManualPrice = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices();
        $relationshipsManualPrice->setData($relationshipsManualPriceDatas);

        if ($baseTerritoryId != null) {
            $relationshipsTerritoryData = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data();
            $relationshipsTerritoryData->setId($baseTerritoryId);
            $relationshipsTerritory = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory();
            $relationshipsTerritory->setData($relationshipsTerritoryData);
        } else {
            $relationshipsTerritory = null;
        }

        $relationships = new InAppPurchasePriceScheduleCreateRequest_Data_Relationships();
        $relationships->setInAppPurchase($relationshipsIAP);
        $relationships->setManualPrices($relationshipsManualPrice);
        $relationships->setBaseTerritory($relationshipsTerritory);
        
        $data = new InAppPurchasePriceScheduleCreateRequest_Data();
        $data->setRelationships($relationships);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchasePriceScheduleCreateRequest::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase_Data::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships_InAppPurchase_Data');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships_ManualPrices_Data');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory');
class_alias(InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data::class, 'AppleService_AppStore_InAppPurchasePriceScheduleCreateRequest_Data_Relationships_BaseTerritory_Data');
