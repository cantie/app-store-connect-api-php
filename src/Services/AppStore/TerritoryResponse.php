<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class TerritoryResponse extends \Cantie\AppStoreConnect\Model
{

    protected $dataType = Territory::class;
    protected $dataDataType = '';

    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    /**
     * @param Territory
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return Territory
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

class_alias(TerritoryResponse::class, 'AppleService_AppStore_TerritoryResponse');
