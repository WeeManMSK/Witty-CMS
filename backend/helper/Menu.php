<?php namespace backend\helper;

use yii;

class Menu
{
    public static function Items() {
        return  [
            ['label' => '<i class="fa fa-dashboard"></i><span>Dashboard</span>', 'url' => ['/home']],
            ['label' => '<i class="fa fa-briefcase"></i><span>Content</span>', 'url' => ['/content'], 'items' => [
                ['label' => '<i class="fa fa-circle-o"></i>Pages', 'url' => ['/page']],
                ['label' => '<i class="fa fa-circle-o"></i>Blog', 'url' => ['/blog']],
            ]],
            ['label' => '<i class="fa fa-sign-out"></i><span>Sign out</span>', 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest],
        ];
    }
}