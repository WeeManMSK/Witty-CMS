<?php

namespace common\services\implementations;


use common\models\FaqLine;
use common\models\search\FaqLineSearch;
use common\services\interfaces\IFaqLineInterface;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class FaqLineService implements IFaqLineInterface
{

    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider
    {
        $searchModel = new FaqLineSearch();
        $dataProvider = $searchModel->search($queryParams);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord | FaqLine
     */
    public function createBlank() : ActiveRecord
    {
        $model = new FaqLine();

        return $model;
    }

    /**
     * @param int $id
     * @return ActiveRecord | FaqLine
     * @throws NotFoundHttpException
     */
    public function get(int $id): ActiveRecord
    {
        $model = FaqLine::findOne($id);

        if ($model === null){
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
        $model->is_deleted = true;

        return $model->save();
    }

    /**
     * @param ActiveRecord | FaqLine $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        return $model->save(false);
    }
}