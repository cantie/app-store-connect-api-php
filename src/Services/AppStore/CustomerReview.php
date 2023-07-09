<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class CustomerReview_Attributes extends \Cantie\AppStoreConnect\Model
{

    public $body;
    public $createdDate;
    public $rating;
    public $reviewerNickname;
    public $title;
    public $territory;

    /**
     * Get the value of body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of createdDate
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set the value of createdDate
     *
     * @return  self
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get the value of rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set the value of rating
     *
     * @return  self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get the value of reviewerNickname
     */
    public function getReviewerNickname()
    {
        return $this->reviewerNickname;
    }

    /**
     * Set the value of reviewerNickname
     *
     * @return  self
     */
    public function setReviewerNickname($reviewerNickname)
    {
        $this->reviewerNickname = $reviewerNickname;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of territory
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set the value of territory
     *
     * @return  self
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }
}

class CustomerReview_Relationships_Response_Data extends \Cantie\AppStoreConnect\Model
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
class CustomerReview_Relationships_Response_Links extends \Cantie\AppStoreConnect\Model
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

class CustomerReview_Relationships_Response extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = CustomerReview_Relationships_Response_Data::class;
    protected $dataDataType = '';

    protected $linksType = CustomerReview_Relationships_Response_Links::class;
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

class CustomerReview_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $responseType = CustomerReview_Relationships_Response::class;
    protected $responseDataType = '';

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}

class CustomerReview extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = CustomerReview_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = CustomerReview_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'customerReviews'

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

class_alias(CustomerReview_Attributes::class, 'AppleService_AppStore_CustomerReview_Attributes');
class_alias(CustomerReview_Relationships::class, 'AppleService_AppStore_CustomerReview_Relationships');
class_alias(CustomerReview::class, 'AppleService_AppStore_CustomerReview');
