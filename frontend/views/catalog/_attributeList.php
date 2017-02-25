<?php
use yii\helpers\Html;
/**
 * @var $this \yii\web\View
 * @var $attributes \common\models\CatalogItemAttribute[]
 * @var $attributeSearch array
 */

?>

<h3 class="text-center">Attribute List</h3>
<?php $form = \yii\widgets\ActiveForm::begin()?>
<?php foreach ($attributes as $attribute){?>
    <?= $this->render('attribute/attribute', [ 'attribute'=>$attribute, 'attributeSearch' => $attributeSearch]) ;?>
<?php } ?>
<?= Html::submitButton('Search', ['class'=>'btn btn-default'])?>
<?php \yii\widgets\ActiveForm::end(); ?>
