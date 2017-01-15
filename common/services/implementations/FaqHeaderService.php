<?php

namespace common\services\implementations;


use common\models\FaqHeader;
use common\models\search\FaqHeaderSearch;
use common\services\interfaces\IFaqHeaderService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class FaqHeaderService implements IFaqHeaderService
{

    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider
    {
        $searchModel = new FaqHeaderSearch();
        $dataProvider = $searchModel->search($queryParams);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord | FaqHeader
     */
    public function createBlank() : ActiveRecord
    {
        $model = new FaqHeader();

        return $model;
    }

    /**
     * @param int $id
     * @return ActiveRecord | FaqHeader
     * @throws NotFoundHttpException
     */
    public function get(int $id): ActiveRecord
    {
        $model = $this->get($id);

        if ($model=== null){
            throw new NotFoundHttpException();
        }

        return $model;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        $model = $this->get($id);

        return $model->delete();
    }

    /**
     * @param ActiveRecord $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        return $model->save();
    }
}