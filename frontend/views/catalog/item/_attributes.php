<?php
/**
 * @var $this \yii\web\View
 * @var $item \common\models\CatalogItem
 */
?>

<?php foreach ($item->attributeMapping as $attributeMapping) {?>
    <?= $attributeMapping->itemAttribute->name  ?> : <?= $attributeMapping->value_boolean ? "Да" : "Нет"?>
<?php }?>