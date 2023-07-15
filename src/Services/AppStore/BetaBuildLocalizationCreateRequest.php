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

class BetaBuildLocalizationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $whatsNew;
	public $locale;

	public function getWhatsNew()
	{
		return $this->whatsNew;
	}
	public function setWhatsNew($whatsNew)
	{
		$this->whatsNew = $whatsNew;
		return $whatsNew;
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
class_alias(BetaBuildLocalizationCreateRequest_Data_Attributes::class, 'AppleService_AppStore_BetaBuildLocalizationCreateRequest_Data_Attributes');

class BetaBuildLocalizationCreateRequest_Data_Relationships_Build_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaBuildLocalizationCreateRequest_Data_Relationships_Build_Data::class, 'AppleService_AppStore_BetaBuildLocalizationCreateRequest_Data_Relationships_Build_Data');

class BetaBuildLocalizationCreateRequest_Data_Relationships_Build extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaBuildLocalizationCreateRequest_Data_Relationships_Build_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaBuildLocalizationCreateRequest_Data_Relationships_Build_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaBuildLocalizationCreateRequest_Data_Relationships_Build_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaBuildLocalizationCreateRequest_Data_Relationships_Build::class, 'AppleService_AppStore_BetaBuildLocalizationCreateRequest_Data_Relationships_Build');

class BetaBuildLocalizationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $buildType = BetaBuildLocalizationCreateRequest_Data_Relationships_Build::class;
	protected $buildDataType = 'object';

	/**
	* @return  BetaBuildLocalizationCreateRequest_Data_Relationships_Build
	*/
	public function getBuild()
	{
		return $this->build;
	}
	/**
	* @param  BetaBuildLocalizationCreateRequest_Data_Relationships_Build
	*/
	public function setBuild($build)
	{
		$this->build = $build;
		return $build;
	}

}
class_alias(BetaBuildLocalizationCreateRequest_Data_Relationships::class, 'AppleService_AppStore_BetaBuildLocalizationCreateRequest_Data_Relationships');

class BetaBuildLocalizationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaBuildLocalizations';
	protected $attributesType = BetaBuildLocalizationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaBuildLocalizationCreateRequest_Data_Relationships::class;
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
	* @return  BetaBuildLocalizationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaBuildLocalizationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaBuildLocalizationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaBuildLocalizationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(BetaBuildLocalizationCreateRequest_Data::class, 'AppleService_AppStore_BetaBuildLocalizationCreateRequest_Data');

class BetaBuildLocalizationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = BetaBuildLocalizationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  BetaBuildLocalizationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaBuildLocalizationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaBuildLocalizationCreateRequest::class, 'AppleService_AppStore_BetaBuildLocalizationCreateRequest');

