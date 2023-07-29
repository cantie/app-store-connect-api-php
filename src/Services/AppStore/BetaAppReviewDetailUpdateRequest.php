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

class BetaAppReviewDetailUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $contactFirstName;
	public $contactLastName;
	public $contactPhone;
	public $contactEmail;
	public $demoAccountName;
	public $demoAccountPassword;
	public $demoAccountRequired;
	public $notes;

	public function getContactFirstName()
	{
		return $this->contactFirstName;
	}
	public function setContactFirstName($contactFirstName)
	{
		$this->contactFirstName = $contactFirstName;
		return $this;
	}
	public function getContactLastName()
	{
		return $this->contactLastName;
	}
	public function setContactLastName($contactLastName)
	{
		$this->contactLastName = $contactLastName;
		return $this;
	}
	public function getContactPhone()
	{
		return $this->contactPhone;
	}
	public function setContactPhone($contactPhone)
	{
		$this->contactPhone = $contactPhone;
		return $this;
	}
	public function getContactEmail()
	{
		return $this->contactEmail;
	}
	public function setContactEmail($contactEmail)
	{
		$this->contactEmail = $contactEmail;
		return $this;
	}
	public function getDemoAccountName()
	{
		return $this->demoAccountName;
	}
	public function setDemoAccountName($demoAccountName)
	{
		$this->demoAccountName = $demoAccountName;
		return $this;
	}
	public function getDemoAccountPassword()
	{
		return $this->demoAccountPassword;
	}
	public function setDemoAccountPassword($demoAccountPassword)
	{
		$this->demoAccountPassword = $demoAccountPassword;
		return $this;
	}
	public function getDemoAccountRequired()
	{
		return $this->demoAccountRequired;
	}
	public function setDemoAccountRequired($demoAccountRequired)
	{
		$this->demoAccountRequired = $demoAccountRequired;
		return $this;
	}
	public function getNotes()
	{
		return $this->notes;
	}
	public function setNotes($notes)
	{
		$this->notes = $notes;
		return $this;
	}

}

class BetaAppReviewDetailUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppReviewDetails';
	public $id;
	protected $attributesType = BetaAppReviewDetailUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

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
	/**
	* @return  BetaAppReviewDetailUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppReviewDetailUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}

class BetaAppReviewDetailUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppReviewDetailUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppReviewDetailUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppReviewDetailUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

