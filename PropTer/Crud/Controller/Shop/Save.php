<?php
namespace PropTer\Crud\Controller\Shop;

use PropTer\Crud\Model\Proshop;
use PropTer\Crud\Model\ResourceModel\Proshop as ProshopResourceModel;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;


    private $_proshop;
    /**
     * @var HeroResourceModel
     */
    private $_proshopResourceModel;


    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory,
       Proshop $proshop,
       ProshopResourceModel $proshopResourceModel
    )
    {
        $this->_proshop = $proshop;
        $this->_proshopResourceModel = $proshopResourceModel;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $proshop = $this->_proshop->setData($params);//TODO: Challenge Modify here to support the edit save functionality
        try {
            $this->_proshopResourceModel->save($proshop);
            $this->messageManager->addSuccessMessage(__("Successfully added the Products %1", $params['name']));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        /* Redirect back to hero display page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('proshop/shop/index');
        return $redirect;
    }
}
