<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseSubmissionCreateRequest_Data_Relationship_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type = 'inAppPurchases';
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

class InAppPurchaseSubmissionCreateRequest_Data_Relationship_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseSubmissionCreateRequest_Data_Relationship_InAppPurchaseV2_Data::class;
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

class InAppPurchaseSubmissionCreateRequest_Data_Relationship extends \Cantie\AppStoreConnect\Model
{
    
    protected $inAppPurchaseV2Type = InAppPurchaseSubmissionCreateRequest_Data_Relationship_InAppPurchaseV2::class;
    protected $inAppPurchaseV2DataType = '';

    /**
     * Get the value of inAppPurchaseV2
     */ 
    public function getInAppPurchaseV2()
    {
        return $this->review;
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
}

class InAppPurchaseSubmissionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $relationshipsType = InAppPurchaseSubmissionCreateRequest_Data_Relationship::class;
    protected $relationshipsDataType = '';
    public $type = 'inAppPurchaseSubmissions';

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

class InAppPurchaseSubmissionCreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseSubmissionCreateRequest_Data::class;
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

    public function makeData($iapId)
    {
        $relationshipInAppPurchaseV2Data = new InAppPurchaseSubmissionCreateRequest_Data_Relationship_InAppPurchaseV2_Data();
        $relationshipInAppPurchaseV2Data->setId($iapId);
        $relationshipInAppPurchaseV2 = new InAppPurchaseSubmissionCreateRequest_Data_Relationship_InAppPurchaseV2();
        $relationshipInAppPurchaseV2->setData($relationshipInAppPurchaseV2Data);
        $relationship = new InAppPurchaseSubmissionCreateRequest_Data_Relationship();
        $relationship->setInAppPurchaseV2($relationshipInAppPurchaseV2);
        $data = new InAppPurchaseSubmissionCreateRequest_Data();
        $data->setRelationships($relationship);
        $this->setData($data);
        
        return $this;
    }

}

class_alias(InAppPurchaseSubmissionCreateRequest::class, 'AppleService_AppStore_InAppPurchaseSubmissionCreateRequest');
