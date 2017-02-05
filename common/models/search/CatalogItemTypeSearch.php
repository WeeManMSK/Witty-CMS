<?php
namespace common\models\search;

use common\models\CatalogItemType;
use yii\data\ActiveDataProvider;

class CatalogItemTypeSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = CatalogItemType::find();

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