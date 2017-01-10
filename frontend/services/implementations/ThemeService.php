<?php
/**
 * Created by PhpStorm.
 * User: ternoant
 * Date: 09.01.2017
 * Time: 23:10
 */

namespace frontend\services\implementations;

use yii;

class ThemeService
{
    public function get(){
        $theme = 'default';

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