<?php
/**
 * @var $this \yii\web\View
 * @var $attributes \common\models\CatalogItemAttribute[]
 * @var $items \yii\data\ActiveDataProvider
 */

?>
<div class="row">
    <div class="col-md-3 attribute-list">
        <?= $this->render('_attributeList',[
                'attributes' => $attributes
        ])?>
    </div>
    <div class="col-md-9">
        <?= $this->render('_items', [
            'items'=>$items
        ])?>
    </div>
</div>