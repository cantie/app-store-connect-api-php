<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseV2CreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $availableInAllTerritories; // boolean
    public $familySharable; // boolean
    public $inAppPurchaseType; // InAppPurchaseType
    public $name;
    public $productId;
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
     * Get the value of inAppPurchaseType
     */ 
    public function getInAppPurchaseType()
    {
        return $this->inAppPurchaseType;
    }

    /**
     * Set the value of inAppPurchaseType
     *
     * @return  self
     */ 
    public function setInAppPurchaseType($inAppPurchaseType)
    {
        $this->inAppPurchaseType = $inAppPurchaseType;

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
     * Get the value of productId
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

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

class InAppPurchaseV2CreateRequest_Data_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type = "apps";

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

class InAppPurchaseV2CreateRequest_Data_Relationships_App extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseV2CreateRequest_Data_Relationships_App_Data::class;
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

class InAppPurchaseV2CreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
    
    protected $appType = InAppPurchaseV2CreateRequest_Data_Relationships_App::class;
    protected $appDataType = '';

    /**
     * Get the value of app
     */ 
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set the value of app
     *
     * @return  self
     */ 
    public function setApp($app)
    {
        $this->app = $app;

        return $this;
    }
}

class InAppPurchaseV2CreateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = InAppPurchaseV2CreateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseV2CreateRequest_Data_Relationships::class;
    protected $relationshipsDataType = '';
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

class InAppPurchaseV2CreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseV2CreateRequest_Data::class;
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

    public function makeData($inAppPurchaseType, $name, $productId, $appId, $availableInAllTerritories = true,
        $familySharable = true, $reviewNote = "")
    {
        $attributes = new InAppPurchaseV2CreateRequest_Data_Attributes();
        $attributes->setInAppPurchaseType($inAppPurchaseType);
        $attributes->setName($name);
        $attributes->setProductId($productId);
        $attributes->setAvailableInAllTerritories($availableInAllTerritories);
        $attributes->setFamilySharable($familySharable);
        $attributes->setReviewNote($reviewNote);

        $relationshipsAppData = new InAppPurchaseV2CreateRequest_Data_Relationships_App_Data();
        $relationshipsAppData->setId($appId);
        $relationshipsApp = new InAppPurchaseV2CreateRequest_Data_Relationships_App();
        $relationshipsApp->setData($relationshipsAppData);
        $relationships = new InAppPurchaseV2CreateRequest_Data_Relationships();
        $relationships->setApp($relationshipsApp);
        $data = new InAppPurchaseV2CreateRequest_Data();
        $data->setAttributes($attributes);
        $data->setRelationships($relationships);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseV2CreateRequest::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest');
class_alias(InAppPurchaseV2CreateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data');
class_alias(InAppPurchaseV2CreateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Attributes');
class_alias(InAppPurchaseV2CreateRequest_Data_Relationships::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Relationships');
class_alias(InAppPurchaseV2CreateRequest_Data_Relationships_App::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Relationships_App');
class_alias(InAppPurchaseV2CreateRequest_Data_Relationships_App_Data::class, 'AppleService_AppStore_InAppPurchaseV2CreateRequest_Data_Relationships_App_Data');
