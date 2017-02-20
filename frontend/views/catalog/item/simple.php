<?php
/**
 * @var \common\models\CatalogItem $model
 */
use yii\bootstrap\Html;
?>

<?= $model->name ?>
<?= $model->description ?>
<?= Html::a("Details",['catalog/view','id'=>$model->id])?>
