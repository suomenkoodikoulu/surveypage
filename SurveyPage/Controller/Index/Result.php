<?php

namespace Survey\SurveyPage\Controller\Index;

use Magento\Framework\App\Action\Context;
 
class Result extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
 
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $post = $this->getRequest()->getPost();
        if ($post) {
            $message = $post['message'];
            $this->messageManager->addSuccessMessage('Answer sent!');
        }
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}