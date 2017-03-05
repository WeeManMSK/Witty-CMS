<?php
namespace common\models\search;

use common\models\Slide;
use yii\data\ActiveDataProvider;

class SlideSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = Slide::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $dataProvider;
    }
}