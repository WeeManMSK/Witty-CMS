<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Item item",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new item';

/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItem $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>