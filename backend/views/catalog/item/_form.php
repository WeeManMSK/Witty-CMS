<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItem $model
 */
use backend\helper\ErrorHelper;
use backend\extensions\WtHtml;
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
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Basic data</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Attributes</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Images</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <?= $this->render('_basic', ['model'=>$model, 'form'=>$form ])?>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <?= $this->render('_attributes', ['model'=>$model, 'form'=>$form ])?>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <?= $this->render('_images', ['model'=>$model, 'form'=>$form ])?>
                        </div>
                    </div>
                </div>
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