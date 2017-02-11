<?php
use mihaildev\elfinder\InputFile;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\CatalogItem
 * @var $form \yii\widgets\ActiveForm
 */
?>

<?= InputFile::widget([
    'language'   => 'ru',
    'controller' => 'elfinder',
    'filter'     => 'image',
    'name'       => 'image',
    'template'      => '
        <div class="form-group">
            <label class="col-sm-2 control-label">
                    Image link
            </label>
            <div class="col-sm-10">
                <div class="input-group">{input}<span class="input-group-btn">{button}</span></div>
            </div>
        </div>',
    'value'      => '',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-default'],
]); ?>