<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2_Data::class;
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

class InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
    
    protected $inAppPurchaseV2Type = InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2::class;
    protected $inAppPurchaseV2DataType = '';

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
}

class InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $fileName;
    public $fileSize;

    /**
     * Get the value of fileName
     */ 
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set the value of fileName
     *
     * @return  self
     */ 
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get the value of fileSize
     */ 
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set the value of fileSize
     *
     * @return  self
     */ 
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}

class InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships::class;
    protected $relationshipsDataType = '';
    public $type = 'inAppPurchaseAppStoreReviewScreenshots';

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

class InAppPurchaseAppStoreReviewScreenshotCreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data::class;
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

    public function makeData($iapId, $fileName, $fileSize)
    {
        $relationshipsIAPData = new InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2_Data();
        $relationshipsIAPData->setId($iapId);
        $relationshipsIAP = new InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2();
        $relationshipsIAP->setData($relationshipsIAPData);

        $relationships = new InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships();
        $relationships->setInAppPurchaseV2($relationshipsIAP);
        
        $attributes = new InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Attributes();
        $attributes->setFileName($fileName);
        $attributes->setFileSize($fileSize);

        $data = new InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data();
        $data->setAttributes($attributes);
        $data->setRelationships($relationships);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseAppStoreReviewScreenshotCreateRequest::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotCreateRequest');
class_alias(InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data');
class_alias(InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Attributes');
class_alias(InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships');
class_alias(InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2');
class_alias(InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotCreateRequest_Data_Relationships_InAppPurchaseV2_Data');
