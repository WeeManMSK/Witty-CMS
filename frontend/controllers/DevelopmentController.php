<?php

namespace frontend\controllers;


use yii\web\Controller;

class DevelopmentController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}