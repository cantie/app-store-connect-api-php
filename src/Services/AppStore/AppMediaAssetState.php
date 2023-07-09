<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class AppMediaStateError extends \Cantie\AppStoreConnect\Model
{
    public $code;
    public $description;

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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}

class AppMediaAssetState extends \Cantie\AppStoreConnect\Model
{
    protected $errorsType = AppMediaStateError::class;
    protected $errorsDataType = 'array';
    public $state; // Possible Values: AWAITING_UPLOAD, UPLOAD_COMPLETE, COMPLETE, FAILED
    protected $warningsType = AppMediaStateError::class;
    protected $warningsDataType = 'array';

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set the value of errors
     *
     * @return  self
     */ 
    public function setErrors($errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of warnings
     */ 
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Set the value of warnings
     *
     * @return  self
     */ 
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }
}

class_alias(AppMediaAssetState::class, 'AppleService_AppStore_AppMediaAssetState');
