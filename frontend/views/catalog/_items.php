<?php
/**
 * @var $this \yii\web\View
 * @var $items \yii\data\ActiveDataProvider
 */
?>

<?= \yii\widgets\ListView::widget([
    'dataProvider' => $items,
    'itemView' => 'item/simple',
    'layout' => "{items}\n<div class='col-md-12 text-center'>{pager}</div>",
    'viewParams' => [
        'fullView' => false
    ],
    'pager' => [
        'options'=>['class'=>'pagination'],
    ]
])?>
