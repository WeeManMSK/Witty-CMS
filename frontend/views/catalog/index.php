<?php
/**
 * @var $this \yii\web\View
 * @var $items \yii\data\ActiveDataProvider
 */

?>
<div class="row">
    <div class="col-md-3">
        <?= $this->render('_attributeList')?>
    </div>
    <div class="col-md-9">
        <?= $this->render('_items', [
            'items'=>$items
        ])?>
    </div>
</div>