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

class AppClipDefaultExperienceCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $actionType = AppClipAction::class;
	protected $actionDataType = '';

	/**
	* @return  AppClipAction
	*/
	public function getAction()
	{
		return $this->action;
	}
	/**
	* @param  AppClipAction
	*/
	public function setAction($action)
	{
		$this->action = $action;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest_Data_Attributes::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Attributes');

class AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClips';
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
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip_Data');

class AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip');

class AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion_Data');

class AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion');

class AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
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
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate_Data');

class AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate');

class AppClipDefaultExperienceCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appClipType = AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip::class;
	protected $appClipDataType = 'object';
	protected $releaseWithAppStoreVersionType = AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion::class;
	protected $releaseWithAppStoreVersionDataType = 'object';
	protected $appClipDefaultExperienceTemplateType = AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate::class;
	protected $appClipDefaultExperienceTemplateDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip
	*/
	public function getAppClip()
	{
		return $this->appClip;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClip
	*/
	public function setAppClip($appClip)
	{
		$this->appClip = $appClip;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion
	*/
	public function getReleaseWithAppStoreVersion()
	{
		return $this->releaseWithAppStoreVersion;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships_ReleaseWithAppStoreVersion
	*/
	public function setReleaseWithAppStoreVersion($releaseWithAppStoreVersion)
	{
		$this->releaseWithAppStoreVersion = $releaseWithAppStoreVersion;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate
	*/
	public function getAppClipDefaultExperienceTemplate()
	{
		return $this->appClipDefaultExperienceTemplate;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships_AppClipDefaultExperienceTemplate
	*/
	public function setAppClipDefaultExperienceTemplate($appClipDefaultExperienceTemplate)
	{
		$this->appClipDefaultExperienceTemplate = $appClipDefaultExperienceTemplate;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest_Data_Relationships::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data_Relationships');

class AppClipDefaultExperienceCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appClipDefaultExperiences';
	protected $attributesType = AppClipDefaultExperienceCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppClipDefaultExperienceCreateRequest_Data_Relationships::class;
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
	* @return  AppClipDefaultExperienceCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest_Data::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest_Data');

class AppClipDefaultExperienceCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppClipDefaultExperienceCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppClipDefaultExperienceCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppClipDefaultExperienceCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(AppClipDefaultExperienceCreateRequest::class, 'AppleService_AppStore_AppClipDefaultExperienceCreateRequest');

