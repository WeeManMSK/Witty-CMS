<?php
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use backend\helper\FormHelper;
use froala\froalaeditor\FroalaEditorWidget;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Page
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($model, 'title', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($model, 'url', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= FroalaEditorWidget::widget([
    'model' => $model,
    'attribute' => 'body',
    'options'=>[// html attributes
        'id'=>'content'
    ],
    'clientOptions'=>[
        'toolbarInline'=> false,
        'theme' =>'royal',//optional: dark, red, gray, royal
        'language'=>'en_gb' // optional: ar, bs, cs, da, de, en_ca, en_gb, en_us ...
    ]
]); ?>