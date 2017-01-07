<?php

namespace common\services\implementations;

use yii;
use common\models\Page;
use common\models\search\PageSearch;
use common\services\interfaces\IPageService;
use yii\data\ActiveDataProvider;

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
     * @return Page
     */
    public function createBlank() : Page
    {
        $model = new Page();
        $model->authorId = Yii::$app->user->id;

        return $model;
    }

    /**
     * @param int $id
     * @return Page
     * @throws yii\web\NotFoundHttpException
     */
    public function get(int $id): Page
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
        Page::deleteAll(['id'=>$id]);
    }

    /**
     * @param Page $page
     * @return bool
     */
    public function save(Page $page) : bool
    {
        return $page->save(false);
    }
}