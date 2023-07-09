<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class ImageAsset extends \Cantie\AppStoreConnect\Model
{
    public $templateUrl;
    public $height;
    public $width;

    /**
     * Get the value of templateUrl
     */ 
    public function getTemplateUrl()
    {
        return $this->templateUrl;
    }

    /**
     * Set the value of templateUrl
     *
     * @return  self
     */ 
    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}

class_alias(ImageAsset::class, 'AppleService_AppStore_ImageAsset');
