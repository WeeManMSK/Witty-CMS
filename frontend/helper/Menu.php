<?php
namespace frontend\helper;

use Yii;

class Menu
{
    public static function  Items(){
        return  [
            ['label' => 'Home', 'url' => ['site/index']],
            ['label' => 'Products', 'url' => ['product/index'], 'items' => [
                ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
            ]],
            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
        ];
    }
}