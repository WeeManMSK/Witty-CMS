<?php
/**
 * @var $this \yii\web\View
 * @var $header \common\models\FaqHeader
 * @var $index integer
 */
?>

<div class="row">
    <div class="col-md-1">
        <?= $index+1?>
    </div>
    <div class="col-md-9">
        <?= $header->name ?>
    </div>
    <div class="col-md-2">
        <?= \yii\helpers\Html::a('Edit',['/faq-header/update', 'id' => $header->id], ['class' => 'btn btn-default btn-sm']) ?>
        <?= \yii\helpers\Html::a('Delete',['/faq-header/delete', 'id' => $header->id], ['class' => 'btn btn-danger btn-sm']) ?>
    </div>
</div>
