<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Item",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update item';

/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItem $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>