<?php

namespace frontend\controllers;

use frontend\services\interfaces\IPageService;
use frontend\services\interfaces\IThemeService;
use yii\base\Theme;
use yii\web\Controller;

class BaseController extends Controller
{
    private $themeService;

    /**
     * BaseController constructor.
     * @param string $id
     * @param \yii\base\Module $module
     * @param array $config
     */
    public function __construct($id,
                                $module,
                                $config = []){
        $this->themeService = \Yii::$container->get(IThemeService::class);
        $themeSettings = $this->themeService->get();
        $this->view->theme = new Theme($themeSettings);
        parent::__construct($id, $module, $config);
    }
}