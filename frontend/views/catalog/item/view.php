<?php
/**
 * @var $this \yii\web\View
 * @var $item \common\models\CatalogItem
 */

$this->title = $item->name
?>

<div class="row">
    <div class="col-md-4">
        <?= $this->render('_images',['item'=>$item]); ?>
    </div>
    <div class="col-md-8">
        <?= $this->render('_description',['item'=>$item]); ?>
        <?= $this->render('_attributes',['item'=>$item]); ?>
    </div>
</div>

