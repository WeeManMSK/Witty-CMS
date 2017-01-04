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

    public function actionCreate(){
        $blog = $this->blogService->createBlank();

        if ($blog->load(Yii::$app->request->post()) && $blog->validate()){
            $this->blogService->save($blog);
            $this->redirect(['update', 'id' => $blog->id]);
        }

        return $this->render('create', [
            'blog' => $blog
        ]);
    }

    public function actionUpdate($id){
        $blog = $this->blogService->get($id);

        if ($blog->load(Yii::$app->request->post()) && $blog->validate()){
            $this->blogService->save($blog);
        }

        return $this->render('update', [
            'blog' => $blog
        ]);
    }
}