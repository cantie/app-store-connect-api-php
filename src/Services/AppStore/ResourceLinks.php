<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class ResourceLinks extends \Cantie\AppStoreConnect\Model
{
    
    public $self;

    /**
     * Get the value of self
     */ 
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * Set the value of self
     *
     * @return  self
     */ 
    public function setSelf($self)
    {
        $this->self = $self;

        return $this;
    }
}

class_alias(ResourceLinks::class, 'AppleService_AppStore_ResourceLinks');
