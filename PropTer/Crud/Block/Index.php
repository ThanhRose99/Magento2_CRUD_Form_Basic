<?php
namespace PropTer\Crud\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $_bannerFactory;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \PropTer\Crud\Model\ProshopFactory $_bannerFactory,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->_bannerFactory = $_bannerFactory;
        parent::__construct($context, $data);
    }

    public function getPostCollection(){
		$post = $this->_bannerFactory->create();
		return $post->getCollection();
	}
}
