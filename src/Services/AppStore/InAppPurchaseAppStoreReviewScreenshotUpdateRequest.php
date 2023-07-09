<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $sourceFileChecksum;
    public $uploaded;

    /**
     * Get the value of sourceFileChecksum
     */ 
    public function getSourceFileChecksum()
    {
        return $this->sourceFileChecksum;
    }

    /**
     * Set the value of sourceFileChecksum
     *
     * @return  self
     */ 
    public function setSourceFileChecksum($sourceFileChecksum)
    {
        $this->sourceFileChecksum = $sourceFileChecksum;

        return $this;
    }

    /**
     * Get the value of uploaded
     */ 
    public function getUploaded()
    {
        return $this->uploaded;
    }

    /**
     * Set the value of uploaded
     *
     * @return  self
     */ 
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;

        return $this;
    }
}

class InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
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

class InAppPurchaseAppStoreReviewScreenshotUpdateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data::class;
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

    public function makeData($sourceFileChecksum, $uploaded)
    {
        $attributes = new InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data_Attributes();
        $attributes->setSourceFileChecksum($sourceFileChecksum);
        $attributes->setUploaded($uploaded);

        $data = new InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data();
        $data->setAttributes($attributes);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseAppStoreReviewScreenshotUpdateRequest::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotUpdateRequest');
class_alias(InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data');
class_alias(InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshotUpdateRequest_Data_Attributes');
