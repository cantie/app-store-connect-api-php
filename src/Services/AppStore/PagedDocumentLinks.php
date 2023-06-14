<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class PagedDocumentLinks extends \Cantie\AppStoreConnect\Model
{
    
    public $first;
    public $next;
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

    /**
     * Get the value of first
     */ 
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set the value of first
     *
     * @return  self
     */ 
    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get the value of next
     */ 
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Set the value of next
     *
     * @return  self
     */ 
    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }
}

class_alias(PagedDocumentLinks::class, 'AppleService_AppStore_PagedDocumentLinks');
