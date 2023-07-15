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

class AppInfoUpdateRequest_Data_Relationships_PrimaryCategory_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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
class_alias(AppInfoUpdateRequest_Data_Relationships_PrimaryCategory_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_PrimaryCategory_Data');

class AppInfoUpdateRequest_Data_Relationships_PrimaryCategory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data_Relationships_PrimaryCategory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_PrimaryCategory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_PrimaryCategory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships_PrimaryCategory::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_PrimaryCategory');

class AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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
class_alias(AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne_Data');

class AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne');

class AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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
class_alias(AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo_Data');

class AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo');

class AppInfoUpdateRequest_Data_Relationships_SecondaryCategory_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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
class_alias(AppInfoUpdateRequest_Data_Relationships_SecondaryCategory_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_SecondaryCategory_Data');

class AppInfoUpdateRequest_Data_Relationships_SecondaryCategory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data_Relationships_SecondaryCategory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_SecondaryCategory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_SecondaryCategory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships_SecondaryCategory::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_SecondaryCategory');

class AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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
class_alias(AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne_Data');

class AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne');

class AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appCategories';
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
class_alias(AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo_Data');

class AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo');

class AppInfoUpdateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $primaryCategoryType = AppInfoUpdateRequest_Data_Relationships_PrimaryCategory::class;
	protected $primaryCategoryDataType = 'object';
	protected $primarySubcategoryOneType = AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne::class;
	protected $primarySubcategoryOneDataType = 'object';
	protected $primarySubcategoryTwoType = AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo::class;
	protected $primarySubcategoryTwoDataType = 'object';
	protected $secondaryCategoryType = AppInfoUpdateRequest_Data_Relationships_SecondaryCategory::class;
	protected $secondaryCategoryDataType = 'object';
	protected $secondarySubcategoryOneType = AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne::class;
	protected $secondarySubcategoryOneDataType = 'object';
	protected $secondarySubcategoryTwoType = AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo::class;
	protected $secondarySubcategoryTwoDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_PrimaryCategory
	*/
	public function getPrimaryCategory()
	{
		return $this->primaryCategory;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_PrimaryCategory
	*/
	public function setPrimaryCategory($primaryCategory)
	{
		$this->primaryCategory = $primaryCategory;
		return $primaryCategory;
	}
	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne
	*/
	public function getPrimarySubcategoryOne()
	{
		return $this->primarySubcategoryOne;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryOne
	*/
	public function setPrimarySubcategoryOne($primarySubcategoryOne)
	{
		$this->primarySubcategoryOne = $primarySubcategoryOne;
		return $primarySubcategoryOne;
	}
	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo
	*/
	public function getPrimarySubcategoryTwo()
	{
		return $this->primarySubcategoryTwo;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_PrimarySubcategoryTwo
	*/
	public function setPrimarySubcategoryTwo($primarySubcategoryTwo)
	{
		$this->primarySubcategoryTwo = $primarySubcategoryTwo;
		return $primarySubcategoryTwo;
	}
	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_SecondaryCategory
	*/
	public function getSecondaryCategory()
	{
		return $this->secondaryCategory;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_SecondaryCategory
	*/
	public function setSecondaryCategory($secondaryCategory)
	{
		$this->secondaryCategory = $secondaryCategory;
		return $secondaryCategory;
	}
	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne
	*/
	public function getSecondarySubcategoryOne()
	{
		return $this->secondarySubcategoryOne;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryOne
	*/
	public function setSecondarySubcategoryOne($secondarySubcategoryOne)
	{
		$this->secondarySubcategoryOne = $secondarySubcategoryOne;
		return $secondarySubcategoryOne;
	}
	/**
	* @return  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo
	*/
	public function getSecondarySubcategoryTwo()
	{
		return $this->secondarySubcategoryTwo;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships_SecondarySubcategoryTwo
	*/
	public function setSecondarySubcategoryTwo($secondarySubcategoryTwo)
	{
		$this->secondarySubcategoryTwo = $secondarySubcategoryTwo;
		return $secondarySubcategoryTwo;
	}

}
class_alias(AppInfoUpdateRequest_Data_Relationships::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data_Relationships');

class AppInfoUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appInfos';
	public $id;
	protected $relationshipsType = AppInfoUpdateRequest_Data_Relationships::class;
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
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  AppInfoUpdateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppInfoUpdateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(AppInfoUpdateRequest_Data::class, 'AppleService_AppStore_AppInfoUpdateRequest_Data');

class AppInfoUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AppInfoUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppInfoUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppInfoUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppInfoUpdateRequest::class, 'AppleService_AppStore_AppInfoUpdateRequest');

