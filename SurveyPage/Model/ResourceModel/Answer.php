<?php

namespace Survey\SurveyPage\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Answer extends AbstractDb
{
    /**
     * Answer Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('survey_results', 'survey_id');
    }
}