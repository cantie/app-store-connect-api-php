<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchasesV2Response extends \Cantie\AppStoreConnect\Collection
{

    protected $collection_key = 'data';
    protected $dataType = InAppPurchaseV2::class;
    protected $dataDataType = 'array';

    protected $linksType = PagedDocumentLinks::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';

    /**
     * @param [InAppPurchaseV2]
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return [InAppPurchaseV2]
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
     * Get the value of meta
     */ 
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set the value of meta
     *
     * @return  self
     */ 
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }
}

class_alias(InAppPurchasesV2Response::class, 'AppleService_AppStore_InAppPurchasesV2Response');
