<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Faq $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"FAQ",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new faq';

?>
<?= $this->render('_form', ['model'=>$model]) ?>