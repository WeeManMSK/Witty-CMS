<?php
$this->params['breadcrumbs'][] = [
    'label'=>"Blog",
    'url'=> ['index']];
$this->params['breadcrumbs'][] = 'Add';
$this->title='Add new post';

/**
 * @var \yii\web\View $this
 * @var \common\models\Blog $blog
 */
?>

<?= $this->render('_form',[
    'blog'=>$blog
]); ?>