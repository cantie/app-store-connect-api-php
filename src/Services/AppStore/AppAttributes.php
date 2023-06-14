<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class AppAttributes extends \Cantie\AppStoreConnect\Model
{

    public $bundleId;
    public $name;
    public $primaryLocale;
    public $sku;
    public $availableInNewTerritories; // deprecated
    public $contentRightsDeclaration;
    public $isOrEverWasMadeForKids;
    public $subscriptionStatusUrl;
    public $subscriptionStatusUrlForSandbox;
    public $subscriptionStatusUrlVersion;
    public $subscriptionStatusUrlVersionForSandbox;


    /**
     * Get the value of bundleId
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * Set the value of bundleId
     *
     * @return  self
     */
    public function setBundleId($bundleId)
    {
        $this->bundleId = $bundleId;

        return $this;
    }

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
     * Set the value of primaryLocale
     *
     * @return  self
     */
    public function setPrimaryLocale($primaryLocale)
    {
        $this->primaryLocale = $primaryLocale;

        return $this;
    }

    /**
     * Get the value of primaryLocale
     */
    public function getPrimaryLocale()
    {
        return $this->primaryLocale;
    }

    /**
     * Get the value of sku
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the value of sku
     *
     * @return  self
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get the value of availableInNewTerritories
     */
    public function getAvailableInNewTerritories()
    {
        return $this->availableInNewTerritories;
    }

    /**
     * Set the value of availableInNewTerritories
     *
     * @return  self
     */
    public function setAvailableInNewTerritories($availableInNewTerritories)
    {
        $this->availableInNewTerritories = $availableInNewTerritories;

        return $this;
    }

    /**
     * Get the value of contentRightsDeclaration
     */
    public function getContentRightsDeclaration()
    {
        return $this->contentRightsDeclaration;
    }

    /**
     * Set the value of contentRightsDeclaration
     *
     * @return  self
     */
    public function setContentRightsDeclaration($contentRightsDeclaration)
    {
        $this->contentRightsDeclaration = $contentRightsDeclaration;

        return $this;
    }

    /**
     * Get the value of isOrEverWasMadeForKids
     */
    public function getIsOrEverWasMadeForKids()
    {
        return $this->isOrEverWasMadeForKids;
    }

    /**
     * Set the value of isOrEverWasMadeForKids
     *
     * @return  self
     */
    public function setIsOrEverWasMadeForKids($isOrEverWasMadeForKids)
    {
        $this->isOrEverWasMadeForKids = $isOrEverWasMadeForKids;

        return $this;
    }

    /**
     * Get the value of subscriptionStatusUrl
     */
    public function getSubscriptionStatusUrl()
    {
        return $this->subscriptionStatusUrl;
    }

    /**
     * Set the value of subscriptionStatusUrl
     *
     * @return  self
     */
    public function setSubscriptionStatusUrl($subscriptionStatusUrl)
    {
        $this->subscriptionStatusUrl = $subscriptionStatusUrl;

        return $this;
    }

    /**
     * Get the value of subscriptionStatusUrlForSandbox
     */
    public function getSubscriptionStatusUrlForSandbox()
    {
        return $this->subscriptionStatusUrlForSandbox;
    }

    /**
     * Set the value of subscriptionStatusUrlForSandbox
     *
     * @return  self
     */
    public function setSubscriptionStatusUrlForSandbox($subscriptionStatusUrlForSandbox)
    {
        $this->subscriptionStatusUrlForSandbox = $subscriptionStatusUrlForSandbox;

        return $this;
    }

    /**
     * Get the value of subscriptionStatusUrlVersion
     */
    public function getSubscriptionStatusUrlVersion()
    {
        return $this->subscriptionStatusUrlVersion;
    }

    /**
     * Set the value of subscriptionStatusUrlVersion
     *
     * @return  self
     */
    public function setSubscriptionStatusUrlVersion($subscriptionStatusUrlVersion)
    {
        $this->subscriptionStatusUrlVersion = $subscriptionStatusUrlVersion;

        return $this;
    }

    /**
     * Get the value of subscriptionStatusUrlVersionForSandbox
     */
    public function getSubscriptionStatusUrlVersionForSandbox()
    {
        return $this->subscriptionStatusUrlVersionForSandbox;
    }

    /**
     * Set the value of subscriptionStatusUrlVersionForSandbox
     *
     * @return  self
     */
    public function setSubscriptionStatusUrlVersionForSandbox($subscriptionStatusUrlVersionForSandbox)
    {
        $this->subscriptionStatusUrlVersionForSandbox = $subscriptionStatusUrlVersionForSandbox;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppAttributes::class, 'AppleService_AppStore_AppAttributes');
