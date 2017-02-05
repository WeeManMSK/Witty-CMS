<?php namespace backend\helper;

class Menu
{
    public static function Items() {
        return  [
            ['label' => '<i class="fa fa-dashboard"></i><span>Dashboard</span>', 'url' => ['/home']],
            ['label' => '<i class="fa fa-briefcase"></i><span>Content</span>', 'url' => ['/content'], 'items' => [
                ['label' => '<i class="fa fa-circle-o"></i>Pages', 'url' => ['/page']],
                ['label' => '<i class="fa fa-circle-o"></i>Blog', 'url' => ['/blog']],
                ['label' => '<i class="fa fa-question"></i>Faq', 'url' => ['/faq']],
            ]],
            ['label' => '<i class="fa fa-shopping-basket"></i><span>Shop</span>', 'url' => ['/shop'], 'items' => [
               ['label' => '<i class="fa fa-circle-o"></i><span>Item types</span>', 'url' =>['catalog/type']]
            ]],
            ['label' => '<i class="fa fa-cog"></i><span>Settings</span>', 'url' => ['/settings'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => '<i class="fa fa-sign-out"></i><span>Sign out</span>', 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest],
        ];
    }
}