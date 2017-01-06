<?php
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $blog \common\models\Blog
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($blog, 'title', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($blog, 'subtitle', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($blog, 'url', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($blog, 'content', FormHelper::FormHorizontalFieldOptions)->widget(CKEditor::className(),[
    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false,
        ]
    )]) ?>
