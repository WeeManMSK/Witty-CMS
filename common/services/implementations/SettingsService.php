<?php

namespace common\services\implementations;


use common\models\Settings;
use common\services\interfaces\ISettingsService;
use yii\web\NotFoundHttpException;

class SettingsService implements ISettingsService
{

    /**
     * @return Settings
     * @throws NotFoundHttpException
     */
    public function get() : Settings
    {
        $model = Settings::find()->one();

        if ($model === null){
            throw new NotFoundHttpException();
        }

        return $model;
    }
}