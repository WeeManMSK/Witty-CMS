<?php

namespace frontend\services\implementations;


use common\models\search\CatalogItemSearch;
use frontend\services\interfaces\ICatalogItemService;
use yii\data\ActiveDataProvider;

class CatalogItemService extends \common\services\implementations\CatalogItemService implements ICatalogItemService
{
    public function search(array $params): ActiveDataProvider
    {
        $searchModel = new CatalogItemSearch();
        $dataProvider = $searchModel->searchFull($params);

        return $dataProvider;
    }

}