<?php
namespace common\models\search;

use common\models\SlideText;
use yii\data\ActiveDataProvider;

class SlideTextSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = SlideText::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $dataProvider;
    }
}