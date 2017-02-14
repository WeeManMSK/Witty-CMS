<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= $this->render('head') ?>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?= $this->render('footer') ?>
<?php $this->endBody() ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/development-assets/js/bootstrap.min.js"></script>

<!-- fit text -->
<script type="text/javascript" src="/development-assets/js/jquery.fittext.js"></script>

<!-- jquery countdown -->
<script type="text/javascript" src="/development-assets/js/jquery.plugin.js"></script>
<script type="text/javascript" src="/development-assets/js/jquery.countdown.js"></script>

<!--placeholder -->
<script type="text/javascript" src="/development-assets/js/jquery.placeholder.js"></script>

<script type="text/javascript" src="/development-assets/js/scripts.js"></script>
</body>
</html>
<?php $this->endPage() ?>
