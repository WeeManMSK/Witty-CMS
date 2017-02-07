<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Attribute",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update attribute';

/**
 * @var \yii\web\View $this
 * @var \common\models\CatalogItemAttribute $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>