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
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="main-wrapper">
    <!-- Page Preloader -->


    <div class="uc-mobile-menu-pusher">
        <div class="content-wrapper">

            <nav class="navbar m-menu navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="<?= $bundle->baseUrl?>/resources/img/logo.png" alt=""></a>
                    </div>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Type Something">
			                                <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
            <section class="ptb-100 gray-bg">
                <?= $content ?>
            </section>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Witty CMS. Demo site <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
