<?php
use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $blog \common\models\Blog
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($blog, 'is_visible',  FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>
