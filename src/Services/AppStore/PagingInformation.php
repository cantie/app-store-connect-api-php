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

class PagingInformation_Paging extends \Cantie\AppStoreConnect\Model
{
	public $total;
	public $limit;

	public function getTotal()
	{
		return $this->total;
	}
	public function setTotal($total)
	{
		$this->total = $total;
		return $this;
	}
	public function getLimit()
	{
		return $this->limit;
	}
	public function setLimit($limit)
	{
		$this->limit = $limit;
		return $this;
	}

}

class PagingInformation extends \Cantie\AppStoreConnect\Model
{
	protected $pagingType = PagingInformation_Paging::class;
	protected $pagingDataType = 'object';

	/**
	* @return  PagingInformation_Paging
	*/
	public function getPaging()
	{
		return $this->paging;
	}
	/**
	* @param  PagingInformation_Paging
	*/
	public function setPaging($paging)
	{
		$this->paging = $paging;
		return $this;
	}

}

