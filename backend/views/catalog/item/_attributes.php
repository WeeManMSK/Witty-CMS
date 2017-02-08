<?php
use backend\extensions\WtHtml;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\CatalogItem
 * @var $form \yii\widgets\ActiveForm
 */

?>
<?php foreach ($model->possibleAttributes as $attr){?>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label">
            <?= $attr->name ?>
        </label>
        <div class="col-sm-10">
            <?php // TODO Add check for boolean and render checkbox?>
            <?= WtHtml::input($attr->type->name, null, null, ['class'=>'form-control'])?>
        </div>
        <div class="col-sm-10 col-sm-offset-2"><div class="help-block"></div></div>
    </div>
<?php }?>
