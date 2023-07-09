<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class TerritoriesResponse extends \Cantie\AppStoreConnect\Collection
{
    protected $collection_key = 'data';
    protected $dataType = Territory::class;
    protected $dataDataType = 'array';

    protected $linksType = DocumentLinks::class;
    protected $linksDataType = '';

    protected $metaType = PagingInformation::class;
    protected $metaDataType = '';
    
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

class_alias(TerritoriesResponse::class, 'AppleService_AppStore_TerritoriesResponse');
