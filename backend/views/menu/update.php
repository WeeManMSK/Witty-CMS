<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Menu $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"Menu",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update menu';

?>
<?= $this->render('_form', ['model'=>$model]) ?>