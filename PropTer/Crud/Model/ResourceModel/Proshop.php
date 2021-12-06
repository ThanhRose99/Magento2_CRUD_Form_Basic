<?php
namespace PropTer\Crud\Model\ResourceModel;

class Proshop extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('pro_clo', 'prop_id');
    }
}
