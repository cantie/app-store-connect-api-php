<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseV2Response extends \Cantie\AppStoreConnect\Collection
{

    // protected $collection_key = 'included';
    // protected $includedType = ::class;
    // protected $includedDataType = 'array';

    protected $dataType = InAppPurchaseV2::class;
    protected $dataDataType = '';
    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param InAppPurchaseV2
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return InAppPurchaseV2
     */
    public function getData()
    {
        return $this->data;
    }

    // /**
    //  * @param CustomerReview[]
    //  */
    // public function setIncluded($included)
    // {
    //     $this->included = $included;
    // }

    // /**
    //  * @return CustomerReview[]
    //  */
    // public function getIncluded()
    // {
    //     return $this->included;
    // }

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

class_alias(InAppPurchaseV2Response::class, 'AppleService_AppStore_InAppPurchaseV2Response');
