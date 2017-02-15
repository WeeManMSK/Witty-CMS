<?php

namespace common\models\search;


use common\models\Menu;
use yii\data\ActiveDataProvider;

class MenuSearch extends Menu
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = Menu::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);

        return $dataProvider;
    }
}