<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class App extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = AppAttributes::class;
    protected $attributesDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public AppAttributes $attributes;
    public $id;
    // public $relationships;
    public $type;
    public ResourceLinks $links;

    /**
     * Get the value of attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set the value of attributes
     *
     * @return  self
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

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
     * Get the value of relationships
     */
    // public function getRelationships()
    // {
    //     return $this->relationships;
    // }

    /**
     * Set the value of relationships
     *
     * @return  self
     */
    // public function setRelationships($relationships)
    // {
    //     $this->relationships = $relationships;

    //     return $this;
    // }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(App::class, 'AppleService_AppStore_App');
