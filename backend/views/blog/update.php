<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Блог",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Изменение';
$this->title='Изменение записи';

/**
 * @var \yii\web\View $this
 * @var \common\models\Blog $blog
 */
?>

<?= $this->render('_form',[
    'blog'=>$blog
]); ?>