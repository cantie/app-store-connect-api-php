<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $description;
    public $locale;
    public $name;

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of locale
     */ 
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set the value of locale
     *
     * @return  self
     */ 
    public function setLocale($locale)
    {
        $this->locale = $locale;

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
}

class InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
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

class InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2_Data::class;
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

class InAppPurchaseLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
    
    protected $inAppPurchaseV2Type = InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2::class;
    protected $inAppPurchaseV2DataType = '';

    /**
     * Get the value of inAppPurchaseV2
     */ 
    public function getInAppPurchaseV2()
    {
        return $this->app;
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

class InAppPurchaseLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = InAppPurchaseLocalizationCreateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseLocalizationCreateRequest_Data_Relationships::class;
    protected $relationshipsDataType = '';
    public $type = 'inAppPurchaseLocalizations';

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

class InAppPurchaseLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseLocalizationCreateRequest_Data::class;
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

    public function makeData($iapId, $description, $locale, $name)
    {
        $attributes = new InAppPurchaseLocalizationCreateRequest_Data_Attributes();
        $attributes->setDescription($description);
        $attributes->setLocale($locale);
        $attributes->setName($name);

        $relationshipsIAPData = new InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2_Data();
        $relationshipsIAPData->setId($iapId);
        $relationshipsIAP = new InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2();
        $relationshipsIAP->setData($relationshipsIAPData);
        $relationships = new InAppPurchaseLocalizationCreateRequest_Data_Relationships();
        $relationships->setInAppPurchaseV2($relationshipsIAP);
        $data = new InAppPurchaseLocalizationCreateRequest_Data();
        $data->setAttributes($attributes);
        $data->setRelationships($relationships);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseLocalizationCreateRequest::class, 'AppleService_AppStore_InAppPurchaseLocalizationCreateRequest');
class_alias(InAppPurchaseLocalizationCreateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseLocalizationCreateRequest_Data');
class_alias(InAppPurchaseLocalizationCreateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseLocalizationCreateRequest_Data_Attributes');
class_alias(InAppPurchaseLocalizationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_InAppPurchaseLocalizationCreateRequest_Data_Relationships');
class_alias(InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2::class, 'AppleService_AppStore_InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2');
class_alias(InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2_Data::class, 'AppleService_AppStore_InAppPurchaseLocalizationCreateRequest_Data_Relationships_InAppPurchaseV2_Data');
