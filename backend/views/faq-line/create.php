<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Faq $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"FAQ. Questions",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new questions';

?>
<?= $this->render('_form', ['model'=>$model]) ?>