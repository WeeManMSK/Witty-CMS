<?php

namespace backend\controllers;


use common\services\interfaces\IFaqService;

class FaqController extends ReferenceController
{
    private $faqService;

    public function __construct($id,
                                $module,
                                IFaqService $faqService,
                                $config = [] ){
        $this->faqService = $faqService;
        parent::__construct($id, $module, $faqService, $config);
    }
}