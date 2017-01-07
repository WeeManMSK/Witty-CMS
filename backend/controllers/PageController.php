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

    /**
     * @return string
     */
    public function actionIndex(){
        return $this->render('index',[
            'rows' => $this->pageService->search(Yii::$app->request->getQueryParams())
        ]);
    }

    /**
     * @return string
     */
    public function actionCreate(){
        $page = $this->pageService->createBlank();

        if ($page->load(Yii::$app->request->post()) && $page->validate()){
            $this->pageService->save($page);
            $this->redirect(['update', 'id' => $page->id]);
        }

        return $this->render('create', [
            'model'=>$page
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionUpdate($id){
        $page = $this->pageService->get($id);

        if ($page->load(Yii::$app->request->post()) && $page->validate()){
            $this->pageService->save($page);
        }

        return $this->render('update', [
            'model' => $page
        ]);
    }

    public function actionDelete($id){
        $this->pageService->delete($id);

        $this->redirect(['index']);
    }
}