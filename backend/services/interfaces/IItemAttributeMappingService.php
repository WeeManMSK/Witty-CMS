<?php

namespace backend\services\interfaces;


use common\models\ItemAttributeMapping;

interface IItemAttributeMappingService extends \common\services\interfaces\IItemAttributeMappingService
{

    /**
     * @param int $attributeId
     * @param int $itemId
     * @return ItemAttributeMapping
     */
    public function getMapping(int $attributeId, int $itemId) : ItemAttributeMapping;

    /**
     * @param ItemAttributeMapping $attributeMapping
     * @param mixed $value
     * @return mixed
     */
    public function updateMapping(ItemAttributeMapping $attributeMapping, $value);

    /**
     * @param array $attributesPost
     * @param int $itemId
     * @return void
     */
    public function removeBooleanValuesIfNotExist(array $attributesPost, int $itemId);
}