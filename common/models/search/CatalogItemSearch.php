<?php
namespace common\models\search;

use common\models\CatalogItem;
use yii\data\ActiveDataProvider;

class CatalogItemSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = CatalogItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_DESC,
                ]
            ],
        ]);

        return $dataProvider;
    }

    public function searchFull($params)
    {
        $query = CatalogItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_DESC,
                ]
            ],
        ]);

        return $dataProvider;
    }
}