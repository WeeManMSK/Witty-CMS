<?php
use mihaildev\elfinder\InputFile;
use backend\extensions\WtHtml;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\CatalogItem
 * @var $form \yii\widgets\ActiveForm
 */
?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= count($model->images) > 0 ? "Exist images" :"No one image exist. You could add image below"?></h4>
        <div class="row">
            <?php foreach ($model->images as $key=>$image){?>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <label class="control-label" for="<?= $key ?>"><?= $image->title?></label>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="<?= $image->image_url ?>" target="_blank">
                                <img src="<?= $image->image_url ?>" alt="<?= $image->title?>" height="100">
                            </a>
                        </div>
                        <div class="col-md-12 text-center">
                            <?= WtHtml::aAsButton("Remove", ['catalog/image/remove','id'=>$image->id], ['iconClass'=>'fa fa-remove']); ?>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center">Add new image</h4>
        <div class="row">
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
        </div>
    </div>
</div>
