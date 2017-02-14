<?php

namespace frontend\controllers;


use yii\web\Controller;

class DevelopmentController extends Controller
{
    public $layout = '@app/views/development/layout/layout';
    public function actionIndex(){
        return $this->render('index');
    }
}