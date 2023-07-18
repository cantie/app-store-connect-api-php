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

class BetaAppClipInvocationLocalizationInlineCreate_Attributes extends \Cantie\AppStoreConnect\Model
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
		return $this;
	}
	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}

}
class_alias(BetaAppClipInvocationLocalizationInlineCreate_Attributes::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationInlineCreate_Attributes');

class BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation_Data::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation_Data');

class BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation');

class BetaAppClipInvocationLocalizationInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $betaAppClipInvocationType = BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation::class;
	protected $betaAppClipInvocationDataType = 'object';

	/**
	* @return  BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation
	*/
	public function getBetaAppClipInvocation()
	{
		return $this->betaAppClipInvocation;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationInlineCreate_Relationships_BetaAppClipInvocation
	*/
	public function setBetaAppClipInvocation($betaAppClipInvocation)
	{
		$this->betaAppClipInvocation = $betaAppClipInvocation;
		return $this;
	}

}
class_alias(BetaAppClipInvocationLocalizationInlineCreate_Relationships::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationInlineCreate_Relationships');

class BetaAppClipInvocationLocalizationInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocationLocalizations';
	public $id;
	protected $attributesType = BetaAppClipInvocationLocalizationInlineCreate_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppClipInvocationLocalizationInlineCreate_Relationships::class;
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
	* @return  BetaAppClipInvocationLocalizationInlineCreate_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationInlineCreate_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BetaAppClipInvocationLocalizationInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(BetaAppClipInvocationLocalizationInlineCreate::class, 'AppleService_AppStore_BetaAppClipInvocationLocalizationInlineCreate');

