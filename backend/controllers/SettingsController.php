<?php

namespace backend\controllers;

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

    public function actionIndex(){
        return $this->render('index', [
            'model'=>$this->settingsService->get()
        ]);
    }
}