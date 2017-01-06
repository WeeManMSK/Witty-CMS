<?php

namespace common\services\interfaces;


use yii\data\ActiveDataProvider;

interface IPageService
{
    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider;
}