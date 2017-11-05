<?php

namespace Survey\SurveyPage\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Survey\SurveyPage\Api\Data\AnswerInterface;

/**
 * Class File
 * @package Survey\SurveyPage\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Answer extends AbstractModel implements AnswerInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'survey_results';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Answer');
    }

    /**
     * Get Message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->getData(self::MESSAGE);
    }

    /**
     * Set Message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        return $this->setData(self::MESSAGE, $message);
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::SURVEY_ID);
    }
        
    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::SURVEY_ID, $id);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}