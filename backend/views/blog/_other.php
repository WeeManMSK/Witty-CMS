<?php
use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Blog
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($model, 'is_visible',  FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>
