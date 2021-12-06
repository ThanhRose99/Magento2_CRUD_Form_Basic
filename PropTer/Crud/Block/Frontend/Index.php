<?php
namespace PropTer\Crud\Block\Frontend;

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

    public function getNewUrl(){
        return $this->getUrl('proshop/shop/newproduct');
    }

    public function getEditPageUrl(){
        return $this->getUrl('proshop/shop/editproduct');
    }

    public function getDeleteUrl($id){
        return $this->getUrl('proshop/shop/delete', ['id' => $id]);
    }

    public function getIndexUrl(){
        return $this->getUrl('proshop/shop/index');
    }

    public function getPostUrl(){
        return $this->getUrl('proshop/shop/save');
    }
}
