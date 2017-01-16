<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\Faq $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"FAQ",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update faq';

?>
<?= $this->render('_form', ['model'=>$model]) ?>