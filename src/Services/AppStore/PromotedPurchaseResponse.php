<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class PromotedPurchaseResponse extends \Cantie\AppStoreConnect\Collection
{

    // protected $collection_key = 'included';
    // protected $includedType = ::class;
    // protected $includedDataType = 'array';

    protected $dataType = PromotedPurchase::class;
    protected $dataDataType = '';

    protected $linksType = PagedDocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param PromotedPurchase
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return PromotedPurchase
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

class_alias(PromotedPurchaseResponse::class, 'AppleService_AppStore_PromotedPurchaseResponse');
