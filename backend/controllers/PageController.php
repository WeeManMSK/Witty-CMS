<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IPageService;

class PageController extends ReferenceController
{
    private $pageService;

    public function __construct($id,
                                $module,
                                IPageService $pageService,
                                $config = [] ){
        $this->pageService = $pageService;
        parent::__construct($id, $module, $pageService, $config);
    }
   
}