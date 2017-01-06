<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IPageService;

class PageController extends BaseController
{
    private $pageService;

    public function __construct($id,
                                $module,
                                IPageService $pageService,
                                $config = [] ){
        $this->pageService = $pageService;
        parent::__construct($id, $module, $config);
    }
    
    public function actionIndex(){
        return $this->render('index',[
            'rows' => $this->pageService->search(Yii::$app->request->getQueryParams())
        ]);
    }
}