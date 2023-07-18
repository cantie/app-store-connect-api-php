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

class AppStoreVersionExperimentTreatmentCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	public $appIconName;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getAppIconName()
	{
		return $this->appIconName;
	}
	public function setAppIconName($appIconName)
	{
		$this->appIconName = $appIconName;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data_Attributes');

class AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
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
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data');

class AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment');

class AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperiments';
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
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data');

class AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2 extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2');

class AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appStoreVersionExperimentType = AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment::class;
	protected $appStoreVersionExperimentDataType = 'object';
	protected $appStoreVersionExperimentV2Type = AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2::class;
	protected $appStoreVersionExperimentV2DataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment
	*/
	public function getAppStoreVersionExperiment()
	{
		return $this->appStoreVersionExperiment;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperiment
	*/
	public function setAppStoreVersionExperiment($appStoreVersionExperiment)
	{
		$this->appStoreVersionExperiment = $appStoreVersionExperiment;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2
	*/
	public function getAppStoreVersionExperimentV2()
	{
		return $this->appStoreVersionExperimentV2;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships_AppStoreVersionExperimentV2
	*/
	public function setAppStoreVersionExperimentV2($appStoreVersionExperimentV2)
	{
		$this->appStoreVersionExperimentV2 = $appStoreVersionExperimentV2;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships');

class AppStoreVersionExperimentTreatmentCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionExperimentTreatments';
	protected $attributesType = AppStoreVersionExperimentTreatmentCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships::class;
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
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentTreatmentCreateRequest_Data::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest_Data');

class AppStoreVersionExperimentTreatmentCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppStoreVersionExperimentTreatmentCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppStoreVersionExperimentTreatmentCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppStoreVersionExperimentTreatmentCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppStoreVersionExperimentTreatmentCreateRequest::class, 'AppleService_AppStore_AppStoreVersionExperimentTreatmentCreateRequest');

