<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseAvailabilityResponse extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'included';
    protected $includedType = Territory::class;
    protected $includedDataType = 'array';

    protected $dataType = InAppPurchaseAvailability::class;
    protected $dataDataType = '';
    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param InAppPurchaseAvailability
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return InAppPurchaseAvailability
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Territory[]
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return Territory[]
     */
    public function getIncluded()
    {
        return $this->included;
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

class_alias(InAppPurchaseAvailabilityResponse::class, 'AppleService_AppStore_InAppPurchaseAvailabilityResponse');
