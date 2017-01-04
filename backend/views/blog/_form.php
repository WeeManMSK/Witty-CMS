<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Blog $blog
 */
use backend\helper\ErrorHelper;
use backend\helper\FormHelper;
use backend\extensions\WtHtml;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;
use yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin([
    'options'=>[
        'class'=>'form-horizontal'
    ],
    'method'=>'post'
]);
?>

<?= ErrorHelper::showErrors($blog->errors) ?>

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
                <?= $form->field($blog, 'title', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
                <?= $form->field($blog, 'subtitle', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
                <?= $form->field($blog, 'url', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
                <?= $form->field($blog, 'image_url', FormHelper::FormHorizontalFieldOptions)->widget(InputFile::className(), [
                    'language'      => 'ru',
                    'controller'    => 'elfinder',
                    'filter'        => 'image',
                    'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                    'options'       => ['class' => 'form-control'],
                    'buttonOptions' => ['class' => 'btn btn-default'],
                    'multiple'      => false
                ]); ?>
                <?= $form->field($blog, 'content', FormHelper::FormHorizontalFieldOptions)->widget(CKEditor::className(),[
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false,
                        ]
                    )]) ?>
                <?= $form->field($blog, 'is_visible',  FormHelper::FormHorizontalCheckboxOptions)->checkbox() ?>
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