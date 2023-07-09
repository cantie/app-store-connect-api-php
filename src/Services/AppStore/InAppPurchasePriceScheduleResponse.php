<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchasePriceScheduleResponse extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'data';
    protected $dataType = InAppPurchasePriceSchedule::class;
    protected $dataDataType = 'array';

    // TODO: included

    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param InAppPurchasePriceSchedule
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return InAppPurchasePriceSchedule
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

class_alias(InAppPurchasePriceScheduleResponse::class, 'AppleService_AppStore_InAppPurchasePriceScheduleResponse');
