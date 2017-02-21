<?php

namespace frontend\services\implementations;


use common\models\CatalogItemAttribute;
use frontend\services\interfaces\ICatalogItemAttributeService;

class CatalogItemAttributeService extends  \common\services\implementations\CatalogItemAttributeService implements ICatalogItemAttributeService
{

    public function getForSearch($queryParams)
    {
        $attributes = CatalogItemAttribute::find()
            ->all();

        return $attributes;
    }
}