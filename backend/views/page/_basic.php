<?php
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Page
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($model, 'title', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($model, 'url', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($model, 'body', FormHelper::FormHorizontalFieldOptions)->widget(CKEditor::className(),[
    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false,
        ]
    )]) ?>
