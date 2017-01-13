<?php

namespace backend\controllers;

use yii;
use backend\services\interfaces\ISettingsService;

class SettingsController extends BaseController
{
    private $settingsService;

    public function __construct($id,
                                $module,
                                ISettingsService $settingsService,
                                $config = [] ){
        $this->settingsService = $settingsService;
        parent::__construct($id, $module, $config);
    }

    /**
     * @return string
     */
    public function actionIndex(){
        return $this->render('index', [
            'model'=>$this->settingsService->get()
        ]);
    }

   public function actionSave(){
       $session = Yii::$app->session;
       if ($this->settingsService->save(\Yii::$app->request->post())){
           $session->addFlash('success','Settings saved');
       } else {
           $session->addFlash('error','Settings wasn\'t saved');
       }

       $this->redirect(['index']);
   }
}