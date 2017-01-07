<?php

namespace common\services\implementations;

use common\models\Blog;
use common\models\BlogStatus;
use common\models\search\BlogSearch;
use common\services\interfaces\IBlogService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class BlogService implements IBlogService
{

    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params) : ActiveDataProvider
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search($params);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord
     */
    public function createBlank() : ActiveRecord
    {
        $model = new Blog();
        $model->created_by = \Yii::$app->user->id;
        $model->status_id = BlogStatus::findOne(['code'=>BlogStatus::DRAFT])->id;

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
        $model = Blog::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        $model = $this->get($id);
        $model->delete();
    }
}