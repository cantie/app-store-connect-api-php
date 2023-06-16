<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class PagingInformation_Paging extends \Cantie\AppStoreConnect\Model
{
    public $total;
    public $limit;

    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the value of limit
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set the value of limit
     *
     * @return  self
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}

class PagingInformation extends \Cantie\AppStoreConnect\Model
{

    protected $pagingType = PagingInformation_Paging::class;
    protected $pagingDataType = '';

    /**
     * Get the value of paging
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * Set the value of paging
     *
     * @return  self
     */
    public function setPaging($paging)
    {
        $this->paging = $paging;

        return $this;
    }
}

class_alias(PagingInformation_Paging::class, 'AppleService_appStore_PagingInformation_Paging');
class_alias(PagingInformation::class, 'AppleService_AppStore_PagingInformation');
