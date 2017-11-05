<?php

namespace Survey\SurveyPage\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Survey\SurveyPage\Model\ResourceModel\Answer\Collection as AnswerCollection;
use \Survey\SurveyPage\Model\ResourceModel\Answer\CollectionFactory as AnswerCollectionFactory;
use \Survey\SurveyPage\Model\Answer;

class AnswerTemplate extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_answerCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param AnswerCollectionFactory $answerCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        AnswerCollectionFactory $answerCollectionFactory,
        array $data = []
    ) {
        $this->_answerCollectionFactory = $answerCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Answer[]
     */
    public function getAnswers()
    {
        /** @var AnswerCollection $answerCollection */
        $answerCollection = $this->_answerCollectionFactory->create();
        $answerCollection->addFieldToSelect('*')->load();
        return $answerCollection->getItems();
    }
}