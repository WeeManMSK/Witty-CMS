<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'plugins/font-awesome-4.6.3/css/font-awesome.min.css',
        'plugins/iCheck/square/blue.css'
    ];
    public $js = [
        'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        'plugins/iCheck/icheck.min.js',
        'js/app.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
