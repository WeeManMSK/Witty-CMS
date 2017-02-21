<?php

namespace frontend\services\interfaces;


interface ICatalogItemAttributeService extends \common\services\interfaces\ICatalogItemAttributeService
{
    public function getForSearch($queryParams);
}