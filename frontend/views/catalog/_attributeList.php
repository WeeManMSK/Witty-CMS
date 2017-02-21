<?php
/**
 * @var $this \yii\web\View
 * @var $attributes \common\models\CatalogItemAttribute[]
 */

?>

<h3 class="text-center">Attribute List</h3>
<?php $form = \yii\widgets\ActiveForm::begin()?>
<?php foreach ($attributes as $attribute){?>
    <?= $attribute->name ?>
<?php } ?>
<?php \yii\widgets\ActiveForm::end(); ?>
