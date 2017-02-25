<?php
/**
 * @var $this \yii\web\View
 * @var $attribute \common\models\CatalogItemAttribute
 * @var $selected boolean
 */
?>
<div class="row">
    <label for="<?= $attribute->id ?>" class="control-label col-md-10"><?= $attribute->name?></label>
    <div class="col-md-2">
        <?= \yii\helpers\Html::checkbox('attribute['.$attribute->id.']', $selected, []) ?>
    </div>
</div>