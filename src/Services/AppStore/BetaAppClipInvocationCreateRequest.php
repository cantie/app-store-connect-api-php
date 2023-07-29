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

class BetaAppClipInvocationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $url;

	public function getUrl()
	{
		return $this->url;
	}
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

}

class BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBundles';
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

class BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocationLocalizations';
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

class BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class BetaAppClipInvocationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildBundleType = BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle::class;
	protected $buildBundleDataType = 'object';
	protected $betaAppClipInvocationLocalizationsType = BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations::class;
	protected $betaAppClipInvocationLocalizationsDataType = 'object';

	/**
	* @return  BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle
	*/
	public function getBuildBundle()
	{
		return $this->buildBundle;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data_Relationships_BuildBundle
	*/
	public function setBuildBundle($buildBundle)
	{
		$this->buildBundle = $buildBundle;
		return $this;
	}
	/**
	* @return  BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations
	*/
	public function getBetaAppClipInvocationLocalizations()
	{
		return $this->betaAppClipInvocationLocalizations;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data_Relationships_BetaAppClipInvocationLocalizations
	*/
	public function setBetaAppClipInvocationLocalizations($betaAppClipInvocationLocalizations)
	{
		$this->betaAppClipInvocationLocalizations = $betaAppClipInvocationLocalizations;
		return $this;
	}

}

class BetaAppClipInvocationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppClipInvocations';
	protected $attributesType = BetaAppClipInvocationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaAppClipInvocationCreateRequest_Data_Relationships::class;
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
	* @return  BetaAppClipInvocationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  BetaAppClipInvocationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class BetaAppClipInvocationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaAppClipInvocationCreateRequest_Data::class;
	protected $dataDataType = 'object';
	protected $includedType = BetaAppClipInvocationLocalizationInlineCreate::class;
	protected $includedDataType = 'array';

	/**
	* @return  BetaAppClipInvocationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaAppClipInvocationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  BetaAppClipInvocationLocalizationInlineCreate[]
	*/
	public function getIncluded()
	{
		return $this->included;
	}
	/**
	* @param  BetaAppClipInvocationLocalizationInlineCreate[]
	*/
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}

}

