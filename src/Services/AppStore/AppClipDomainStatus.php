<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services\AppStore;

class AppClipDomainStatus_Attributes_Domains extends \Cantie\AppStoreConnect\Model
{
	public $domain;
	public $isValid;
	public $lastUpdatedDate;
	public $errorCode; // BAD_HTTP_RESPONSE, BAD_JSON_CONTENT, BAD_PKCS7_SIGNATURE, CANNOT_REACH_AASA_FILE, DNS_ERROR, INSECURE_REDIRECTS_FORBIDDEN, INVALID_ENTITLEMENT_MISSING_SECTION, INVALID_ENTITLEMENT_SYNTAX_ERROR, INVALID_ENTITLEMENT_UNHANDLED_SECTION, INVALID_ENTITLEMENT_UNKNOWN_ID, NETWORK_ERROR, NETWORK_ERROR_TEMPORARY, OTHER_ERROR, TIMEOUT, TLS_ERROR, UNEXPECTED_ERROR

	public function getDomain()
	{
		return $this->domain;
	}
	public function setDomain($domain)
	{
		$this->domain = $domain;
		return $domain;
	}
	public function getIsValid()
	{
		return $this->isValid;
	}
	public function setIsValid($isValid)
	{
		$this->isValid = $isValid;
		return $isValid;
	}
	public function getLastUpdatedDate()
	{
		return $this->lastUpdatedDate;
	}
	public function setLastUpdatedDate($lastUpdatedDate)
	{
		$this->lastUpdatedDate = $lastUpdatedDate;
		return $lastUpdatedDate;
	}
	public function getErrorCode()
	{
		return $this->errorCode;
	}
	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		return $errorCode;
	}

}
class_alias(AppClipDomainStatus_Attributes_Domains::class, 'AppleService_AppStore_AppClipDomainStatus_Attributes_Domains');

class AppClipDomainStatus_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $domainsType = AppClipDomainStatus_Attributes_Domains::class;
	protected $domainsDataType = 'array';
	public $lastUpdatedDate;

	/**
	* @return  AppClipDomainStatus_Attributes_Domains[]
	*/
	public function getDomains()
	{
		return $this->domains;
	}
	/**
	* @param  AppClipDomainStatus_Attributes_Domains[]
	*/
	public function setDomains($domains)
	{
		$this->domains = $domains;
		return $domains;
	}
	public function getLastUpdatedDate()
	{
		return $this->lastUpdatedDate;
	}
	public function setLastUpdatedDate($lastUpdatedDate)
	{
		$this->lastUpdatedDate = $lastUpdatedDate;
		return $lastUpdatedDate;
	}

}
class_alias(AppClipDomainStatus_Attributes::class, 'AppleService_AppStore_AppClipDomainStatus_Attributes');

class AppClipDomainStatus extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDomainStatuses';
	public $id;
	protected $attributesType = AppClipDomainStatus_Attributes::class;
	protected $attributesDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  AppClipDomainStatus_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipDomainStatus_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}

}
class_alias(AppClipDomainStatus::class, 'AppleService_AppStore_AppClipDomainStatus');

