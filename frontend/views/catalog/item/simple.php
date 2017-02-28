<?php
/**
 * @var \common\models\CatalogItem $model
 */
use yii\bootstrap\Html;
?>

<h3 class="title"><?= Html::a($model->name,['catalog/view','id'=>$model->id])?></h3>
<div class="description">
    <?= $model->description ?>
</div>