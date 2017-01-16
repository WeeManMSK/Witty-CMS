<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IFaqHeaderService;

class FaqHeaderController extends ReferenceController
{
    private $faqHeaderService;

    public function __construct($id,
                                $module,
                                IFaqHeaderService $faqHeaderService,
                                $config = [] ){
        $this->faqHeaderService = $faqHeaderService;
        parent::__construct($id, $module, $faqHeaderService, $config);
    }

    public function actionAdd(int $faq_id) {
        $model = $this->faqHeaderService->createBlank();
        if ($model->load(Yii::$app->request->post())
            && $model->validate()
            && $this->faqHeaderService->save($model)){
            $this->redirect(['update','id'=>$model->id]);
        }

        return $this->render('create', [
            'model' => $this->faqHeaderService->createBlankWithFaq($faq_id)
        ]);
    }
}