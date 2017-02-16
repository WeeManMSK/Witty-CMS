<?php

namespace backend\services\implementations;


use backend\services\interfaces\ISettingsService;
use Yii;

class SettingsService extends \common\services\implementations\SettingsService implements ISettingsService
{

    /**
     * @param array $post
     * @return bool
     */
    public function save(array $post) : bool
    {
        $settings = $this->get();
        $settings->load($post);

        $result = $settings->save();

        // TODO Add SaveResult object with Result as Boolean and Array with errors
        $session = Yii::$app->session;
        foreach ($settings->errors as $error){
            $session->addFlash('error', $error[0]);
        }

        return $result;
    }
}