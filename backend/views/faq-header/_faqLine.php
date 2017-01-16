<?php
/**
 * @var $this \yii\web\View
 * @var $line \common\models\FaqLine
 * @var $index integer
 */
?>

<div class="row">
    <div class="col-md-1">
        <?= $index+1?>
    </div>
    <div class="col-md-9">
        <?= $line->question ?>
    </div>
    <div class="col-md-2">
        <?= \yii\helpers\Html::a('Edit',['/faq-line/update', 'id' => $line->id], ['class' => 'btn btn-default btn-sm']) ?>
        <?= \yii\helpers\Html::a('Delete',['/faq-line/delete', 'id' => $line->id], ['class' => 'btn btn-danger btn-sm']) ?>
    </div>
</div>
