<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class CustomerReviewResponse extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = CustomerReview::class;
    protected $dataDataType = '';
    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param CustomerReview
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return CustomerReview
     */
    public function getData()
    {
        return $this->data;
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

class_alias(CustomerReviewResponse::class, 'AppleService_AppStore_CustomerReviewResponse');
