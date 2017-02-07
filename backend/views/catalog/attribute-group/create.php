<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Attribute group",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new group';

/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItemAttributeGroup $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>