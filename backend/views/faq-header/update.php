<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Faq $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"FAQ section",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update FAQ section';

?>
<?= $this->render('_form', ['model'=>$model]) ?>