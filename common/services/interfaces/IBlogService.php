<?php
namespace common\services\interfaces;

use common\models\Blog;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

interface IBlogService
{
    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params) : ActiveDataProvider;

    /**
     * @return Blog
     */
    public function createBlank() : Blog;

    /**
     * @param Blog $blog
     * @return bool
     */
    public function save(Blog $blog) : bool;

    /**
     * @param int $id
     * @return Blog
     * @throws NotFoundHttpException
     */
    public function get(int $id) : Blog;
}