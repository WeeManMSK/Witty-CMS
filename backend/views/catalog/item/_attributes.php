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
        <label for="<?=$attr->id ?>" class="col-sm-2 control-label">
            <?= $attr->name ?>
        </label>
        <div class="col-sm-10">
            <?php
            switch ($attr->type_id) {
                case \common\models\CatalogItemAttributeType::ATTRIBUTE_BOOLEAN:
                    echo WtHtml::checkbox('Attribute['.$attr->id.']', $model->getAttributeValue($attr));
                    break;
                default:
                    echo WtHtml::input($attr->type->name, 'Attribute['.$attr->id.']', $model->getAttributeValue($attr), ['class'=>'form-control', 'id'=>$attr->id]);
            }?>
        </div>
        <div class="col-sm-10 col-sm-offset-2"><div class="help-block"></div></div>
    </div>
<?php }?>
