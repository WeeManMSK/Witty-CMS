<?php
namespace common\models\search;

use common\models\CatalogItemAttributeGroup;
use yii\data\ActiveDataProvider;

class CatalogItemAttributeGroupSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = CatalogItemAttributeGroup::find();

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