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

class BuildIcon_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $name;
	protected $iconAssetType = ImageAsset::class;
	protected $iconAssetDataType = '';
	protected $iconTypeType = IconAssetType::class;
	protected $iconTypeDataType = '';

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	/**
	* @return  ImageAsset
	*/
	public function getIconAsset()
	{
		return $this->iconAsset;
	}
	/**
	* @param  ImageAsset
	*/
	public function setIconAsset($iconAsset)
	{
		$this->iconAsset = $iconAsset;
		return $this;
	}
	/**
	* @return  IconAssetType
	*/
	public function getIconType()
	{
		return $this->iconType;
	}
	/**
	* @param  IconAssetType
	*/
	public function setIconType($iconType)
	{
		$this->iconType = $iconType;
		return $this;
	}

}
class_alias(BuildIcon_Attributes::class, 'AppleService_AppStore_BuildIcon_Attributes');

class BuildIcon extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildIcons';
	public $id;
	protected $attributesType = BuildIcon_Attributes::class;
	protected $attributesDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

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
	* @return  BuildIcon_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BuildIcon_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}
class_alias(BuildIcon::class, 'AppleService_AppStore_BuildIcon');

