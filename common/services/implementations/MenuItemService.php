<?php

namespace common\services\implementations;


use common\models\MenuItem;
use common\models\search\MenuItemSearch;
use common\services\interfaces\IMenuItemService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class MenuItemService implements IMenuItemService
{

    /**
     * @param array $queryParams
     * @return ActiveDataProvider
     */
    public function search(array $queryParams) : ActiveDataProvider
    {
        $searchModel = new MenuItemSearch();
        $dataProvider = $searchModel->search($queryParams);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord | MenuItem
     */
    public function createBlank() : ActiveRecord
    {
        $model = new MenuItem();

        return $model;
    }

    /**
     * @param int $id
     * @return ActiveRecord | MenuItem
     * @throws NotFoundHttpException
     */
    public function get(int $id): ActiveRecord
    {
        $model = MenuItem::findOne($id);

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
     * @param ActiveRecord | MenuItem $model
     * @return bool
     */
    public function save(ActiveRecord $model) : bool
    {
        return $model->save(false);
    }
}