<?php

namespace Survey\SurveyPage\Controller\Index;

use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\ObjectManagerInterface;
 
class Result extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $_objectManager;
 
    public function __construct(Context $context,
                                PageFactory $resultPageFactory,
                                ObjectManagerInterface $objectManager)
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_objectManager = $objectManager;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $post = $this->getRequest()->getPost();
        if ($post && isset($post['message'])) {
            $message = $post['message'];
            $model = $this->_objectManager->create('Survey\SurveyPage\Model\Answer');
            $model->setMessage($message);
            $model->save();
        }
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}