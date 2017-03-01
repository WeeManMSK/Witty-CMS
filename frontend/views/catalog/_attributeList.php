<?php
use yii\helpers\Html;
/**
 * @var $this \yii\web\View
 * @var $attributes \common\models\CatalogItemAttribute[]
 * @var $attributeSearch array
 */

?>

<?php $form = \yii\widgets\ActiveForm::begin()?>
<?php foreach ($attributes as $attribute){?>
    <?= $this->render('attribute/attribute', [ 'attribute'=>$attribute, 'attributeSearch' => $attributeSearch]) ;?>
<?php } ?>
<div class="button">
    <?= Html::submitButton('Search', ['class'=>'btn btn-default'])?>
</div>
<?php \yii\widgets\ActiveForm::end(); ?>
