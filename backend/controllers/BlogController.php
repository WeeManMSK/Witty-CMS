<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IBlogService;

class BlogController extends BaseController
{
    private $blogService;

    public function __construct($id,
                                $module,
                                IBlogService $blogService,
                                $config = [] ){
        $this->blogService = $blogService;
        parent::__construct($id, $module, $config);
    }


    /**
     * @return string
     */
    public function actionIndex(){
        return $this->render('index',[
            'blog_records' => $this->blogService->search(Yii::$app->request->getQueryParams())
        ]);
    }
}