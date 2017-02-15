<?php namespace backend\helper;

use yii;

class Menu
{
    public static function Items()
    {
        return [
            ['label' => '<i class="fa fa-dashboard"></i><span>Dashboard</span>', 'url' => ['/home']],
            ['label' => '<i class="fa fa-briefcase"></i><span>Content</span>', 'url' => ['/content'], 'items' => [
                ['label' => '<i class="fa fa-circle-o"></i>Pages', 'url' => ['/page']],
                ['label' => '<i class="fa fa-circle-o"></i>Blog', 'url' => ['/blog']],
                ['label' => '<i class="fa fa-question"></i>Faq', 'url' => ['/faq']],
                ['label' => '<i class="fa fa-bars"></i>Menu', 'url' => ['/menu']],
                ['label' => '<i class="fa fa-folder"></i>File manager', 'url' => ['/elfinder/manager']],
            ]],
            ['label' => '<i class="fa fa-shopping-basket"></i><span>Shop</span>', 'url' => ['/shop'], 'items' => [
                ['label' => '<i class="fa fa-circle-o"></i><span>Item types</span>', 'url' => ['catalog/type']],
                ['label' => '<i class="fa fa-circle-o"></i><span>Items</span>', 'url' => ['catalog/item']],
                ['label' => '<i class="fa fa-circle-o"></i><span>Attributes</span>', 'url' => ['catalog/attribute']],
                ['label' => '<i class="fa fa-circle-o"></i><span>Attribute groups</span>', 'url' => ['catalog/attribute-group']],
                ['label' => '<i class="fa fa-circle-o"></i><span>Attribute types</span>', 'url' => ['catalog/attribute-type']],
            ]],
            ['label' => '<i class="fa fa-cog"></i><span>Settings</span>', 'url' => ['/settings'], 'visible' => !yii::$app->user->isGuest],
            ['label' => '<i class="fa fa-sign-out"></i><span>Sign out</span>', 'url' => ['/site/logout'], 'visible' => !yii::$app->user->isGuest],
        ];
    }
}