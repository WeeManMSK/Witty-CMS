<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IBlogService;

class BlogController extends ReferenceController
{
    private $blogService;

    public function __construct($id,
                                $module,
                                IBlogService $blogService,
                                $config = [] ){
        $this->blogService = $blogService;
        parent::__construct($id, $module, $blogService, $config);
    }

}