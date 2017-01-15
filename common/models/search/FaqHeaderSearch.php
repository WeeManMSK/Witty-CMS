<?php

namespace common\models\search;


use common\models\FaqHeader;
use yii\data\ActiveDataProvider;

class FaqHeaderSearch extends FaqHeader
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = FaqHeader::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'updated_at' => SORT_DESC,
                ]
            ],
        ]);

        return $dataProvider;
    }
}