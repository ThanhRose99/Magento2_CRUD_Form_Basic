<?php
namespace PropTer\Crud\Model\ResourceModel\Proshop;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'prop_id';
    protected $_eventPrefix = 'propter_crud_proshop_collection';
    protected $_eventObject = 'proshop_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('PropTer\Crud\Model\Proshop', 'PropTer\Crud\Model\ResourceModel\Proshop');
    }
}
