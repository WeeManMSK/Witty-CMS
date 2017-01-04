<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Блог",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Добавление';
$this->title='Добавление новой записи';

/**
 * @var \yii\web\View $this
 * @var \common\models\Blog $blog
 */
?>

<?= $this->render('_form',[
    'blog'=>$blog
]); ?>