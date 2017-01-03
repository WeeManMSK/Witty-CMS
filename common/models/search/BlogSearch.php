<?php
namespace common\models\search;

use common\models\Blog;
use yii\data\ActiveDataProvider;

class BlogSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = Blog::find();

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