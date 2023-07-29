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

class SubscriptionGroup_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $referenceName;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $this;
	}

}

class SubscriptionGroup_Relationships_Subscriptions_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class SubscriptionGroup_Relationships_Subscriptions_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptions';
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

class SubscriptionGroup_Relationships_Subscriptions extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionGroup_Relationships_Subscriptions_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = SubscriptionGroup_Relationships_Subscriptions_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionGroup_Relationships_Subscriptions_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionGroup_Relationships_Subscriptions_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  SubscriptionGroup_Relationships_Subscriptions_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionGroup_Relationships_Subscriptions_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroupLocalizations';
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

class SubscriptionGroup_Relationships_SubscriptionGroupLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionGroup_Relationships_SubscriptionGroupLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class SubscriptionGroup_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $subscriptionsType = SubscriptionGroup_Relationships_Subscriptions::class;
	protected $subscriptionsDataType = 'object';
	protected $subscriptionGroupLocalizationsType = SubscriptionGroup_Relationships_SubscriptionGroupLocalizations::class;
	protected $subscriptionGroupLocalizationsDataType = 'object';

	/**
	* @return  SubscriptionGroup_Relationships_Subscriptions
	*/
	public function getSubscriptions()
	{
		return $this->subscriptions;
	}
	/**
	* @param  SubscriptionGroup_Relationships_Subscriptions
	*/
	public function setSubscriptions($subscriptions)
	{
		$this->subscriptions = $subscriptions;
		return $this;
	}
	/**
	* @return  SubscriptionGroup_Relationships_SubscriptionGroupLocalizations
	*/
	public function getSubscriptionGroupLocalizations()
	{
		return $this->subscriptionGroupLocalizations;
	}
	/**
	* @param  SubscriptionGroup_Relationships_SubscriptionGroupLocalizations
	*/
	public function setSubscriptionGroupLocalizations($subscriptionGroupLocalizations)
	{
		$this->subscriptionGroupLocalizations = $subscriptionGroupLocalizations;
		return $this;
	}

}

class SubscriptionGroup extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionGroups';
	public $id;
	protected $attributesType = SubscriptionGroup_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = SubscriptionGroup_Relationships::class;
	protected $relationshipsDataType = 'object';
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
	* @return  SubscriptionGroup_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  SubscriptionGroup_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  SubscriptionGroup_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionGroup_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
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

