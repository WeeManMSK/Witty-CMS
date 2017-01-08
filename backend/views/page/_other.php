<?php
use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Page
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($model, 'is_index',  FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>
<?= $form->field($model, 'is_visible',  FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>
<?= $form->field($model, 'isDeleted',  FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>
