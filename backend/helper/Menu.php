<?php namespace backend\helper;

use Yii;

class Menu
{
    public static function Items() {
        return  [
            ['label' => 'Главная', 'url' => ['/home']],
            ['label' => 'Контент', 'url' => ['/content'], 'items' => [
                ['label' => 'Страницы', 'url' => ['/page']],
                ['label' => 'Блог', 'url' => ['/blog']],
            ]],
            ['label' => 'Выход', 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest],
        ];
    }
}