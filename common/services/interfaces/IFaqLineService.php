<?php

namespace common\services\interfaces;


use common\models\FaqLine;

interface IFaqLineService extends IReferenceService
{

    public function createBlankWithFaq(int $faq_header_id) : FaqLine;
}