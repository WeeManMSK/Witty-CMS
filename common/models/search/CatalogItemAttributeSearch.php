<?php
namespace common\models\search;

use common\models\CatalogItemAttribute;
use yii\data\ActiveDataProvider;

class CatalogItemAttributeSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = CatalogItemAttribute::find();

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