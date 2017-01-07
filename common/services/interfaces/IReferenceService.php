<?php

namespace common\services\interfaces;


use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

interface IReferenceService
{
    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider;

    /**
     * @return ActiveRecord
     */
    public function createBlank() : ActiveRecord;

    /**
     * @param int $id
     * @return ActiveRecord
     */
    public function get(int $id): ActiveRecord;

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param ActiveRecord $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool;
}