<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\MenuItem $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"Menu item",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update menu item';

?>
<?= $this->render('_form', ['model'=>$model]) ?>