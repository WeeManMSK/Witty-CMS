<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Faq $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"FAQ. Questions",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update question';

?>
<?= $this->render('_form', ['model'=>$model]) ?>