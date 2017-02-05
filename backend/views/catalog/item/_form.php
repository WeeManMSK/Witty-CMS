<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItem $model
 */
use backend\helper\ErrorHelper;
use backend\extensions\WtHtml;
use backend\helper\FormHelper;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

?>

<?php
$form = ActiveForm::begin([
    'options'=>[
        'class'=>'form-horizontal'
    ],
    'method'=>'post'
]);
?>

<?= ErrorHelper::showErrors($model->errors) ?>

    <div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Main fields</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <?= WtHtml::backToIndexButton()?>
                    <?= WtHtml::saveButton()?>
                </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end() ?>