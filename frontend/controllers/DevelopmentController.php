<?php

namespace frontend\controllers;


use frontend\services\interfaces\ISettingsService;
use yii\web\Controller;

class DevelopmentController extends Controller
{
    public $layout = '@app/views/development/layout/layout';
    private $settingsService;

    /**
     * BaseController constructor.
     * @param string $id
     * @param \yii\base\Module $module
     * @param array $config
     */
    public function __construct($id,
                                $module,
                                ISettingsService $settingsService,
                                $config = []){
        $this->settingsService = $settingsService;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex(){
        $settings = $this->settingsService->get();

        return $this->render('index', [
            'settings' => $settings
        ]);
    }
}