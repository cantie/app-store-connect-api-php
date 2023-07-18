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

class BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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
class_alias(BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build_Data::class, 'AppleService_AppStore_BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build_Data');

class BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build::class, 'AppleService_AppStore_BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build');

class BetaAppReviewSubmissionCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  BetaAppReviewSubmissionCreateRequest_Data_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $this;
	}

}
class_alias(BetaAppReviewSubmissionCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BetaAppReviewSubmissionCreateRequest_Data_Relationships');

class BetaAppReviewSubmissionCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppReviewSubmissions';
	protected $relationshipsType = BetaAppReviewSubmissionCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  BetaAppReviewSubmissionCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppReviewSubmissionCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(BetaAppReviewSubmissionCreateRequest_Data::class, 'AppleService_AppStore_BetaAppReviewSubmissionCreateRequest_Data');

class BetaAppReviewSubmissionCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppReviewSubmissionCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppReviewSubmissionCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppReviewSubmissionCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaAppReviewSubmissionCreateRequest::class, 'AppleService_AppStore_BetaAppReviewSubmissionCreateRequest');

