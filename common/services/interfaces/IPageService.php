<?php

namespace common\services\interfaces;


use common\models\Page;
use yii\data\ActiveDataProvider;

interface IPageService
{
    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider;

    /**
     * @return Page
     */
    public function createBlank() : Page;

    /**
     * @param int $id
     * @return Page
     */
    public function get(int $id): Page;

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param Page $page
     * @return bool
     */
    public function save(Page $page) : bool;
}