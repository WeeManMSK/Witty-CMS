<?php

namespace common\services\implementations;

use common\models\CatalogItemType;
use common\models\search\CatalogItemTypeSearch;
use common\services\interfaces\ICatalogItemTypeService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class CatalogItemTypeService implements ICatalogItemTypeService
{

    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params) : ActiveDataProvider
    {
        $searchModel = new CatalogItemTypeSearch();
        $dataProvider = $searchModel->search($params);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord
     */
    public function createBlank() : ActiveRecord
    {
        $model = new CatalogItemType();

        return $model;
    }

    /**
     * @param ActiveRecord $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        return $model->save(false);
    }

    /**
     * @param int $id
     * @return ActiveRecord
     * @throws NotFoundHttpException
     */
    public function get(int $id) : ActiveRecord
    {
        $model = CatalogItemType::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        $model = $this->get($id);
        $model->delete();
    }
}