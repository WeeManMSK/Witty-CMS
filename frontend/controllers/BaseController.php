<?php

namespace frontend\controllers;

use common\models\Settings;
use frontend\services\interfaces\ISettingsService;
use frontend\services\interfaces\IThemeService;
use yii\base\Theme;
use yii\web\Controller;

class BaseController extends Controller
{
    private $themeService;
    private $settingsService;

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
        $this->settingsService = \Yii::$container->get(ISettingsService::class);
        $this->DevelopmentModeIsEnable();

        $themeSettings = $this->themeService->get();
        $this->view->theme = new Theme($themeSettings);
        parent::__construct($id, $module, $config);
    }

    public function DevelopmentModeIsEnable(): void
    {
        /** @var Settings $settings */
        $settings = $this->settingsService->get();

        if ($settings->is_development) {
            $this->redirect(['/development']);
        }
    }
}