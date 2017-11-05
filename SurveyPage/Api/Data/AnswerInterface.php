<?php

namespace Survey\SurveyPage\Api\Data;

interface AnswerInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SURVEY_ID             = 'post_id';
    const MESSAGE               = 'message';
    /**#@-*/


    /**
     * Get Message
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}