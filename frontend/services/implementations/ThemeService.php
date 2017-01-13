<?php

namespace frontend\services\implementations;

use common\services\interfaces\ISettingsService;
use frontend\services\interfaces\IThemeService;
use yii;

class ThemeService extends \common\services\implementations\ThemeService implements IThemeService
{
    private $settingsService;

    /**
     * ThemeService constructor.
     * @param ISettingsService $settingsService
     */
    public function __construct(ISettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
    }

    /**
     * @return array
     */
    public function get() : array{
        $theme = $this->settingsService->get()->theme->code;

        Yii::setAlias('@theme', '@frontend/themes/'.$theme);
        return [
            'basePath' => '@app/themes/'.$theme,
            'baseUrl' => '@web/themes/'.$theme,
            'pathMap' => [
                '@app/views' => '@app/themes/'.$theme,
            ],
        ];
    }
}