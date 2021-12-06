<?php
namespace PropTer\Crud\Block;

class NewA extends \Magento\Framework\View\Element\Template
{
    protected $_bannerFactory;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \PropTer\Crud\ProshopFactory $_bannerFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getPostCollection(){
		$post = $this->_bannerFactory->create();
		return $post->getCollection();
	}
}
