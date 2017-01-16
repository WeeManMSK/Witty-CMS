<?php

namespace common\services\implementations;


use common\models\FaqLine;
use common\models\search\FaqLineSearch;
use common\services\interfaces\IFaqLineService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class FaqLineService implements IFaqLineService
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
        $model->order = 1000;

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

    public function createBlankWithFaq(int $faq_header_id) : FaqLine
    {
        $model = $this->createBlank();
        $model->faq_header_id = $faq_header_id;

        return $model;
    }
}