<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class ErrorResponse_Errors extends \Cantie\AppStoreConnect\Collection
{
    public $code;
    public $status;
    public $id;
    public $title;
    public $detail;
    public $source;

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of detail
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set the value of detail
     *
     * @return  self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get the value of source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set the value of source
     *
     * @return  self
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }
}

class ErrorResponse extends \Cantie\AppStoreConnect\Collection
{
    protected $collection_key = 'errors';
    protected $errorsType = ErrorResponse_Errors::class;
    protected $errorsDataType = 'array';

    /**
     * @param ErrorResponse_Errors[]
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return ErrorResponse_Errors[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
}

class_alias(ErrorResponse::class, 'AppleService_AppStore_ErrorResponse');
