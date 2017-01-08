<?php

namespace common\services\implementations;

use yii;
use common\models\Page;
use common\models\search\PageSearch;
use common\services\interfaces\IPageService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

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

    /**
     * @return ActiveRecord
     */
    public function createBlank() : ActiveRecord
    {
        $model = new Page();
        $model->authorId = Yii::$app->user->id;

        return $model;
    }

    /**
     * @param int $id
     * @return ActiveRecord
     * @throws yii\web\NotFoundHttpException
     */
    public function get(int $id): ActiveRecord
    {
        $model = Page::findOne($id);

        if ($model === null) {
            throw new yii\web\NotFoundHttpException();
        }

        return $model;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        Page::updateAll(['isDeleted'=>true],['id'=>$id]);
    }

    /**
     * @param ActiveRecord|Page $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        if ($model->is_index) {
            Page::updateAll(['is_index'=>0]);
        }
        return $model->save(false);
    }
}