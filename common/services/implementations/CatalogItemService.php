<?php

namespace common\services\implementations;

use backend\services\interfaces\IItemAttributeMappingService;
use common\models\CatalogItem;
use common\models\search\CatalogItemSearch;
use common\services\interfaces\ICatalogItemService;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

class CatalogItemService implements ICatalogItemService
{
    private $attributeMappingService;

    public function __construct(IItemAttributeMappingService $attributeMappingService){
        $this->attributeMappingService = $attributeMappingService;
    }

    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params) : ActiveDataProvider
    {
        $searchModel = new CatalogItemSearch();
        $dataProvider = $searchModel->search($params);

        return $dataProvider;
    }

    /**
     * @return ActiveRecord
     */
    public function createBlank() : ActiveRecord
    {
        $model = new CatalogItem();

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
        $model = CatalogItem::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        $model = $this->get($id);
        $model->delete();
    }

    public function updateAttributeValues(array $attributesPost, int $id)
    {
        $this->attributeMappingService->removeBooleanValuesIfNotExist($attributesPost, $id);
        foreach ($attributesPost as $attributeId=>$value){
            $attributeMapping = $this->attributeMappingService->getMapping($attributeId, $id);
            $this->attributeMappingService->updateMapping($attributeMapping, $value);
        }
    }
}