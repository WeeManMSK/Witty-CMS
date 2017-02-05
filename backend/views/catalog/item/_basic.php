<?php
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use backend\helper\FormHelper;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\CatalogItem
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= $form->field($model, 'name', \backend\helper\FormHelper::FormHorizontalFieldOptions)->textInput() ?>
<?= $form->field($model, 'type_id', \backend\helper\FormHelper::FormHorizontalFieldOptions)->dropDownList($model->typeDropdownList) ?>
<?= $form->field($model, 'description', FormHelper::FormHorizontalFieldOptions)->widget(CKEditor::className(),[
    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false,
        ]
    )]) ?>
<?= $form->field($model, 'description_full', FormHelper::FormHorizontalFieldOptions)->widget(CKEditor::className(),[
    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false,
        ]
    )]) ?>
<?= $form->field($model, 'is_deleted', \backend\helper\FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>

