<?php

namespace common\services\implementations;

use common\models\search\BlogSearch;
use common\services\interfaces\IBlogService;
use yii\data\ActiveDataProvider;

class BlogService implements IBlogService
{

    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params): ActiveDataProvider
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search($params);

        return $dataProvider;
    }
}