<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class CustomerReviewResponseV1_Attributes extends \Cantie\AppStoreConnect\Model
{

    public $lastModifiedDate;
    public $responseBody;
    public $state; // PUBLISHED, PENDING_PUBLISHED

    /**
     * Get the value of lastModifiedDate
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Set the value of lastModifiedDate
     *
     * @return  self
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * Get the value of responseBody
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Set the value of responseBody
     *
     * @return  self
     */
    public function setResponseBody($responseBody)
    {
        $this->responseBody = $responseBody;

        return $this;
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
}

class CustomerReviewResponseV1 extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = CustomerReviewResponseV1_Attributes::class;
    protected $attributesDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public CustomerReviewResponseV1_Attributes $attributes;
    public $id;
    public ResourceLinks $links;
    // public $relationships;
    public $type; // = 'customerReviewResponses'


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

class_alias(CustomerReviewResponseV1_Attributes::class, 'AppleService_AppStore_CustomerReviewResponseV1_Attributes');
class_alias(CustomerReviewResponseV1::class, 'AppleService_AppStore_CustomerReviewResponseV1');
