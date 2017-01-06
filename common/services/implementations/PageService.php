<?php

namespace common\services\implementations;

use common\models\search\PageSearch;
use common\services\interfaces\IPageService;
use yii\data\ActiveDataProvider;

class PageService implements IPageService
{

    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider
    {
        $searchModel = new PageSearch();
        $dataProvider = $searchModel->search($queryParams);

        return $dataProvider;
    }
}