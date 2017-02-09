<?php
namespace common\services\interfaces;

interface ICatalogItemService extends IReferenceService
{
    public function updateAttributeValues(array $attributesPost, int $id);
}