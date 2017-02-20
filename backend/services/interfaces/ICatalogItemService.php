<?php

namespace backend\services\interfaces;


interface ICatalogItemService extends \common\services\interfaces\ICatalogItemService
{
    public function updateAttributeValues(array $attributesPost, int $id);
}