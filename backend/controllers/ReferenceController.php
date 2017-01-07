<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IReferenceService;

class ReferenceController extends BaseController
{
    private $referenceService;

    public function __construct($id,
                                $module,
                                IReferenceService $referenceService,
                                $config = [] ){
        $this->referenceService = $referenceService;
        parent::__construct($id, $module, $config);
    }

    /**
     * @return string
     */
    public function actionIndex(){
        return $this->render('index',[
            'rows' => $this->referenceService->search(Yii::$app->request->getQueryParams())
        ]);
    }

    /**
     * @return string
     */
    public function actionCreate(){
        $model = $this->referenceService->createBlank();

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $this->referenceService->save($model);
            $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model'=>$model
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionUpdate($id){
        $model = $this->referenceService->get($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $this->referenceService->save($model);
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id){
        $this->referenceService->delete($id);

        $this->redirect(['index']);
    }
}