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

class BuildIndividualTestersLinkagesResponse_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesters';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

}
class_alias(BuildIndividualTestersLinkagesResponse_Data::class, 'AppleService_AppStore_BuildIndividualTestersLinkagesResponse_Data');

class BuildIndividualTestersLinkagesResponse extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BuildIndividualTestersLinkagesResponse_Data::class;
	protected $dataDataType = 'array';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  BuildIndividualTestersLinkagesResponse_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BuildIndividualTestersLinkagesResponse_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  PagedDocumentLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PagedDocumentLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}

}
class_alias(BuildIndividualTestersLinkagesResponse::class, 'AppleService_AppStore_BuildIndividualTestersLinkagesResponse');

