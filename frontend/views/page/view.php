<?php
/**
 * @var $this \frontend\core\View
 * @var $page \common\models\Page
 */
$this->title = $page->title;
?>
<div class="row">
    <div class="col-md-12">
        <?= $page->body ?>
    </div>
</div>
