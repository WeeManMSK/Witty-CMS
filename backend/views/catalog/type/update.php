<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Item type",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update type';

/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItemType $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>