<?php

namespace backend\services\interfaces;


interface ICatalogItemAttributeService extends \common\services\interfaces\ICatalogItemAttributeService
{

    /**
     * @param int $attribute_id
     * @return int
     */
    public function getTypeId(int $attribute_id): int ;
}