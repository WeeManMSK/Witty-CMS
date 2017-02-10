<?php

namespace backend\services\implementations;


use backend\services\interfaces\ICatalogItemAttributeService;
use common\models\CatalogItemAttribute;

class CatalogItemAttributeService extends \common\services\implementations\CatalogItemAttributeService implements ICatalogItemAttributeService
{

    /**
     * @param int $attribute_id
     * @return int
     */
    public function getTypeId(int $attribute_id): int
    {
        return CatalogItemAttribute::findOne($attribute_id)->type_id;
    }
}