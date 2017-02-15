<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\MenuItem $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"Menu item",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new menu item';

?>
<?= $this->render('_form', ['model'=>$model]) ?>