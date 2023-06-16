<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class CustomerReviewResponseV1CreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $responseBody;
    
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
}

class CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type = 'customerReviews';
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

class CustomerReviewResponseV1CreateRequest_Data_Relationships_Review extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data::class;
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

class CustomerReviewResponseV1CreateRequest_Data_Relationship extends \Cantie\AppStoreConnect\Model
{
    
    protected $reviewType = CustomerReviewResponseV1CreateRequest_Data_Relationships_Review::class;
    protected $reviewDataType = '';

    /**
     * Get the value of review
     */ 
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Set the value of review
     *
     * @return  self
     */ 
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }
}

class CustomerReviewResponseV1CreateRequest_Data extends \Cantie\AppStoreConnect\Model
{

    protected $attributesType = CustomerReviewResponseV1CreateRequest_Data_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = CustomerReviewResponseV1CreateRequest_Data_Relationship::class;
    protected $relationshipsDataType = '';
    public $type = 'customerReviewResponses';

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

class CustomerReviewResponseV1CreateRequest extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = CustomerReviewResponseV1CreateRequest_Data::class;
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

    public function makeData($responseBody, $customerReviewId)
    {
        $attributes = new CustomerReviewResponseV1CreateRequest_Data_Attributes();
        $attributes->setResponseBody($responseBody);
        $relationshipReviewData = new CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data();
        $relationshipReviewData->setId($customerReviewId);
        $relationshipReview = new CustomerReviewResponseV1CreateRequest_Data_Relationships_Review();
        $relationshipReview->setData($relationshipReviewData);
        $relationship = new CustomerReviewResponseV1CreateRequest_Data_Relationship();
        $relationship->setReview($relationshipReview);
        $data = new CustomerReviewResponseV1CreateRequest_Data();
        $data->setAttributes($attributes);
        $data->setRelationships($relationship);
        $this->setData($data);
        
        return $this;
    }

}

class_alias(CustomerReviewResponseV1CreateRequest::class, 'AppleService_AppStore_CustomerReviewResponseV1CreateRequest');
