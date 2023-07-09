<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseContentResponse extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'included';
    protected $includedType = InAppPurchaseV2::class;
    protected $includedDataType = 'array';

    protected $dataType = InAppPurchaseContent::class;
    protected $dataDataType = '';

    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param InAppPurchaseContent
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return InAppPurchaseContent
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
}

class_alias(InAppPurchaseContentResponse::class, 'AppleService_AppStore_InAppPurchaseContentResponse');
