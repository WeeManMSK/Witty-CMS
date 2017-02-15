<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Menu $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"Menu",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new menu';

?>
<?= $this->render('_form', ['model'=>$model]) ?>