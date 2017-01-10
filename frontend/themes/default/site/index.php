<?php

/**
 * @var $this yii\web\View
 * @var $page \common\models\Page
 */

$this->title = $page->title;

$this->theme->init();
?>
<?= $page->body ?>