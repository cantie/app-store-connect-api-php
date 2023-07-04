<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class HttpHeader extends \Cantie\AppStoreConnect\Model
{
    public $name;
    public $value;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}

class UploadOperation extends \Cantie\AppStoreConnect\Model
{
    protected $collection_key = 'requestHeaders';
    protected $requestHeadersType = HttpHeader::class;
    protected $requestHeadersDataType = 'array';

    public $length;
    public $method;
    public $offset;
    public $url;

    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */ 
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the value of offset
     */ 
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set the value of offset
     *
     * @return  self
     */ 
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get the value of requestHeaders
     */ 
    public function getRequestHeaders()
    {
        return $this->requestHeaders;
    }

    /**
     * Set the value of requestHeaders
     *
     * @return  self
     */ 
    public function setRequestHeaders($requestHeaders)
    {
        $this->requestHeaders = $requestHeaders;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}

class_alias(UploadOperation::class, 'AppleService_AppStore_UploadOperation');
class_alias(HttpHeader::class, 'AppleService_AppStore_HttpHeader');
