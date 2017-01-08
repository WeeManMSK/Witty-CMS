<?php

use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Page
 * @var $form \yii\widgets\ActiveForm
 */

?>
<?= $form->field($model, 'layout', FormHelper::FormHorizontalFieldOptions)->textInput() ?>