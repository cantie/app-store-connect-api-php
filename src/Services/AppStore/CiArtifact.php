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

class CiArtifact_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileType; // ARCHIVE, ARCHIVE_EXPORT, LOG_BUNDLE, RESULT_BUNDLE, TEST_PRODUCTS, XCODEBUILD_PRODUCTS
	public $fileName;
	public $fileSize;
	public $downloadUrl;

	public function getFileType()
	{
		return $this->fileType;
	}
	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		return $fileType;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $fileName;
	}
	public function getFileSize()
	{
		return $this->fileSize;
	}
	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		return $fileSize;
	}
	public function getDownloadUrl()
	{
		return $this->downloadUrl;
	}
	public function setDownloadUrl($downloadUrl)
	{
		$this->downloadUrl = $downloadUrl;
		return $downloadUrl;
	}

}
class_alias(CiArtifact_Attributes::class, 'AppleService_AppStore_CiArtifact_Attributes');

class CiArtifact extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ciArtifacts';
	public $id;
	protected $attributesType = CiArtifact_Attributes::class;
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
	* @return  CiArtifact_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CiArtifact_Attributes
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
class_alias(CiArtifact::class, 'AppleService_AppStore_CiArtifact');

