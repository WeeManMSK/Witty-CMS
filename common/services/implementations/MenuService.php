<?php

namespace common\services\implementations;


use common\models\Menu;
use common\models\search\MenuSearch;
use common\services\interfaces\IMenuService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class MenuService implements IMenuService
{

    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search($queryParams);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord | Menu
     */
    public function createBlank() : ActiveRecord
    {
        $model = new Menu();

        return $model;
    }

    /**
     * @param int $id
     * @return ActiveRecord | Menu
     * @throws NotFoundHttpException
     */
    public function get(int $id): ActiveRecord
    {
        $model = Menu::findOne($id);

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
     * @param ActiveRecord | Menu $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        return $model->save(false);
    }
}