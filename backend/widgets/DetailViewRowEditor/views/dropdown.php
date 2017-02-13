<?php
/**
 * @var \yii\base\View $this
 * @var array[] $values
 * @var object $value
 * @var object $attribute
 * @var \yii\base\Model $model
 */
?>

<?= \yii\helpers\BaseHtml::activeDropDownList($model, $attribute, $values, [
    'class'=>'form-control'
])?>