<?php
use yii\bootstrap\Tabs;
/**
 * @var $this \yii\web\View
 * @var $item \common\models\CatalogItem
 */

$this->title = $item->name
?>

<div class="row">
    <div class="col-md-4">
        <?= $this->render('_images',['item'=>$item]); ?>
    </div>
    <div class="col-md-8">
        <?= Tabs::widget([
            'items'=>[
                [
                    'label'=>'Description',
                    'content' => $this->render('_description',['item'=>$item]),
                    'active'=>true
                ],
                [
                    'label'=>'Details',
                    'content' => $this->render('_attributes',['item'=>$item]),
                    'active'=>false
                ]
            ]
        ])?>
    </div>
</div>

