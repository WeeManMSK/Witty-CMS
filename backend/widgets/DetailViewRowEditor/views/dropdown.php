<?php
/**
 * @var \yii\base\View $this
 * @var array[] $values
 * @var object $value
 * @var \yii\base\Model $model
 */
?>

<?= \yii\helpers\BaseHtml::activeDropDownList($model, 'theme_id', $values, [
    'class'=>'form-control'
])?>