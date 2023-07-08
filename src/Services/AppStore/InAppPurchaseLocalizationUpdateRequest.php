<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseLocalizationUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $description;
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

class InAppPurchaseLocalizationUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = InAppPurchaseLocalizationUpdateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    public $type = 'inAppPurchaseLocalizations';
    public $id;

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
}

class InAppPurchaseLocalizationUpdateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = InAppPurchaseLocalizationUpdateRequest_Data::class;
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

    public function makeData($iapLocalizationId, $description, $name)
    {
        $attributes = new InAppPurchaseLocalizationUpdateRequest_Data_Attributes();
        $attributes->setDescription($description);
        $attributes->setName($name);
        $data = new InAppPurchaseLocalizationUpdateRequest_Data();
        $data->setAttributes($attributes);
        $data->setId($iapLocalizationId);
        $this->setData($data);

        return $this;
    }
}

class_alias(InAppPurchaseLocalizationUpdateRequest::class, 'AppleService_AppStore_InAppPurchaseLocalizationUpdateRequest');
class_alias(InAppPurchaseLocalizationUpdateRequest_Data::class, 'AppleService_AppStore_InAppPurchaseLocalizationUpdateRequest_Data');
class_alias(InAppPurchaseLocalizationUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_InAppPurchaseLocalizationUpdateRequest_Data_Attributes');
