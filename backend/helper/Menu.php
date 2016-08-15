<?php namespace backend\helper;

use Yii;

class Menu
{
    public static function Items() {
        return  [
            ['label' => '<i class="fa fa-dashboard"></i><span>Главная</span>', 'url' => ['/home']],
            ['label' => '<i class="fa fa-briefcase"></i><span>Контент</span>', 'url' => ['/content'], 'items' => [
                ['label' => '<i class="fa fa-circle-o"></i>Страницы', 'url' => ['/page']],
                ['label' => '<i class="fa fa-circle-o"></i>Блог', 'url' => ['/blog']],
            ]],
            ['label' => 'Выход', 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest],
        ];
    }
}