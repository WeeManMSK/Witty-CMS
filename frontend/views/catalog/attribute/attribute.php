<?php
/**
 * @var $this \yii\web\View
 * @var $attribute \common\models\CatalogItemAttribute
 * @var $attributeSearch array
 */
?>

<?php switch ($attribute->type_id){
    case \common\models\CatalogItemAttributeType::ATTRIBUTE_TEXT:
        break;
    case \common\models\CatalogItemAttributeType::ATTRIBUTE_BOOLEAN:
        echo $this->render('boolean', ['attribute'=>$attribute, 'selected'=>array_key_exists($attribute->id, $attributeSearch) && $attributeSearch[$attribute->id]==1]);
        break;
    default:
        break;
}?>
