<?php

namespace common\services\interfaces;


use yii\db\ActiveRecord;

interface IFaqHeaderService extends IReferenceService
{
    /**
     * @return ActiveRecord
     */
    public function createBlankWithFaq(int $faq_id) : ActiveRecord;
}