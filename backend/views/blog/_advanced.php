<?php
use backend\helper\FormHelper;
use mihaildev\elfinder\InputFile;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Blog
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($model, 'image_url', FormHelper::FormHorizontalFieldOptions)->widget(InputFile::className(), [
    'language'      => 'ru',
    'controller'    => 'elfinder',
    'filter'        => 'image',
    'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-default'],
    'multiple'      => false
]); ?>
