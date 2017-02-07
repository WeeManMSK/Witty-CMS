<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Attribute type",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new type';

/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItemAttributeType $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>