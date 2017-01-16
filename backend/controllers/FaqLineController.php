<?php

namespace backend\controllers;

use yii;
use common\services\interfaces\IFaqLineService;

class FaqLineController extends ReferenceController
{
    private $faqLineService;

    public function __construct($id,
                                $module,
                                IFaqLineService $faqLineService,
                                $config = [] ){
        $this->faqLineService = $faqLineService;
        parent::__construct($id, $module, $faqLineService, $config);
    }

    public function actionAdd(int $faq_header_id) {
        $model = $this->faqLineService->createBlank();
        if ($model->load(Yii::$app->request->post())
            && $model->validate()
            && $this->faqHeaderService->save($model)){
            $this->redirect(['update','id'=>$model->id]);
        }

        return $this->render('create', [
            'model' => $this->faqLineService->createBlankWithFaq($faq_header_id)
        ]);
    }
}