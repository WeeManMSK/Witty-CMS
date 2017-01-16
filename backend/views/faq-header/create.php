<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\FaqHeader $model
 */
$this->params['breadcrumbs'][] = [
    'label'=>"FAQ",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add section';
$this->title = 'Add new section to faq';

?>
<?= $this->render('_form', ['model'=>$model]) ?>