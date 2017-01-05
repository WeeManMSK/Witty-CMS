<?php

namespace common\services\implementations;

use common\models\Blog;
use common\models\BlogStatus;
use common\models\search\BlogSearch;
use common\services\interfaces\IBlogService;
use yii\data\ActiveDataProvider;
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
     * @return Blog
     */
    public function createBlank() : Blog
    {
        $model = new Blog();
        $model->created_by = \Yii::$app->user->id;
        $model->status_id = BlogStatus::DRAFT;

        return $model;
    }

    /**
     * @param Blog $blog
     * @return bool
     */
    public function save(Blog $blog) : bool
    {
        return $blog->save(false);
    }

    /**
     * @param int $id
     * @return Blog
     * @throws NotFoundHttpException
     */
    public function get(int $id) : Blog
    {
        $model = Blog::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }
}