<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Blog",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->title='Update post';

/**
 * @var \yii\web\View $this
 * @var \common\models\Blog $blog
 */
?>

<?= $this->render('_form',[
    'blog'=>$blog
]); ?>