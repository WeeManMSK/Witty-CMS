<?php

namespace common\services\implementations;


use common\models\Faq;
use common\models\search\FaqSearch;
use common\services\interfaces\IFaqService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class FaqService implements IFaqService
{

    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider
    {
        $searchModel = new FaqSearch();
        $dataProvider = $searchModel->search($queryParams);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord | Faq
     */
    public function createBlank() : ActiveRecord
    {
        $model = new Faq();

        return $model;
    }

    /**
     * @param int $id
     * @return ActiveRecord | Faq
     * @throws NotFoundHttpException
     */
    public function get(int $id): ActiveRecord
    {
        $model = Faq::findOne($id);

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

        return $model->delete();
    }

    /**
     * @param ActiveRecord | Faq $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        return $model->save(false);
    }
}