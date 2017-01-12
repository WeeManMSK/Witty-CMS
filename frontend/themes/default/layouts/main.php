<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;
/** @var \frontend\services\interfaces\IMenuItemService $menuService */
$menuService = Yii::$container->get(\frontend\services\interfaces\IMenuItemService::class);

$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= $this->render('head') ?>
<body>
<?php $this->beginBody() ?>
<div id="main-wrapper">
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <div class="uc-mobile-menu-pusher">
        <div class="content-wrapper">
            <nav class="navbar m-menu navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="<?= $bundle->baseUrl?>/resources/img/logo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <?= Menu::widget([
                            'items' => $menuService->getItems(\common\models\MenuType::HEADER),
                            'encodeLabels' => false,
                            'options'=> [
                                'class'=>'nav navbar-nav navbar-right main-nav'
                            ],
                            'submenuTemplate' => "\n<ul class='dropdown-menu'>\n{items}\n</ul>\n"
                        ]);?>
                    </div>
                </div>
            </nav>
            <section class="x-features">
                <section class="section-title">
                    <div class="container text-center">
                        <h2><?= $this->title?></h2>
                        <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                    </div>
                </section>
                <div class="container">
                    <?= $content ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?= $this->render('footer', ['menuService'=>$menuService]) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
