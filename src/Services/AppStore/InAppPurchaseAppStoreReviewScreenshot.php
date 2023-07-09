<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2_Links::class;
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

class InAppPurchaseAppStoreReviewScreenshot_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $inAppPurchaseV2Type = InAppPurchaseAppStoreReviewScreenshot_Relationships_InAppPurchaseV2::class;
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

class InAppPurchaseAppStoreReviewScreenshot_Attributes extends \Cantie\AppStoreConnect\Collection
{
    protected $assetDeliveryStateType = AppMediaAssetState::class;
    protected $assetDeliveryStateDataType = '';

    public $assetToken;
    public $assetType;
    public $fileName;
    public $fileSize;
    
    protected $imageAssetType = ImageAsset::class;
    protected $imageAssetDataType = '';

    public $sourceFileChecksum;
    public $uploadOperations;
    
    protected $collection_key = 'uploadOperations';
    protected $uploadOperationsType = UploadOperation::class;
    protected $uploadOperationsDataType = 'array';

    /**
     * Get the value of assetDeliveryState
     */ 
    public function getAssetDeliveryState()
    {
        return $this->assetDeliveryState;
    }

    /**
     * Set the value of assetDeliveryState
     *
     * @return  self
     */ 
    public function setAssetDeliveryState($assetDeliveryState)
    {
        $this->assetDeliveryState = $assetDeliveryState;

        return $this;
    }

    /**
     * Get the value of assetToken
     */ 
    public function getAssetToken()
    {
        return $this->assetToken;
    }

    /**
     * Set the value of assetToken
     *
     * @return  self
     */ 
    public function setAssetToken($assetToken)
    {
        $this->assetToken = $assetToken;

        return $this;
    }

    /**
     * Get the value of assetType
     */ 
    public function getAssetType()
    {
        return $this->assetType;
    }

    /**
     * Set the value of assetType
     *
     * @return  self
     */ 
    public function setAssetType($assetType)
    {
        $this->assetType = $assetType;

        return $this;
    }

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

    /**
     * Get the value of imageAsset
     */ 
    public function getImageAsset()
    {
        return $this->imageAsset;
    }

    /**
     * Set the value of imageAsset
     *
     * @return  self
     */ 
    public function setImageAsset($imageAsset)
    {
        $this->imageAsset = $imageAsset;

        return $this;
    }

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
     * Get the value of uploadOperations
     */ 
    public function getUploadOperations()
    {
        return $this->uploadOperations;
    }

    /**
     * Set the value of uploadOperations
     *
     * @return  self
     */ 
    public function setUploadOperations($uploadOperations)
    {
        $this->uploadOperations = $uploadOperations;

        return $this;
    }
}

class InAppPurchaseAppStoreReviewScreenshot extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchaseAppStoreReviewScreenshot_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseAppStoreReviewScreenshot_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchaseAppStoreReviewScreenshots'

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

class_alias(InAppPurchaseAppStoreReviewScreenshot::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot');
class_alias(InAppPurchaseAppStoreReviewScreenshot_Attributes::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Attributes');
class_alias(InAppPurchaseAppStoreReviewScreenshot_Relationships::class, 'AppleService_AppStore_InAppPurchaseAppStoreReviewScreenshot_Relationships');
