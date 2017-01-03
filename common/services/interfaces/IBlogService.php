<?php

namespace common\services\interfaces;


use yii\data\ActiveDataProvider;

interface IBlogService
{
    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params): ActiveDataProvider;
}