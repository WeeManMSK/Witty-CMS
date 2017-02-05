<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Item type",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new type';

/**
 * @var \yii\web\View $this
 * @var \common\models\Blog $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>