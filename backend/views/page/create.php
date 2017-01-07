<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Page",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new page';

/**
 * @var \yii\web\View $this
 * @var \common\models\Page $model
 */
?>

<?= $this->render('_form',[
    'model'=>$model
]); ?>