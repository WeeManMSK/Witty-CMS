<?php

namespace backend\services\implementations;


use backend\services\interfaces\ICatalogItemService;
use backend\services\interfaces\IItemAttributeMappingService;

class CatalogItemService extends \common\services\implementations\CatalogItemService implements ICatalogItemService
{
    private $attributeMappingService;

    public function __construct(IItemAttributeMappingService $attributeMappingService){
        $this->attributeMappingService = $attributeMappingService;
    }

    public function updateAttributeValues(array $attributesPost, int $id)
    {
        $this->attributeMappingService->removeBooleanValuesIfNotExist($attributesPost, $id);
        foreach ($attributesPost as $attributeId=>$value){
            $attributeMapping = $this->attributeMappingService->getMapping($attributeId, $id);
            $this->attributeMappingService->updateMapping($attributeMapping, $value);
        }
    }
}