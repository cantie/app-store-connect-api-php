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

class Certificate_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $certificateTypeType = CertificateType::class;
	protected $certificateTypeDataType = '';
	public $displayName;
	public $serialNumber;
	protected $platformType = BundleIdPlatform::class;
	protected $platformDataType = '';
	public $expirationDate;
	public $certificateContent;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $name;
	}
	/**
	* @return  CertificateType
	*/
	public function getCertificateType()
	{
		return $this->certificateType;
	}
	/**
	* @param  CertificateType
	*/
	public function setCertificateType($certificateType)
	{
		$this->certificateType = $certificateType;
		return $certificateType;
	}
	public function getDisplayName()
	{
		return $this->displayName;
	}
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
		return $displayName;
	}
	public function getSerialNumber()
	{
		return $this->serialNumber;
	}
	public function setSerialNumber($serialNumber)
	{
		$this->serialNumber = $serialNumber;
		return $serialNumber;
	}
	/**
	* @return  BundleIdPlatform
	*/
	public function getPlatform()
	{
		return $this->platform;
	}
	/**
	* @param  BundleIdPlatform
	*/
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $platform;
	}
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate($expirationDate)
	{
		$this->expirationDate = $expirationDate;
		return $expirationDate;
	}
	public function getCertificateContent()
	{
		return $this->certificateContent;
	}
	public function setCertificateContent($certificateContent)
	{
		$this->certificateContent = $certificateContent;
		return $certificateContent;
	}

}
class_alias(Certificate_Attributes::class, 'AppleService_AppStore_Certificate_Attributes');

class Certificate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'certificates';
	public $id;
	protected $attributesType = Certificate_Attributes::class;
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
	* @return  Certificate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  Certificate_Attributes
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
class_alias(Certificate::class, 'AppleService_AppStore_Certificate');

