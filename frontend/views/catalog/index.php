<?php
/**
 * @var $this \frontend\core\View
 * @var $attributes \common\models\CatalogItemAttribute[]
 * @var $items \yii\data\ActiveDataProvider
 * @var $attributeSearch array
 */
$this->title='Catalog';
?>
<div class="row">
    <div class="col-md-3 attribute-list">
        <?= $this->render('_attributeList',[
            'attributes' => $attributes,
            'attributeSearch' => $attributeSearch
        ])?>
    </div>
    <div class="col-md-9 item-list">
        <?= $this->render('_items', [
            'items'=>$items
        ])?>
    </div>
</div>