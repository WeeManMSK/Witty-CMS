<?php
/**
 * @var $this yii\web\View
 * @var $settings \common\models\Settings
 */

$this->title = $settings->site_name;
?>
<div class="hidden">
    <span id="year"><?= Yii::$app->formatter->asDate($settings->site_start_date, "yyyy");?></span>
    <span id="month"><?= Yii::$app->formatter->asDate($settings->site_start_date, "MM");?></span>
    <span id="day"><?= Yii::$app->formatter->asDate($settings->site_start_date, "dd");?></span>
</div>
<div class="se-pre-con"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-logo-wrapper">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Наш сайт сейчас находится на реконструкции</h1>
            <h3 class="text-center">но скоро он вернется со множеством новых возможностей!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="counter_wrapper">
                <div class="text-center" id="counter"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center copyright">Copyright &copy;  <?= date('Y') ?> </div>
        </div>
    </div>
</div>