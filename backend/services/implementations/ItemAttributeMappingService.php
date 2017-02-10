<?php

namespace backend\services\implementations;


use backend\services\interfaces\ICatalogItemAttributeService;
use backend\services\interfaces\IItemAttributeMappingService;
use common\models\CatalogItemAttributeType;
use common\models\ItemAttributeMapping;

class ItemAttributeMappingService extends \common\services\implementations\ItemAttributeMappingService implements IItemAttributeMappingService
{
    private $catalogItemAttributeService;

    public function __construct(ICatalogItemAttributeService $catalogItemAttributeService){
        $this->catalogItemAttributeService = $catalogItemAttributeService;
    }
    /**
     * @param int $attributeId
     * @param int $itemId
     * @return ItemAttributeMapping
     */
    public function getMapping(int $attributeId, int $itemId): ItemAttributeMapping
    {
        $attributeMapping = ItemAttributeMapping::find()
            ->where(['attribute_id'=>$attributeId])
            ->andWhere(['item_id'=>$itemId])
            ->one();

        if ($attributeMapping === null) {
            $attributeMapping = new ItemAttributeMapping();
        }
        $attributeMapping->attribute_id = $attributeId;
        $attributeMapping->item_id = $itemId;

        return $attributeMapping;
    }

    /**
     * @param ItemAttributeMapping $attributeMapping
     * @param mixed $value
     * @return mixed|void
     * @throws \Exception
     */
    public function updateMapping(ItemAttributeMapping $attributeMapping, $value)
    {
        $typeId = $this->catalogItemAttributeService->getTypeId($attributeMapping->attribute_id);

        switch ($typeId){
            case CatalogItemAttributeType::ATTRIBUTE_TEXT:
                $this->updateTextValue($attributeMapping, $value);
                break;
            case CatalogItemAttributeType::ATTRIBUTE_BOOLEAN:
                $this->updateBooleanValue($attributeMapping, $value);
                break;
            default:
                // TODO Add external Exception class
                throw new \Exception("Implementation for attribute type with id $typeId not exist");
        }
    }

    /**
     * @param ItemAttributeMapping $attributeMapping
     * @param $value
     */
    public function updateTextValue(ItemAttributeMapping $attributeMapping, $value): void
    {
        if ($value === "") {
            $attributeMapping->delete();
            return;
        }

        $attributeMapping->value_text = $value;
        $attributeMapping->save();
    }

    /**
     * @param ItemAttributeMapping $attributeMapping
     * @param $value
     */
    public function updateBooleanValue(ItemAttributeMapping $attributeMapping, $value): void
    {
        $attributeMapping->value_boolean = $value === "1";
        $attributeMapping->save();
    }

    /**
     * @param array $attributesPost
     * @param int $itemId
     * @return void
     */
    public function removeBooleanValuesIfNotExist(array $attributesPost, int $itemId)
    {
        $activeRecords = ItemAttributeMapping::find()
            ->joinWith('itemAttribute')
            ->where(['item_id'=>$itemId])
            ->andWhere(['not in','type_id', join(',', $attributesPost)])
            ->all();

        foreach ($activeRecords as $attributeMapping){
            $attributeMapping->value_boolean = 0;
            $attributeMapping->save();
        }
    }
}