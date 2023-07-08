<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseLocalizationResponse extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'included';
    protected $includedType = InAppPurchaseV2::class;
    protected $includedDataType = 'array';

    protected $dataType = InAppPurchaseLocalization::class;
    protected $dataDataType = '';
    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param InAppPurchaseLocalization
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return InAppPurchaseLocalization
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param InAppPurchaseV2[]
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return InAppPurchaseV2[]
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

class_alias(InAppPurchaseLocalizationResponse::class, 'AppleService_AppStore_InAppPurchaseLocalizationResponse');
