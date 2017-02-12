<?php

namespace backend\services\implementations;


use backend\services\interfaces\ICatalogItemImageService;
use common\models\CatalogItemImage;
use yii\web\NotFoundHttpException;

class CatalogItemImageService extends \common\services\implementations\CatalogItemImageService implements  ICatalogItemImageService
{

    /**
     * @param string $url
     * @param int $id
     * @return mixed|void
     */
    public function add(string $url, int $id)
    {
        $model = new CatalogItemImage();
        $model->item_id = $id;
        $model->image_url = $url;
        $model->order = 0;
        $model->title = "Title";
        $model->save();
    }

    /**
     * @param int $id
     * @return int
     */
    public function removeAndReturnItemId(int $id): int
    {
        $model = $this->get($id);
        $itemId = $model->item_id;

        $model->delete();
        return $itemId;
    }

    /**
     * @param int $id
     * @return CatalogItemImage
     * @throws NotFoundHttpException
     */
    private function get(int $id): CatalogItemImage {
        $model = CatalogItemImage::findOne($id);

        if ($model === null){
            throw new NotFoundHttpException();
        }

        return $model;
    }
}