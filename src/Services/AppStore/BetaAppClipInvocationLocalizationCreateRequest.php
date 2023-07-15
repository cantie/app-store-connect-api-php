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

class BetaAppClipInvocationLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $title;
	public $locale;

	public function getTitle()
	{
		return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
		return $title;
	}
	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $locale;
	}

}
class_alias(BetaAppClipInvocationLocalizationCreateRequest_Data_Attributes::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationCreateRequest_Data_Attributes');

class BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocations';
	public $id;

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

}
class_alias(BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation_Data::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation_Data');

class BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation');

class BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $betaAppClipInvocationType = BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation::class;
	protected $betaAppClipInvocationDataType = 'object';

	/**
	* @return  BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation
	*/
	public function getBetaAppClipInvocation()
	{
		return $this->betaAppClipInvocation;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships_BetaAppClipInvocation
	*/
	public function setBetaAppClipInvocation($betaAppClipInvocation)
	{
		$this->betaAppClipInvocation = $betaAppClipInvocation;
		return $betaAppClipInvocation;
	}

}
class_alias(BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships');

class BetaAppClipInvocationLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocationLocalizations';
	protected $attributesType = BetaAppClipInvocationLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	/**
	* @return  BetaAppClipInvocationLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(BetaAppClipInvocationLocalizationCreateRequest_Data::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationCreateRequest_Data');

class BetaAppClipInvocationLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppClipInvocationLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppClipInvocationLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaAppClipInvocationLocalizationCreateRequest::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationCreateRequest');

